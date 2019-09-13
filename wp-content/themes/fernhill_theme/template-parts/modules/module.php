
<?php

$home_url = home_url();
$builder = get_field("builder");

foreach ($builder as $module) {
    $module["acf_fc_layout"];
    switch ($module["acf_fc_layout"]) {
        case 'hero':
            include locate_template('/template-parts/modules/module-hero.php');
            break;

        case 'module_two':
            include locate_template('/template-parts/modules/module-two.php');
            break;
        
        case 'joined_sections':
            include locate_template('/template-parts/modules/module-joined-sections.php');
            break;
    }
}

?>