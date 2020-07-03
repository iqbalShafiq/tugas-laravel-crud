<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Answer extends Model
{
    public static function get_jawaban($pertanyaan_id)
    {
        $answers = DB::table('answers')->where('pertanyaan_id', $pertanyaan_id)->get();
        return $answers;
    }

    public static function save_jawaban($data)
    {
        $answer = DB::table('answers')->insert($data);
        return $answer;
    }
}
