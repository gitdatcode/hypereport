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
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 	<link rel="stylesheet" href="/theme/year_month/2019/3/style.css">
 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
 </head>
 <body>
 	<header id='nav' class="site-header">
	  <a id="logo" href="https://www.datcode.io" title="">
	    <img alt="DATCODE" src="/theme/year_month/2019/3/assets/images/DATCODE_ENERGY_LOGOMARK_WHITE.png" />
	  </a>
	  <nav id="site-nav" class="site-nav">
	  	<a href="https://www.datcode.io">Go to datcode.io</a>
	    <a href="https://resources.datcode.io">Resources</a>
				<a class="nav-sign-up" href="https://www.datcode.io/sign-up">Join us!</a>
	  </nav>
	  <nav id="site-nav-mobile" class="site-nav-mobile">
	  	<a id="menu-icon" href="javascript:void(0);" class="icon" onclick="toggleMenu()">
	        <i class="fas fa-bars"></i>
	      </a>
	  	<div id="site-nav-links" class="site-nav-links not-visible">
	  		<ul>
			    <li><a href="https://www.datcode.io">Go to datcode.io</a></li>
			    <li><a href="https://resources.datcode.io">Resources</a></li>
						<li><a class="nav-sign-up" href="/sign-up">Join us!</a></li>
				</ul>
			</div>
	  </nav>
	</header>
 	<div id="splash" class="splash">
 		<div class="content">
	 		<h1 class="title">The DAT<span class="outline">CODE</span> <br/>Hype Report</h1>
	 		<div class="bar"></div>
             <?php
             if($current_month_year):
            ?>
	 		    <p>Monthly achievements in Blackness <br />submitted by the DATCODE community</p>
	 		    <h2><?php echo $current_month .' '. $current_month_year->year; ?></h2>
            <?php
            else:
            ?>
                <p>Achievements in Blackness <br />submitted by the DATCODE community</p>
	 		    <h2><?php echo $current_year; ?></h2>
            <?php
            endif;
            ?>
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
			 foreach($reports as $index => $report):
				// get the names of the previous and next user
				if($index == 0){
					$previous_name = $reports[count($reports) - 1]->username;
                    $next_name = $reports[$index + 1]->username;
                    $previous_id = $reports[count($reports) - 1]->id;
                    $next_id = $reports[$index + 1]->id;
				}else if($index == count($reports) - 1){
					$previous_name = $reports[$index - 1]->username;
					$next_name = $reports[0]->username;
                    $previous_id = $reports[$index - 1]->id;
                    $next_id = $reports[0]->id;
				}else{
					$previous_name = $reports[$index - 1]->username;
					$next_name = $reports[$index + 1]->username;
                    $previous_id = $reports[$index - 1]->id;
                    $next_id = $reports[$index + 1]->id;
                }

                $card_id = sprintf('card-%s', $report->id);
                $previous_id = sprintf('card-%s', $previous_id);
                $next_id = sprintf('card-%s', $next_id);

                //write the hype text and the actual previous next hrefs
                if($current_month_year){
                    $hype_url = sprintf('https://hype.report/%s/%s#%s', $current_month_year->year, $current_month_year->month, $card_id);
                    $previous_href = sprintf('/%s/%s#%s', $current_month_year->$year, $current_month_year->month, $previous_id);
                    $next_href = sprintf('/%s/%s#%s', $current_month_year->$year, $current_month_year->month, $next_id);
                }else{
                    $hype_url = sprintf('https://hype.report/%s#%s', $current_year, $card_id);
                    $previous_href = sprintf('/%s#%s', $current_year, $previous_id);
                    $next_href = sprintf('/%s#%s', $current_year, $next_id);
                }

                $message = sprintf("Check out %s's %s Hype Report! %s", $report->username, $current_month, $hype_url);
                $twitter = sprintf("https://twitter.com/home?status=%s", urlencode($message));
	 		 ?>

				<section id="<?php echo $card_id; ?>" class="card">
					<a href="#" class="close-card"><img src="/theme/year_month/2019/3/assets/images/close.png" alt="Next" /></a>
					<a href="<?php echo $previous_href; ?>" class="previous-card"><img src="/theme/year_month/2019/3/assets/images/arrow_prev.png" alt="Previous" /></a>
					<h2 class="card_title"><?php echo $report->username; ?></h2>
					<p class="card_text"><?php echo $report->description; ?></p>
					<a href="<?php echo $twitter;?>" class="hype_this"><div class="card_button">hype this!</div></a>
					<a href="<?php echo $next_href; ?>" class="next-card"><img src="/theme/year_month/2019/3/assets/images/arrow_next.png" alt="Next" /></a>
				</section>
			<?php	
			endforeach;
			?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="/theme/year_month/2019/3/script.js" type="text/javascript"></script>
 </body>
 </html>