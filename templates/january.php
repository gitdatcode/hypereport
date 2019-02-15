<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATCODE Hype Report: January 2019</title>
    <meta name="description" content="Sliding Triple View Layout with Visible Adjoining Sections" />
    <meta name="keywords" content="visible sides, layout, sliding, three panels, css transforms, web development, tutorial, template" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="<?php asset('favicon.ico'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php url('css/bootstrap.min.css'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:300,400,400i" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="<?php asset('/january/css/january.css'); ?>" />
    <script src="<?php asset('/january/js/modernizr.custom.js'); ?>"></script>
</head>
<body>
<div class="wrapper">
    <section class="reports">
        <section class="report summary">
            <article>
                <h1>DATCODE</h1>
                <h2>Hype Report<br />January 2019</h2>
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
