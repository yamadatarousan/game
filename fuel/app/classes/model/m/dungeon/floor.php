<?php
use Orm\Model;

class Model_M_Dungeon_Floor extends Model
{

	protected static $_table = 'm_dungeon_floors';

	protected static $_properties = array(
		'm_dungeon_floor_id',
		'name',
		'flavor_text',
		'm_dungeon_set_id',
		'low',
		'high',
		'm_dungeon_map_set_id',
		'm_dungeon_event_set_id',
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
		$val->add_field('m_dungeon_floor_id', 'M Dungeon Floor Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('flavor_text', 'Flavor Text', 'required|max_length[255]');
		$val->add_field('m_dungeon_set_id', 'M Dungeon Set Id', 'required|valid_string[numeric]');
		$val->add_field('low', 'Low', 'required|valid_string[numeric]');
		$val->add_field('high', 'High', 'required|valid_string[numeric]');
		$val->add_field('m_dungeon_map_set_id', 'M Dungeon Map Set Id', 'required|valid_string[numeric]');
		$val->add_field('m_dungeon_event_set_id', 'M Dungeon Event Set Id', 'required|valid_string[numeric]');

		return $val;
	}

	public function get_m_dungeon_floors_by_dungeon_set_id($m_dungeon_set_id)
	{
		return DB::select()->from(static::$_table)->where('m_dungeon_set_id', 'in' ,(array)$m_dungeon_set_id)->execute();
	}


}
