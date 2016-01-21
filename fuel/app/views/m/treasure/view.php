<h2>Viewing <span class='muted'>#<?php echo $m_treasure->id; ?></span></h2>

<p>
	<strong>M treasure id:</strong>
	<?php echo $m_treasure->m_treasure_id; ?></p>
<p>
	<strong>M treasure set id:</strong>
	<?php echo $m_treasure->m_treasure_set_id; ?></p>
<p>
	<strong>M item id:</strong>
	<?php echo $m_treasure->m_item_id; ?></p>
<p>
	<strong>Count:</strong>
	<?php echo $m_treasure->count; ?></p>

<?php echo Html::anchor('m/treasure/edit/'.$m_treasure->id, 'Edit'); ?> |
<?php echo Html::anchor('m/treasure', 'Back'); ?>