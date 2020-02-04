<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['title','description','ingredients' , 'preservation','packaging', 'categories', 'certifications', 'images'];

}

