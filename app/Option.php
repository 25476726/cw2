<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'option_name', 'question_assigned_to',
    ];
    public function options()
    {
        return $this->belongsToMany('App\Option');
    }
}

