<h2>Listing <span class='muted'>M_item_effects</span></h2>
<br>
<?php if ($m_item_effects): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>M item effect id</th>
			<th>Effect type</th>
			<th>Hp</th>
			<th>Mp</th>
			<th>Atk</th>
			<th>Def</th>
			<th>Spd</th>
			<th>Luck</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($m_item_effects as $item): ?>		<tr>

			<td><?php echo $item->m_item_effect_id; ?></td>
			<td><?php echo $item->effect_type; ?></td>
			<td><?php echo $item->hp; ?></td>
			<td><?php echo $item->mp; ?></td>
			<td><?php echo $item->atk; ?></td>
			<td><?php echo $item->def; ?></td>
			<td><?php echo $item->spd; ?></td>
			<td><?php echo $item->luck; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('m/item/effect/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/item/effect/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('m/item/effect/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No M_item_effects.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('m/item/effect/create', 'Add new M item effect', array('class' => 'btn btn-success')); ?>

</p>
