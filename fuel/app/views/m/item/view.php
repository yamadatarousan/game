<h2>Viewing <span class='muted'>#<?php echo $m_item->id; ?></span></h2>

<p>
	<strong>M item id:</strong>
	<?php echo $m_item->m_item_id; ?></p>
<p>
	<strong>Item type:</strong>
	<?php echo $m_item->item_type; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $m_item->name; ?></p>
<p>
	<strong>Flavor text:</strong>
	<?php echo $m_item->flavor_text; ?></p>
<p>
	<strong>M item effect id:</strong>
	<?php echo $m_item->m_item_effect_id; ?></p>

<?php echo Html::anchor('m/item/edit/'.$m_item->id, 'Edit'); ?> |
<?php echo Html::anchor('m/item', 'Back'); ?>