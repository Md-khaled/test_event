<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;


    protected $fillable = [
        'warehouse',
        'quantity',
        'voucher',
        'product_id',
        'customer_id',
        'point'
    ];



}
