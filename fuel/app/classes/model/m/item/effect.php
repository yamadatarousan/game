<?php
use Orm\Model;

class Model_M_Item_Effect extends Model
{
	protected static $_properties = array(
		'id',
		'm_item_effect_id',
		'effect_type',
		'hp',
		'mp',
		'atk',
		'def',
		'spd',
		'luck',
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
		$val->add_field('m_item_effect_id', 'M Item Effect Id', 'required|valid_string[numeric]');
		$val->add_field('effect_type', 'Effect Type', 'required|max_length[255]');
		$val->add_field('hp', 'Hp', 'required|valid_string[numeric]');
		$val->add_field('mp', 'Mp', 'required|valid_string[numeric]');
		$val->add_field('atk', 'Atk', 'required|valid_string[numeric]');
		$val->add_field('def', 'Def', 'required|valid_string[numeric]');
		$val->add_field('spd', 'Spd', 'required|valid_string[numeric]');
		$val->add_field('luck', 'Luck', 'required|valid_string[numeric]');

		return $val;
	}

}
