<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penceramah extends Model
{
    //
    protected $table="penceramahs";
    protected $fillable =['nama','bidang',
                        'bio','tarikhlahir','noic'];
}
