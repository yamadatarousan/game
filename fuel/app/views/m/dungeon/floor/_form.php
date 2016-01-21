<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M dungeon floor id', 'm_dungeon_floor_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_floor_id', Input::post('m_dungeon_floor_id', isset($m_dungeon_floor) ? $m_dungeon_floor->m_dungeon_floor_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon floor id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($m_dungeon_floor) ? $m_dungeon_floor->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Flavor text', 'flavor_text', array('class'=>'control-label')); ?>

				<?php echo Form::input('flavor_text', Input::post('flavor_text', isset($m_dungeon_floor) ? $m_dungeon_floor->flavor_text : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Flavor text')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M dungeon set id', 'm_dungeon_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_set_id', Input::post('m_dungeon_set_id', isset($m_dungeon_floor) ? $m_dungeon_floor->m_dungeon_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Low', 'low', array('class'=>'control-label')); ?>

				<?php echo Form::input('low', Input::post('low', isset($m_dungeon_floor) ? $m_dungeon_floor->low : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Low')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('High', 'high', array('class'=>'control-label')); ?>

				<?php echo Form::input('high', Input::post('high', isset($m_dungeon_floor) ? $m_dungeon_floor->high : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'High')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M dungeon map set id', 'm_dungeon_map_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_map_set_id', Input::post('m_dungeon_map_set_id', isset($m_dungeon_floor) ? $m_dungeon_floor->m_dungeon_map_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon map set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M dungeon event set id', 'm_dungeon_event_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_event_set_id', Input::post('m_dungeon_event_set_id', isset($m_dungeon_floor) ? $m_dungeon_floor->m_dungeon_event_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon event set id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>