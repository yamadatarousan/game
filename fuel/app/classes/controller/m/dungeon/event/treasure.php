<?php
class Controller_M_Dungeon_Event_Treasure extends Controller_Template
{

	public function action_index()
	{
		$data['m_dungeon_event_treasures'] = Model_M_Dungeon_Event_Treasure::find('all');
		$this->template->title = "M_dungeon_event_treasures";
		$this->template->content = View::forge('m/dungeon/event/treasure/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/treasure');

		if ( ! $data['m_dungeon_event_treasure'] = Model_M_Dungeon_Event_Treasure::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_event_treasure #'.$id);
			Response::redirect('m/dungeon/event/treasure');
		}

		$this->template->title = "M_dungeon_event_treasure";
		$this->template->content = View::forge('m/dungeon/event/treasure/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Dungeon_Event_Treasure::validate('create');

			if ($val->run())
			{
				$m_dungeon_event_treasure = Model_M_Dungeon_Event_Treasure::forge(array(
					'm_dungeon_event_treasure_id' => Input::post('m_dungeon_event_treasure_id'),
					'm_dungeon_event_set_id' => Input::post('m_dungeon_event_set_id'),
					'm_tresure_set_id' => Input::post('m_tresure_set_id'),
					'rate' => Input::post('rate'),
					'weight' => Input::post('weight'),
				));

				if ($m_dungeon_event_treasure and $m_dungeon_event_treasure->save())
				{
					Session::set_flash('success', 'Added m_dungeon_event_treasure #'.$m_dungeon_event_treasure->id.'.');

					Response::redirect('m/dungeon/event/treasure');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_dungeon_event_treasure.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Dungeon_Event_Treasures";
		$this->template->content = View::forge('m/dungeon/event/treasure/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/treasure');

		if ( ! $m_dungeon_event_treasure = Model_M_Dungeon_Event_Treasure::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_event_treasure #'.$id);
			Response::redirect('m/dungeon/event/treasure');
		}

		$val = Model_M_Dungeon_Event_Treasure::validate('edit');

		if ($val->run())
		{
			$m_dungeon_event_treasure->m_dungeon_event_treasure_id = Input::post('m_dungeon_event_treasure_id');
			$m_dungeon_event_treasure->m_dungeon_event_set_id = Input::post('m_dungeon_event_set_id');
			$m_dungeon_event_treasure->m_tresure_set_id = Input::post('m_tresure_set_id');
			$m_dungeon_event_treasure->rate = Input::post('rate');
			$m_dungeon_event_treasure->weight = Input::post('weight');

			if ($m_dungeon_event_treasure->save())
			{
				Session::set_flash('success', 'Updated m_dungeon_event_treasure #' . $id);

				Response::redirect('m/dungeon/event/treasure');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_dungeon_event_treasure #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_dungeon_event_treasure->m_dungeon_event_treasure_id = $val->validated('m_dungeon_event_treasure_id');
				$m_dungeon_event_treasure->m_dungeon_event_set_id = $val->validated('m_dungeon_event_set_id');
				$m_dungeon_event_treasure->m_tresure_set_id = $val->validated('m_tresure_set_id');
				$m_dungeon_event_treasure->rate = $val->validated('rate');
				$m_dungeon_event_treasure->weight = $val->validated('weight');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_dungeon_event_treasure', $m_dungeon_event_treasure, false);
		}

		$this->template->title = "M_dungeon_event_treasures";
		$this->template->content = View::forge('m/dungeon/event/treasure/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/treasure');

		if ($m_dungeon_event_treasure = Model_M_Dungeon_Event_Treasure::find($id))
		{
			$m_dungeon_event_treasure->delete();

			Session::set_flash('success', 'Deleted m_dungeon_event_treasure #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_dungeon_event_treasure #'.$id);
		}

		Response::redirect('m/dungeon/event/treasure');

	}

}
