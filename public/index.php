<?php
include '../src/report.php';
?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <!-- <link rel="apple-touch-icon" href="icon.png"> -->
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/hype.css">
</head>

<body class="hype">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
<div class="main container-fluid">
    <section class="jumbotron introduction">
      <div>
        <article>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h1>DAT<strong>CODE</strong></h1>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2>2018 Hype Report</h2>
                </div>
            </div>
            <ul>
              <li class="line1"></li>
              <li class="line2"></li>
              <li class="line3"></li>
              <li class="line4"></li>
              <li class="line5"></li>
            </ul>
        </article>
        <aside>
          <p>
            The good, the great, and the most from our amazing community.
          </p>
        </aside>
      </div>
    </section>
    <?php
$count = 1;
$setIndex = 0;
$schemeIndex = 0;
$colorSchemeSets = include '../src/colorschemes.php';
$currentSet = $colorSchemeSets[$setIndex];
$scheme = $currentSet[$schemeIndex];
?>
    <?php foreach ($reports as $report): ?>
    <section class="jumbotron report" id="report_<?php echo sprintf("%02d", $count); ?>">
      <?php printStyle($report, sprintf("%02d", $count), $scheme); ?>
      <div>
        <article>
            <h2><?php echo sprintf("%02d", $count); ?></h2>
            <h1 class="display-4"><?php echo $report['firstName'] . ' ' . $report['lastInitial'] . '.'; ?></h1>
            <p class="lead"><?php echo $report['text']; ?></p>
            <a
                class="btn btn-primary btn-lg"
                href="https://twitter.com/home?status=Check%20out%20<?php echo $report['firstName']; ?>'s%202018%20Hype%20Report!%3A%20https%3A//hype.report%23report_<?php echo sprintf("%02d", $count); ?>"
                role="button">
                Hype This
            </a>
        </article>
        <?php if (!empty($report['moreHype'])): ?>
        <aside>
          <h3>More Hype</h3>
          <p><?php echo $report['moreHype']; ?></p>  
        </aside>
        <?php endif; ?>
      </div>
    </section>
    <?php
    if ($count % 4 == 0) {
      $setIndex = empty($colorSchemeSets[$setIndex+1])
        ? 0
        : $setIndex+1;
      $schemeIndex = 0;
      $currentSet = $colorSchemeSets[$setIndex];
    } else {
      $schemeIndex++;
    }
      $scheme = $currentSet[$schemeIndex];
    $count++;
    endforeach; ?>
</div>
  <script src="js/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/hype.js"></script>

</body>

</html>
