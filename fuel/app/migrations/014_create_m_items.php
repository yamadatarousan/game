<?php

namespace Fuel\Migrations;

class Create_m_items
{
	public function up()
	{
		\DBUtil::create_table('m_items', array(
			'm_item_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'not_null' => true),
			'item_type' => array('constraint' => 255, 'type' => 'varchar'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'flavor_text' => array('constraint' => 255, 'type' => 'varchar'),
			'm_item_effect_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('m_item_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('m_items');
	}
}