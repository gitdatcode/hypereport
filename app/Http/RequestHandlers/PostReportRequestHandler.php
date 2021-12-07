<?php

namespace App\Http\RequestHandlers;

use App\Models\HypeReport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostReportRequestHandler extends BaseRequestHandler
{

    public function handle()
    {
        $response = [
            'success' => false,
            'data' => [],
        ];

        $report = $this->request->all();
        Log::info(var_export($report, true));
        $hypeReport = new HypeReport();
        $hypeReport->first_name = $report['firstName'];
        $hypeReport->last_name = $report['lastName'];
        $hypeReport->email = $report['email'];
        $hypeReport->report = $report['achievements'];
        $hypeReport->month = 0;
        $hypeReport->year = 2021;
        $hypeReport->social = $report['selectedSocial'] === 'yes';
        $hypeReport->event = $report['selectedEvent'] === 'yes';
        $hypeReport->newsletter = $report['selectedNewsletter'] === 'yes';

        if ($hypeReport->save()) {
            $response['success'] = true;
            $response['data'] = $hypeReport->toArray();
        }

        return response()->json($response);
    }

}
