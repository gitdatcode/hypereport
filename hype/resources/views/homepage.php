<h1>HOMEPAGE</h1>
<h3>Available month and years</h3>
<pre>
<?php
foreach($report_months as $m){
    echo $m->month .' -- '. $m->year .'<br>';
}
?>