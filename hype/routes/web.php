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
    /**
     * get all of the months that have reports
     */
    $report_months = \App\MonthYear::orderBy('id', 'desc')->get();

    return view('homepage', ['report_months' => $report_months]);
});


/**
 * get the reports for a specific month
 */
$router->get('/{year:\d{4}}/{month:\d{1,2}}', function($month, $year) use ($router, $template_loader) {
    $reports = [];
    $month_year = \App\MonthYear::where('month', $month)
        ->where('year', $year)
        ->first();

    if($month_year){
        $reports = \App\Report::where('month_year_id', $month_year->id)
            ->inRandomOrder()
            ->get();
    }

    if($router->app->request->ajax()){
        return response()->json($reports);
    }

    try{
        $force_default = (bool) $_GET['force_default'];
    }catch(\Exception $e){
        $force_default = false;
    }

    $params = [
        'reports' => $reports,
        'current_month_year' => $month_year,
    ];
    return $template_loader->render($year, $month, $params, $force_default);
});


/**
 * get all of the reports for a given year
 */
$router->get('/{year:\d{4}}', function($year) use ($router, $template_loader) {
    $reports = [];
    $months_year = \App\MonthYear::where('year', $year)
        ->get();

    if($months_year){
        $ids = [];

        foreach($months_year as $my){
            $ids[] = $my->id;
        }

        $reports = \App\Report::whereIn('month_year_id', $ids)
            ->inRandomOrder()
            ->get();
    }

    if($router->app->request->ajax()){
        return response()->json($reports);
    }

    try{
        $force_default = (bool) $_GET['force_default'];
    }catch(\Exception $e){
        $force_default = false;
    }

    return $template_loader->render($year, false, ['reports' => $reports], $force_default);
});
