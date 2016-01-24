<?php
use Orm\Model;

class Model_M_Dungeon_Event extends Model
{
	protected static $_properties = array(
		'm_dungeon_event_id',
		'm_dungeon_event_set_id',
		'event_type',
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


	protected static $_table = 'm_dungeon_events';

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('m_dungeon_event_id', 'M Dungeon Event Id', 'required|valid_string[numeric]');
		$val->add_field('m_dungeon_event_set_id', 'M Dungeon Event Set Id', 'required|valid_string[numeric]');
		$val->add_field('event_type', 'Event Type', 'required|max_length[255]');
		$val->add_field('weight', 'Weight', 'required|valid_string[numeric]');

		return $val;
	}

	public function get_m_dungeon_events_by_event_set_id($event_set_id)
	{
		return DB::select()
		->from(static::$_table)
		->where('m_dungeon_event_set_id', 'in' , $event_set_id)
		->execute();
	}

}
