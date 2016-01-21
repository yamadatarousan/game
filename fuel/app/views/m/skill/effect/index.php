<h2>Listing <span class='muted'>M_skill_effects</span></h2>
<br>
<?php if ($m_skill_effects): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M skill effect id</th>
			<th>M skill effect id</th>
			<th>Effect type</th>
			<th>Effect rate</th>
			<th>Effect val</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_skill_effects as $item): ?>		<tr>

			<td><?php echo $item->m_skill_effect_id; ?></td>
			<td><?php echo $item->m_skill_effect_id; ?></td>
			<td><?php echo $item->effect_type; ?></td>
			<td><?php echo $item->effect_rate; ?></td>
			<td><?php echo $item->effect_val; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/skill/effect/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/skill/effect/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/skill/effect/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_skill_effects.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/skill/effect/create', 'Add new M skill effect', array('class' => 'btn btn-success')); ?>

</p>
