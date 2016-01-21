<?php
use Orm\Model;

class Model_M_Skill_Set extends Model
{
	protected static $_properties = array(
		'id',
		'm_skill_set_id',
		'm_skill_bundle_id',
		'm_skill_id',
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
		$val->add_field('m_skill_set_id', 'M Skill Set Id', 'required|valid_string[numeric]');
		$val->add_field('m_skill_bundle_id', 'M Skill Bundle Id', 'required|valid_string[numeric]');
		$val->add_field('m_skill_id', 'M Skill Id', 'required|valid_string[numeric]');

		return $val;
	}

}
