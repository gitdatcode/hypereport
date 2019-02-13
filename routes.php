<?php
$router = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/year/{id:\d+}', '\HypeReport\Hype@hypeByYear');
    $r->addRoute('GET', '/{month}', '\HypeReport\Hype@hypeByMonth');
});
