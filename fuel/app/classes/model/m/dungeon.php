<?php
use Orm\Model;

class Model_M_Dungeon extends Model
{
	protected static $_properties = array(
		'id',
		'm_dungeon_id',
		'm_dungeon_set_id',
		'name',
		'flavor_text',
		'floor',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('m_dungeon_id', 'M Dungeon Id', 'required|valid_string[numeric]');
		$val->add_field('m_dungeon_set_id', 'M Dungeon Set Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('flavor_text', 'Flavor Text', 'required|max_length[255]');
		$val->add_field('floor', 'Floor', 'required|valid_string[numeric]');

		return $val;
	}

}
