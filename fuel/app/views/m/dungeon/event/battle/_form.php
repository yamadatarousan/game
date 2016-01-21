<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M dungeon event battle id', 'm_dungeon_event_battle_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_event_battle_id', Input::post('m_dungeon_event_battle_id', isset($m_dungeon_event_battle) ? $m_dungeon_event_battle->m_dungeon_event_battle_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon event battle id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M dungeon event set id', 'm_dungeon_event_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_event_set_id', Input::post('m_dungeon_event_set_id', isset($m_dungeon_event_battle) ? $m_dungeon_event_battle->m_dungeon_event_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon event set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M battle id', 'm_battle_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_battle_id', Input::post('m_battle_id', isset($m_dungeon_event_battle) ? $m_dungeon_event_battle->m_battle_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M battle id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Weight', 'weight', array('class'=>'control-label')); ?>

				<?php echo Form::input('weight', Input::post('weight', isset($m_dungeon_event_battle) ? $m_dungeon_event_battle->weight : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Weight')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>