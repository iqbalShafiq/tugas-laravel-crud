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

    public function edit($id)
    {
        $question = Question::edit_question($id);
        return view('updatePertanyaan', compact('question'));
    }

    public function show($id)
    {
        $question = Question::get_question($id);
        return view('detailPertanyaan', compact('question'));
    }

    public function update($id, Request $request)
    {
        Question::update_question($id, $request->all());
        return redirect('/pertanyaan/' . $id);
    }

    public function destroy($id)
    {
        Question::destroy_question($id);
        return redirect('/pertanyaan');
    }
}
