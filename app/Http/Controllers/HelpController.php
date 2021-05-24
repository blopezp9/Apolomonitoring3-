<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function __construct(){$this->middleware('auth');}
    public function help()
    {

        return view('help');
    }
}
