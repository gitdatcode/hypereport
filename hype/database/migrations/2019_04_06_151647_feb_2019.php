<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Feb2019 extends Migration
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
                'month' => 2,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
            ->where('month', 2)->first();

        $reports = [
            [
                'username' => 'Bria H',
                'description' => "I spoke on a UXPA panel about content strategy and UX writing!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Bria H',
                'description' => "Got a lil raise 😎",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Ayodee O',
                'description' => "I got a job as a Data Scientist at a large tech company. After getting relentlessly underpaid at various startups I’ve landed a more stable position with benefits. ",
                'description2' => "I’m securing the bag for the culture and offering a scholarship for black people who want to break into tech! ",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Whitney W',
                'description' => "I attended my first javascript conference and finished my Udacity Front-End Web Development Nanodegree program.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Tomie W',
                'description' => "Surviving being black, trans, autistic and alive. Also did a good job surfacing up potential reasons for my work team to get more invested what the data we collect can do.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mia M',
                'description' => "I had my second BYTES meetup, covering introductory Artificial Intelligence and it was a huge success!",
                'description2' => "Being black and proud!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Tianna H',
                'description' => "Revisiting the fundamentals of Swift and iOS Development, 15 days in to #100DaysOfSwift",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Stephen C',
                'description' => "This year I wanted to do more speaking engagements talking about tech & cyber security. In February I was on my first panel and also appeared as a guest on a podcast! It's been a good month!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Luke D',
                'description' => "I left my old job and I'm starting a new one in the career I've been working towards for the past 8 years.",
                'description2' => "Black love. It feels good!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mark H',
                'description' => "My main goal for 2019 is seeing the light -- I put an offer in for a multiunit home and it was accepted!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Chinamere I',
                'description' => "I started working as an Instructor for Gitgirl, a women's coding bootcamp based in Nigeria! For more info: www.gitgirl.co ",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Stephanie V',
                'description' => "I started working for a newly-formed after school coding program for middle school girls in Detroit as an assistant instructor. I also had a (minor) surgery & I'm healing without complications.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Andre M',
                'description' => "I’m celebrating the fact that I learned to understand algorithms and data structures with Python and then moved on to system processes, arrays, and hash tables in C. I’m going through my bootcamp’s Computer Science unit and it has been really tough, but I’ve learned so much.",
                'description2' => "",
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
