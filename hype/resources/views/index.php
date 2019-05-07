<?php
// month names in an array. Added a blank entry so that it is 1-indexed
$months = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July',
'August', 'September', 'October', 'November', 'December'];

if($current_month_year){
    $current_month = $months[$current_month_year->month];
}else{
    $current_month = '';
}
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

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@talkdatcode">
  <meta name="twitter:creator" content="@talkdatcode">
  <meta name="twitter:description" content="Monthly achievements in Blackness. Submitted by the DATCODE Community">
  <meta name="twitter:image" content="https://hype.report/theme/year_month/assets/images/hypereport.png">
 		<?php
     if($current_month_year):
    ?>
    <meta property="og:title" content="The DATCODE Hype Report | <?php echo $current_month .' '. $current_month_year->year; ?>" />
    <meta name="twitter:title" content="The DATCODE Hype Report | <?php echo $current_month .' '. $current_month_year->year; ?>">
    <title>The DATCODE Hype Report | <?php echo $current_month .' '. $current_month_year->year; ?></title>
    <?php
    else:
    ?>
    <meta property="og:title" content="The DATCODE Hype Report | <?php echo $current_year; ?>" />
    <meta name="twitter:title" content="The DATCODE Hype Report | <?php echo $current_year; ?>">
    <title>The DATCODE Hype Report | <?php echo $current_year; ?></title>
    <?php
    endif;
    ?>
	<link rel="icon" href="/theme/year_month/assets/images/bolt-icon.png" type="image/png">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 	<link rel="stylesheet" href="/theme/year_month/style.css">
     <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
     <style>
         .card hr {
            width: 90%;
            margin: 5% auto;
            border: 1px solid #EF0053;
         }
     </style>
 </head>
 <body>
    <?php
	  echo view('header');
	  ?>
	<div class=" container month">
		<div class="content">
			<?php
			if($current_month_year):
			?>
				<h1 class="title"><span class="outline"><?php echo $current_month .' '. $current_month_year->year; ?></span></h1>
			<?php
			else:
			?>
				<h1 class="title"><span class="outline"><?php echo $current_year; ?></span></h1>
			<?php
			endif;
			?>
			<div class="bar"></div>
		</div>
 	</div>
 	 	<div id="grid" class="container grid">
 		<?php 
 			foreach($reports as $report):
 		 ?>
 		<a class="cell-link" href="#<?php echo $report->id ?>" -data-card-id="card-<?php echo $report->id ?>" ><div id='cell-<?php echo $report->id ?>' class="cell"><?php echo $report->username ?></div></a>
 		<?php endforeach; ?>
		<?php
        // print out the dropdown.
        // TODO: move and style this and delete this <hr>
		echo view('report_selector', [
            'months' => $months,
            'report_months' => $report_months,
            'current_month_year' => $current_month_year,
        ]);
		?>
 	</div>
 	<div id='hype' class="hype" >
        <?php 
        foreach($reports as $index => $report){
            $args = [
                'index' => $index,
                'report' => $report,
                'reports' => $reports,
            ];

            if(isset($current_month_year)){
                $args['current_month_year'] = $current_month_year;
            }

            if(isset($current_year)){
                $args['current_year'] = $current_year;
            }

            if(isset($current_month)){
                $args['current_month'] = $current_month;
            }

            if(isset($$year)){
                $args['year'] = $year;
            }

            echo view('card', $args);
        }
        ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="/theme/year_month/script.js" type="text/javascript"></script>
 </body>
 </html>