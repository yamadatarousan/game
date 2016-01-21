<?php

namespace Fuel\Migrations;

class Create_m_skills
{
	public function up()
	{
		\DBUtil::create_table('m_skills', array(
			'm_skill_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'flavor_text' => array('constraint' => 255, 'type' => 'varchar'),
			'm_skill_effect_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_skill_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_skills');
	}
}