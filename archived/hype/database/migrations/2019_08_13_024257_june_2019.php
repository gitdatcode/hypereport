<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class June2019 extends Migration
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
                'month' => 6,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
        ->where('month', 6)->first();

        $reports = [
            [
                'username' => 'Renee H.',
                'description' => "Celebrating my company based in Detroit, MI  closed a $110 million Series C funding round, bringing its valuation to more than $1 billion. Led by investment firms DST Global, General Atlantic and GGV Capital, the VC transaction is Michigan‚ largest to date. Our engineering department is still pretty small ~ 100 people and I have been able see the value I bring to the company by working as a software quality assurance engineer on high priority business projects. I have built a reputation for being good at what I do and pulled onto projects as lead QA!",
                'description2' => "Getting my plane ticket to go back to Ghana in October for 3 weeks! This is the longest vacation I have taken since finishing college and working.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'AmberNechole H.',
                'description' => "I was referenced in an article by UX for Minas Pretas, a Brazilian UX group centering on black women. I was able to connect with them and look forward to building community.",
                'description2' => "I made the commitment to write daily for 1.5 hours.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
                'share' => false,
            ],
            [
                'username' => 'Christa S.',
                'description' => "I'm excited that I placed in the top 40 at my company for HackWeek. There were 188 entries total. Also I learned a new technology (Angular). Also, also (lol) I'll be teaching yoga at this really dope event on the 30th! This month has been amazeballs, yo!",
                'description2' => "I'm proud of myself that I worked well under pressure this month AND used self care with coping skills - I did that!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Stephanie V.',
                'description' => "I spoke about the ethical responsibilities of software developers at a tech conference.",
                'description2' => "Turning 36 on June 7th.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Tolu O.',
                'description' => "On June 24th, we finally launched the Kugali Comic Club, which is a subscription service that gives access to our entire comics library which is updated on a weekly basis. We release new chapters of our ongoing comics every Monday, Wednesday and Friday, with a chapter being at least ten pages. That's at least 30 new pages for subscribers each week. We've been working on this since the beginning of the year and postponed the launch by about six weeks so it's nice to finally be able to put it out there.",
                'description2' => '',
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Ayodele O.',
                'description' => "I competed in my first AI hackathon this month. It was put on my the equity firmthat acquired the company I joined in March. Out of their 40 person Data Science team I was chosen along with some senior Data Scientist for a paid trip to Austin. So many team members congratulated us and have been interested to hear me talk about my work. I got such great feedback from my manager as well!",
                'description2' => "I've been confirmed to speak at Data ScienceGO in San Diego this Fall!",
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
