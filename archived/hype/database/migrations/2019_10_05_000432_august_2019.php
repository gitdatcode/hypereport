<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class August2019 extends Migration
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
                'month' => 8,
                'year' => 2019,
            ]
        );

        $month_year = \App\MonthYear::where('year', 2019)
            ->where('month', 8)->first();

        $reports = [
            [
                'username' => 'Shanise B.',
                'description' => "One month into my promotion to software engineer and I've made code contributions to both live production and open source codebases!",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Bria H.',
                'description' => "Went to the Philippines for research, got a promotion, got a raise!!",
                'description2' => "There could be more",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Rumi W.',
                'description' => "moved into new apartment, influenced workplace to actually take action on doing better about making their employees more informed about people,  making a good impression at work",
                'description2' => "Finding a name that I like.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Whitney W.',
                'description' => "I received a full scholarship and was able to attend the Abstractions II, a cross-discipline tech conference in Pittsburgh",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Corianne B.',
                'description' => "A couple years after discovering my dream career and a year of school and transition, I landed my first big job in data science & analytics. I starry August 19th with a car sharing/tech company. I’m thrilled! 

                I’m building a routine and staying organized to adapt to the change—stuff that’s been really hard for me in the past.

                I am deeply grateful for the support of this community. You have been so helpful to keep me going.",
                'description2' => "Keeping my shit together basically.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Stephanie V.',
                'description' => 'I spoke about the Digital Divide and Internet access at Abstractions ("a multi-disciplinary conference that brings together everyone involved in modern software development to teach, learn, and connect") in Pittsburgh, PA.',
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Mark H.',
                'description' => "We got the new streamlined version of datcode.io running. It also includes a public-facing resources page where the world can see the links that we deem worthy.",
                'description2' => "My son got his driver's license, now he can run to the store for me 20 times a day. He is going to hate driving when I'm done 'oh, I need celery''n him.",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Peter M.',
                'description' => "1. I learnt Angular and wrote 3 blog post on it.
                2. I finished building a GraphQL app 
                3. Had my article on GraphQL in .NET Core published on Code Magazine",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Andrea W.',
                'description' => "I won $20,000 for my startup idea at Start Garden's 100 Ideas demo day!",
                'description2' => "",
                'image_1' => '',
                'color' => '',
                'fill_color' => '',
                'month_year_id' => $month_year->id,
            ],
            [
                'username' => 'Whitney W.',
                'description' => "I received a full scholarship and attended the cross-discipline conference, Abstractions II in Pittsburgh.",
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
