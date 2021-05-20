<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryLatestController extends Controller
{
    public function __construct(){$this->middleware('auth');}
    public function historylatest()
    {
        $histo = \DB::table('historieslatest')->pluck('per_use');
        $dates = \DB::table('historieslatest')->pluck('hour');
        return view('lasthours', compact('histo', 'dates'));
    }
}
