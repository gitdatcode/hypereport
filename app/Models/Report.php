<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'descritpion',
        'month',
        'year',
        'image_1',
        'image_2',
        'image_3',
        'username',
        'month_year_id',
    ];

    /**
     * this will combine the username + id in a url friendly slug
     */
    public function getUrlSlug(){
        $user = strtolower($this->username);
        $user = str_replace(' ', '-', $user);

        return sprintf('%s-%s', $user, $this->id);
    }
}
