<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'option_name',
    ];
    public function options()
    {
        return $this->belongsToMany('App\Option');
    }
}

