<h2>Viewing <span class='muted'>#<?php echo $m_skill_set->id; ?></span></h2>

<p>
	<strong>M skill set id:</strong>
	<?php echo $m_skill_set->m_skill_set_id; ?></p>
<p>
	<strong>M skill bundle id:</strong>
	<?php echo $m_skill_set->m_skill_bundle_id; ?></p>
<p>
	<strong>M skill id:</strong>
	<?php echo $m_skill_set->m_skill_id; ?></p>

<?php echo Html::anchor('m/skill/set/edit/'.$m_skill_set->id, 'Edit'); ?> |
<?php echo Html::anchor('m/skill/set', 'Back'); ?>