<?php
class Controller_M_Item extends Controller_Template
{

	public function action_index()
	{
		$data['m_items'] = Model_M_Item::find('all');
		$this->template->title = "M_items";
		$this->template->content = View::forge('m/item/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/item');

		if ( ! $data['m_item'] = Model_M_Item::find($id))
		{
			Session::set_flash('error', 'Could not find m_item #'.$id);
			Response::redirect('m/item');
		}

		$this->template->title = "M_item";
		$this->template->content = View::forge('m/item/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Item::validate('create');

			if ($val->run())
			{
				$m_item = Model_M_Item::forge(array(
					'm_item_id' => Input::post('m_item_id'),
					'item_type' => Input::post('item_type'),
					'name' => Input::post('name'),
					'flavor_text' => Input::post('flavor_text'),
					'm_item_effect_id' => Input::post('m_item_effect_id'),
				));

				if ($m_item and $m_item->save())
				{
					Session::set_flash('success', 'Added m_item #'.$m_item->id.'.');

					Response::redirect('m/item');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_item.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Items";
		$this->template->content = View::forge('m/item/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/item');

		if ( ! $m_item = Model_M_Item::find($id))
		{
			Session::set_flash('error', 'Could not find m_item #'.$id);
			Response::redirect('m/item');
		}

		$val = Model_M_Item::validate('edit');

		if ($val->run())
		{
			$m_item->m_item_id = Input::post('m_item_id');
			$m_item->item_type = Input::post('item_type');
			$m_item->name = Input::post('name');
			$m_item->flavor_text = Input::post('flavor_text');
			$m_item->m_item_effect_id = Input::post('m_item_effect_id');

			if ($m_item->save())
			{
				Session::set_flash('success', 'Updated m_item #' . $id);

				Response::redirect('m/item');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_item #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_item->m_item_id = $val->validated('m_item_id');
				$m_item->item_type = $val->validated('item_type');
				$m_item->name = $val->validated('name');
				$m_item->flavor_text = $val->validated('flavor_text');
				$m_item->m_item_effect_id = $val->validated('m_item_effect_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_item', $m_item, false);
		}

		$this->template->title = "M_items";
		$this->template->content = View::forge('m/item/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/item');

		if ($m_item = Model_M_Item::find($id))
		{
			$m_item->delete();

			Session::set_flash('success', 'Deleted m_item #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_item #'.$id);
		}

		Response::redirect('m/item');

	}

}
