<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //if the table has a different name to products we can use this property
    //protected $table = 'custom_products';

    protected $fillable = ['title', 'description', 'price', 'availability'];
}
