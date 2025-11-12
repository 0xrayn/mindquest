<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function tes()
    {
        return view('user.tes');
    }

    public function bot()
    {
        return view('user.botman');
    }

    public function lagu()
    {
        return view('user.music');
    }

    public function permainan()
    {
        return view('permainan');
    }

    public function masukan()
    {
        return view('masukan');
    }

    public function chat()
    {
        return view('user.chat');
    }

    public function project()
    {
        return view('project');
    }

    public function team()
    {
        return view('team');
    }

    public function prediksi()
    {
        return view('user.pred.index');
    }

    public function kuis()
    {
        $quiz = Quiz::get();

        return view('user.kuis.index', ['kuis' => $quiz]);
    }

    public function kerjakan(Quiz $quiz)
    {
        $cek = QuizResult::where('quiz_id', $quiz->id)->where('user_id', Auth::id())->get();

        if ($quiz->by == "guru" && count($cek)) return back()->with('error', 'Kuis Hanya Bisa Dikerjakan Sekali!');

        $dataQuiz = [];
        $questions  = Question::where('quiz_id', $quiz->id)->get();
        $no = 1;

        if (!count($questions)) {
            return back()->with('error', 'Belum Ada Questions!');
        }

        foreach ($questions as $key => $value) {
            $options = json_decode($value->options, true);

            $dataQuiz[] = [
                "numb" => $no,
                "answer" => $options[$value->answer],
                "question" => filter_var($value->question, FILTER_SANITIZE_STRING),
                "options" => [$options['a'], $options['b']]
            ];

            $no++;
        }

        return view('user.kuis.kerjakan', [
            'quiz' => $quiz,
            'questions' => $dataQuiz
        ]);
    }

    // public function api(Request $request, Quiz $quiz)
    // {
    //     $cek = QuizResult::where('quiz_id', $quiz->id)->where('user_id', Auth::id())->get();
    //     $questions  = Question::where('quiz_id', $quiz->id)->get();

    //     if (!count($cek)) {
    //         $quiz_result = new QuizResult;
    //         $quiz_result->quiz_id = $quiz->id;
    //         $quiz_result->user_id = Auth::id();
    //         $quiz_result->true = $request->true;
    //         $quiz_result->false = (count($questions) - $request->true);
    //         $quiz_result->score = round($request->true * (100 / count($questions)), 2);
    //         $quiz_result->by = $quiz->user_id;
    //         $quiz_result->save();
    //     } else {
    //         if ($quiz->by == "admin") {
    //             $quiz_result = QuizResult::where('quiz_id', $quiz->id)->where('user_id', Auth::id());
    //             $quiz_result->update([
    //                 'quiz_id' => $quiz->id,
    //                 'user_id' => Auth::id(),
    //                 'true' => $request->true,
    //                 'false' => (count($questions) - $request->true),
    //                 'score' => round($request->true * (100 / count($questions)), 2),
    //             ]);
    //         }
    //     }
    // }

    public function api(Request $request, Quiz $quiz)
    {
        $questions  = Question::where('quiz_id', $quiz->id)->get();

        // Buat entri baru untuk setiap hasil kuis
        $quiz_result = new QuizResult;
        $quiz_result->quiz_id = $quiz->id;
        $quiz_result->user_id = Auth::id();
        $quiz_result->true = $request->true;
        $quiz_result->false = (count($questions) - $request->true);
        $quiz_result->score = round($request->true * (100 / count($questions)), 2);
        $quiz_result->by = $quiz->user_id;
        $quiz_result->save();
    }


    public function rec()
    {
        return redirect()->route('kuis')->with('success', 'Kuis Berhasil Dikerjakan');
    }
}

