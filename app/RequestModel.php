<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model
{
    protected $table = 'request_user';

    protected $fillable = [
        'type', 'data', 'phone', 'status', 'sum'

    ];
}
