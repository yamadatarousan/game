<h2>Listing <span class='muted'>M_dungeon_event_treasures</span></h2>
<br>
<?php if ($m_dungeon_event_treasures): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M dungeon event treasure id</th>
			<th>M dungeon event set id</th>
			<th>M tresure set id</th>
			<th>Rate</th>
			<th>Weight</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_dungeon_event_treasures as $item): ?>		<tr>

			<td><?php echo $item->m_dungeon_event_treasure_id; ?></td>
			<td><?php echo $item->m_dungeon_event_set_id; ?></td>
			<td><?php echo $item->m_tresure_set_id; ?></td>
			<td><?php echo $item->rate; ?></td>
			<td><?php echo $item->weight; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/dungeon/event/treasure/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/event/treasure/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/event/treasure/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_dungeon_event_treasures.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/dungeon/event/treasure/create', 'Add new M dungeon event treasure', array('class' => 'btn btn-success')); ?>

</p>
