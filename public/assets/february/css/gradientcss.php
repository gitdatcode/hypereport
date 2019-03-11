<?php

function getGradient()
{
    $gradients = include config('basePath') . '/public/assets/february/gradients.php';
    return $gradients[rand(0,count($gradients)-1)];
}
?>
<style>
    .menu__item::before {
        content: '';
        width: 60%;
        height: 25px;
        background: linear-gradient(45deg, #f19872, #e86c9a);
        position: absolute;
        left: 0;
        bottom: 0;
        transform-origin: 0 0;
        transform: scale3d(0,1,1);
    }
<?php foreach ($reports as $report): $gradients = getGradient(); ?>    .menu__item:nth-child(<?php echo $report['id']; ?>)::before {
        background: linear-gradient(45deg, <?php echo $gradients['start']; ?>, <?php echo $gradients['end']; ?>);
    }

    <?php endforeach; ?>
</style>
