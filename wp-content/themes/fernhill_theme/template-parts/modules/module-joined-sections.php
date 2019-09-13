<section class="joined-sections">
    <div style="background-image: url(<?php echo $module["settings"]["first_section"]["background_image"];?>); background-color: <?php echo $module["settings"]["first_section"]["background_color"];?>;">
        <div class="max-598">
            <?php
                if ($module["content"]["first_section"]) {
                    $items = $module["content"]["first_section"];
                    include locate_template('/template-parts/modules/items/item.php');
                }
            ?>
        </div>
        <?php if ($module["content"]["center_image"]) { ?>
            <?php $percentage = (($module["content"]["center_image"]["height"]*100)/$module["content"]["center_image"]["width"])/2; ?>
            <div class="max-1000">
                <div class="section-union" style="width: <?php echo $module["content"]["center_image"]["height"]; ?>px;">
                    <img src="<?php echo $module["content"]["center_image"]["url"]; ?>" alt="<?php echo $module["content"]["center_image"]["alt"]; ?>" />
                    <div style="padding-bottom: <?php echo $percentage; ?>%;"></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div style="background-image: url(<?php echo $module["settings"]["second_section"]["background_image"];?>); background-color: <?php echo $module["settings"]["second_section"]["background_color"];?>;">
        <?php if ($module["content"]["center_image"]) { ?>
            <div class="max-1000">
                <div class="section-union" style="width: <?php echo $module["content"]["center_image"]["height"]; ?>px;">
                    <div style="padding-bottom: <?php echo $percentage; ?>%;"></div>
                </div>
            </div>
        <?php } ?>
        <div class="max-598">
            <?php
                if ($module["content"]["second_section"]) {
                    $items = $module["content"]["second_section"];
                    include locate_template('/template-parts/modules/items/item.php');
                }
            ?>
        </div>
    </div>
</section>