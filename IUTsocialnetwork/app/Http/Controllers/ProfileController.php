<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($username){

    	//return $username;
    	$user = User ::whereUsername($username)->first();

    	return view('user.profile', compact('user'));
    	//return $user ->created_at;
    	//return $user ->email;
    }
}
