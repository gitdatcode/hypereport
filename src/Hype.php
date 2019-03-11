<?php
namespace HypeReport;

class Hype
{

    public function index()
    {
        $this->hypeByMonth('february');
    }

    public function hypeByMonth(string $month)
    {
        if (file_exists(config('basePath'). "/reports/2019/$month.php")
            && file_exists(config('basePath') . "/templates/$month.php")) {
            $reports = include config('basePath') . "/reports/2019/$month.php";
            include config('basePath') . "/templates/$month.php";
        } else {
            http_response_code(404);
            include config('basePath') . "/templates/404.php";
        }
    }

    public function hypeByYear(string $year)
    {

        if (file_exists(config('basePath'). "/reports/$year.php")
            && file_exists(config('basePath') . "/templates/$year.php")) {
            $reports = include config('basePath') . "/reports/$year.php";
            $template = new Template(config('templatePath'));
            include config('basePath') . "/templates/$year.php";
        } else {
            http_response_code(404);
            include config('basePath') . "/templates/404.php";
        }
    }
}
