<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M trap id', 'm_trap_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_trap_id', Input::post('m_trap_id', isset($m_trap) ? $m_trap->m_trap_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M trap id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Trap type', 'trap_type', array('class'=>'control-label')); ?>

				<?php echo Form::input('trap_type', Input::post('trap_type', isset($m_trap) ? $m_trap->trap_type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Trap type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Effect rate', 'effect_rate', array('class'=>'control-label')); ?>

				<?php echo Form::input('effect_rate', Input::post('effect_rate', isset($m_trap) ? $m_trap->effect_rate : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Effect rate')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Effect val', 'effect_val', array('class'=>'control-label')); ?>

				<?php echo Form::input('effect_val', Input::post('effect_val', isset($m_trap) ? $m_trap->effect_val : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Effect val')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>