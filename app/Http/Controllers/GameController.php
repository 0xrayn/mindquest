<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{

    public function TebakAngka()
    {
        return view('permainan.TebakAngka');
    }

    public function mahjong()
    {
        return view('permainan.mahjong');
    }

    public function Ingat()
    {
        return view('permainan.Memory');
    }

    public function Puzzle()
    {
        return view('permainan.Puzzle');
    }

    public function BKG()
    {
        return view('permainan.RPS');
    }

}
