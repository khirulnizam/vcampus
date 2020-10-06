<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    //table name to bind
    protected $table='latihans';

    //modifiable fields
    protected $fillable =['kod','namalatihan','deskripsi'];
    
}
