<h2>Viewing <span class='muted'>#<?php echo $m_dungeon_map->id; ?></span></h2>

<p>
	<strong>M dungeon map id:</strong>
	<?php echo $m_dungeon_map->m_dungeon_map_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $m_dungeon_map->name; ?></p>
<p>
	<strong>Flavor text:</strong>
	<?php echo $m_dungeon_map->flavor_text; ?></p>
<p>
	<strong>M dungeon map set id:</strong>
	<?php echo $m_dungeon_map->m_dungeon_map_set_id; ?></p>
<p>
	<strong>X:</strong>
	<?php echo $m_dungeon_map->x; ?></p>
<p>
	<strong>Y:</strong>
	<?php echo $m_dungeon_map->y; ?></p>
<p>
	<strong>Weight:</strong>
	<?php echo $m_dungeon_map->weight; ?></p>

<?php echo Html::anchor('m/dungeon/map/edit/'.$m_dungeon_map->id, 'Edit'); ?> |
<?php echo Html::anchor('m/dungeon/map', 'Back'); ?>