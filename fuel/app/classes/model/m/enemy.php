<?php
use Orm\Model;

class Model_M_Enemy extends Model
{
	protected static $_properties = array(
		'id',
		'm_enemy_id',
		'name',
		'flavor_text',
		'hp',
		'mp',
		'atk',
		'def',
		'spd',
		'luck',
		'm_skill_bundle_id',
		'm_treasure_set_id',
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
		$val->add_field('m_enemy_id', 'M Enemy Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('flavor_text', 'Flavor Text', 'required|max_length[255]');
		$val->add_field('hp', 'Hp', 'required|valid_string[numeric]');
		$val->add_field('mp', 'Mp', 'required|valid_string[numeric]');
		$val->add_field('atk', 'Atk', 'required|valid_string[numeric]');
		$val->add_field('def', 'Def', 'required|valid_string[numeric]');
		$val->add_field('spd', 'Spd', 'required|valid_string[numeric]');
		$val->add_field('luck', 'Luck', 'required|valid_string[numeric]');
		$val->add_field('m_skill_bundle_id', 'M Skill Bundle Id', 'required|valid_string[numeric]');
		$val->add_field('m_treasure_set_id', 'M Treasure Set Id', 'required|valid_string[numeric]');

		return $val;
	}

}
