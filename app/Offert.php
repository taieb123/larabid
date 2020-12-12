<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offert extends Model
{
    protected $table = 'offert';

    protected $fillable = [
        'title','description','prix_dev','prix_fin','nbr_enchere','start_date','end_date','id_subcategory','id_details'
    ];
}
