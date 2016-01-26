<?php

namespace Fuel\Migrations;

class Create_m_dungeon_event_traps
{
	public function up()
	{
		\DBUtil::create_table('m_dungeon_event_traps', array(
			'm_dungeon_event_trap_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'm_dungeon_event_set_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'm_trap_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'weight' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_dungeon_event_trap_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_dungeon_event_traps');
	}
}