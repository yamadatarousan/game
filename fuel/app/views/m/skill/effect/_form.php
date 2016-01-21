<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M skill effect id', 'm_skill_effect_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_skill_effect_id', Input::post('m_skill_effect_id', isset($m_skill_effect) ? $m_skill_effect->m_skill_effect_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M skill effect id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M skill effect id', 'm_skill_effect_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_skill_effect_id', Input::post('m_skill_effect_id', isset($m_skill_effect) ? $m_skill_effect->m_skill_effect_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M skill effect id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Effect type', 'effect_type', array('class'=>'control-label')); ?>

				<?php echo Form::input('effect_type', Input::post('effect_type', isset($m_skill_effect) ? $m_skill_effect->effect_type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Effect type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Effect rate', 'effect_rate', array('class'=>'control-label')); ?>

				<?php echo Form::input('effect_rate', Input::post('effect_rate', isset($m_skill_effect) ? $m_skill_effect->effect_rate : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Effect rate')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Effect val', 'effect_val', array('class'=>'control-label')); ?>

				<?php echo Form::input('effect_val', Input::post('effect_val', isset($m_skill_effect) ? $m_skill_effect->effect_val : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Effect val')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>