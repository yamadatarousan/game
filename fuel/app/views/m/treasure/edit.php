<h2>Editing <span class='muted'>M_treasure</span></h2>
<br>

<?php echo render('m/treasure/_form'); ?>
<p>
	<?php echo Html::anchor('m/treasure/view/'.$m_treasure->id, 'View'); ?> |
	<?php echo Html::anchor('m/treasure', 'Back'); ?></p>
