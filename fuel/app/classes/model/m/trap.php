<?php
use Orm\Model;

class Model_M_Trap extends Model
{
	protected static $_properties = array(
		'id',
		'm_trap_id',
		'trap_type',
		'effect_rate',
		'effect_val',
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
		$val->add_field('m_trap_id', 'M Trap Id', 'required|valid_string[numeric]');
		$val->add_field('trap_type', 'Trap Type', 'required|max_length[255]');
		$val->add_field('effect_rate', 'Effect Rate', 'required|valid_string[numeric]');
		$val->add_field('effect_val', 'Effect Val', 'required|valid_string[numeric]');

		return $val;
	}

}
