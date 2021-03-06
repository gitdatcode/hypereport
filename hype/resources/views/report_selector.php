<?php
/**
 * this file takes the $report_months and builds a dropdown from it
 */
?>
<div id="month_selector">
<div class="selector">
    <select class="month_selector">
        <?php if(!$current_month_year): ?> 
            <option selected="selected" value='default'>Select a month...</option>
        <?php
        else:
        ?>
            <option value='default'>Select a month...</option>
        <?php
        endif;
        
        foreach($report_months as $rm):
            $month = $rm->month;
            $year = $rm->year;

            if($month > 0){
                $value = sprintf('/%s/%s', $year, $month);
                $date = sprintf('%s %s', $months[$month], $year);
            }else{
                $value = sprintf('/%s', $year);
                $date = $year;
            }

            $selected = '';

        if($current_month_year){
            if($month == $current_month_year->month && $year == $current_month_year->year){
                $selected = 'selected="selected"';
            }
        }
    ?>
        <option value="<?php echo $value; ?>" <?php echo $selected; ?>><?php echo $date; ?></option>
    <?php
    endforeach;
    ?>
</select>
</div>
</div>