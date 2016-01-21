<h2>Viewing <span class='muted'>#<?php echo $m_dungeon_event_battle->id; ?></span></h2>

<p>
	<strong>M dungeon event battle id:</strong>
	<?php echo $m_dungeon_event_battle->m_dungeon_event_battle_id; ?></p>
<p>
	<strong>M dungeon event set id:</strong>
	<?php echo $m_dungeon_event_battle->m_dungeon_event_set_id; ?></p>
<p>
	<strong>M battle id:</strong>
	<?php echo $m_dungeon_event_battle->m_battle_id; ?></p>
<p>
	<strong>Weight:</strong>
	<?php echo $m_dungeon_event_battle->weight; ?></p>

<?php echo Html::anchor('m/dungeon/event/battle/edit/'.$m_dungeon_event_battle->id, 'Edit'); ?> |
<?php echo Html::anchor('m/dungeon/event/battle', 'Back'); ?>