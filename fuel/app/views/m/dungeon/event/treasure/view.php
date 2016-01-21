<h2>Viewing <span class='muted'>#<?php echo $m_dungeon_event_treasure->id; ?></span></h2>

<p>
	<strong>M dungeon event treasure id:</strong>
	<?php echo $m_dungeon_event_treasure->m_dungeon_event_treasure_id; ?></p>
<p>
	<strong>M dungeon event set id:</strong>
	<?php echo $m_dungeon_event_treasure->m_dungeon_event_set_id; ?></p>
<p>
	<strong>M tresure set id:</strong>
	<?php echo $m_dungeon_event_treasure->m_tresure_set_id; ?></p>
<p>
	<strong>Rate:</strong>
	<?php echo $m_dungeon_event_treasure->rate; ?></p>
<p>
	<strong>Weight:</strong>
	<?php echo $m_dungeon_event_treasure->weight; ?></p>

<?php echo Html::anchor('m/dungeon/event/treasure/edit/'.$m_dungeon_event_treasure->id, 'Edit'); ?> |
<?php echo Html::anchor('m/dungeon/event/treasure', 'Back'); ?>