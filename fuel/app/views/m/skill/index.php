<h2>Listing <span class='muted'>M_skills</span></h2>
<br>
<?php if ($m_skills): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M skill id</th>
			<th>Name</th>
			<th>Flavor text</th>
			<th>M skill effect id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_skills as $item): ?>		<tr>

			<td><?php echo $item->m_skill_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->flavor_text; ?></td>
			<td><?php echo $item->m_skill_effect_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/skill/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/skill/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/skill/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_skills.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/skill/create', 'Add new M skill', array('class' => 'btn btn-success')); ?>

</p>
