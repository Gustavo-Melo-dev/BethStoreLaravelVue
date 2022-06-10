<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';

    protected $fillable = [
        'cod_product',
        'qtd_product',
        'name',
        'brand',
        'size',
        'price',
        'description_product',
        'cod_category',
        'sector',
        'description_category'
    ];
}
