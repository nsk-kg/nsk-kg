<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agents';

    protected $fillable = [
        'insuranceExperience',
        'clientExperience',
        'compExperience',
        'about',
        'interviewReady',
        'surname',
        'name',
        'email',
        'phone',
        'city',
        'address',
        'birthday'
    ];
}
