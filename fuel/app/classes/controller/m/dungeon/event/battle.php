<?php
class Controller_M_Dungeon_Event_Battle extends Controller_Template
{

	public function action_index()
	{
		$data['m_dungeon_event_battles'] = Model_M_Dungeon_Event_Battle::find('all');
		$this->template->title = "M_dungeon_event_battles";
		$this->template->content = View::forge('m/dungeon/event/battle/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/battle');

		if ( ! $data['m_dungeon_event_battle'] = Model_M_Dungeon_Event_Battle::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_event_battle #'.$id);
			Response::redirect('m/dungeon/event/battle');
		}

		$this->template->title = "M_dungeon_event_battle";
		$this->template->content = View::forge('m/dungeon/event/battle/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Dungeon_Event_Battle::validate('create');

			if ($val->run())
			{
				$m_dungeon_event_battle = Model_M_Dungeon_Event_Battle::forge(array(
					'm_dungeon_event_battle_id' => Input::post('m_dungeon_event_battle_id'),
					'm_dungeon_event_set_id' => Input::post('m_dungeon_event_set_id'),
					'm_battle_id' => Input::post('m_battle_id'),
					'weight' => Input::post('weight'),
				));

				if ($m_dungeon_event_battle and $m_dungeon_event_battle->save())
				{
					Session::set_flash('success', 'Added m_dungeon_event_battle #'.$m_dungeon_event_battle->id.'.');

					Response::redirect('m/dungeon/event/battle');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_dungeon_event_battle.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Dungeon_Event_Battles";
		$this->template->content = View::forge('m/dungeon/event/battle/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/battle');

		if ( ! $m_dungeon_event_battle = Model_M_Dungeon_Event_Battle::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_event_battle #'.$id);
			Response::redirect('m/dungeon/event/battle');
		}

		$val = Model_M_Dungeon_Event_Battle::validate('edit');

		if ($val->run())
		{
			$m_dungeon_event_battle->m_dungeon_event_battle_id = Input::post('m_dungeon_event_battle_id');
			$m_dungeon_event_battle->m_dungeon_event_set_id = Input::post('m_dungeon_event_set_id');
			$m_dungeon_event_battle->m_battle_id = Input::post('m_battle_id');
			$m_dungeon_event_battle->weight = Input::post('weight');

			if ($m_dungeon_event_battle->save())
			{
				Session::set_flash('success', 'Updated m_dungeon_event_battle #' . $id);

				Response::redirect('m/dungeon/event/battle');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_dungeon_event_battle #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_dungeon_event_battle->m_dungeon_event_battle_id = $val->validated('m_dungeon_event_battle_id');
				$m_dungeon_event_battle->m_dungeon_event_set_id = $val->validated('m_dungeon_event_set_id');
				$m_dungeon_event_battle->m_battle_id = $val->validated('m_battle_id');
				$m_dungeon_event_battle->weight = $val->validated('weight');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_dungeon_event_battle', $m_dungeon_event_battle, false);
		}

		$this->template->title = "M_dungeon_event_battles";
		$this->template->content = View::forge('m/dungeon/event/battle/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event/battle');

		if ($m_dungeon_event_battle = Model_M_Dungeon_Event_Battle::find($id))
		{
			$m_dungeon_event_battle->delete();

			Session::set_flash('success', 'Deleted m_dungeon_event_battle #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_dungeon_event_battle #'.$id);
		}

		Response::redirect('m/dungeon/event/battle');

	}

}
