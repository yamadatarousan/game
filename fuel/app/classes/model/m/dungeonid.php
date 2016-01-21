<?php
use Orm\Model;

class Model_M_Dungeonid extends Model
{
	protected static $_properties = array(
		'id',
		'm_dungeon_id',
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

		return $val;
	}

}
