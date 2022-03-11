<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = [
        'fristName','lastName','middlename','kebele','wereda','zone','state','age','fingerPrint','job','status'
    ];
}
