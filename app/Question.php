<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id','exam_name','question','a','b','c','d','e','answer',
    ];
}
/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */

