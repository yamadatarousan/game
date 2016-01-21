<?php
class Controller_M_Skill_Effect extends Controller_Template
{

	public function action_index()
	{
		$data['m_skill_effects'] = Model_M_Skill_Effect::find('all');
		$this->template->title = "M_skill_effects";
		$this->template->content = View::forge('m/skill/effect/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/skill/effect');

		if ( ! $data['m_skill_effect'] = Model_M_Skill_Effect::find($id))
		{
			Session::set_flash('error', 'Could not find m_skill_effect #'.$id);
			Response::redirect('m/skill/effect');
		}

		$this->template->title = "M_skill_effect";
		$this->template->content = View::forge('m/skill/effect/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Skill_Effect::validate('create');

			if ($val->run())
			{
				$m_skill_effect = Model_M_Skill_Effect::forge(array(
					'm_skill_effect_id' => Input::post('m_skill_effect_id'),
					'm_skill_effect_id' => Input::post('m_skill_effect_id'),
					'effect_type' => Input::post('effect_type'),
					'effect_rate' => Input::post('effect_rate'),
					'effect_val' => Input::post('effect_val'),
				));

				if ($m_skill_effect and $m_skill_effect->save())
				{
					Session::set_flash('success', 'Added m_skill_effect #'.$m_skill_effect->id.'.');

					Response::redirect('m/skill/effect');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_skill_effect.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Skill_Effects";
		$this->template->content = View::forge('m/skill/effect/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/skill/effect');

		if ( ! $m_skill_effect = Model_M_Skill_Effect::find($id))
		{
			Session::set_flash('error', 'Could not find m_skill_effect #'.$id);
			Response::redirect('m/skill/effect');
		}

		$val = Model_M_Skill_Effect::validate('edit');

		if ($val->run())
		{
			$m_skill_effect->m_skill_effect_id = Input::post('m_skill_effect_id');
			$m_skill_effect->m_skill_effect_id = Input::post('m_skill_effect_id');
			$m_skill_effect->effect_type = Input::post('effect_type');
			$m_skill_effect->effect_rate = Input::post('effect_rate');
			$m_skill_effect->effect_val = Input::post('effect_val');

			if ($m_skill_effect->save())
			{
				Session::set_flash('success', 'Updated m_skill_effect #' . $id);

				Response::redirect('m/skill/effect');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_skill_effect #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_skill_effect->m_skill_effect_id = $val->validated('m_skill_effect_id');
				$m_skill_effect->m_skill_effect_id = $val->validated('m_skill_effect_id');
				$m_skill_effect->effect_type = $val->validated('effect_type');
				$m_skill_effect->effect_rate = $val->validated('effect_rate');
				$m_skill_effect->effect_val = $val->validated('effect_val');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_skill_effect', $m_skill_effect, false);
		}

		$this->template->title = "M_skill_effects";
		$this->template->content = View::forge('m/skill/effect/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/skill/effect');

		if ($m_skill_effect = Model_M_Skill_Effect::find($id))
		{
			$m_skill_effect->delete();

			Session::set_flash('success', 'Deleted m_skill_effect #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_skill_effect #'.$id);
		}

		Response::redirect('m/skill/effect');

	}

}
