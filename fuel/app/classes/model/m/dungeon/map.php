<?php
use Orm\Model;

class Model_M_Dungeon_Map extends Model
{
	protected static $_properties = array(
		'id',
		'm_dungeon_map_id',
		'name',
		'flavor_text',
		'm_dungeon_map_set_id',
		'x',
		'y',
		'weight',
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
		$val->add_field('m_dungeon_map_id', 'M Dungeon Map Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('flavor_text', 'Flavor Text', 'required|max_length[255]');
		$val->add_field('m_dungeon_map_set_id', 'M Dungeon Map Set Id', 'required|valid_string[numeric]');
		$val->add_field('x', 'X', 'required|valid_string[numeric]');
		$val->add_field('y', 'Y', 'required|valid_string[numeric]');
		$val->add_field('weight', 'Weight', 'required|valid_string[numeric]');

		return $val;
	}

}
