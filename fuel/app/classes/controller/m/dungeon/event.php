<?php
class Controller_M_Dungeon_Event extends Controller_Template
{

	public function action_index()
	{
		$data['m_dungeon_events'] = Model_M_Dungeon_Event::find('all');
		$this->template->title = "M_dungeon_events";
		$this->template->content = View::forge('m/dungeon/event/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event');

		if ( ! $data['m_dungeon_event'] = Model_M_Dungeon_Event::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_event #'.$id);
			Response::redirect('m/dungeon/event');
		}

		$this->template->title = "M_dungeon_event";
		$this->template->content = View::forge('m/dungeon/event/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Dungeon_Event::validate('create');

			if ($val->run())
			{
				$m_dungeon_event = Model_M_Dungeon_Event::forge(array(
					'm_dungeon_event_id' => Input::post('m_dungeon_event_id'),
					'm_dungeon_event_set_id' => Input::post('m_dungeon_event_set_id'),
					'event_type' => Input::post('event_type'),
					'weight' => Input::post('weight'),
				));

				if ($m_dungeon_event and $m_dungeon_event->save())
				{
					Session::set_flash('success', 'Added m_dungeon_event #'.$m_dungeon_event->id.'.');

					Response::redirect('m/dungeon/event');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_dungeon_event.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Dungeon_Events";
		$this->template->content = View::forge('m/dungeon/event/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event');

		if ( ! $m_dungeon_event = Model_M_Dungeon_Event::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeon_event #'.$id);
			Response::redirect('m/dungeon/event');
		}

		$val = Model_M_Dungeon_Event::validate('edit');

		if ($val->run())
		{
			$m_dungeon_event->m_dungeon_event_id = Input::post('m_dungeon_event_id');
			$m_dungeon_event->m_dungeon_event_set_id = Input::post('m_dungeon_event_set_id');
			$m_dungeon_event->event_type = Input::post('event_type');
			$m_dungeon_event->weight = Input::post('weight');

			if ($m_dungeon_event->save())
			{
				Session::set_flash('success', 'Updated m_dungeon_event #' . $id);

				Response::redirect('m/dungeon/event');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_dungeon_event #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_dungeon_event->m_dungeon_event_id = $val->validated('m_dungeon_event_id');
				$m_dungeon_event->m_dungeon_event_set_id = $val->validated('m_dungeon_event_set_id');
				$m_dungeon_event->event_type = $val->validated('event_type');
				$m_dungeon_event->weight = $val->validated('weight');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_dungeon_event', $m_dungeon_event, false);
		}

		$this->template->title = "M_dungeon_events";
		$this->template->content = View::forge('m/dungeon/event/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/dungeon/event');

		if ($m_dungeon_event = Model_M_Dungeon_Event::find($id))
		{
			$m_dungeon_event->delete();

			Session::set_flash('success', 'Deleted m_dungeon_event #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_dungeon_event #'.$id);
		}

		Response::redirect('m/dungeon/event');

	}

}
