<?php
    $mobile = null;
    $tablet = null;
    $desktop = null;
    foreach ($item["show"] as $value) {
        $mobile = ($value == "mobile" and (!$mobile)) ? "d-block " : $mobile;
        $tablet = ($value == "tablet" and (!$tablet)) ? "d-md-block " : $tablet;
        $desktop = ($value == "desktop" and (!$desktop)) ? "d-lg-block" : $desktop;
    }
    $show = (!$mobile) ? "d-none " : $mobile;
    $show .= (!$tablet) ? "d-md-none " : $tablet;
    $show .= (!$desktop) ? "d-lg-none" : $desktop;
?>
<div class="text-content last-margin-none <?php echo $show; ?>">
	<?php echo do_shortcode($item["text"]); ?>
</div>