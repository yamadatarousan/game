<?php
class Controller_M_Dungeon extends Controller_Template
{

	public function action_index()
	{
		$m_dungeon_model = Model_M_Dungeon::forge();
		$m_dungeon_model->set_m_dungeons_by_id(1);
		$m_dungeon_model->generate_event();



		$this->template->title = "M_dungeons";
		$this->template->content = View::forge('m/dungeon/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon');

		if ( ! $data['m_dungeon'] = Model_M_Dungeon::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon #'.$id);
			Response::redirect('m/dungeon');
		}

		$this->template->title = "M_dungeon";
		$this->template->content = View::forge('m/dungeon/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Dungeon::validate('create');

			if ($val->run())
			{
				$m_dungeon = Model_M_Dungeon::forge(array(
					'm_dungeon_id' => Input::post('m_dungeon_id'),
					'm_dungeon_set_id' => Input::post('m_dungeon_set_id'),
					'name' => Input::post('name'),
					'flavor_text' => Input::post('flavor_text'),
					'floor' => Input::post('floor'),
				));

				if ($m_dungeon and $m_dungeon->save())
				{
					Session::set_flash('success', 'Added m_dungeon #'.$m_dungeon->id.'.');

					Response::redirect('m/dungeon');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_dungeon.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Dungeons";
		$this->template->content = View::forge('m/dungeon/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon');

		if ( ! $m_dungeon = Model_M_Dungeon::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon #'.$id);
			Response::redirect('m/dungeon');
		}

		$val = Model_M_Dungeon::validate('edit');

		if ($val->run())
		{
			$m_dungeon->m_dungeon_id = Input::post('m_dungeon_id');
			$m_dungeon->m_dungeon_set_id = Input::post('m_dungeon_set_id');
			$m_dungeon->name = Input::post('name');
			$m_dungeon->flavor_text = Input::post('flavor_text');
			$m_dungeon->floor = Input::post('floor');

			if ($m_dungeon->save())
			{
				Session::set_flash('success', 'Updated m_dungeon #' . $id);

				Response::redirect('m/dungeon');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_dungeon #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_dungeon->m_dungeon_id = $val->validated('m_dungeon_id');
				$m_dungeon->m_dungeon_set_id = $val->validated('m_dungeon_set_id');
				$m_dungeon->name = $val->validated('name');
				$m_dungeon->flavor_text = $val->validated('flavor_text');
				$m_dungeon->floor = $val->validated('floor');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_dungeon', $m_dungeon, false);
		}

		$this->template->title = "M_dungeons";
		$this->template->content = View::forge('m/dungeon/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon');

		if ($m_dungeon = Model_M_Dungeon::find($id))
		{
			$m_dungeon->delete();

			Session::set_flash('success', 'Deleted m_dungeon #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_dungeon #'.$id);
		}

		Response::redirect('m/dungeon');

	}

}
