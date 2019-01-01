<?php
function dd($m) {
    var_dump($m);
    die();
}

function printStyle($report, $count, $scheme)
{
    $fillColor = $scheme['foreground'];
$style = <<<EOT
<style>
 #report_$count {
     background-image:url(/images/{$report['icon']}_svg.php?fillColor={$scheme['foreground']});
     background-color: #{$scheme['background']};
 }
 #report_$count h1, 
 #report_$count aside h3 {
    color: #{$scheme['highlight']};
 }
 #report_$count article {
    border-bottom: 1px solid #{$scheme['highlight']};
}
</style>
EOT;
error_log($style);
echo $style;
}
$reports = [
    [
        'id' => 1,
        'firstName' => 'Chloe',
        'lastInitial' => 'R',
        'text' => 'I got my first full time developer job! I interned at Shopify last fall, then they brought me on full time at the start of this year :o)',
        'moreHype' => "",
        'icon' => 'shopify',
        'color' => '#70002e',
        'fillColor' => '930043',
    ],
    [
        'id' => 2,
        'firstName' => 'Alexis',
        'lastInitial' => 'M',
        'text' => 'I was promoted to Senior Full Stack Engineer after starting as an associate less than two years prior, and being in the tech industry for less than three.',
        'moreHype' => "",
        'icon' => 'promotion',
        'color' => '#930043',
        'fillColor' => '70002e',
    ],
    [
        'id' => 3,
        'firstName' => 'Ingrid',
        'lastInitial' => 'G',
        'text' => "Launching a crowd funding campaign for Drones 4 Girls | DETROIT.",
        'moreHype' => "Pulling off a soccer jersey design competition for girls in Watts (LA). That was special.",
        'icon' => 'drone',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 4,
        'firstName' => 'Keziyah',
        'lastInitial' => 'L',
        'text' => "I started my first newsletter (juniorsintech.com) and I'm actually really enjoying it.",
        'moreHype' => "Also started my first job as a developer w/ Backstage Capital.",
        'icon' => 'newsletter',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 5,
        'firstName' => 'Tomie',
        'lastInitial' => 'W',
        'text' => "I made improvements in cleaning up data quality and advocating for major data infrastructure developments",
        'moreHype' => "Turning 25 and still being alive.",
        'icon' => 'datacenter',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 6,
        'firstName' => 'Peter',
        'lastInitial' => 'M',
        'text' => "I launched my first product, Hamoni Sync (www.hamoni.tech).",
        'moreHype' => "I'm also celebrating the fact that I wrote over 40 technical article which 80% of it featured in several weekly newsletters. I was named among the freeCodeCamp top contributors in 2018, and also selected as a Twilio Champion.",
        'icon' => 'cloudsync',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 7,
        'firstName' => 'Chukky',
        'lastInitial' => 'N',
        'text' => "I got my passion project (academystack.com) up online! It's been years and it's still yet to be completed, but just getting it to the point where it's up, out of my head, and out there is worth it to me.",
        'moreHype' => "Yeah, I'm black and alive!",
        'icon' => 'academy',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 8,
        'firstName' => 'Mia',
        'lastInitial' => 'M',
        'text' => "Getting a new gig within my current company, working on a new project as a virtual reality game developer!",
        'moreHype' => "",
        'icon' => 'vr',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 9,
        'firstName' => 'AmberNechole',
        'lastInitial' => 'H',
        'text' => "Gave a TED Talk on black folks using meditation to combat stressors from oppression.",
        'moreHype' => "I got my FIRST full time job as a UX Designer.",
        'icon' => 'keynote',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 10,
        'firstName' => 'Tremayne',
        'lastInitial' => 'M',
        'text' => "I’ve finally used the little front-end knowledge I have to snag a few clients. I’ve developed 4 sites thus far.",
        'moreHype' => "I’ve finally gotten over a roadblock that has been preventing me from making progress on my CS degree. ",
        'icon' => 'webdev',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 11,
        'firstName' => 'Dominique',
        'lastInitial' => 'W',
        'text' => "Achieving my CISSP certification =]",
        'moreHype' => "New job, doubled my salary, worked on a major project with Google, Traveled the World, became an adjunct with GTech!",
        'icon' => 'cissp',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 12,
        'firstName' => 'Randall',
        'lastInitial' => 'W',
        'text' => "Putting on a well-received, well-planned, well-celebrated HUE Design Summit this summer in Atlanta for creatives of color!",
        'moreHype' => "",
        'icon' => 'huedesign',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 13,
        'firstName' => 'Michael',
        'lastInitial' => 'B',
        'text' => "I am celebrating finishing my second semester teaching at Kalamazoo Valley Community College! Two down, more to go!",
        'moreHype' => "I have a 3D workshop starting next month and a art show in March in Kalamazoo!!!",
        'icon' => 'professor',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 14,
        'firstName' => 'Stephanie',
        'lastInitial' => 'V',
        'text' => "<ul><li>Taught Computer Science at SMASH Academy, a summer math & science honors program for Detroit HS students. (July - Aug. 2018)</li><li>Gave 1st conference talk, \"Internet Access: What It Looks Like For 40% of Detroit\" at Self.Conference. (Aug. 2018)</li><li>Joined Detroit chapter of Brave Initiatives as Curriculum Lead. (Sept. 2018)</li><li>Joined Detroit chapter of Black Girls Code as Event & Volunteer Lead. (Oct. 2018)</li><li>Accepted into 2nd cohort of Integrate Detroit, a software development fellowship. (Sept. - Dec. 2018)</li></ul>",
        'moreHype' => "Reclaiming my time in 2018!",
        'icon' => 'themost',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 15,
        'firstName' => 'Whitney',
        'lastInitial' => 'W',
        'text' => "I got two conference scholarships (Web Unleashed- Toronto October 2018 and JSConf Hawaii- Honolulu- Feb 2019",
        'moreHype' => "",
        'icon' => 'jsconf',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 16,
        'firstName' => 'Stephen',
        'lastInitial' => 'C',
        'text' => "This year I'm celebrating getting my projects approved for funding and progressing in my career. It's also been good because I started a new job in January and we are now in December and I'm still here and enjoying it. ",
        'moreHype' => "",
        'icon' => 'funding',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 17,
        'firstName' => 'Chinaemere',
        'lastInitial' => 'I',
        'text' => "I got my current job at InVision as a Project Manager!! It took a few rejections and time but it worked out perfectly. I love my company!!",
        'moreHype' => "Going through Udacity’s Intro to Self Driving Cars program. I’m not finished yet but learning a lot about path planning, behavior prediction, probability and machine learning. ",
        'icon' => 'linkedin',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 18,
        'firstName' => 'Ronniesha',
        'lastInitial' => 'S',
        'text' => "I got offers for both a web development internship and a job improving my school library’s website. ",
        'moreHype' => "I received a $1,500 grant to create a program to introduce elementary school girls to tech. ",
        'icon' => 'internship',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 19,
        'firstName' => 'Ayoola',
        'lastInitial' => 'J',
        'text' => "Launching Blademy.com (@LearnBlademy) to our first wave of early access subscribers.",
        'moreHype' => "",
        'icon' => 'blademy',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 20,
        'firstName' => 'Brandon',
        'lastInitial' => 'C',
        'text' => "New Web Developer Job at Forest Lawn.",
        'moreHype' => "",
        'icon' => 'forestlawn',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 21,
        'firstName' => 'Stephen',
        'lastInitial' => 'C',
        'text' => "Friends winning all around me: raises, promotions, further education, escaping from traumatic work environments, etc.",
        'moreHype' => "Women killing it in the elections this year",
        'icon' => 'celebration',
        'color' => '#70002e',
        'fillColor' => '',
    ],
    [
        'id' => 22,
        'firstName' => 'Bria',
        'lastInitial' => 'H',
        'text' => "I got a new job as a full time product content strategist!",
        'moreHype' => "I moved into a dope apartment!",
        'icon' => 'contentstrategy',
        'color' => '#70002e',
        'fillColor' => '',
    ],
];