<?php
use Orm\Model;

class Model_M_Dungeon_Event_Treasure extends Model
{
	protected static $_properties = array(
		'id',
		'm_dungeon_event_treasure_id',
		'm_dungeon_event_set_id',
		'm_tresure_set_id',
		'rate',
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
		$val->add_field('m_dungeon_event_treasure_id', 'M Dungeon Event Treasure Id', 'required|valid_string[numeric]');
		$val->add_field('m_dungeon_event_set_id', 'M Dungeon Event Set Id', 'required|valid_string[numeric]');
		$val->add_field('m_tresure_set_id', 'M Tresure Set Id', 'required|valid_string[numeric]');
		$val->add_field('rate', 'Rate', 'required|valid_string[numeric]');
		$val->add_field('weight', 'Weight', 'required|valid_string[numeric]');

		return $val;
	}

}
