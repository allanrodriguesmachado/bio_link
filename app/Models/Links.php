<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    /** @use HasFactory<\Database\Factories\LinksFactory> */
    use HasFactory;

//    protected $fillable = [
//        'name',
//        'url',
//        'user_id'
//    ];
protected $guarded = [];
}
