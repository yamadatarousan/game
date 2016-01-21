<?php
use Orm\Model;

class Model_M_Battle extends Model
{
	protected static $_properties = array(
		'm_battle_id',
		'm_enemy_set_id',
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
		$val->add_field('m_battle_id', 'M Battle Id', 'required|valid_string[numeric]');
		$val->add_field('m_enemy_set_id', 'M Enemy Set Id', 'required|valid_string[numeric]');

		return $val;
	}

}
