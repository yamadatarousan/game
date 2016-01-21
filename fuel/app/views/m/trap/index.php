<h2>Listing <span class='muted'>M_traps</span></h2>
<br>
<?php if ($m_traps): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M trap id</th>
			<th>Trap type</th>
			<th>Effect rate</th>
			<th>Effect val</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_traps as $item): ?>		<tr>

			<td><?php echo $item->m_trap_id; ?></td>
			<td><?php echo $item->trap_type; ?></td>
			<td><?php echo $item->effect_rate; ?></td>
			<td><?php echo $item->effect_val; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/trap/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/trap/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/trap/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_traps.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/trap/create', 'Add new M trap', array('class' => 'btn btn-success')); ?>

</p>
