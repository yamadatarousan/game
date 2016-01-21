<?php

namespace Fuel\Migrations;

class Create_m_item_effects
{
	public function up()
	{
		\DBUtil::create_table('m_item_effects', array(
			'm_item_effect_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'effect_type' => array('constraint' => 255, 'type' => 'varchar'),
			'hp' => array('constraint' => 11, 'type' => 'int'),
			'mp' => array('constraint' => 11, 'type' => 'int'),
			'atk' => array('constraint' => 11, 'type' => 'int'),
			'def' => array('constraint' => 11, 'type' => 'int'),
			'spd' => array('constraint' => 11, 'type' => 'int'),
			'luck' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_item_effect_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_item_effects');
	}
}