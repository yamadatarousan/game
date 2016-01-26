<h2>Viewing <span class='muted'>#<?php echo $m_dungeon_event_trap->id; ?></span></h2>

<p>
	<strong>M dungeon event trap id:</strong>
	<?php echo $m_dungeon_event_trap->m_dungeon_event_trap_id; ?></p>
<p>
	<strong>M dungeon event set id:</strong>
	<?php echo $m_dungeon_event_trap->m_dungeon_event_set_id; ?></p>
<p>
	<strong>M trap id:</strong>
	<?php echo $m_dungeon_event_trap->m_trap_id; ?></p>
<p>
	<strong>Weight:</strong>
	<?php echo $m_dungeon_event_trap->weight; ?></p>

<?php echo Html::anchor('m/dungeon/event/trap/edit/'.$m_dungeon_event_trap->id, 'Edit'); ?> |
<?php echo Html::anchor('m/dungeon/event/trap', 'Back'); ?>