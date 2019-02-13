<?php
namespace HypeReport;

class Hype
{

    public function __construct()
    {
    }

    public function hypeByMonth(string $month)
    {
        $reports = include "/var/www/hypereport.ann/reports/january.php";
        include "/var/www/hypereport.ann/templates/$month.php";
    }
}
