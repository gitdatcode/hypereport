<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This model holds information about the current month. It allows for it to be
 * themable and have its own css and js
 */
class MonthYear extends Model
{

    protected $table = 'month_year';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'descritpion',
        'descritpion2',
        'month',
        'year',
        'theme',
        'theme_css',
        'theme_js'
    ];
}
