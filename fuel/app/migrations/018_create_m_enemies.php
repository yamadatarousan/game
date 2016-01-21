<?php

namespace Fuel\Migrations;

class Create_m_enemies
{
	public function up()
	{
		\DBUtil::create_table('m_enemies', array(
			'm_enemy_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'flavor_text' => array('constraint' => 255, 'type' => 'varchar'),
			'hp' => array('constraint' => 11, 'type' => 'int'),
			'mp' => array('constraint' => 11, 'type' => 'int'),
			'atk' => array('constraint' => 11, 'type' => 'int'),
			'def' => array('constraint' => 11, 'type' => 'int'),
			'spd' => array('constraint' => 11, 'type' => 'int'),
			'luck' => array('constraint' => 11, 'type' => 'int'),
			'm_skill_bundle_id' => array('constraint' => 11, 'type' => 'int'),
			'm_treasure_set_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_enemy_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_enemies');
	}
}