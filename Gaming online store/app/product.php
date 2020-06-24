<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $connection='mysql';
    protected $table='products';
    protected  $fillable=['productName','productType','productDescription','productImage','productPrice'];
    protected $primaryKey='productId';
}
