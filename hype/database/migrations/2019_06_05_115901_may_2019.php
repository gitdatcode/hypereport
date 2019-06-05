<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class May2019 extends Migration
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
                'month' => 5,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
            ->where('month', 5)->first();

        $reports = [
            [
                'username' => 'Karis C',
                'description' => "I just learned I've been accepted into NYU's UX program, starting next week.  Excited to keep growing and taking on new challenges.",
                'description2' => "Also recently learned I received a stipend to attend a UX Design conference in Amsterdam this August!  Never thought in a million years I'd be studying design in another country.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Tomie W',
                'description' => "Started a new job and looking ahead for whatever growth comes with it.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Tolu O',
                'description' => "Launching the biggest digital collection of pan African Comics in the world later this month",
                'description2' => "Well, more details on the above here https://drive.google.com/drive/u/1/folders/1hkftvsss661vZlfaMHafoe0KpKPjq6t2",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Niko L',
                'description' => "I got an summer Apprenticeship!",
                'description2' => "I also won a scholarship to attend MongoDB world this summer. ",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Gideon I',
                'description' => "Confidently referring to myself as a Full Stack developer using NodeJS and MongoDB on the backend! ",
                'description2' => "I'm happier than ever!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
        ];

        foreach($reports as $entry){
            DB::table('report')->insert($entry);
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
