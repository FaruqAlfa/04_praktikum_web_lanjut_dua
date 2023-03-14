<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function Experience(){
        return view('pengalaman', ['experience' => Experience::getById(1)], ['pengalaman' => Experience::getById(2)]);
    }
}
