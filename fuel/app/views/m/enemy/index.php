<h2>Listing <span class='muted'>M_enemies</span></h2>
<br>
<?php if ($m_enemies): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M enemy id</th>
			<th>Name</th>
			<th>Flavor text</th>
			<th>Hp</th>
			<th>Mp</th>
			<th>Atk</th>
			<th>Def</th>
			<th>Spd</th>
			<th>Luck</th>
			<th>M skill bundle id</th>
			<th>M treasure set id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_enemies as $item): ?>		<tr>

			<td><?php echo $item->m_enemy_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->flavor_text; ?></td>
			<td><?php echo $item->hp; ?></td>
			<td><?php echo $item->mp; ?></td>
			<td><?php echo $item->atk; ?></td>
			<td><?php echo $item->def; ?></td>
			<td><?php echo $item->spd; ?></td>
			<td><?php echo $item->luck; ?></td>
			<td><?php echo $item->m_skill_bundle_id; ?></td>
			<td><?php echo $item->m_treasure_set_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/enemy/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/enemy/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/enemy/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_enemies.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/enemy/create', 'Add new M enemy', array('class' => 'btn btn-success')); ?>

</p>
