<h2>Viewing <span class='muted'>#<?php echo $m_battle->id; ?></span></h2>

<p>
	<strong>M battle id:</strong>
	<?php echo $m_battle->m_battle_id; ?></p>
<p>
	<strong>M enemy set id:</strong>
	<?php echo $m_battle->m_enemy_set_id; ?></p>

<?php echo Html::anchor('m/battle/edit/'.$m_battle->id, 'Edit'); ?> |
<?php echo Html::anchor('m/battle', 'Back'); ?>