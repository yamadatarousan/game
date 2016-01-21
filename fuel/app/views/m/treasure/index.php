<h2>Listing <span class='muted'>M_treasures</span></h2>
<br>
<?php if ($m_treasures): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M treasure id</th>
			<th>M treasure set id</th>
			<th>M item id</th>
			<th>Count</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_treasures as $item): ?>		<tr>

			<td><?php echo $item->m_treasure_id; ?></td>
			<td><?php echo $item->m_treasure_set_id; ?></td>
			<td><?php echo $item->m_item_id; ?></td>
			<td><?php echo $item->count; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/treasure/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/treasure/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/treasure/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_treasures.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/treasure/create', 'Add new M treasure', array('class' => 'btn btn-success')); ?>

</p>
