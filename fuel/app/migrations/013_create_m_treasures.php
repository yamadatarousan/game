<?php

namespace Fuel\Migrations;

class Create_m_treasures
{
	public function up()
	{
		\DBUtil::create_table('m_treasures', array(
			'm_treasure_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'm_treasure_set_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'm_item_id' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'count' => array('constraint' => 11, 'type' => 'int', 'not_null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_treasure_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_treasures');
	}
}