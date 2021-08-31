<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'mes',
    //     'initial',
    //     'yield' ,
    //     'admin',
    //     'inflation',
    //     'contribution',
    //     'final_value'
    // ];

    protected $guarded = [];
}
