<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class July2019 extends Migration
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
                'month' => 7,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
        ->where('month', 7)->first();

        $reports = [
            [
                'username' => 'Peter M.',
                'description' => "Got approved as a Pluralsight Author for workshops.",
                'description2' => '',
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Whitney W.',
                'description' => "I received a scholarship to the attend the 2019 Grace Hopper Celebration in October!",
                'description2' => '',
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
                'share' => false,
            ],
            [
                'username' => 'Mark H.',
                'description' => "We were able to update DATCODE's resources to a brand new Python and Graph Database (Neo4j) backend.",
                'description2' => "My apartment building is full, it is paying for itself!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mia M.',
                'description' => "I received a full scholarship to attend React Conf 2019, including flight and hotel!",
                'description2' => '',
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Rumi W.',
                'description' => "getting some good feedback from work and getting more used to my new job.",
                'description2' => '',
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Stephanie V.',
                'description' => "I started teaching Computer Science at a summer STEM honors program for underrepresented students who are interested in pursing STEM majors and STEM careers. I'm also leading a web development program with another student group who are designing themes for a new page on the Detroit Symphony Orchestra website that will feature video clips from performances.",
                'description2' => '',
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Randall W.',
                'description' => "Pulled off yet another HUE Design Summit and had a BLAST! Black designers from all over the country came to Atlanta to love on and learn from each other over a long weekend. Speakers loved our environment and will tell their colleagues, and attendees already planned on returning before the summit was even over! I heard it described as a conference, family reunion, cookout, and camp all at once - which validated and affirmed our goals. We CERTIFIED.",
                'description2' => '',
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Luke D.',
                'description' => "I became an SEO Executive (the first major step on my dream career path)",
                'description2' => '',
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
