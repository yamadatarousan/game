<?php
class Controller_M_Dungeon_Event_Trap extends Controller_Template
{

	public function action_index()
	{
		$data['m_dungeon_event_traps'] = Model_M_Dungeon_Event_Trap::find('all');
		$this->template->title = "M_dungeon_event_traps";
		$this->template->content = View::forge('m/dungeon/event/trap/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/trap');

		if ( ! $data['m_dungeon_event_trap'] = Model_M_Dungeon_Event_Trap::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_event_trap #'.$id);
			Response::redirect('m/dungeon/event/trap');
		}

		$this->template->title = "M_dungeon_event_trap";
		$this->template->content = View::forge('m/dungeon/event/trap/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Dungeon_Event_Trap::validate('create');

			if ($val->run())
			{
				$m_dungeon_event_trap = Model_M_Dungeon_Event_Trap::forge(array(
					'm_dungeon_event_trap_id' => Input::post('m_dungeon_event_trap_id'),
					'm_dungeon_event_set_id' => Input::post('m_dungeon_event_set_id'),
					'm_trap_id' => Input::post('m_trap_id'),
					'weight' => Input::post('weight'),
				));

				if ($m_dungeon_event_trap and $m_dungeon_event_trap->save())
				{
					Session::set_flash('success', 'Added m_dungeon_event_trap #'.$m_dungeon_event_trap->id.'.');

					Response::redirect('m/dungeon/event/trap');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_dungeon_event_trap.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Dungeon_Event_Traps";
		$this->template->content = View::forge('m/dungeon/event/trap/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/trap');

		if ( ! $m_dungeon_event_trap = Model_M_Dungeon_Event_Trap::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_event_trap #'.$id);
			Response::redirect('m/dungeon/event/trap');
		}

		$val = Model_M_Dungeon_Event_Trap::validate('edit');

		if ($val->run())
		{
			$m_dungeon_event_trap->m_dungeon_event_trap_id = Input::post('m_dungeon_event_trap_id');
			$m_dungeon_event_trap->m_dungeon_event_set_id = Input::post('m_dungeon_event_set_id');
			$m_dungeon_event_trap->m_trap_id = Input::post('m_trap_id');
			$m_dungeon_event_trap->weight = Input::post('weight');

			if ($m_dungeon_event_trap->save())
			{
				Session::set_flash('success', 'Updated m_dungeon_event_trap #' . $id);

				Response::redirect('m/dungeon/event/trap');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_dungeon_event_trap #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_dungeon_event_trap->m_dungeon_event_trap_id = $val->validated('m_dungeon_event_trap_id');
				$m_dungeon_event_trap->m_dungeon_event_set_id = $val->validated('m_dungeon_event_set_id');
				$m_dungeon_event_trap->m_trap_id = $val->validated('m_trap_id');
				$m_dungeon_event_trap->weight = $val->validated('weight');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_dungeon_event_trap', $m_dungeon_event_trap, false);
		}

		$this->template->title = "M_dungeon_event_traps";
		$this->template->content = View::forge('m/dungeon/event/trap/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/trap');

		if ($m_dungeon_event_trap = Model_M_Dungeon_Event_Trap::find($id))
		{
			$m_dungeon_event_trap->delete();

			Session::set_flash('success', 'Deleted m_dungeon_event_trap #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_dungeon_event_trap #'.$id);
		}

		Response::redirect('m/dungeon/event/trap');

	}

}
