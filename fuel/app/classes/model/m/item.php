<?php
use Orm\Model;

class Model_M_Item extends Model
{
	protected static $_properties = array(
		'id',
		'm_item_id',
		'item_type',
		'name',
		'flavor_text',
		'm_item_effect_id',
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
		$val->add_field('m_item_id', 'M Item Id', 'required|valid_string[numeric]');
		$val->add_field('item_type', 'Item Type', 'required|max_length[255]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('flavor_text', 'Flavor Text', 'required|max_length[255]');
		$val->add_field('m_item_effect_id', 'M Item Effect Id', 'required|valid_string[numeric]');

		return $val;
	}

}
