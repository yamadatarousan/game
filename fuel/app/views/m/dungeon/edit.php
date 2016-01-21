<h2>Editing <span class='muted'>M_dungeon</span></h2>
<br>

<?php echo render('m/dungeon/_form'); ?>
<p>
	<?php echo Html::anchor('m/dungeon/view/'.$m_dungeon->id, 'View'); ?> |
	<?php echo Html::anchor('m/dungeon', 'Back'); ?></p>
