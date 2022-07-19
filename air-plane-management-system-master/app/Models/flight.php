<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    use HasFactory;

    protected $table=  'flights';

    
    protected $fillable = [
        'title',
        'from' ,
        'to',
        'start_date',
        'return_date',
        'plan_id',
        "pilot_id",
        'price',

    ];

}
