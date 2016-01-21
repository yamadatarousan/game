<?php

namespace Fuel\Migrations;

class Create_m_traps
{
	public function up()
	{
		\DBUtil::create_table('m_traps', array(
			'm_trap_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'trap_type' => array('constraint' => 255, 'type' => 'varchar'),
			'effect_rate' => array('constraint' => 11, 'type' => 'int'),
			'effect_val' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_trap_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_traps');
	}
}