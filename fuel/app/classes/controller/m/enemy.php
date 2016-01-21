<?php
class Controller_M_Enemy extends Controller_Template
{

	public function action_index()
	{
		$data['m_enemies'] = Model_M_Enemy::find('all');
		$this->template->title = "M_enemies";
		$this->template->content = View::forge('m/enemy/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('m/enemy');

		if ( ! $data['m_enemy'] = Model_M_Enemy::find($id))
		{
			Session::set_flash('error', 'Could not find m_enemy #'.$id);
			Response::redirect('m/enemy');
		}

		$this->template->title = "M_enemy";
		$this->template->content = View::forge('m/enemy/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_M_Enemy::validate('create');

			if ($val->run())
			{
				$m_enemy = Model_M_Enemy::forge(array(
					'm_enemy_id' => Input::post('m_enemy_id'),
					'name' => Input::post('name'),
					'flavor_text' => Input::post('flavor_text'),
					'hp' => Input::post('hp'),
					'mp' => Input::post('mp'),
					'atk' => Input::post('atk'),
					'def' => Input::post('def'),
					'spd' => Input::post('spd'),
					'luck' => Input::post('luck'),
					'm_skill_bundle_id' => Input::post('m_skill_bundle_id'),
					'm_treasure_set_id' => Input::post('m_treasure_set_id'),
				));

				if ($m_enemy and $m_enemy->save())
				{
					Session::set_flash('success', 'Added m_enemy #'.$m_enemy->id.'.');

					Response::redirect('m/enemy');
				}

				else
				{
					Session::set_flash('error', 'Could not save m_enemy.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "M_Enemies";
		$this->template->content = View::forge('m/enemy/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('m/enemy');

		if ( ! $m_enemy = Model_M_Enemy::find($id))
		{
			Session::set_flash('error', 'Could not find m_enemy #'.$id);
			Response::redirect('m/enemy');
		}

		$val = Model_M_Enemy::validate('edit');

		if ($val->run())
		{
			$m_enemy->m_enemy_id = Input::post('m_enemy_id');
			$m_enemy->name = Input::post('name');
			$m_enemy->flavor_text = Input::post('flavor_text');
			$m_enemy->hp = Input::post('hp');
			$m_enemy->mp = Input::post('mp');
			$m_enemy->atk = Input::post('atk');
			$m_enemy->def = Input::post('def');
			$m_enemy->spd = Input::post('spd');
			$m_enemy->luck = Input::post('luck');
			$m_enemy->m_skill_bundle_id = Input::post('m_skill_bundle_id');
			$m_enemy->m_treasure_set_id = Input::post('m_treasure_set_id');

			if ($m_enemy->save())
			{
				Session::set_flash('success', 'Updated m_enemy #' . $id);

				Response::redirect('m/enemy');
			}

			else
			{
				Session::set_flash('error', 'Could not update m_enemy #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$m_enemy->m_enemy_id = $val->validated('m_enemy_id');
				$m_enemy->name = $val->validated('name');
				$m_enemy->flavor_text = $val->validated('flavor_text');
				$m_enemy->hp = $val->validated('hp');
				$m_enemy->mp = $val->validated('mp');
				$m_enemy->atk = $val->validated('atk');
				$m_enemy->def = $val->validated('def');
				$m_enemy->spd = $val->validated('spd');
				$m_enemy->luck = $val->validated('luck');
				$m_enemy->m_skill_bundle_id = $val->validated('m_skill_bundle_id');
				$m_enemy->m_treasure_set_id = $val->validated('m_treasure_set_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('m_enemy', $m_enemy, false);
		}

		$this->template->title = "M_enemies";
		$this->template->content = View::forge('m/enemy/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('m/enemy');

		if ($m_enemy = Model_M_Enemy::find($id))
		{
			$m_enemy->delete();

			Session::set_flash('success', 'Deleted m_enemy #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete m_enemy #'.$id);
		}

		Response::redirect('m/enemy');

	}

}
