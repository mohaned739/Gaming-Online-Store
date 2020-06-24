<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myorder extends Model
{
    protected $connection='mysql';
    protected $table='myorders';
    protected  $fillable=['userId','Date','productId','userAddress'];
    protected $primaryKey='OrderId';
}
