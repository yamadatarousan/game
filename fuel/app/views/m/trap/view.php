<h2>Viewing <span class='muted'>#<?php echo $m_trap->id; ?></span></h2>

<p>
	<strong>M trap id:</strong>
	<?php echo $m_trap->m_trap_id; ?></p>
<p>
	<strong>Trap type:</strong>
	<?php echo $m_trap->trap_type; ?></p>
<p>
	<strong>Effect rate:</strong>
	<?php echo $m_trap->effect_rate; ?></p>
<p>
	<strong>Effect val:</strong>
	<?php echo $m_trap->effect_val; ?></p>

<?php echo Html::anchor('m/trap/edit/'.$m_trap->id, 'Edit'); ?> |
<?php echo Html::anchor('m/trap', 'Back'); ?>