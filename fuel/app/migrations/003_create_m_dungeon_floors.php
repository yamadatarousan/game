<?php

namespace Fuel\Migrations;

class Create_m_dungeon_floors
{
	public function up()
	{
		\DBUtil::create_table('m_dungeon_floors', array(
			'm_dungeon_floor_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'flavor_text' => array('constraint' => 255, 'type' => 'varchar'),
			'm_dungeon_set_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'low' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'high' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'm_dungeon_map_set_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'm_dungeon_event_set_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_dungeon_floor_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_dungeon_floors');
	}
}