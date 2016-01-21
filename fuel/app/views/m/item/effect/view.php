<h2>Viewing <span class='muted'>#<?php echo $m_item_effect->id; ?></span></h2>

<p>
	<strong>M item effect id:</strong>
	<?php echo $m_item_effect->m_item_effect_id; ?></p>
<p>
	<strong>Effect type:</strong>
	<?php echo $m_item_effect->effect_type; ?></p>
<p>
	<strong>Hp:</strong>
	<?php echo $m_item_effect->hp; ?></p>
<p>
	<strong>Mp:</strong>
	<?php echo $m_item_effect->mp; ?></p>
<p>
	<strong>Atk:</strong>
	<?php echo $m_item_effect->atk; ?></p>
<p>
	<strong>Def:</strong>
	<?php echo $m_item_effect->def; ?></p>
<p>
	<strong>Spd:</strong>
	<?php echo $m_item_effect->spd; ?></p>
<p>
	<strong>Luck:</strong>
	<?php echo $m_item_effect->luck; ?></p>

<?php echo Html::anchor('m/item/effect/edit/'.$m_item_effect->id, 'Edit'); ?> |
<?php echo Html::anchor('m/item/effect', 'Back'); ?>