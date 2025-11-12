<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index($quiz_id)
    {
        return view('admin.question.index', [
            'questions' => Question::where('quiz_id', $quiz_id)->get(),
            'quiz_id' => $quiz_id,
            'quiz' => Quiz::find($quiz_id),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($quiz_id)
    {
        return view('admin.question.create', ['quiz_id' => $quiz_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $quiz_id)
    {
        $request->validate([
            'question' => "required",
            'a' => "required",
            'b' => "required",
            // 'c' => "required",
            // 'd' => "required",
            'answer' => "required",
        ]);

        $options = json_encode([
            "a" => $request->a,
            "b" => $request->b,
            // "c" => $request->c,
            // "d" => $request->d,
        ]);

        $question = new Question;
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->options = $options;
        $question->quiz_id = $quiz_id;
        $question->save();

        $role = Auth::user()->role;

        return redirect()->route('admin.q.index', $quiz_id)->with('success', "Question Berhasil Ditambah!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($quiz_id, Question $question)
    {
        return view('admin.question.edit', [
            'quiz_id' => $quiz_id,
            'question' => $question,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $quiz_id, Question $question)
    {
        //
        $request->validate([
            'question' => "required",
            'a' => "required",
            'b' => "required",
            // 'c' => "required",
            // 'd' => "required",
            'answer' => "required",
        ]);

        $options = json_encode([
            "a" => $request->a,
            "b" => $request->b,
            // "c" => $request->c,
            // "d" => $request->d,
        ]);

        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->options = $options;
        $question->save();

        $role = Auth::user()->role;
        return redirect()->route('admin.q.index', $quiz_id)->with('success', 'Question Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($quiz_id, Question $question)
    {
        $question->delete();

        $role = Auth::user()->role;

        return redirect()->route('admin.q.index', $quiz_id)->with('success', 'Question Berhasil Dihapus!');
    }
}
