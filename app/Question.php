<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question_name', 'question_description', 'questionnaire_assigned_to',
    ];

    public function questions()
    {
        return $this->belongsToMany('App\Question');
    }
}