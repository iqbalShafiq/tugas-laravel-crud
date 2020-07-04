<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    public static function get_questions()
    {
        $questions = DB::table('questions')->get();
        return $questions;
    }

    public static function save_question($data)
    {
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = now();
        $question = DB::table('questions')->insert($data);
        return $question;
    }

    public static function edit_question($id)
    {
        $question = DB::table('questions')->where('id', $id)->first();
        return $question;
    }

    public static function get_question($id)
    {
        $question = DB::table('questions')
            ->where('id', $id)
            ->first();
        return $question;
    }

    public static function update_question($id, $request)
    {
        $question = DB::table('questions')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);
        return $question;
    }

    public static function destroy_question($id)
    {
        $question = DB::table('questions')
            ->where('id', $id)
            ->delete();

        return $question;
    }
}
