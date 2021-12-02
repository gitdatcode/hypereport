<?php
include '../../src/Template.php';
$t = new Template(__DIR__);
echo $t->render('shopify_svg.php', ['fillColor' => '123123']);