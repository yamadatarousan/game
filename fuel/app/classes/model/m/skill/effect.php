<?php
use Orm\Model;

class Model_M_Skill_Effect extends Model
{
	protected static $_properties = array(
		'id',
		'm_skill_effect_id',
		'm_skill_effect_id',
		'effect_type',
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
		$val->add_field('m_skill_effect_id', 'M Skill Effect Id', 'required|valid_string[numeric]');
		$val->add_field('m_skill_effect_id', 'M Skill Effect Id', 'required|valid_string[numeric]');
		$val->add_field('effect_type', 'Effect Type', 'required|max_length[255]');
		$val->add_field('effect_rate', 'Effect Rate', 'required|valid_string[numeric]');
		$val->add_field('effect_val', 'Effect Val', 'required|valid_string[numeric]');

		return $val;
	}

}
