<?php

$router = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/year/{id:\d+}', '');
    // $r->addRoute('GET', '/thanks', 'hypeByYear');
    $r->addRoute('GET', '/{month}', '\HypeReport\Hype@hypeByMonth');
    $r->addRoute('POST', '/thanks', 'hypeByYear');
});
