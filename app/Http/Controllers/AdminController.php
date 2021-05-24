<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller

{
    public function __construct(){$this->middleware('auth');}
    public static function index()
    {
        $dashboard = \DB::table('dasboards')
                    ->select('dasboards.*')
                    ->get(); 
        $capacity = \DB::table('capacitys')
                    ->select('capacitys.*')
                    ->get();
        $dashboard1 = \DB::table('dasboards')
                    ->select('dasboards.*')
                    ->get();                    
        return view('admin')->with('dashboard',$dashboard, 'dashboard1',$dashboard1)->with('capacity',$capacity);
    }
    public function notification()
    { 
        return view('admin')->with('dashboard1',$dashboard1);
    }
}
