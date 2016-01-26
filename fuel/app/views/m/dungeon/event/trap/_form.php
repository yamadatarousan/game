<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M dungeon event trap id', 'm_dungeon_event_trap_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_event_trap_id', Input::post('m_dungeon_event_trap_id', isset($m_dungeon_event_trap) ? $m_dungeon_event_trap->m_dungeon_event_trap_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon event trap id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M dungeon event set id', 'm_dungeon_event_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_event_set_id', Input::post('m_dungeon_event_set_id', isset($m_dungeon_event_trap) ? $m_dungeon_event_trap->m_dungeon_event_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon event set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M trap id', 'm_trap_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_trap_id', Input::post('m_trap_id', isset($m_dungeon_event_trap) ? $m_dungeon_event_trap->m_trap_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M trap id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Weight', 'weight', array('class'=>'control-label')); ?>

				<?php echo Form::input('weight', Input::post('weight', isset($m_dungeon_event_trap) ? $m_dungeon_event_trap->weight : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Weight')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>