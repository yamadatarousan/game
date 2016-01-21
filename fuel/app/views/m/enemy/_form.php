<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M enemy id', 'm_enemy_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_enemy_id', Input::post('m_enemy_id', isset($m_enemy) ? $m_enemy->m_enemy_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M enemy id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($m_enemy) ? $m_enemy->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Flavor text', 'flavor_text', array('class'=>'control-label')); ?>

				<?php echo Form::input('flavor_text', Input::post('flavor_text', isset($m_enemy) ? $m_enemy->flavor_text : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Flavor text')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hp', 'hp', array('class'=>'control-label')); ?>

				<?php echo Form::input('hp', Input::post('hp', isset($m_enemy) ? $m_enemy->hp : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hp')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Mp', 'mp', array('class'=>'control-label')); ?>

				<?php echo Form::input('mp', Input::post('mp', isset($m_enemy) ? $m_enemy->mp : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Mp')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Atk', 'atk', array('class'=>'control-label')); ?>

				<?php echo Form::input('atk', Input::post('atk', isset($m_enemy) ? $m_enemy->atk : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Atk')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Def', 'def', array('class'=>'control-label')); ?>

				<?php echo Form::input('def', Input::post('def', isset($m_enemy) ? $m_enemy->def : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Def')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Spd', 'spd', array('class'=>'control-label')); ?>

				<?php echo Form::input('spd', Input::post('spd', isset($m_enemy) ? $m_enemy->spd : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Spd')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Luck', 'luck', array('class'=>'control-label')); ?>

				<?php echo Form::input('luck', Input::post('luck', isset($m_enemy) ? $m_enemy->luck : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Luck')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M skill bundle id', 'm_skill_bundle_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_skill_bundle_id', Input::post('m_skill_bundle_id', isset($m_enemy) ? $m_enemy->m_skill_bundle_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M skill bundle id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M treasure set id', 'm_treasure_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_treasure_set_id', Input::post('m_treasure_set_id', isset($m_enemy) ? $m_enemy->m_treasure_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M treasure set id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>