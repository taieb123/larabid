<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offert extends Model
{
    protected $table = 'offert';

    protected $fillable = [
        'title','description','prix_deb','prix_fin',
        'nbr_enchere','details','image','start_date',
        'end_date','id_subcategory','id_details'
    ];
}
