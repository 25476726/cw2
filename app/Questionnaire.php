<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = [
        'questionnaire_name', 'questionnaire_description',
    ];

    public function questionnaires()
    {
        return $this->belongsToMany('App\Questionnaire');
    }
}