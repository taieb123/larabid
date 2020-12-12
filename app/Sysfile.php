<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sysfile extends Model
{
    protected $table = 'sysfile';

    protected $fillable = [
        'path','extension','tablename','field','id_field'
    ];
}
