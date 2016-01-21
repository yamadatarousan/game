<h2>Viewing <span class='muted'>#<?php echo $m_dungeon->id; ?></span></h2>

<p>
	<strong>M dungeon id:</strong>
	<?php echo $m_dungeon->m_dungeon_id; ?></p>
<p>
	<strong>M dungeon set id:</strong>
	<?php echo $m_dungeon->m_dungeon_set_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $m_dungeon->name; ?></p>
<p>
	<strong>Flavor text:</strong>
	<?php echo $m_dungeon->flavor_text; ?></p>
<p>
	<strong>Floor:</strong>
	<?php echo $m_dungeon->floor; ?></p>

<?php echo Html::anchor('m/dungeon/edit/'.$m_dungeon->id, 'Edit'); ?> |
<?php echo Html::anchor('m/dungeon', 'Back'); ?>