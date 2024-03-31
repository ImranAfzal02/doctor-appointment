<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'city' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        //Construct WhatsApp message
        $whatsappMessage = "Name: " . $validatedData['name'] . "\n" .
            "Age: " . $validatedData['age'] . "\n" .
            "City: " . $validatedData['city'] . "\n" .
            "Email: " . $validatedData['email'] . "\n" .
            "Phone: " . $validatedData['phone'] . "\n" .
            "Message: " . $validatedData['message'];

        $whatsappLink = "https://wa.me/923212930869?text=" . urlencode($validatedData['message']);


        return view('pages.whatsapp_redirect', compact('whatsappLink'));
    }


}
