<?php

function dd($m)
{
    var_dump($m);
    die();
}

function getBaseUrl()
{
    return config('baseUrl');
}

function getPath()
{
    return config('basePath');
}

function getHypePath()
{
    return config('hypePath');
}

function url($path, $return = false)
{
    $url = getBaseUrl() . $path;

    if ($return) {
        return $url;
    } else {
        echo $url;
    }
}

function path($path, $return = false)
{
    $path = getHypePath() . $path;

    if ($return) {
        return $path;
    } else {
        echo $path;
    }
}

function hypelog($message, $level = 'INFO')
{
    $logfile = path('/storage/log/hype.log', true);
    $message = "[$level] " . date('m/d/Y H:i:s') . ': ' . "$message  \n";
    file_put_contents($logfile, $message, FILE_APPEND | LOCK_EX );
}

function config($variable)
{
    $config = include __DIR__ . '/config.php';
    return isset($config[$variable]) ? $config[$variable] : null;
}

function isPost($request = null)
{
    $request = $request ?: $_SERVER;
    return $request['REQUEST_METHOD'] == 'POST';
}
