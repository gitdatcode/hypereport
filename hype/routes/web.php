<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/**
 * homepage
 */
$router->get('/', function () use ($router) {
    return view('welcome');
});


/**
 * get the resources for a specific month
 */
$router->get('/{year:\d{4}}/{month:\d{2}}', function($month, $year) use ($router) {
    $month_year = \App\MonthYear::where('month', $month)
        ->where('year', $year)
        ->first();
    $resources = \App\Resource::where('month_year_id', $month_year->id)
        ->get();

    echo $resources;
});


/**
 * get all of the resources for a given year
 */
$router->get('/{year:\d{4}}', function($year) use ($router) {
    $months_year = \App\MonthYear::where('year', $year)
        ->get();
    $ids = [];

    foreach($months_year as $my){
        $ids[] = $my->id;
    }

    $resources = \App\Resource::whereIn('month_year_id', $ids)
        ->get();

    echo $resources;
});
