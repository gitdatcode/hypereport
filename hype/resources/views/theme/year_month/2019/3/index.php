 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 	<link rel="stylesheet" href="/theme/year_month/2019/3/style.css">
 </head>
 <body>
 	<header id='nav' class="site-header">
	  <a id="logo" href="https://www.datcode.io" title="">
	    <img alt="DATCODE" src="/theme/year_month/2019/3/assets/images/DATCODE_ENERGY_LOGOMARK_WHITE.png" />
	  </a>
	  <nav id="site-nav" class="site-nav">
	    <a href="/blog">Blog</a>
	    <a href="https://resources.datcode.io">Resources</a>
				<a class="nav-sign-up" href="/sign-up">Sign Up!</a>
	  </nav>
	  <nav id="site-nav-mobile" class="site-nav-mobile">
	  	<a id="menu-icon" href="javascript:void(0);" class="icon" onclick="toggleMenu()">
	        <i class="fas fa-bars"></i>
	      </a>
	  	<div id="site-nav-links" class="site-nav-links not-visible">
	  		<ul>
			    <li><a href="https://www.datcode.io">Go to datcode.io</a></li>
			    <li><a href="/blog">Blog</a></li>
			    <li><a href="https://resources.datcode.io">Resources</a></li>
						<li><a class="nav-sign-up" href="/sign-up">Sign Up!</a></li>
				</ul>
			</div>
	  </nav>
	</header>
 	<div id="splash" class="splash">
 		<div class="content">
	 		<h1 class="title">The DAT<span class="outline">CODE</span> <br/>Hype Report</h1>
	 		<div class="bar"></div>
	 		<p>Monthly achievements in Blackness <br />submitted by the DATCODE community</p>
	 		<h2>March 2019</h2>
 		</div>
 	</div>
 	<div id="grid" class="container grid">
 		<?php 
 			foreach($reports as $report):
 		 ?>
 		<a class="cell-link" href="#<?php echo $report->id ?>" -data-card-id="card-<?php echo $report->id ?>" ><div id='cell-<?php echo $report->id ?>' class="cell"><?php echo $report->username ?></div></a>
 		<?php endforeach; ?>
 	</div>
 	<div id='hype' class="hype" >
	 	<div class="container hype-container">
	 		<?php 
			 foreach($reports as $index => $report):
	 		 ?>

				<section id="card-<?php echo $report->id ?>"class="card">
					<a href="#" class="previous-card">previous</a>
					<h2 class="card_title"><?php echo $report->username; ?></h2>
					<p class="card_text"><?php echo $report->description; ?></p>
					<a href="javascript:nextHype()"><div class="card_button">hype this!</div></a>
					<a href="#" class="next-card">next</a>
				</section>
			<?php	
			endforeach;
			?>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="/theme/year_month/2019/3/script.js" type="text/javascript"></script>
 </body>
 </html>