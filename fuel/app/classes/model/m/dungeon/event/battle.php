<?php
use Orm\Model;

class Model_M_Dungeon_Event_Battle extends Model
{
	protected static $_properties = array(
		'id',
		'm_dungeon_event_battle_id',
		'm_dungeon_event_set_id',
		'm_battle_id',
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
		$val->add_field('m_dungeon_event_battle_id', 'M Dungeon Event Battle Id', 'required|valid_string[numeric]');
		$val->add_field('m_dungeon_event_set_id', 'M Dungeon Event Set Id', 'required|valid_string[numeric]');
		$val->add_field('m_battle_id', 'M Battle Id', 'required|valid_string[numeric]');
		$val->add_field('weight', 'Weight', 'required|valid_string[numeric]');

		return $val;
	}

}
