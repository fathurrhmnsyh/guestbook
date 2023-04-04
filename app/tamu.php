<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    protected $table = 'tamu';
    protected $fillable = [
        'date',
        'from_time',
        'to_time',
        'name',
        'from',
        'identity_card',
        'contact',
        'meet_to',
        'section',
        'necessity',
        'info',
        'id_image',
];

}
