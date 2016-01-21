<h2>Viewing <span class='muted'>#<?php echo $m_dungeon_floor->id; ?></span></h2>

<p>
	<strong>M dungeon floor id:</strong>
	<?php echo $m_dungeon_floor->m_dungeon_floor_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $m_dungeon_floor->name; ?></p>
<p>
	<strong>Flavor text:</strong>
	<?php echo $m_dungeon_floor->flavor_text; ?></p>
<p>
	<strong>M dungeon set id:</strong>
	<?php echo $m_dungeon_floor->m_dungeon_set_id; ?></p>
<p>
	<strong>Low:</strong>
	<?php echo $m_dungeon_floor->low; ?></p>
<p>
	<strong>High:</strong>
	<?php echo $m_dungeon_floor->high; ?></p>
<p>
	<strong>M dungeon map set id:</strong>
	<?php echo $m_dungeon_floor->m_dungeon_map_set_id; ?></p>
<p>
	<strong>M dungeon event set id:</strong>
	<?php echo $m_dungeon_floor->m_dungeon_event_set_id; ?></p>

<?php echo Html::anchor('m/dungeon/floor/edit/'.$m_dungeon_floor->id, 'Edit'); ?> |
<?php echo Html::anchor('m/dungeon/floor', 'Back'); ?>