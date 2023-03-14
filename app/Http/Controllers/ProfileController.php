<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\UserController;

class ProfileController extends Controller
{
    public function profile($profile = ''){
        if ($profile == 'fahmi'){
            return view('profileFahmi',  ['user' => Profile::getById(1)]);
        }elseif ($profile = 'rizqi'){
            return view('profileRizqi',  ['user' => Profile::getById(3)]);
        }else{
            return view('home');
        }
    }
}
