<?php

namespace App\Http\RequestHandlers;

use Illuminate\Http\Request;

abstract class BaseRequestHandler
{

    public Request $request;

    public function __invoke(Request $request)
    {
        $this->request = $request;
        return $this->handle();
    }

    abstract public function handle();

}
