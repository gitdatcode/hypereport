<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Report extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

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
