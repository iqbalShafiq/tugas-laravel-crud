<?php

namespace App;

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
        $question = DB::table('questions')->insert($data);
        return $question;
    }
}
