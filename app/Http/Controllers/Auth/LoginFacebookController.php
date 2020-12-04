<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class LoginFacebookController extends Controller
{
	
	public function redirect()
	{
		return Socialite::driver('facebook')->redirect();
	}
	
	public function callback(Request $request)
	{
     try {
            $facebookAccount = Socialite::driver('facebook')->user();
           dd($facebookAccount);
            return redirect()->route('home');

        } catch (Exception $e) {
            return redirect()->route('login.facebook');
        }
	}
}
