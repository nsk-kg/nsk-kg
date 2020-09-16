<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnsuranseModel extends Model
{
    protected $table = 'ensuranse';

    protected $fillable = [
        'firstName', 'MidleName', 'product', 'polis', 'telephone', 'status', 'image'

    ];
}
