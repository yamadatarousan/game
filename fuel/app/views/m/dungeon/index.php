<h2>Listing <span class='muted'>M_dungeons</span></h2>
<br>
<?php if ($m_dungeons): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M dungeon id</th>
			<th>M dungeon set id</th>
			<th>Name</th>
			<th>Flavor text</th>
			<th>Floor</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_dungeons as $item): ?>		<tr>

			<td><?php echo $item->m_dungeon_id; ?></td>
			<td><?php echo $item->m_dungeon_set_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->flavor_text; ?></td>
			<td><?php echo $item->floor; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/dungeon/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_dungeons.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/dungeon/create', 'Add new M dungeon', array('class' => 'btn btn-success')); ?>

</p>
