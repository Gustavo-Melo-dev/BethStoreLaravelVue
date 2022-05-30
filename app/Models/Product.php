<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "product";

    protected $fillable = [
        'cod_product',
        'qtd_product',
        'model',
        'brand',
        'size',
        'price',
        'description_product',
        'cod_category',
        'sector',
        'description_category'
    ];
}
