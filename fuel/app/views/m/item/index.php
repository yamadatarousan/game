<h2>Listing <span class='muted'>M_items</span></h2>
<br>
<?php if ($m_items): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M item id</th>
			<th>Item type</th>
			<th>Name</th>
			<th>Flavor text</th>
			<th>M item effect id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_items as $item): ?>		<tr>

			<td><?php echo $item->m_item_id; ?></td>
			<td><?php echo $item->item_type; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->flavor_text; ?></td>
			<td><?php echo $item->m_item_effect_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/item/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/item/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/item/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_items.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/item/create', 'Add new M item', array('class' => 'btn btn-success')); ?>

</p>
