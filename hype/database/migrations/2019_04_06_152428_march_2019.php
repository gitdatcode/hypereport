<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class March2019 extends Migration
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
                'month' => 3,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
            ->where('month', 3)->first();

        $reports = [
            [
                'username' => 'Michael B',
                'description' => "Gave my first panel talk to a room full of aspiring 3D artist.",
                'description2' => "I'm healthy!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Michael B',
                'description' => "I participated in animation & game art panel. It was my the first time I was on a panel!",
                'description2' => "I also, started my first Video Game Art Workshop.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Stephanie V',
                'description' => "A tech conference taking place here in Detroit accepted my session proposal! I'll be giving a talk about the need for a code of ethics in software development in June. I also spoke on a panel of Black IT professionals for Minority Student Day at the Microsoft office in Downtown Detroit.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Tomie W',
                'description' => "Started building a github for myself.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Niko Bella L',
                'description' => "I successfully organized a Practical  Data Structures workshop for women. I struggled with Binary Trees as a bootcamp grad. And I've never seen a workshop that helps beginners make sense of it. I'm planning the content, teaching the workshop, got a sponsor, and have reached 120+ RSVPs to attend in only 3 days. I'm very hype that the community is showing that what I offering is valuable to them. Here's the event link, its happening in April. Write/Speak/Code NYC http://meetu.ps/e/Gy5gp/n6q1s/d",
                'description2' => "We'll were still very much in need of volunteer mentors to support the 100 women attending as they brave learning binary searches. Could you ask if any  NYC DATCODE fam interested in volunteering could dm me on Twitter @CodeSwitched or email me ar kinseyftw@gmail.com w/ subject \" data structure workshop volunteering)?\"",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mia M',
                'description' => "I was invited to attend F8 and participate in the Hackathon, travel and accommodations included!",
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
