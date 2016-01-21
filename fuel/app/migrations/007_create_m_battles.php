<?php

namespace Fuel\Migrations;

class Create_m_battles
{
	public function up()
	{
		\DBUtil::create_table('m_battles', array(
			'm_battle_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'm_enemy_set_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_battle_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_battles');
	}
}