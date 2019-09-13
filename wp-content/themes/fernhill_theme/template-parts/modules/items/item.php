
<?php

foreach ($items as $item) {
    $item["acf_fc_layout"];
    switch ($item["acf_fc_layout"]) {
        case 'empty_space':
            include locate_template('/template-parts/modules/items/empty-space.php');
            break;

        case 'title':
            include locate_template('/template-parts/modules/items/title.php');
            break;

        case 'stained_text':
            include locate_template('/template-parts/modules/items/stained-text.php');
            break;

        case 'text_box':
            include locate_template('/template-parts/modules/items/text-box.php');
            break;

        case 'bottomless_button':
            include locate_template('/template-parts/modules/items/button.php');
            break;
    }
}

?>