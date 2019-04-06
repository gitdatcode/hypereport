<?php
use Illuminate\Http\Response;


/**
 * homepage
 */
$router->get('/', function () use ($router) {
    return $router->app->version();
});


/**
 * get the resources for a specific month
 */
$router->get('/{year:\d{4}}/{month:\d{1,2}}', function($month, $year) use ($router) {
    $month_year = \App\MonthYear::where('month', $month)
        ->where('year', $year)
        ->first();
    # TODO: return here if there is no $month_year
    $resources = \App\Resource::where('month_year_id', $month_year->id)
        ->get();

    return response()->json($resources);
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

    return response()->json($resources);
});
