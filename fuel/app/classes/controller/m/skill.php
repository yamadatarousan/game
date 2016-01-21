<?php
class Controller_M_Skill extends Controller_Template
{

	public function action_index()
	{
		$data['m_skills'] = Model_M_Skill::find('all');
		$this->template->title = "M_skills";
		$this->template->content = View::forge('m/skill/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/skill');

		if ( ! $data['m_skill'] = Model_M_Skill::find($id))
		{
			Session::set_flash('error', 'Could not find m_skill #'.$id);
			Response::redirect('m/skill');
		}

		$this->template->title = "M_skill";
		$this->template->content = View::forge('m/skill/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Skill::validate('create');

			if ($val->run())
			{
				$m_skill = Model_M_Skill::forge(array(
					'm_skill_id' => Input::post('m_skill_id'),
					'name' => Input::post('name'),
					'flavor_text' => Input::post('flavor_text'),
					'm_skill_effect_id' => Input::post('m_skill_effect_id'),
				));

				if ($m_skill and $m_skill->save())
				{
					Session::set_flash('success', 'Added m_skill #'.$m_skill->id.'.');

					Response::redirect('m/skill');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_skill.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Skills";
		$this->template->content = View::forge('m/skill/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/skill');

		if ( ! $m_skill = Model_M_Skill::find($id))
		{
			Session::set_flash('error', 'Could not find m_skill #'.$id);
			Response::redirect('m/skill');
		}

		$val = Model_M_Skill::validate('edit');

		if ($val->run())
		{
			$m_skill->m_skill_id = Input::post('m_skill_id');
			$m_skill->name = Input::post('name');
			$m_skill->flavor_text = Input::post('flavor_text');
			$m_skill->m_skill_effect_id = Input::post('m_skill_effect_id');

			if ($m_skill->save())
			{
				Session::set_flash('success', 'Updated m_skill #' . $id);

				Response::redirect('m/skill');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_skill #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_skill->m_skill_id = $val->validated('m_skill_id');
				$m_skill->name = $val->validated('name');
				$m_skill->flavor_text = $val->validated('flavor_text');
				$m_skill->m_skill_effect_id = $val->validated('m_skill_effect_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_skill', $m_skill, false);
		}

		$this->template->title = "M_skills";
		$this->template->content = View::forge('m/skill/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/skill');

		if ($m_skill = Model_M_Skill::find($id))
		{
			$m_skill->delete();

			Session::set_flash('success', 'Deleted m_skill #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_skill #'.$id);
		}

		Response::redirect('m/skill');

	}

}
