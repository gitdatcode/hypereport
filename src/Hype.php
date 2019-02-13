<?php
namespace HypeReport;

class Hype
{

    public function __construct()
    {
    }

    public function hypeByMonth(string $month)
    {
        if (file_exists("/var/www/hypereport.ann/reports/january.php")
            && file_exists("/var/www/hypereport.ann/templates/$month.php")) {
            $reports = include "/var/www/hypereport.ann/reports/january.php";
            include "/var/www/hypereport.ann/templates/$month.php";
        } else {
            $http_response_header(404);
            die();
        }
    }

    public function hypeByYear(string $year)
    {
        $reports = include "/var/www/hypereport.ann/reports/$year.php";
        $template = new Template(config('templatePath'));
        include "/var/www/hypereport.ann/templates/$year.php";
    }
}
