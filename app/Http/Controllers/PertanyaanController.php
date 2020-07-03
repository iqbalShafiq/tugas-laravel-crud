<?php

namespace App\Http\Controllers;


use App\Question;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $questions = Question::get_questions();

        return view('pertanyaan', compact('questions'));
    }

    public function create()
    {
        return view('formPertanyaan');
    }

    public function store(Request $request)
    {
        $questions = $request->all();
        unset($questions['_token']);
        Question::save_question($questions);

        return redirect('/pertanyaan');
    }
}
