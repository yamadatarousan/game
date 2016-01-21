<?php
class Controller_M_Item_Effect extends Controller_Template
{

	public function action_index()
	{
		$data['m_item_effects'] = Model_M_Item_Effect::find('all');
		$this->template->title = "M_item_effects";
		$this->template->content = View::forge('m/item/effect/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/item/effect');

		if ( ! $data['m_item_effect'] = Model_M_Item_Effect::find($id))
		{
			Session::set_flash('error', 'Could not find m_item_effect #'.$id);
			Response::redirect('m/item/effect');
		}

		$this->template->title = "M_item_effect";
		$this->template->content = View::forge('m/item/effect/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Item_Effect::validate('create');

			if ($val->run())
			{
				$m_item_effect = Model_M_Item_Effect::forge(array(
					'm_item_effect_id' => Input::post('m_item_effect_id'),
					'effect_type' => Input::post('effect_type'),
					'hp' => Input::post('hp'),
					'mp' => Input::post('mp'),
					'atk' => Input::post('atk'),
					'def' => Input::post('def'),
					'spd' => Input::post('spd'),
					'luck' => Input::post('luck'),
				));

				if ($m_item_effect and $m_item_effect->save())
				{
					Session::set_flash('success', 'Added m_item_effect #'.$m_item_effect->id.'.');

					Response::redirect('m/item/effect');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_item_effect.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Item_Effects";
		$this->template->content = View::forge('m/item/effect/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/item/effect');

		if ( ! $m_item_effect = Model_M_Item_Effect::find($id))
		{
			Session::set_flash('error', 'Could not find m_item_effect #'.$id);
			Response::redirect('m/item/effect');
		}

		$val = Model_M_Item_Effect::validate('edit');

		if ($val->run())
		{
			$m_item_effect->m_item_effect_id = Input::post('m_item_effect_id');
			$m_item_effect->effect_type = Input::post('effect_type');
			$m_item_effect->hp = Input::post('hp');
			$m_item_effect->mp = Input::post('mp');
			$m_item_effect->atk = Input::post('atk');
			$m_item_effect->def = Input::post('def');
			$m_item_effect->spd = Input::post('spd');
			$m_item_effect->luck = Input::post('luck');

			if ($m_item_effect->save())
			{
				Session::set_flash('success', 'Updated m_item_effect #' . $id);

				Response::redirect('m/item/effect');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_item_effect #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_item_effect->m_item_effect_id = $val->validated('m_item_effect_id');
				$m_item_effect->effect_type = $val->validated('effect_type');
				$m_item_effect->hp = $val->validated('hp');
				$m_item_effect->mp = $val->validated('mp');
				$m_item_effect->atk = $val->validated('atk');
				$m_item_effect->def = $val->validated('def');
				$m_item_effect->spd = $val->validated('spd');
				$m_item_effect->luck = $val->validated('luck');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_item_effect', $m_item_effect, false);
		}

		$this->template->title = "M_item_effects";
		$this->template->content = View::forge('m/item/effect/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/item/effect');

		if ($m_item_effect = Model_M_Item_Effect::find($id))
		{
			$m_item_effect->delete();

			Session::set_flash('success', 'Deleted m_item_effect #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_item_effect #'.$id);
		}

		Response::redirect('m/item/effect');

	}

}
