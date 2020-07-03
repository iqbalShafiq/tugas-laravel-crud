<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($pertanyaan_id)
    {
        $answers = Answer::get_jawaban($pertanyaan_id);
        $question = Question::get_questions()->where('id', $pertanyaan_id);

        return view('jawaban', compact('answers', 'question'));
    }

    public function store($pertanyaan_id)
    {
        $answer = [
            'pertanyaan_id' => $pertanyaan_id,
            'isi' => request('isi')
        ];
        unset($answer['_token']);
        Answer::save_jawaban($answer);

        return redirect("/jawaban/$pertanyaan_id");
    }
}
