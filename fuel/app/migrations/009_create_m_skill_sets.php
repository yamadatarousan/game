<?php

namespace Fuel\Migrations;

class Create_m_skill_sets
{
	public function up()
	{
		\DBUtil::create_table('m_skill_sets', array(
			'm_skill_set_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'm_skill_bundle_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'm_skill_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_skill_set_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_skill_sets');
	}
}