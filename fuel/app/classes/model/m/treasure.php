<?php
use Orm\Model;

class Model_M_Treasure extends Model
{
	protected static $_properties = array(
		'id',
		'm_treasure_id',
		'm_treasure_set_id',
		'm_item_id',
		'count',
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
		$val->add_field('m_treasure_id', 'M Treasure Id', 'required|valid_string[numeric]');
		$val->add_field('m_treasure_set_id', 'M Treasure Set Id', 'required|valid_string[numeric]');
		$val->add_field('m_item_id', 'M Item Id', 'required|valid_string[numeric]');
		$val->add_field('count', 'Count', 'required|valid_string[numeric]');

		return $val;
	}

}
