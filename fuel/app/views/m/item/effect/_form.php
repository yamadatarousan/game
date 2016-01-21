<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M item effect id', 'm_item_effect_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_item_effect_id', Input::post('m_item_effect_id', isset($m_item_effect) ? $m_item_effect->m_item_effect_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M item effect id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Effect type', 'effect_type', array('class'=>'control-label')); ?>

				<?php echo Form::input('effect_type', Input::post('effect_type', isset($m_item_effect) ? $m_item_effect->effect_type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Effect type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hp', 'hp', array('class'=>'control-label')); ?>

				<?php echo Form::input('hp', Input::post('hp', isset($m_item_effect) ? $m_item_effect->hp : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hp')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Mp', 'mp', array('class'=>'control-label')); ?>

				<?php echo Form::input('mp', Input::post('mp', isset($m_item_effect) ? $m_item_effect->mp : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Mp')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Atk', 'atk', array('class'=>'control-label')); ?>

				<?php echo Form::input('atk', Input::post('atk', isset($m_item_effect) ? $m_item_effect->atk : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Atk')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Def', 'def', array('class'=>'control-label')); ?>

				<?php echo Form::input('def', Input::post('def', isset($m_item_effect) ? $m_item_effect->def : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Def')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Spd', 'spd', array('class'=>'control-label')); ?>

				<?php echo Form::input('spd', Input::post('spd', isset($m_item_effect) ? $m_item_effect->spd : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Spd')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Luck', 'luck', array('class'=>'control-label')); ?>

				<?php echo Form::input('luck', Input::post('luck', isset($m_item_effect) ? $m_item_effect->luck : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Luck')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>