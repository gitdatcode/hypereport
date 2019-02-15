<!doctype html>
<html class="no-js" lang="">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131436546-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131436546-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DATCODE 2018 HYPE REPORT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="https://hype.report" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="DATCODE January 2019 Hype Report" />
    <meta property="og:description" content="Come check out what the DATCODE community did in January 2019!" />
    <meta property="og:image" content="https://hype.report/images/january2019-hypereport.png" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@talkdatcode">
    <meta name="twitter:creator" content="@talkdatcode">
    <meta name="twitter:title" content="DATCODE January 2019 Hype Report">
    <meta name="twitter:description" content="Come check out what the DATCODE community did in January 2019!">
    <meta name="twitter:image" content="https://hype.report/images/january2019-hypereport.png">
    <link rel="stylesheet" type="text/css" href="<?php url('css/bootstrap.min.css'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="<?php asset('/january/css/january.css'); ?>" />
    <script src="<?php asset('/january/js/modernizr.custom.js'); ?>"></script>
</head>
<body>
<div class="wrapper">

<section class="reports">
    <section class="report summary">
        <article>
            <h1>DATCODE</h1>
            <h2>January 2019 <br />Hype Report</h2>
        </article>
    </section>
    <?php foreach($reports as $report): ?>

    <section 
        id="report_<?php echo $report['id']; ?>"
        class="report"
        style="background-image:url(<?php asset("/images/january/{$report['id']}.jpg"); ?>);">
        <img src="<?php asset("/january/images/{$report['id']}.jpg"); ?>" alt="">
        <article>
            <h2 class="report__title">
                <?php echo $report['firstname'] . ' ' . mb_substr($report['lastname'], 0, 1, 'utf-8'); ?>.
            </h2>
            <p class="report__text"><?php echo $report['report']; ?></p>
            <a
                class="report__hype"
                target="_blank"
                href="https://twitter.com/home?status=Check%20out%20<?php echo $report['firstname']; ?>'s%20January%202019%20Hype%20Report!%3A%20https%3A//hype.report%3Ajanuary%23report_<?php echo $report['id']; ?>" role="button">
                Hype This
            </a>
        </article>
    </section>

    <?php endforeach; ?>
    <section class="report conclusion">
        <p class="report__text">Come join us at <a href="http://www.datcode.io/#sign-up">datcode.io</a>!</p>
    </section>
</section>
</div>
</body>
</html>
