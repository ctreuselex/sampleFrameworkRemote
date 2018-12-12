<div class="grid">
	<div class="grid-title">
		<?php if($gridTitle) echo $gridTitle; ?>
	</div>

	<?php foreach($grid as $key => $g): ?>
		<div class="box <?=$gridCount?>">

			<div class="image" style="background-image: url(<?=$g['image']?>);">
				<i class="fas fa-play"></i>
			</div>

			<?php if($g['title'] != ''): ?>
				<div class="title"> <?=$g['title']?> </div>
			<?php endif ?>

			<?php if($g['desc'] != ''): ?>
				<div class="desc"> <?=$g['desc']?> </div>
			<?php endif ?>

		</div>
	<?php endforeach; ?>
</div>