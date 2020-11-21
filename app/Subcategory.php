<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategory';

    protected $fillable = [
        'title','description','logo','id_category'
    ];
}
