<?php

namespace Fuel\Migrations;

class Create_m_skill_effects
{
	public function up()
	{
		\DBUtil::create_table('m_skill_effects', array(
			'm_skill_effect_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'effect_type' => array('constraint' => 255, 'type' => 'varchar'),
			'effect_rate' => array('constraint' => 11, 'type' => 'int'),
			'effect_val' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_skill_effect_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_skill_effects');
	}
}