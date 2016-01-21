<h2>Viewing <span class='muted'>#<?php echo $m_skill->id; ?></span></h2>

<p>
	<strong>M skill id:</strong>
	<?php echo $m_skill->m_skill_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $m_skill->name; ?></p>
<p>
	<strong>Flavor text:</strong>
	<?php echo $m_skill->flavor_text; ?></p>
<p>
	<strong>M skill effect id:</strong>
	<?php echo $m_skill->m_skill_effect_id; ?></p>

<?php echo Html::anchor('m/skill/edit/'.$m_skill->id, 'Edit'); ?> |
<?php echo Html::anchor('m/skill', 'Back'); ?>