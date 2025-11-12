<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizResultController extends Controller
{
    public function index(Request $request)
    {
        $role = Auth::user()->role;
        if ($role == "admin") {
            $quiz = Quiz::all();
            return view('admin.result.index', [
                'results' => QuizResult::get(),
                'quiz' => $quiz,
            ]);
        } 
        return view('siswa.result.index', ['results' => QuizResult::where('user_id', Auth::id())->get()]);
    }

    public function result(Request $request, Quiz $quiz)
    {
        $role = Auth::user()->role;
        if ($role == "admin") {
            $result = QuizResult::where('quiz_id', $quiz->id)->get();
            return view('admin.result.result', [
                'results' => $result,
            ]);
        } 
        return view('siswa.result.index', ['results' => QuizResult::where('user_id', Auth::id())->get()]);
    }
}
