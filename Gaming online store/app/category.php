<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $connection='mysql';
    protected $table='categories';
    protected  $fillable=['categoryName','categoryPrice','categoryImage'];
    protected $primaryKey=['productId','categoryName'];
}
