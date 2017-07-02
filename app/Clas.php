<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'class_id','class_name','teacher_name','number_of_students',
    ];
}
/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */

