<?php
// month names in an array. Added a blank entry so that it is 1-indexed
$months = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July',
'August', 'September', 'October', 'November', 'December'];
?>
<!DOCTYPE html>
 <html lang='en'>
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
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:url" content="https://hype.report" />
  <meta property="og:type" content="product" />
  <meta property="og:description" content="Monthly achievements in Blackness. Submitted by the DATCODE Community" />
  <meta property="og:image" content="https://hype.report/theme/year_month/assets/images/hypereport.png" />
	<meta property="og:title" content="The DATCODE Hype Report">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@talkdatcode">
  <meta name="twitter:creator" content="@talkdatcode">
  <meta name="twitter:title" content="DATCODE 2018 Hype Report">
  <meta name="twitter:description" content="Monthly achievements in Blackness. Submitted by the DATCODE Community">
  <meta name="twitter:image" content="https://hype.report/theme/year_month/assets/images/hypereport.png">
  
  <title>The DATCODE Hype Report</title>
  <link rel="icon" href="/theme/year_month/assets/images/bolt-icon.png" type="image/png">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 	<link rel="stylesheet" href="/theme/year_month/style.css">
 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
 </head>
 <body>
	 <?php
	 echo view('header');
	 ?>
 	<div id="splash" class="splash">
 		<div class="content">
	 		<h1 class="title">The DAT<span class="outline">CODE</span> <br/>Hype Report</h1>
	 		<div class="bar"></div>
      <p>Monthly achievements in Blackness <br />submitted by the DATCODE community</p>    
 		</div>
 	</div>
 	<?php
 		$current_month_year = "";
        // print out the dropdown.
        // TODO: move and style this and delete this <hr>
		echo view('report_selector', [
            'months' => $months,
            'report_months' => $report_months,
            'current_month_year' => $current_month_year,
        ]);
		?>
 </body>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="/theme/year_month/script.js" type="text/javascript"></script>
 </html>