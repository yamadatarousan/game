<h2>Editing <span class='muted'>M_item</span></h2>
<br>

<?php echo render('m/item/_form'); ?>
<p>
	<?php echo Html::anchor('m/item/view/'.$m_item->id, 'View'); ?> |
	<?php echo Html::anchor('m/item', 'Back'); ?></p>
