<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model {
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function scopeUserAppointments($query) {
        return $query->where('user_id', auth()->user()->id);
    }

    public function scopeSearch($query, $searchValue, $typeSearch) {
        //        dd($typeSearch);
        return $query->when($typeSearch !== 'All', function () use($query, $typeSearch) {
                $query->where('status', 'like', "%{$typeSearch}%");
            })
            ->whereHas('clinic', function($q)  use($searchValue) {
                $q->orWhere('name', 'like', "%{$searchValue}%");
            })
            ->when(\Auth::user()->hasRole('patient'), function () use ($query, $searchValue){
                $query->whereHas('patient', function ($q) use ($searchValue) {
                    $q->orWhere('first_name', 'like', "%{$searchValue}%")
                        ->orWhere('last_name', 'like', "%{$searchValue}%")
                        ->orWhere('mobile_number', 'like', "%{$searchValue}%");
                });
            });
    }

    public function patient() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function clinic() {
        return $this->belongsTo(Clinic::class, 'clinic_id');
    }
}
