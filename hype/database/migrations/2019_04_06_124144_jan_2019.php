<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jan2019 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('month_year')->insert(
            [
                'month' => 1,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
            ->where('month', 1)->first();

        $reports = [
            [
                'username' => 'Mark H',
                'description' => "I got a new job. More money + more time at home (it is remote: the future) = a happier me.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Chinaemere I',
                'description' => "My A (99%) on my Calculus exam! I've struggled so much with math but ya girl is out here prospering now. I am so proud of myself! :)",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Tomie W',
                'description' => "completing a due diligence report about other databases my org considered before making a decision on how to proceed.",
                'description2' => "writing essays about media culture and making progress in my online courses.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mia M',
                'description' => "I received confirmation that I will be a speaker, for the first time ever, at a tech conference!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'AmberNechole H',
                'description' => "I planned and executed the FIRST Black History Month celebration at my job. ",
                'description2' => "I drafted my CFP for the REFACTR conference!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Peter M',
                'description' => "More signups for my product Hamoni Inc.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Lorenzo F',
                'description' => "Promotion to Director of Infrastructure and Security",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
        ];

        foreach($reports as $entry){
            DB::table('resource')->insert($entry);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
