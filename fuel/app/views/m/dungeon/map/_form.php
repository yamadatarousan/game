<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M dungeon map id', 'm_dungeon_map_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_map_id', Input::post('m_dungeon_map_id', isset($m_dungeon_map) ? $m_dungeon_map->m_dungeon_map_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon map id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($m_dungeon_map) ? $m_dungeon_map->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Flavor text', 'flavor_text', array('class'=>'control-label')); ?>

				<?php echo Form::input('flavor_text', Input::post('flavor_text', isset($m_dungeon_map) ? $m_dungeon_map->flavor_text : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Flavor text')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M dungeon map set id', 'm_dungeon_map_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_map_set_id', Input::post('m_dungeon_map_set_id', isset($m_dungeon_map) ? $m_dungeon_map->m_dungeon_map_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon map set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('X', 'x', array('class'=>'control-label')); ?>

				<?php echo Form::input('x', Input::post('x', isset($m_dungeon_map) ? $m_dungeon_map->x : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'X')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Y', 'y', array('class'=>'control-label')); ?>

				<?php echo Form::input('y', Input::post('y', isset($m_dungeon_map) ? $m_dungeon_map->y : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Y')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Weight', 'weight', array('class'=>'control-label')); ?>

				<?php echo Form::input('weight', Input::post('weight', isset($m_dungeon_map) ? $m_dungeon_map->weight : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Weight')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>