<?php

namespace App\Http\RequestHandlers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PostReportRequestHandler extends BaseRequestHandler
{

    public function handle()
    {
        $report = $this->request->all();
        $report['success'] = false;
        return response()->json($report);
    }

}
