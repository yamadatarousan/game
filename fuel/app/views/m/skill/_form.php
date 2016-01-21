<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M skill id', 'm_skill_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_skill_id', Input::post('m_skill_id', isset($m_skill) ? $m_skill->m_skill_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M skill id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($m_skill) ? $m_skill->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Flavor text', 'flavor_text', array('class'=>'control-label')); ?>

				<?php echo Form::input('flavor_text', Input::post('flavor_text', isset($m_skill) ? $m_skill->flavor_text : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Flavor text')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M skill effect id', 'm_skill_effect_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_skill_effect_id', Input::post('m_skill_effect_id', isset($m_skill) ? $m_skill->m_skill_effect_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M skill effect id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>