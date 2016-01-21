<h2>Viewing <span class='muted'>#<?php echo $m_dungeonid->id; ?></span></h2>

<p>
	<strong>M dungeon id:</strong>
	<?php echo $m_dungeonid->m_dungeon_id; ?></p>

<?php echo Html::anchor('m/dungeonid/edit/'.$m_dungeonid->id, 'Edit'); ?> |
<?php echo Html::anchor('m/dungeonid', 'Back'); ?>