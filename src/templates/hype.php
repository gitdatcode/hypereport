<?php
$count = sprintf("%02d", $this->get('count', 0));
$report = $this->get('report');
$scheme = $this->get('scheme');
?>
<section class="jumbotron report" id="report_<?php echo sprintf("%02d", $count); ?>">
    <style>
         #report_<?php echo $count; ?> {
             background-image:url(/images/<?php echo $report['icon']; ?>_svg.php?fillColor=<?php echo $scheme['foreground']; ?>);
             background-color: #<?php echo $scheme['background']; ?>;
         }
         #report_<?php echo $count; ?> h1, 
         #report_<?php echo $count; ?> aside h3 {
            color: #<?php echo $scheme['highlight']; ?>;
         }
         #report_<?php echo $count; ?> article {
            border-bottom: 1px solid #<?php echo $scheme['highlight']; ?>;
        }
    </style>
    <div>
        <article>
            <h2><?php echo $count; ?></h2>
            <h1 class="display-4"><?php echo $report['firstName'] . ' ' . $report['lastInitial'] . '.'; ?></h1>
            <p class="lead"><?php echo $report['text']; ?></p>
            <a
                class="btn btn-primary btn-lg"
                href="https://twitter.com/home?status=Check%20out%20<?php echo $report['firstName']; ?>'s%202018%20Hype%20Report!%3A%20https%3A//hype.report%23report_<?php echo sprintf("%02d", $count); ?>" role="button">
                Hype This
            </a>
        </article>
        <?php if (!empty($report['moreHype'])): ?>
        <aside>
          <h3>More Hype</h3>
          <p><?php echo $report['moreHype']; ?></p>  
        </aside>
        <?php endif; ?>
    </div>
</section>