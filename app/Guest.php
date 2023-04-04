<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Guest extends Model
{
    protected $table = 'guest';

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
            'image',
    ];

    public function tap()
    {
        return $this->hasOne('App\Models\Guestphoto', 'tap');
    }
}
