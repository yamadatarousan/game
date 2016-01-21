<?php
class Controller_M_Battle extends Controller_Template
{

	public function action_index()
	{
		$data['m_battles'] = Model_M_Battle::find('all');
		$this->template->title = "M_battles";
		$this->template->content = View::forge('m/battle/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/battle');

		if ( ! $data['m_battle'] = Model_M_Battle::find($id))
		{
			Session::set_flash('error', 'Could not find m_battle #'.$id);
			Response::redirect('m/battle');
		}

		$this->template->title = "M_battle";
		$this->template->content = View::forge('m/battle/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Battle::validate('create');

			if ($val->run())
			{
				$m_battle = Model_M_Battle::forge(array(
					'm_battle_id' => Input::post('m_battle_id'),
					'm_enemy_set_id' => Input::post('m_enemy_set_id'),
				));

				if ($m_battle and $m_battle->save())
				{
					Session::set_flash('success', 'Added m_battle #'.$m_battle->id.'.');

					Response::redirect('m/battle');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_battle.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Battles";
		$this->template->content = View::forge('m/battle/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/battle');

		if ( ! $m_battle = Model_M_Battle::find($id))
		{
			Session::set_flash('error', 'Could not find m_battle #'.$id);
			Response::redirect('m/battle');
		}

		$val = Model_M_Battle::validate('edit');

		if ($val->run())
		{
			$m_battle->m_battle_id = Input::post('m_battle_id');
			$m_battle->m_enemy_set_id = Input::post('m_enemy_set_id');

			if ($m_battle->save())
			{
				Session::set_flash('success', 'Updated m_battle #' . $id);

				Response::redirect('m/battle');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_battle #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_battle->m_battle_id = $val->validated('m_battle_id');
				$m_battle->m_enemy_set_id = $val->validated('m_enemy_set_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_battle', $m_battle, false);
		}

		$this->template->title = "M_battles";
		$this->template->content = View::forge('m/battle/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/battle');

		if ($m_battle = Model_M_Battle::find($id))
		{
			$m_battle->delete();

			Session::set_flash('success', 'Deleted m_battle #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_battle #'.$id);
		}

		Response::redirect('m/battle');

	}

}
