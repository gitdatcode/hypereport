<php $count = sprintf("%02d", $count); ?>
<section class="jumbotron report" id="report_<?php echo $count; ?>">
    <style>
    <?php list($r, $g, $b) = sscanf("#{$scheme['highlight']}", "#%02x%02x%02x"); ?>
         #report_<?php echo $count; ?> {
             background-image:url(/theme/year/2018/images/<?php echo $report->image_1; ?>_svg.php?fillColor=<?php echo $scheme['foreground']; ?>);
             background-color: #<?php echo $scheme['background']; ?>;
         }
         #report_<?php echo $count; ?> h1, 
         #report_<?php echo $count; ?> aside h3 {
            color: #<?php echo $scheme['highlight']; ?>;
         }
         #report_<?php echo $count; ?> article {
            border-bottom: 1px solid #<?php echo $scheme['highlight']; ?>;
        }
         #report_<?php echo $count; ?> .hypebtn {
            background-color: rgba(<?php echo "$r, $g, $b"; ?>, 0.7);
            color: #ffffff;
            font-family: "Gilmer-Heavy", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
        }
         #report_<?php echo $count; ?> .hypebtn:hover {
            background-color: #<?php echo $scheme['highlight']; ?>;
            border: 1px solid #<?php echo $scheme['highlight']; ?>;
         }
    </style>
    <div>
        <article>
            <h2><?php echo $count; ?></h2>
            <h1 class="display-4"><?php echo $report->username; ?></h1>
            <p class="lead"><?php echo $report->description; ?></p>
            <a
                class="hypebtn btn btn-lg"
                target="_blank"
                href="https://twitter.com/home?status=Check%20out%20<?php echo $report['firstName']; ?>'s%202018%20Hype%20Report!%3A%20https%3A//hype.report%23report_<?php echo sprintf("%02d", $count); ?>" role="button">
                Hype This
            </a>
        </article>
        <?php if (!empty($report->description2)): ?>
        <aside>
          <h3>More Hype</h3>
          <p><?php echo $report->description_2; ?></p>  
        </aside>
        <?php endif; ?>
    </div>
</section>