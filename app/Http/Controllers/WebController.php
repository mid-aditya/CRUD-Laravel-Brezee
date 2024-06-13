<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index(){

        $videos = DB::table('videos')->get();
        $game = DB::table('game')->get();
        $dota = DB::table('dota')->get();

        return view('vid', compact('videos', 'game', 'dota'));
    }
}
