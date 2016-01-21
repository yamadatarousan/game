<h2>Listing <span class='muted'>M_dungeon_maps</span></h2>
<br>
<?php if ($m_dungeon_maps): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M dungeon map id</th>
			<th>Name</th>
			<th>Flavor text</th>
			<th>M dungeon map set id</th>
			<th>X</th>
			<th>Y</th>
			<th>Weight</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_dungeon_maps as $item): ?>		<tr>

			<td><?php echo $item->m_dungeon_map_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->flavor_text; ?></td>
			<td><?php echo $item->m_dungeon_map_set_id; ?></td>
			<td><?php echo $item->x; ?></td>
			<td><?php echo $item->y; ?></td>
			<td><?php echo $item->weight; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/dungeon/map/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/map/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/map/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_dungeon_maps.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/dungeon/map/create', 'Add new M dungeon map', array('class' => 'btn btn-success')); ?>

</p>
