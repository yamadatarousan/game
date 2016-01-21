<h2>Listing <span class='muted'>M_dungeon_event_battles</span></h2>
<br>
<?php if ($m_dungeon_event_battles): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M dungeon event battle id</th>
			<th>M dungeon event set id</th>
			<th>M battle id</th>
			<th>Weight</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_dungeon_event_battles as $item): ?>		<tr>

			<td><?php echo $item->m_dungeon_event_battle_id; ?></td>
			<td><?php echo $item->m_dungeon_event_set_id; ?></td>
			<td><?php echo $item->m_battle_id; ?></td>
			<td><?php echo $item->weight; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/dungeon/event/battle/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/event/battle/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeon/event/battle/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_dungeon_event_battles.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/dungeon/event/battle/create', 'Add new M dungeon event battle', array('class' => 'btn btn-success')); ?>

</p>
