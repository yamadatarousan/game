<?php
class Controller_M_Dungeon_Floor extends Controller_Template
{

	public function action_index()
	{
		$data['m_dungeon_floors'] = Model_M_Dungeon_Floor::find('all');
		$this->template->title = "M_dungeon_floors";
		$this->template->content = View::forge('m/dungeon/floor/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/floor');

		if ( ! $data['m_dungeon_floor'] = Model_M_Dungeon_Floor::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_floor #'.$id);
			Response::redirect('m/dungeon/floor');
		}

		$this->template->title = "M_dungeon_floor";
		$this->template->content = View::forge('m/dungeon/floor/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Dungeon_Floor::validate('create');

			if ($val->run())
			{
				$m_dungeon_floor = Model_M_Dungeon_Floor::forge(array(
					'm_dungeon_floor_id' => Input::post('m_dungeon_floor_id'),
					'name' => Input::post('name'),
					'flavor_text' => Input::post('flavor_text'),
					'm_dungeon_set_id' => Input::post('m_dungeon_set_id'),
					'low' => Input::post('low'),
					'high' => Input::post('high'),
					'm_dungeon_map_set_id' => Input::post('m_dungeon_map_set_id'),
					'm_dungeon_event_set_id' => Input::post('m_dungeon_event_set_id'),
				));

				if ($m_dungeon_floor and $m_dungeon_floor->save())
				{
					Session::set_flash('success', 'Added m_dungeon_floor #'.$m_dungeon_floor->id.'.');

					Response::redirect('m/dungeon/floor');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_dungeon_floor.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Dungeon_Floors";
		$this->template->content = View::forge('m/dungeon/floor/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/floor');

		if ( ! $m_dungeon_floor = Model_M_Dungeon_Floor::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_floor #'.$id);
			Response::redirect('m/dungeon/floor');
		}

		$val = Model_M_Dungeon_Floor::validate('edit');

		if ($val->run())
		{
			$m_dungeon_floor->m_dungeon_floor_id = Input::post('m_dungeon_floor_id');
			$m_dungeon_floor->name = Input::post('name');
			$m_dungeon_floor->flavor_text = Input::post('flavor_text');
			$m_dungeon_floor->m_dungeon_set_id = Input::post('m_dungeon_set_id');
			$m_dungeon_floor->low = Input::post('low');
			$m_dungeon_floor->high = Input::post('high');
			$m_dungeon_floor->m_dungeon_map_set_id = Input::post('m_dungeon_map_set_id');
			$m_dungeon_floor->m_dungeon_event_set_id = Input::post('m_dungeon_event_set_id');

			if ($m_dungeon_floor->save())
			{
				Session::set_flash('success', 'Updated m_dungeon_floor #' . $id);

				Response::redirect('m/dungeon/floor');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_dungeon_floor #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_dungeon_floor->m_dungeon_floor_id = $val->validated('m_dungeon_floor_id');
				$m_dungeon_floor->name = $val->validated('name');
				$m_dungeon_floor->flavor_text = $val->validated('flavor_text');
				$m_dungeon_floor->m_dungeon_set_id = $val->validated('m_dungeon_set_id');
				$m_dungeon_floor->low = $val->validated('low');
				$m_dungeon_floor->high = $val->validated('high');
				$m_dungeon_floor->m_dungeon_map_set_id = $val->validated('m_dungeon_map_set_id');
				$m_dungeon_floor->m_dungeon_event_set_id = $val->validated('m_dungeon_event_set_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_dungeon_floor', $m_dungeon_floor, false);
		}

		$this->template->title = "M_dungeon_floors";
		$this->template->content = View::forge('m/dungeon/floor/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/floor');

		if ($m_dungeon_floor = Model_M_Dungeon_Floor::find($id))
		{
			$m_dungeon_floor->delete();

			Session::set_flash('success', 'Deleted m_dungeon_floor #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_dungeon_floor #'.$id);
		}

		Response::redirect('m/dungeon/floor');

	}

}
