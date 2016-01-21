<h2>Listing <span class='muted'>M_battles</span></h2>
<br>
<?php if ($m_battles): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M battle id</th>
			<th>M enemy set id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_battles as $item): ?>		<tr>

			<td><?php echo $item->m_battle_id; ?></td>
			<td><?php echo $item->m_enemy_set_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/battle/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/battle/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/battle/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_battles.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/battle/create', 'Add new M battle', array('class' => 'btn btn-success')); ?>

</p>
