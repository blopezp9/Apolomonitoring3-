<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function __construct(){$this->middleware('auth');}
    public function history()
    {
        $histo = History::select (\DB::raw("per_use as per_use"))->pluck('per_use');
        $dates = History::select (\DB::raw("date as date"))->pluck('date');
        return view('history', compact('histo', 'dates'));
    }

}
