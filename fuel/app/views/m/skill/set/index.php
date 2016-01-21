<h2>Listing <span class='muted'>M_skill_sets</span></h2>
<br>
<?php if ($m_skill_sets): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M skill set id</th>
			<th>M skill bundle id</th>
			<th>M skill id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_skill_sets as $item): ?>		<tr>

			<td><?php echo $item->m_skill_set_id; ?></td>
			<td><?php echo $item->m_skill_bundle_id; ?></td>
			<td><?php echo $item->m_skill_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/skill/set/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/skill/set/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/skill/set/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_skill_sets.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/skill/set/create', 'Add new M skill set', array('class' => 'btn btn-success')); ?>

</p>
