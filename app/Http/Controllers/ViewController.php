<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function creation_pack()
    {
        return view('formulaires.creationpack');
    }
}
