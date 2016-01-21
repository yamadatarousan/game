<?php
class Controller_M_Treasure extends Controller_Template
{

	public function action_index()
	{
		$data['m_treasures'] = Model_M_Treasure::find('all');
		$this->template->title = "M_treasures";
		$this->template->content = View::forge('m/treasure/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/treasure');

		if ( ! $data['m_treasure'] = Model_M_Treasure::find($id))
		{
			Session::set_flash('error', 'Could not find m_treasure #'.$id);
			Response::redirect('m/treasure');
		}

		$this->template->title = "M_treasure";
		$this->template->content = View::forge('m/treasure/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Treasure::validate('create');

			if ($val->run())
			{
				$m_treasure = Model_M_Treasure::forge(array(
					'm_treasure_id' => Input::post('m_treasure_id'),
					'm_treasure_set_id' => Input::post('m_treasure_set_id'),
					'm_item_id' => Input::post('m_item_id'),
					'count' => Input::post('count'),
				));

				if ($m_treasure and $m_treasure->save())
				{
					Session::set_flash('success', 'Added m_treasure #'.$m_treasure->id.'.');

					Response::redirect('m/treasure');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_treasure.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Treasures";
		$this->template->content = View::forge('m/treasure/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/treasure');

		if ( ! $m_treasure = Model_M_Treasure::find($id))
		{
			Session::set_flash('error', 'Could not find m_treasure #'.$id);
			Response::redirect('m/treasure');
		}

		$val = Model_M_Treasure::validate('edit');

		if ($val->run())
		{
			$m_treasure->m_treasure_id = Input::post('m_treasure_id');
			$m_treasure->m_treasure_set_id = Input::post('m_treasure_set_id');
			$m_treasure->m_item_id = Input::post('m_item_id');
			$m_treasure->count = Input::post('count');

			if ($m_treasure->save())
			{
				Session::set_flash('success', 'Updated m_treasure #' . $id);

				Response::redirect('m/treasure');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_treasure #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_treasure->m_treasure_id = $val->validated('m_treasure_id');
				$m_treasure->m_treasure_set_id = $val->validated('m_treasure_set_id');
				$m_treasure->m_item_id = $val->validated('m_item_id');
				$m_treasure->count = $val->validated('count');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_treasure', $m_treasure, false);
		}

		$this->template->title = "M_treasures";
		$this->template->content = View::forge('m/treasure/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/treasure');

		if ($m_treasure = Model_M_Treasure::find($id))
		{
			$m_treasure->delete();

			Session::set_flash('success', 'Deleted m_treasure #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_treasure #'.$id);
		}

		Response::redirect('m/treasure');

	}

}
