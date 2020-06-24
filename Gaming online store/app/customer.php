<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $connection='mysql';
    protected $table='customers';
    protected  $fillable=['userFullName','userEmail','userPassword','userPhoneNumber','userAddress','userRole'];
    protected $primaryKey='userId';
}
