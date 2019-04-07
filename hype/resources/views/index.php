<h1>Default template</h1>
<h2>Year</h2>
<?php echo $year; ?>
<h2>Month</h2>
<?php echo $month; ?>
<h2>Reports</h2>
<pre>
    <?php
    foreach($reports as $r){
        var_dump($r->toArray());
    }
    ?>
</pre>