<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Homesection extends Model
{
    use HasFactory;
    protected $table = 'homesection';
    protected $fillable = ['title', 'Description','image'];

}
