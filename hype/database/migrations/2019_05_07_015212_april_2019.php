<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class April2019 extends Migration
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
                'month' => 4,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
            ->where('month', 4)->first();

        $reports = [
            [
                'share' => false,
                'username' => 'Koshin M',
                'description' => "I’m  an engineering lead and my team did our first demo of a new feature set we are rolling out on our platform. ",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Tomie W',
                'description' => "Got involved with local Black tech group, freshened up my resume, took better care of myself.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Christa S',
                'description' => "I finally started my app post bootcamp - wireframes  and all. No youtube tutorials here lol.",
                'description2' => "I'm starting a new job as a software developer (intern) at Quicken Loans. I'm really excited. Stuff is going pretty well right now :-)",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Michael B',
                'description' => "Finished my THIRD semester teaching at KVCC. Learned a lot and hyped for what's to come!",
                'description2' => "I am 5 weeks in on my Video Game Art Workshop I'm teaching. Too hyped.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mark H',
                'description' => "Bought an apartment building and moved in! It was my number one goal for 2019. Feelin good",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mark H',
                'description' => "Helped the team build the kick-ass Hype.Report website.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Stephanie V',
                'description' => "Abstractions II (https://abstractions.io) has invited me to present my talk “Mind The Gap: Closing The Digital Divide In America” in Pittsburgh this August. This is my 2nd conference speaking engagement & my 1st outside of Detroit, so I'm v. excited.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'share' => false,
                'username' => 'AmberNehole H',
                'description' => "I submitted 3 poems to an anthology!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Bria H',
                'description' => "Something I worked on was featured during Mark Zuckerberg's F8 keynote!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Randall W',
                'description' => "Selling out some of the Early Bird tickets for the Hue Design Summit in Atlanta! I'm glad that people are seeing value in what we're presenting to the design community. http://huedesignsummit.com",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mia M',
                'description' => "I participated in F8's Hackathon and my team was chosen as one of eight out of 42 total teams! And we got the chance to meet Mark Zuck and show him what we had worked on over the 2 days of the Hackathon.",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Carrie M',
                'description' => "I passed Security+ completing the CompTIA trifecta ",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Chinaemere I',
                'description' => "I was 1 of 40 women selected from an application pool of over 1,500 for Lambda School’s Summer Hackers Program!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => '',
                'description' => "",
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
