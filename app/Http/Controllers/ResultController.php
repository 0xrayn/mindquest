<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == "admin") {
            $quiz = Quiz::all();
            return view('admin.result.index', [
                'results' => QuizResult::get(),
                'quiz' => $quiz,
            ]);
        } else if ($usertype == "user") {
            return view('user.result.index', ['results' => QuizResult::where('user_id', Auth::id())->get()]);
        } else if ($usertype == "guru") {
            return view('guru.kuis-admin-result', [
                'results' => QuizResult::where('user_id', Auth::id())->get(),
            ]);
        }
    }

    public function result(Request $request, Quiz $quiz)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == "admin") {
            $result = QuizResult::where('quiz_id', $quiz->id)->get();
            return view('admin.result.result', [
                'results' => $result,
            ]);
        } else if ($usertype == "user") {
            return view('user.result.index', ['results' => QuizResult::where('user_id', Auth::id())->get()]);
        } else if ($usertype == "guru") {
            return view('guru.kuis-admin-result', [
                'results' => QuizResult::where('user_id', Auth::id())->get(),
                'quiz' => Quiz::where('user_id', Auth::id())->where('by', 'guru')->get(),
            ]);
        }
    }
}
