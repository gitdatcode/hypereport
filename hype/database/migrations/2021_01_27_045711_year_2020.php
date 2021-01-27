<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Year2020 extends Migration
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
                'month' => 12,
                'year' => 2020,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2020)
            ->where('month', 12)->first();
        
        $reports = [
            [
                'username' => 'Ebonie B.',
                'description' => "I am on the all women and non-binary people release squad for the newest version of WordPress (5.6)! It feels great to have been apart of a big open-source project like that. <a href='https://wordpress.org/news/2020/12/simone/'>https://wordpress.org/news/2020/12/simone/</a>",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Rumi W.',
                'description' => "Um, being alive. Doing some writing, really working through mental health things, re-upping on learning php and tapping into work with folks I can be myself around.",
                'description2' => "Also making it to 27 on the 17th of Dec. So. Yay.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Randall W.',
                'description' => "Most Incredible, a LEGO studio focused on hip hop culture I founded with Syreeta Gates, was shouted out on Because of Them We Can, as Black Excellence of the week on The Read's podcast, AND made some holiday sales to boot! Looking forward to making big strides in 2021 and getting our name out there some more!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Michael B',
                'description' => "Did my first $10,000 in a week in 2020 with my Clothing Brand!",
                'description2' => "
                <ul>
                    <li>Raised $4,000 with my T-Shirt company to donate to local black non-profits in my city.</li>
                    <li>Started a black-owned food subscription box company with my best friend.</li>
                    <li>Hit my savings goals</li>
                    <li>Black Love</li>
                </ul>",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mark H.',
                'description' => "My son successfully completed his first semester of college (go Morgan Bears!). ",
                'description2' => "Love in the time of Corona",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Alicia L.',
                'description' => "I completed 2 apprenticeships at the same time (Full stack Dev & Software Quality Engineering 🙌🏾. I completed them both and finished all projects and got offers from both but took one offer.",
                'description2' => "Black Excellence andI finally know what I want to do in Development.....Backend!!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Kristina V.',
                'description' => "Surviving 2020 with a place to live, gainful employment, and my health.",
                'description2' => "
                <ul>
                    <li>My mother being in remission after being diagnosed with stage 4 small cell carcinoma during the pandemic. </li>
                    <li>Finding love in the time of Corona.</li>
                </ul>
                ",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Courtney W.',
                'description' => "Now working as an Engineering Manager at Elastic. I started on August 24th.",
                'description2' => "I moved house (also during a pandemic)!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Bria H.',
                'description' => "I spoke at my first conference. I moderated my first panel for Black content designers! I finally published something on my site that I'd been working on for a year and a half. I went through lots of interviews and got hired at a new job that I'm really excited to start in 2021. I became a more confident driver, and got my first car!",
                'description2' => "Also: I was there for my family and loved ones. I took care of myself, and got out of bed, and fed my cats. I wore a mask and socially distanced and cried and got through rough weeks. I fell flat on my butt roller skating in my apartment to Kirk Franklin and I felt more content in that moment than I ever thought I could after such a rough year.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Christa S.',
                'description' => "I started a business, like a whole business! I quit my day job and bet on myself. It was terrifying but I'm happy that I had DATCODE there to hold my hand 💜  I'm proud of me.",
                'description2' => "I made some really cool friends in DATCODE, Sunday's are fun days🙌🏾",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Miles E.',
                'description' => "
                <ul>
                    <li>Finished an 11-month development contract (originally going to be 6 months) with a company three time zones ahead of me.</li>
                    <li>My wife and I got our eight-year-old through half a school year of remote 3rd grade.</li>
                    <li>Designing and implemented a DynamoDB-based system.</li>
                    <li>Managed remote technical training for my company.</li>
                    <li>Learned basic Rust for web development.</li>
                    <li>Set up a green screen in the living room, recorded video, and edited my daughter's stuffed animal musicals.</li>
                </ul>
                ",
                'description2' => "One scary COVID case, but no family members have died this year.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Renee A.',
                'description' => "
                    <ul>
                        <li>I am celebrating some healthy lifestyle changes that I have been able to stick too- pescatarian diet and walking a few miles a day! This has helped my mental health tremendously.</li>
                        <li>I am celebrating getting a promotion into QA leadership! I am also celebrating the news my common stock from a former employer is already worth 30k pre-IPO!</li>
                    </ul>
                ",
                'description2' => "Adjusting to married life during the quarantine and my dad beating cancer in 2020!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Stephanie V.',
                'description' => '
                <ul>
                    <li>Receiving an invitation to present my talk "Built-In Bias: What Are The Ethical Responsibilities of Software Developers?" at Data Justice 2020 in Cardiff, Wales, UK. (January 2020)</li>
                    <li>Speaking at Hidden Gems Conference, whose "mission is to create a space to celebrate the celestial spectrum of Phenomenal Black womanhood in technology." (August 2020)</li>
                    <li>Contributing interviews as a podcaster for SolveCast, "a unique news platform that is intentionally designed for empathy and imagination." (August 2020)</li>
                    <li>Joining Planet, a satellite imaging & data company based in San Francisco, CA as a Software Impact intern on the Developer Relations team. (October 2020)</li>
                </ul>
                ',
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
