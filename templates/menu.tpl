<ul id="nav">
<?php foreach ($this->menu as $label=>$item): ?>
	<?php if(is_array($item)): ?>
		<li>
		<a><?=$label?></a>
		<ul>
		<?php foreach ($item as $l=>$i): ?>
			<?php if(strpos($i, "http") !== false): ?>
				<li><a target="_blank" href="<?=$i?>"><?=$l?></a></li>
			<?php else: ?>
				<li><a href="<?=$i?>"><?=$l?></a></li>
			<?php endif; ?>

		<?php endforeach; ?>
		</ul>
		</li>
	<?php else: ?>
		<?php if(strpos($item, "http") !== false): ?>
			<li><a target="_blank" href="<?=$item?>"><?=$label?></a></li>
		<?php else: ?>
			<li><a href="<?=$item?>"><?=$label?></a></li>
		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; ?>
</ul>

