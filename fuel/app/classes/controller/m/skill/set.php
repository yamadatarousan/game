<?php
class Controller_M_Skill_Set extends Controller_Template
{

	public function action_index()
	{
		$data['m_skill_sets'] = Model_M_Skill_Set::find('all');
		$this->template->title = "M_skill_sets";
		$this->template->content = View::forge('m/skill/set/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/skill/set');

		if ( ! $data['m_skill_set'] = Model_M_Skill_Set::find($id))
		{
			Session::set_flash('error', 'Could not find m_skill_set #'.$id);
			Response::redirect('m/skill/set');
		}

		$this->template->title = "M_skill_set";
		$this->template->content = View::forge('m/skill/set/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Skill_Set::validate('create');

			if ($val->run())
			{
				$m_skill_set = Model_M_Skill_Set::forge(array(
					'm_skill_set_id' => Input::post('m_skill_set_id'),
					'm_skill_bundle_id' => Input::post('m_skill_bundle_id'),
					'm_skill_id' => Input::post('m_skill_id'),
				));

				if ($m_skill_set and $m_skill_set->save())
				{
					Session::set_flash('success', 'Added m_skill_set #'.$m_skill_set->id.'.');

					Response::redirect('m/skill/set');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_skill_set.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Skill_Sets";
		$this->template->content = View::forge('m/skill/set/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/skill/set');

		if ( ! $m_skill_set = Model_M_Skill_Set::find($id))
		{
			Session::set_flash('error', 'Could not find m_skill_set #'.$id);
			Response::redirect('m/skill/set');
		}

		$val = Model_M_Skill_Set::validate('edit');

		if ($val->run())
		{
			$m_skill_set->m_skill_set_id = Input::post('m_skill_set_id');
			$m_skill_set->m_skill_bundle_id = Input::post('m_skill_bundle_id');
			$m_skill_set->m_skill_id = Input::post('m_skill_id');

			if ($m_skill_set->save())
			{
				Session::set_flash('success', 'Updated m_skill_set #' . $id);

				Response::redirect('m/skill/set');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_skill_set #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_skill_set->m_skill_set_id = $val->validated('m_skill_set_id');
				$m_skill_set->m_skill_bundle_id = $val->validated('m_skill_bundle_id');
				$m_skill_set->m_skill_id = $val->validated('m_skill_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_skill_set', $m_skill_set, false);
		}

		$this->template->title = "M_skill_sets";
		$this->template->content = View::forge('m/skill/set/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/skill/set');

		if ($m_skill_set = Model_M_Skill_Set::find($id))
		{
			$m_skill_set->delete();

			Session::set_flash('success', 'Deleted m_skill_set #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_skill_set #'.$id);
		}

		Response::redirect('m/skill/set');

	}

}
