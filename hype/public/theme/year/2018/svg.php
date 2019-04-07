<?php
$fillColor = empty($_GET['fillColor']) ? '' : $_GET['fillColor']; header('Content-type: image/svg+xml');
if (!ctype_alnum($fillColor) || strlen($fillColor) != 6 ) die();