<?php
use Illuminate\Http\Response;

use \App\TemplateLoader;

/**
 * create the template loader
 */
$template_loader = new TemplateLoader('index');


/**
 * homepage
 */
$router->get('/', function () use ($router, $template_loader) {
    return $router->app->version();
});


/**
 * get the resources for a specific month
 */
$router->get('/{year:\d{4}}/{month:\d{1,2}}', function($month, $year) use ($router, $template_loader) {
    $resources = [];
    $month_year = \App\MonthYear::where('month', $month)
        ->where('year', $year)
        ->first();

    if($month_year){
        $resources = \App\Resource::where('month_year_id', $month_year->id)
            ->get();
    }

    if($router->app->request->ajax()){
        return response()->json($resources);
    }

    return $template_loader->render($year, $month, ['resources' => $resources]);
});


/**
 * get all of the resources for a given year
 */
$router->get('/{year:\d{4}}', function($year) use ($router, $template_loader) {
    $resources = [];
    $months_year = \App\MonthYear::where('year', $year)
        ->get();

    if($months_year){
        $ids = [];

        foreach($months_year as $my){
            $ids[] = $my->id;
        }

        $resources = \App\Resource::whereIn('month_year_id', $ids)
            ->get();
    }

    if($router->app->request->ajax()){
        return response()->json($resources);
    }

    return $template_loader->render($year, false, ['resources' => $resources]);
});
