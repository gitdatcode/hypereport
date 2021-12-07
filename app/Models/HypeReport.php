<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HypeReport extends Model
{
    protected $table = 'hypereports';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'report',
        'month',
        'year',
        'social',
        'event',
        'newsletter',
    ];
}
