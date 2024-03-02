@extends('layouts.default')
@section('content')
    
            <div class="img-clinic">
            <img src="{{ asset('images/clinic.jpeg') }}" class="img-fluid">
</div>
        
        
            <p class="mt-4" style="font-family: 'Roboto Slab'; font-size: 20px; font-weight: bold;">Connect with Us</p>
            <div>
            <i class="bi bi-telephone"></i>
            <a href="tel:+923215154178">0321 5154178</a>
            </div>
            
            <div>
            <i class="bi bi-telephone"></i>
            <a href="tel:+923312925544">0331 2925544</a>
            </div>
           
            <p class="mt-4" style="font-family: 'Roboto Slab'; font-size: 18px; font-weight: bold;"><a href="/locations">Check out our Locations</a></p>

@stop