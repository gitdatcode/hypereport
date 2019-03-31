<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Triple View Layout</title>
    <meta name="description" content="Sliding Triple View Layout with Visible Adjoining Sections" />
    <meta name="keywords" content="visible sides, layout, sliding, three panels, css transforms, web development, tutorial, template" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="<?php asset('/january/../favicon.ico'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php asset('/january/css/normalize.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php asset('/january/css/demo.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php asset('/january/css/component.css'); ?>" />
    <script src="<?php asset('/january/js/modernizr.custom.js'); ?>"></script>

</head>
<body>
<div id="vs-container" class="vs-container" style="background-image: url(<?php asset('/january/images/1.jpg'); ?>);">
    <header class="vs-header">
        <h1>DATCODE HypeReport <span>January 2019</span></h1>
        <ul class="vs-nav">
            <?php foreach($reports as $report): ?>
            <li data-id="<?php echo $report['id']; ?>"><a href="#section-<?php echo $index+1; ?>">#0<?php echo $report['id']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </header>
    <div class="vs-wrapper">
        <?php foreach($reports as $report): ?>

        <section id="section-<?php echo $report['id']; ?>">
            <div class="vs-content">
                <h2><?php echo $report['firstname']; ?></h2>
                <div class="report">
                    <p><?php echo $report['report']; ?></p>
                </div>
            </div>
        </section>
        <?php endforeach; ?>
    </div>
</div><!-- /vs-container -->
<script src="<?php asset('/january/js/classie.js'); ?>"></script>
<script src="<?php asset('/january/js/hammer.min.js'); ?>"></script>
<script src="<?php asset('/january/js/main.js'); ?>"></script>
</body>
</html>