<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Services\Core\UserService;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    protected $service;
    public function __construct(UserService $service) {
        $this->service = $service;
    }

    public function enableDisable(Request $request) {
        \DB::transaction(function () use ($request) {
            $this->service->setModel(User::find($request->id))
                ->setAttributes($request->only('disable'))
                ->enableOrDisableUser();

        });

        return response()->json([
            'status' => 200,
            'message' => 'User Status updated successfully.'
        ]);
    }
}
