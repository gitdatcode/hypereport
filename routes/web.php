<?php

use App\Models\Report;
use Illuminate\Support\Facades\Route;
use App\Providers\TemplateServiceProvider as TemplateLoader;
use App\Models\MonthYear;
use Inertia\Inertia;

$template_loader = new TemplateLoader('index');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/submit', function () {
    return Inertia::render('Submit/Index');
})->name('report');

Route::post('/report', \App\Http\RequestHandlers\PostReportRequestHandler::class)
    ->name('report.post');

Route::get('/', function () {
    /**
     * get all of the months that have reports
     */
    $report_months = MonthYear::orderBy('id', 'desc')->get();

    return view('homepage', ['report_months' => $report_months]);
});

/**
 * get the reports for a specific month
 */
Route::get('/{year}/{month}', function($year, $month) use ($template_loader) {
    $reports = [];
    $month_year = MonthYear::where('month', $month)
        ->where('year', $year)
        ->first();
    if ($month_year) {
        $reports = Report::where('month_year_id', $month_year->id)
            ->inRandomOrder()
            ->get();
    }

//    if ($router->app->request->ajax()) {
//        return response()->json($reports);
//    }

    try {
        $force_default = (bool) $_GET['force_default'];
    } catch (\Exception $e) {
        $force_default = false;
    }

    $params = [
        'reports' => $reports,
        'current_month_year' => $month_year,
    ];
    return $template_loader->render($year, $month, $params, $force_default);
})->where(['year' => '[0-9]+', 'month' => '[0-9]+']);


/**
 * get all of the reports for a given year
 */
Route::get('/{year}', function($year) use ($template_loader) {
    $reports = [];
    $months_year = MonthYear::where('year', $year)
        ->get();

    if ($months_year) {
        $ids = [];

        foreach ($months_year as $my) {
            $ids[] = $my->id;
        }

        $reports = Report::whereIn('month_year_id', $ids)
            ->inRandomOrder()
            ->get();
    }

//    if($router->app->request->ajax()) {
//        return response()->json($reports);
//    }

    try {
        $force_default = (bool) $_GET['force_default'];
    } catch (\Exception $e) {
        $force_default = false;
    }

    $params = [
        'reports' => $reports,
        'current_month_year' => false,
        'current_year' => $year,
    ];

    return $template_loader->render($year, false, $params, $force_default);
})->where(['year' => '[0-9]+']);
