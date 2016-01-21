<h2>Viewing <span class='muted'>#<?php echo $m_skill_effect->id; ?></span></h2>

<p>
	<strong>M skill effect id:</strong>
	<?php echo $m_skill_effect->m_skill_effect_id; ?></p>
<p>
	<strong>M skill effect id:</strong>
	<?php echo $m_skill_effect->m_skill_effect_id; ?></p>
<p>
	<strong>Effect type:</strong>
	<?php echo $m_skill_effect->effect_type; ?></p>
<p>
	<strong>Effect rate:</strong>
	<?php echo $m_skill_effect->effect_rate; ?></p>
<p>
	<strong>Effect val:</strong>
	<?php echo $m_skill_effect->effect_val; ?></p>

<?php echo Html::anchor('m/skill/effect/edit/'.$m_skill_effect->id, 'Edit'); ?> |
<?php echo Html::anchor('m/skill/effect', 'Back'); ?>