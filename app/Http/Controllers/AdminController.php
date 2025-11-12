<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('index');
            } elseif ($usertype == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return view('index');
            }
        } else {

            return view('index');
        }
    }


}
