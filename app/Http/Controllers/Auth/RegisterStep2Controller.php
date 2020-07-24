<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Country;

class RegisterStep2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm()
    {
        $countries = Country::all();
        return view('auth.register_step2', compact('countries'));
    }

    public function postForm(Request $request)
    {
        auth()->user()->update($request->only(['about_me', 'country_id']));
        return redirect()->route('home');
    }
}
