<section class="background-transition-container module-two-columns" style="background-image: url(<?php echo $module["settings"]["background_image"]; ?>); background-color: <?php echo $module["settings"]["background_color"]; ?>;">
    <div class="background-hover" style="background-image: url(<?php echo $module["settings"]["background_image_hover"]; ?>);"></div>
    <div class="background-transition-content">
        <?php if($module['content']['header_text'] or $module['content']['title']): ?>
            <div class="top-bar">
                <div class="container-1218px">
                    <?php 
                        echo $module['content']['header_text'] ? "<h4>" . $module['content']['header_text'] . "</h4>" : "";
                        echo $module['content']['title'] ? "<h3>" . $module['content']['title'] . "</h3><div class='empty-space d-block d-md-none d-lg-none' style='height: 3px;'></div>" : "<div style='height: 6px;'></div>";
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="content">
            <div class="container-1218px">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?php
                            if ($module["content"]["first_column"]) {
                                $items = $module["content"]["first_column"];
                                include locate_template('/template-parts/modules/items/item.php');
                            }
                        ?>
                    </div>
                    <div class="col-12 col-md-6 col-right">
                        <?php
                            if ($module["content"]["second_column"]) {
                                $items = $module["content"]["second_column"];
                                include locate_template('/template-parts/modules/items/item.php');
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>