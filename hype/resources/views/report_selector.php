<?php
/**
 * this file takes the $report_months and builds a dropdown from it
 */
?>
<select class="month_selector">
    <?php
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

        if($month == $current_month_year->month && $year == $current_month_year->year){
            $selected = 'selected="selected"';
        }
    ?>
        <option value="<?php echo $value; ?>" <?php echo $selected; ?>><?php echo $date; ?></option>
    <?php
    endforeach;
    ?>
</select>