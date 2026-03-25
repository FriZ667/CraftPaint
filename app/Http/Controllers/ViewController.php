<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;

class ViewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function creation_pack()
    {
        $version = Version::all();
        return view('formulaires.creationpack', compact('version'));
    }
}
