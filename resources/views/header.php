<header id='nav' class="site-header">
    <a class="main-cta" href="/submit">
        <?php if (str_contains(\Illuminate\Support\Facades\Request::url(), 'submit')) {
        echo 'HypeReport 2021';
        } else { echo 'Submit'; }?>
    </a>
	  <a id="logo" class="site-logo" href="/" title="">
	    <img alt="DATCODE" src="/theme/year_month/assets/images/DATCODE_ENERGY_LOGOMARK_WHITE.png" />
	  </a>
    <nav id="site-nav" class="site-nav">
	  	<a href="https://hype.report">Hype Reports</a>
        <a target="_blank" href="https://www.datcode.io">DATCODE</a>
        <a class="nav-sign-up" href="<?php echo url('/submit'); ?>">Submit</a>
	  </nav>
	  <nav id="site-nav-mobile" class="site-nav-mobile">
	  	<a id="menu-icon" href="javascript:void(0);" class="icon" onclick="toggleMenu()">
	        <i class="fas fa-bars"></i>
	      </a>
	  	<div id="site-nav-links" class="site-nav-links not-visible">
	  		<ul>
                <li><a href="https://hype.report">Hype Reports</a></li>
			    <li><a target="_blank" href="https://www.datcode.io">DATCODE</a></li>
						<li><a class="nav-sign-up" href="/submit">SUBMIT</a></li>
				</ul>
			</div>
	  </nav>
	</header>
