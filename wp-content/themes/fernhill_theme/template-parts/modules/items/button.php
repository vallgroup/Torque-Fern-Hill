<?php
if( $item['button'] ): 
	$link_url = $item['button']['url'];
	$link_title = $item['button']['title'];
	$link_target = $item['button']['target'] ? $item['button']['target'] : '_self';
	?>
	<div class="buttom-content">
		<a class="bottomless-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><img src="<?php echo $home_url; ?>/wp-content/themes/fernhill_theme/img/arrow.png" alt="arrow" /> <?php echo esc_html($link_title); ?></a>
	</div>
<?php endif; ?>
