<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M dungeon event treasure id', 'm_dungeon_event_treasure_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_event_treasure_id', Input::post('m_dungeon_event_treasure_id', isset($m_dungeon_event_treasure) ? $m_dungeon_event_treasure->m_dungeon_event_treasure_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon event treasure id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M dungeon event set id', 'm_dungeon_event_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_event_set_id', Input::post('m_dungeon_event_set_id', isset($m_dungeon_event_treasure) ? $m_dungeon_event_treasure->m_dungeon_event_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon event set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M tresure set id', 'm_tresure_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_tresure_set_id', Input::post('m_tresure_set_id', isset($m_dungeon_event_treasure) ? $m_dungeon_event_treasure->m_tresure_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M tresure set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Rate', 'rate', array('class'=>'control-label')); ?>

				<?php echo Form::input('rate', Input::post('rate', isset($m_dungeon_event_treasure) ? $m_dungeon_event_treasure->rate : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Rate')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Weight', 'weight', array('class'=>'control-label')); ?>

				<?php echo Form::input('weight', Input::post('weight', isset($m_dungeon_event_treasure) ? $m_dungeon_event_treasure->weight : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Weight')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>