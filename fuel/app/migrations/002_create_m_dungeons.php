<?php

namespace Fuel\Migrations;

class Create_m_dungeons
{
	public function up()
	{
		\DBUtil::create_table('m_dungeons', array(
			'm_dungeon_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'm_dungeon_set_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'flavor_text' => array('constraint' => 255, 'type' => 'varchar'),
			'floor' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_dungeon_id'));
	}


	public function down()
	{
		\DBUtil::drop_table('m_dungeons');
	}
}