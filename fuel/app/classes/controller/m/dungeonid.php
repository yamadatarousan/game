<?php
class Controller_M_Dungeonid extends Controller_Template
{

	public function action_index()
	{
		$data['m_dungeonids'] = Model_M_Dungeonid::find('all');
		$this->template->title = "M_dungeonids";
		$this->template->content = View::forge('m/dungeonid/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/dungeonid');

		if ( ! $data['m_dungeonid'] = Model_M_Dungeonid::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeonid #'.$id);
			Response::redirect('m/dungeonid');
		}

		$this->template->title = "M_dungeonid";
		$this->template->content = View::forge('m/dungeonid/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Dungeonid::validate('create');

			if ($val->run())
			{
				$m_dungeonid = Model_M_Dungeonid::forge(array(
					'm_dungeon_id' => Input::post('m_dungeon_id'),
				));

				if ($m_dungeonid and $m_dungeonid->save())
				{
					Session::set_flash('success', 'Added m_dungeonid #'.$m_dungeonid->id.'.');

					Response::redirect('m/dungeonid');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_dungeonid.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Dungeonids";
		$this->template->content = View::forge('m/dungeonid/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/dungeonid');

		if ( ! $m_dungeonid = Model_M_Dungeonid::find($id))
		{
			Session::set_flash('error', 'Could not find m_dungeonid #'.$id);
			Response::redirect('m/dungeonid');
		}

		$val = Model_M_Dungeonid::validate('edit');

		if ($val->run())
		{
			$m_dungeonid->m_dungeon_id = Input::post('m_dungeon_id');

			if ($m_dungeonid->save())
			{
				Session::set_flash('success', 'Updated m_dungeonid #' . $id);

				Response::redirect('m/dungeonid');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_dungeonid #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_dungeonid->m_dungeon_id = $val->validated('m_dungeon_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_dungeonid', $m_dungeonid, false);
		}

		$this->template->title = "M_dungeonids";
		$this->template->content = View::forge('m/dungeonid/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/dungeonid');

		if ($m_dungeonid = Model_M_Dungeonid::find($id))
		{
			$m_dungeonid->delete();

			Session::set_flash('success', 'Deleted m_dungeonid #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_dungeonid #'.$id);
		}

		Response::redirect('m/dungeonid');

	}

}
