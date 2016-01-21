<h2>Listing <span class='muted'>M_dungeon_floors</span></h2>
<br>
<?php if ($m_dungeon_floors): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M dungeon floor id</th>
			<th>Name</th>
			<th>Flavor text</th>
			<th>M dungeon set id</th>
			<th>Low</th>
			<th>High</th>
			<th>M dungeon map set id</th>
			<th>M dungeon event set id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_dungeon_floors as $item): ?>		<tr>

			<td><?php echo $item->m_dungeon_floor_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->flavor_text; ?></td>
			<td><?php echo $item->m_dungeon_set_id; ?></td>
			<td><?php echo $item->low; ?></td>
			<td><?php echo $item->high; ?></td>
			<td><?php echo $item->m_dungeon_map_set_id; ?></td>
			<td><?php echo $item->m_dungeon_event_set_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/dungeon/floor/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/floor/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/floor/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_dungeon_floors.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/dungeon/floor/create', 'Add new M dungeon floor', array('class' => 'btn btn-success')); ?>

</p>
