<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return redirect()->route('welcome', ['first_name' => $firstName, 'last_name' => $lastName]);
    }

    public function welcome(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return view('welcome', ['first_name' => $firstName, 'last_name' => $lastName]);
    }
}


?>