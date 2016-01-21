<?php
class Controller_M_Trap extends Controller_Template
{

	public function action_index()
	{
		$data['m_traps'] = Model_M_Trap::find('all');
		$this->template->title = "M_traps";
		$this->template->content = View::forge('m/trap/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/trap');

		if ( ! $data['m_trap'] = Model_M_Trap::find($id))
		{
			Session::set_flash('error', 'Could not find m_trap #'.$id);
			Response::redirect('m/trap');
		}

		$this->template->title = "M_trap";
		$this->template->content = View::forge('m/trap/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Trap::validate('create');

			if ($val->run())
			{
				$m_trap = Model_M_Trap::forge(array(
					'm_trap_id' => Input::post('m_trap_id'),
					'trap_type' => Input::post('trap_type'),
					'effect_rate' => Input::post('effect_rate'),
					'effect_val' => Input::post('effect_val'),
				));

				if ($m_trap and $m_trap->save())
				{
					Session::set_flash('success', 'Added m_trap #'.$m_trap->id.'.');

					Response::redirect('m/trap');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_trap.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Traps";
		$this->template->content = View::forge('m/trap/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/trap');

		if ( ! $m_trap = Model_M_Trap::find($id))
		{
			Session::set_flash('error', 'Could not find m_trap #'.$id);
			Response::redirect('m/trap');
		}

		$val = Model_M_Trap::validate('edit');

		if ($val->run())
		{
			$m_trap->m_trap_id = Input::post('m_trap_id');
			$m_trap->trap_type = Input::post('trap_type');
			$m_trap->effect_rate = Input::post('effect_rate');
			$m_trap->effect_val = Input::post('effect_val');

			if ($m_trap->save())
			{
				Session::set_flash('success', 'Updated m_trap #' . $id);

				Response::redirect('m/trap');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_trap #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_trap->m_trap_id = $val->validated('m_trap_id');
				$m_trap->trap_type = $val->validated('trap_type');
				$m_trap->effect_rate = $val->validated('effect_rate');
				$m_trap->effect_val = $val->validated('effect_val');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_trap', $m_trap, false);
		}

		$this->template->title = "M_traps";
		$this->template->content = View::forge('m/trap/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/trap');

		if ($m_trap = Model_M_Trap::find($id))
		{
			$m_trap->delete();

			Session::set_flash('success', 'Deleted m_trap #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_trap #'.$id);
		}

		Response::redirect('m/trap');

	}

}
