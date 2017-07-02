<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exam_id','exam_name','teacher_id','class_id','date','duration','time_start','time_end',
    ];
}
/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */

