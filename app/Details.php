<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'details';

    protected $fillable = [
        'information','id_file'
    ];
}
