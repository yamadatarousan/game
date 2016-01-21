<?php
class Controller_M_Dungeon_Map extends Controller_Template
{

	public function action_index()
	{
		$data['m_dungeon_maps'] = Model_M_Dungeon_Map::find('all');
		$this->template->title = "M_dungeon_maps";
		$this->template->content = View::forge('m/dungeon/map/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/map');

		if ( ! $data['m_dungeon_map'] = Model_M_Dungeon_Map::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_map #'.$id);
			Response::redirect('m/dungeon/map');
		}

		$this->template->title = "M_dungeon_map";
		$this->template->content = View::forge('m/dungeon/map/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Dungeon_Map::validate('create');

			if ($val->run())
			{
				$m_dungeon_map = Model_M_Dungeon_Map::forge(array(
					'm_dungeon_map_id' => Input::post('m_dungeon_map_id'),
					'name' => Input::post('name'),
					'flavor_text' => Input::post('flavor_text'),
					'm_dungeon_map_set_id' => Input::post('m_dungeon_map_set_id'),
					'x' => Input::post('x'),
					'y' => Input::post('y'),
					'weight' => Input::post('weight'),
				));

				if ($m_dungeon_map and $m_dungeon_map->save())
				{
					Session::set_flash('success', 'Added m_dungeon_map #'.$m_dungeon_map->id.'.');

					Response::redirect('m/dungeon/map');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_dungeon_map.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Dungeon_Maps";
		$this->template->content = View::forge('m/dungeon/map/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/map');

		if ( ! $m_dungeon_map = Model_M_Dungeon_Map::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_map #'.$id);
			Response::redirect('m/dungeon/map');
		}

		$val = Model_M_Dungeon_Map::validate('edit');

		if ($val->run())
		{
			$m_dungeon_map->m_dungeon_map_id = Input::post('m_dungeon_map_id');
			$m_dungeon_map->name = Input::post('name');
			$m_dungeon_map->flavor_text = Input::post('flavor_text');
			$m_dungeon_map->m_dungeon_map_set_id = Input::post('m_dungeon_map_set_id');
			$m_dungeon_map->x = Input::post('x');
			$m_dungeon_map->y = Input::post('y');
			$m_dungeon_map->weight = Input::post('weight');

			if ($m_dungeon_map->save())
			{
				Session::set_flash('success', 'Updated m_dungeon_map #' . $id);

				Response::redirect('m/dungeon/map');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_dungeon_map #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_dungeon_map->m_dungeon_map_id = $val->validated('m_dungeon_map_id');
				$m_dungeon_map->name = $val->validated('name');
				$m_dungeon_map->flavor_text = $val->validated('flavor_text');
				$m_dungeon_map->m_dungeon_map_set_id = $val->validated('m_dungeon_map_set_id');
				$m_dungeon_map->x = $val->validated('x');
				$m_dungeon_map->y = $val->validated('y');
				$m_dungeon_map->weight = $val->validated('weight');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_dungeon_map', $m_dungeon_map, false);
		}

		$this->template->title = "M_dungeon_maps";
		$this->template->content = View::forge('m/dungeon/map/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/map');

		if ($m_dungeon_map = Model_M_Dungeon_Map::find($id))
		{
			$m_dungeon_map->delete();

			Session::set_flash('success', 'Deleted m_dungeon_map #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_dungeon_map #'.$id);
		}

		Response::redirect('m/dungeon/map');

	}

}
