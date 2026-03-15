<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ViewController extends Controller
{
    function setpeinture(){
        $projet = Projet::first();

        return view('setpeinture', [
           'projet' => $projet]);
    }
}
