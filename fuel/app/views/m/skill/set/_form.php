<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M skill set id', 'm_skill_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_skill_set_id', Input::post('m_skill_set_id', isset($m_skill_set) ? $m_skill_set->m_skill_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M skill set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M skill bundle id', 'm_skill_bundle_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_skill_bundle_id', Input::post('m_skill_bundle_id', isset($m_skill_set) ? $m_skill_set->m_skill_bundle_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M skill bundle id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M skill id', 'm_skill_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_skill_id', Input::post('m_skill_id', isset($m_skill_set) ? $m_skill_set->m_skill_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M skill id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>