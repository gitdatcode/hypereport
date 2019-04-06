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
                'year' => 2018,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
            ->where('month', 1)->first();

        $reports = [
            [
                'id' => 1,
                'firstName' => 'Chloe',
                'lastInitial' => 'R',
                'description' => 'I got my first full time developer job! I interned at Shopify last fall, then they brought me on full time at the start of this year :o)',
                'description_2' => "",
                'image_1' => 'shopify',
                'color' => '#70002e',
                'fill_color' => '930043',
            ],
            [
                'id' => 2,
                'firstName' => 'Alexis',
                'lastInitial' => 'M',
                'description' => 'I was promoted to Senior Full Stack Engineer after starting as an associate less than two years prior, and being in the tech industry for less than three.',
                'description_2' => "",
                'image_1' => 'promotion',
                'color' => '#930043',
                'fill_color' => '70002e',
            ],
            [
                'id' => 3,
                'firstName' => 'Ingrid',
                'lastInitial' => 'G',
                'description' => "Launching a crowd funding campaign for Drones 4 Girls | DETROIT.",
                'description_2' => "Pulling off a soccer jersey design competition for girls in Watts (LA). That was special.",
                'image_1' => 'drone',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 4,
                'firstName' => 'Keziyah',
                'lastInitial' => 'L',
                'description' => "I started my first newsletter (juniorsintech.com) and I'm actually really enjoying it.",
                'description_2' => "Also started my first job as a developer w/ Backstage Capital.",
                'image_1' => 'newsletter',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 5,
                'firstName' => 'Tomie',
                'lastInitial' => 'W',
                'description' => "I made improvements in cleaning up data quality and advocating for major data infrastructure developments",
                'description_2' => "Turning 25 and still being alive.",
                'image_1' => 'datacenter',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 6,
                'firstName' => 'Peter',
                'lastInitial' => 'M',
                'description' => "I launched my first product, Hamoni Sync (www.hamoni.tech).",
                'description_2' => "I'm also celebrating the fact that I wrote over 40 technical article which 80% of it featured in several weekly newsletters. I was named among the freeCodeCamp top contributors in 2018, and also selected as a Twilio Champion.",
                'image_1' => 'cloudsync',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 7,
                'firstName' => 'Chukky',
                'lastInitial' => 'N',
                'description' => "I got my passion project (academystack.com) up online! It's been years and it's still yet to be completed, but just getting it to the point where it's up, out of my head, and out there is worth it to me.",
                'description_2' => "Yeah, I'm black and alive!",
                'image_1' => 'academy',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 8,
                'firstName' => 'Mia',
                'lastInitial' => 'M',
                'description' => "Getting a new gig within my current company, working on a new project as a virtual reality game developer!",
                'description_2' => "",
                'image_1' => 'vr',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 9,
                'firstName' => 'AmberNechole',
                'lastInitial' => 'H',
                'description' => "Gave a TED Talk on black folks using meditation to combat stressors from oppression.",
                'description_2' => "I got my FIRST full time job as a UX Designer.",
                'image_1' => 'keynote',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 10,
                'firstName' => 'Tremayne',
                'lastInitial' => 'M',
                'description' => "I’ve finally used the little front-end knowledge I have to snag a few clients. I’ve developed 4 sites thus far.",
                'description_2' => "I’ve finally gotten over a roadblock that has been preventing me from making progress on my CS degree. ",
                'image_1' => 'webdev',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 11,
                'firstName' => 'Dominique',
                'lastInitial' => 'W',
                'description' => "Achieving my CISSP certification =]",
                'description_2' => "New job, doubled my salary, worked on a major project with Google, Traveled the World, became an adjunct with GTech!",
                'image_1' => 'cissp',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 12,
                'firstName' => 'Randall',
                'lastInitial' => 'W',
                'description' => "Putting on a well-received, well-planned, well-celebrated HUE Design Summit this summer in Atlanta for creatives of color!",
                'description_2' => "",
                'image_1' => 'huedesign',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 13,
                'firstName' => 'Michael',
                'lastInitial' => 'B',
                'description' => "I am celebrating finishing my second semester teaching at Kalamazoo Valley Community College! Two down, more to go!",
                'description_2' => "I have a 3D workshop starting next month and a art show in March in Kalamazoo!!!",
                'image_1' => 'professor',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 14,
                'firstName' => 'Stephanie',
                'lastInitial' => 'V',
                'description' => "<ul><li>Taught Computer Science at SMASH Academy, a summer math & science honors program for Detroit HS students. (July - Aug. 2018)</li><li>Gave 1st conference talk, \"Internet Access: What It Looks Like For 40% of Detroit\" at Self.Conference. (Aug. 2018)</li><li>Joined Detroit chapter of Brave Initiatives as Curriculum Lead. (Sept. 2018)</li><li>Joined Detroit chapter of Black Girls Code as Event & Volunteer Lead. (Oct. 2018)</li><li>Accepted into 2nd cohort of Integrate Detroit, a software development fellowship. (Sept. - Dec. 2018)</li></ul>",
                'description_2' => "Reclaiming my time in 2018!",
                'image_1' => 'themost',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 15,
                'firstName' => 'Whitney',
                'lastInitial' => 'W',
                'description' => "I got two conference scholarships (Web Unleashed- Toronto October 2018 and JSConf Hawaii- Honolulu- Feb 2019",
                'description_2' => "",
                'image_1' => 'jsconf',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 16,
                'firstName' => 'Stephen',
                'lastInitial' => 'C',
                'description' => "This year I'm celebrating getting my projects approved for funding and progressing in my career. It's also been good because I started a new job in January and we are now in December and I'm still here and enjoying it. ",
                'description_2' => "",
                'image_1' => 'funding',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 17,
                'firstName' => 'Chinaemere',
                'lastInitial' => 'I',
                'description' => "I got my current job at InVision as a Project Manager!! It took a few rejections and time but it worked out perfectly. I love my company!!",
                'description_2' => "Going through Udacity’s Intro to Self Driving Cars program. I’m not finished yet but learning a lot about path planning, behavior prediction, probability and machine learning. ",
                'image_1' => 'linkedin',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 18,
                'firstName' => 'Ronniesha',
                'lastInitial' => 'S',
                'description' => "I got offers for both a web development internship and a job improving my school library’s website. ",
                'description_2' => "I received a $1,500 grant to create a program to introduce elementary school girls to tech. ",
                'image_1' => 'internship',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 19,
                'firstName' => 'Ayoola',
                'lastInitial' => 'J',
                'description' => "Launching Blademy.com (@LearnBlademy) to our first wave of early access subscribers.",
                'description_2' => "",
                'image_1' => 'blademy',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 20,
                'firstName' => 'Brandon',
                'lastInitial' => 'C',
                'description' => "New Web Developer Job at Forest Lawn.",
                'description_2' => "",
                'image_1' => 'forestlawn',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 21,
                'firstName' => 'Stephen',
                'lastInitial' => 'C',
                'description' => "Friends winning all around me: raises, promotions, further education, escaping from traumatic work environments, etc.",
                'description_2' => "Women killing it in the elections this year",
                'image_1' => 'celebration',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 22,
                'firstName' => 'Bria',
                'lastInitial' => 'H',
                'description' => "I got a new job as a full time product content strategist!",
                'description_2' => "I moved into a dope apartment!",
                'image_1' => 'contentstrategy',
                'color' => '#70002e',
                'fill_color' => '',
            ],
            [
                'id' => 23,
                'firstName' => 'DATCODE',
                'lastInitial' => '',
                'description' => "This year we did the most and then did some more. We reached over 300 members, and saw several of y'all launch your own projects. We also became an official non profit organization, setting us up for amazing things. We couldn't have done this without y'all and we're looking forward to a bigger, louder, 2019.",
                'description_2' => "Do The Most!",
                'image_1' => 'datcode',
                'color' => '#70002e',
                'fill_color' => '',
            ],
        ];
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
