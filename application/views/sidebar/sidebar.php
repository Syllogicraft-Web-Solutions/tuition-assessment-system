<?php
	// var_dump($links);
?>

<div id="sidebar" class="w3-sidebar w3-bar-block w3-black <?= isset($options['text_align']) != '' ? 'w3-' . $options['text_align'] : '' ?>" style="width: <?= $options['width'] ?>">
	<?php 
		if (sizeof($links) > 0) {
			foreach ($links as $key => $value) {
				$url = $value['url'] != '' ? $value['url'] : '';
				$icon = $value['icon'] != '' ? $value['icon'] : '';
				$text = $value['text'] != '' ? $value['text'] : '';
			?>
				<a href="<?= "{$url}" ?>" class="w3-bar-item w3-button"><i class="fa <?= $icon ?> "></i>&nbsp;<?= "{$text}" ?></a>
			<?php
			}
		} else {
	?>
	<a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
	<a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
	<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
	<a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
	<?php
		}
	?>
</div>