<?php
include '../../src/Template.php';
$t = new Template(__DIR__);
echo $t->render('promotion_svg2.php', ['fillColor' => '123123']);