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
  <meta property="og:title" content="DATCODE 2018 Hype Report" />
  <meta property="og:description" content="Our community did the most this year. Come check us out!" />
  <meta property="og:image" content="https://hype.report/images/hypereport.png" />

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@talkdatcode">
  <meta name="twitter:creator" content="@talkdatcode">
  <meta name="twitter:title" content="DATCODE 2018 Hype Report">
  <meta name="twitter:description" content="Our community did the most this year. Come check us out!">
  <meta name="twitter:image" content="https://hype.report/images/hypereport.png">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <!-- <link rel="apple-touch-icon" href="icon.png"> -->

  <link rel="stylesheet" href="/theme/year/2018/css/bootstrap.min.css">
  <link rel="stylesheet" href="/theme/year/2018/css/hype.css">
</head>

<body class="hype">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<div class="main container-fluid">
    <section class="jumbotron introduction">
      <div>
        <article>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h1>DAT<strong>CODE</strong></h1>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2>2019 Hype Report</h2>
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
        $colorSchemeSets = include __DIR__ . '/../2018/colorschemes.php';
        $currentSet = $colorSchemeSets[$setIndex];
        $scheme = $currentSet[$schemeIndex];

        foreach ($reports as $report){
            echo view('theme.year.2018.section', ['scheme' => $scheme, 'report' => $report, 'count' => $count]);

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
        }
    ?>
    <section class="jumbotron footer">
      <div>
        <article>
          Come join us at <a href="http://www.datcode.io/#sign-up">datcode.io</a>!
        </article>
      </div>
    </section>
</div>
  <script src="js/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="/theme/year/2018/js/bootstrap.min.js"></script>
  <script src="/theme/year/2018/js/hype.js"></script>

</body>

</html>