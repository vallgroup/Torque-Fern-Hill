<section class="module-hero" style="background-image: url(<?php echo $module['settings']['background_image']; ?>); background-color: <?php echo $module['settings']['background_color']; ?>;">
	<?php if( !empty($module['content']['image']) ): ?>
		<div class="img-content">
			<img src="<?php echo $module['content']['image']['url']; ?>" alt="<?php echo $module['content']['image']['alt']; ?>" />
		</div>
	<?php endif; ?>
	<?php if($module['content']['title']): ?>
		<div class="title-content">
			<h1><?php echo $module['content']['title']; ?></h1>
			<?php if($module['content']['show_arrow']): ?>
				<img class="d-none d-md-block" src="<?php echo $home_url; ?>/wp-content/themes/fernhill_theme/img/arrow-bottom.png" alt="arrow-bottom" />
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if($module['content']['text']): ?>
		<div class="text-content last-margin-none">
			<?php echo $module['content']['text']; ?>
		</div>
	<?php endif; ?>
</section>