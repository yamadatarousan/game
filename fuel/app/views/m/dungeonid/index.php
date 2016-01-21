<h2>Listing <span class='muted'>M_dungeonids</span></h2>
<br>
<?php if ($m_dungeonids): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M dungeon id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_dungeonids as $item): ?>		<tr>

			<td><?php echo $item->m_dungeon_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/dungeonid/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeonid/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/dungeonid/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_dungeonids.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/dungeonid/create', 'Add new M dungeonid', array('class' => 'btn btn-success')); ?>

</p>
