<?php
use Orm\Model;

class Model_M_Dungeon extends Model
{
	const EVENT_TYPE_TREASURE = 'treasure';
	const EVENT_TYPE_BATTLE   = 'battle';
	const EVENT_TYPE_TRAP     = 'trap';

	protected static $_properties = array(
		'm_dungeon_id',
		'm_dungeon_set_id',
		'name',
		'flavor_text',
		'floor',
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

	protected static $_primary_key = array(
		'm_dungeon_id',
	);

	protected static $_table = 'm_dungeons';


	protected $_data_list = array();

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('m_dungeon_id', 'M Dungeon Id', 'required|valid_string[numeric]');
		$val->add_field('m_dungeon_set_id', 'M Dungeon Set Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('flavor_text', 'Flavor Text', 'required|max_length[255]');
		$val->add_field('floor', 'Floor', 'required|valid_string[numeric]');

		return $val;
	}


	public function set_m_dungeons_by_id($id)
	{
		$data = DB::select()->from(static::$_table)->where('m_dungeon_id', $id)->execute();
		$this->_data_list['m_dungeons'] = $data[0];

	}

	/**
	 * フロアのマップ情報とイベントデータを生成
	 */
	public function generate_mapevent($floor_no)
	{
		// n階のフロアデータ取得
		$m_dungeon_floor_model = Model_M_Dungeon_Floor::forge();
		$this->_data_list['m_dungeon_floors'] = $m_dungeon_floor_model
		->get_m_dungeon_floors_by_dungeon_set_id_and_floor_no(
			$this->_data_list['m_dungeons']['m_dungeon_set_id'],
			$floor_no
		);

		if(!$this->_data_list['m_dungeon_floors'])
		{
			throw new Exception(
				"Error m_dungeon_floors not found m_dungeon_set_id = ".
				$this->_data_list['m_dungeons']['m_dungeon_set_id']
			);
		}

		// n階のフロアマップデータをマップセットの中からランダム取得
		$draw_cnt = 1;
		$m_dungeon_map_model = Model_M_Dungeon_Map::forge();
		foreach ($this->_data_list['m_dungeon_floors'] as $floor)
		{

			$maps = $m_dungeon_map_model
			->get_m_dungeon_maps_by_map_set_id($floor['m_dungeon_map_set_id']);

			if(!$maps)
			{
				throw new Exception(
					"Error m_dungeon_maps not found m_dungeon_map_set_id = ".
					$floor['m_dungeon_map_set_id']
				);
			}

			$floor_map = array();
			$floor_map[$floor['m_dungeon_floor_id']] = current(Module_Dungeon::draw($maps, $draw_cnt));
		}

		$this->_data_list['m_dungeon_maps'] = array();
		foreach ($this->_data_list['m_dungeon_floors'] as $floor)
		{
			$this->_data_list['m_dungeon_maps']= current($floor_map[$floor['m_dungeon_floor_id']]);
		}

		// n階のフロアイベントデータをイベントセットの中からランダム取得(フロアのタイル数分)
		$m_dungeon_event_model = Model_M_Dungeon_Event::forge();
		foreach ($this->_data_list['m_dungeon_floors'] as $floor)
		{

			$events = $m_dungeon_event_model
			->get_m_dungeon_events_by_event_set_id($floor['m_dungeon_event_set_id']);

			if(!$events)
			{
				throw new Exception(
					"Error m_dungeon_events not found m_dungeon_event_set_id = ".
					$floor['m_dungeon_event_set_id']
				);
			}

			$x = $floor_map[$floor['m_dungeon_floor_id']]['x'];
			$y = $floor_map[$floor['m_dungeon_floor_id']]['y'];
			$square_size = $x*$y;

			$encount_events = array();
			$encount_events[$floor['m_dungeon_floor_id']] = Module_Dungeon::draw($events, $square_size);
		}

		$m_dungeon_event_treasure_model = Model_M_Dungeon_Event_Treasure::forge();
		$m_dungeon_event_battle_model = Model_M_Dungeon_Event_battle::forge();
		$m_dungeon_event_trap_model = Model_M_Dungeon_Event_trap::forge();

		$draw_cnt = 1;
		$tile_cnt = 1;
		foreach ($encount_events[$floor['m_dungeon_floor_id']] as $event)
		{
			$func = 'get_m_dungeon_event_'.$event['event_type'].'_by_event_set_id';
			$m_dungeon_event_any = ${"m_dungeon_event_".$event['event_type'].'_model'}->$func($event['m_dungeon_event_set_id']);
			$event_detail = current(Module_Dungeon::draw($m_dungeon_event_any ,$draw_cnt));
			$this->_data_list['m_dungeon_event_maps'][$tile_cnt] = $event;
			$this->_data_list['m_dungeon_event_maps'][$tile_cnt]['detail'] = $event_detail;
			++$tile_cnt;
		}
	}

}
