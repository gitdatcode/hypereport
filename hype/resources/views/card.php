<?php
// get the names of the previous and next user
if($index == 0){
    $previous_name = $reports[count($reports) - 1]->username;
    $next_name = $reports[$index + 1]->username;
    $previous_id = $reports[count($reports) - 1]->getUrlSlug();
    $next_id = $reports[$index + 1]->getUrlSlug();
}else if($index == count($reports) - 1){
    $previous_name = $reports[$index - 1]->username;
    $next_name = $reports[0]->username;
    $previous_id = $reports[$index - 1]->getUrlSlug();
    $next_id = $reports[0]->getUrlSlug();
}else{
    $previous_name = $reports[$index - 1]->username;
    $next_name = $reports[$index + 1]->username;
    $previous_id = $reports[$index - 1]->id;
    $next_id = $reports[$index + 1]->getUrlSlug();
}

$card_id = $report->getUrlSlug();

//write the hype text and the actual previous next hrefs
if($current_month_year){
    $hype_url = sprintf('https://hype.report/%s/%s#%s', $current_month_year->year, $current_month_year->month, $card_id);
    $previous_href = sprintf('/%s/%s#%s', $current_month_year->year, $current_month_year->month, $previous_id);
    $next_href = sprintf('/%s/%s#%s', $current_month_year->year, $current_month_year->month, $next_id);
}else{
    $hype_url = sprintf('https://hype.report/%s#%s', $current_year, $card_id);
    $previous_href = sprintf('/%s#%s', $current_year, $previous_id);
    $next_href = sprintf('/%s#%s', $current_year, $next_id);
}

$message = sprintf("Check out %s's %s Hype Report! %s", $report->username, $current_month, $hype_url);
$twitter = sprintf("https://twitter.com/intent/tweet?text=%s", urlencode($message));
$card_title = $report->description2 ? sprintf('title="%s', $report->description2) : '';
?>

<section id="<?php echo $card_id; ?>" class="card">
    <a href="#" class="close-card"><img src="/theme/year_month/assets/images/close.png" alt="Next" /></a>
    <a href="<?php echo $previous_href; ?>" class="previous-card"><img src="/theme/year_month/assets/images/arrow_prev.png" alt="Previous" /></a>
    <h2 class="card_title"><?php echo $report->username; ?></h2>
    <p class="card_text">
        <?php
        echo nl2br($report->description);

        // show the second description if it exists
        if($report->description2):
        ?>
            </p>
            <hr />
            <p class="card_text">
        <?php
            echo nl2br($report->description2);
        endif;
        ?>
    </p>

    <?php
    // do not show the share button if the user chooses not to
    if($report->share):
    ?>
        <a href="<?php echo $twitter;?>" class="hype_this"><div class="card_button">hype this!</div></a>
    <?php
    endif;
    ?>

    <a href="<?php echo $next_href; ?>" class="next-card"><img src="/theme/year_month/assets/images/arrow_next.png" alt="Next" /></a>
</section>