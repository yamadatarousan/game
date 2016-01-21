<h2>Viewing <span class='muted'>#<?php echo $m_dungeon_event->id; ?></span></h2>

<p>
	<strong>M dungeon event id:</strong>
	<?php echo $m_dungeon_event->m_dungeon_event_id; ?></p>
<p>
	<strong>M dungeon event set id:</strong>
	<?php echo $m_dungeon_event->m_dungeon_event_set_id; ?></p>
<p>
	<strong>Event type:</strong>
	<?php echo $m_dungeon_event->event_type; ?></p>
<p>
	<strong>Weight:</strong>
	<?php echo $m_dungeon_event->weight; ?></p>

<?php echo Html::anchor('m/dungeon/event/edit/'.$m_dungeon_event->id, 'Edit'); ?> |
<?php echo Html::anchor('m/dungeon/event', 'Back'); ?>