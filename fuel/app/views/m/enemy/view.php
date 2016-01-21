<h2>Viewing <span class='muted'>#<?php echo $m_enemy->id; ?></span></h2>

<p>
	<strong>M enemy id:</strong>
	<?php echo $m_enemy->m_enemy_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $m_enemy->name; ?></p>
<p>
	<strong>Flavor text:</strong>
	<?php echo $m_enemy->flavor_text; ?></p>
<p>
	<strong>Hp:</strong>
	<?php echo $m_enemy->hp; ?></p>
<p>
	<strong>Mp:</strong>
	<?php echo $m_enemy->mp; ?></p>
<p>
	<strong>Atk:</strong>
	<?php echo $m_enemy->atk; ?></p>
<p>
	<strong>Def:</strong>
	<?php echo $m_enemy->def; ?></p>
<p>
	<strong>Spd:</strong>
	<?php echo $m_enemy->spd; ?></p>
<p>
	<strong>Luck:</strong>
	<?php echo $m_enemy->luck; ?></p>
<p>
	<strong>M skill bundle id:</strong>
	<?php echo $m_enemy->m_skill_bundle_id; ?></p>
<p>
	<strong>M treasure set id:</strong>
	<?php echo $m_enemy->m_treasure_set_id; ?></p>

<?php echo Html::anchor('m/enemy/edit/'.$m_enemy->id, 'Edit'); ?> |
<?php echo Html::anchor('m/enemy', 'Back'); ?>