<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M dungeon id', 'm_dungeon_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_id', Input::post('m_dungeon_id', isset($m_dungeon) ? $m_dungeon->m_dungeon_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M dungeon set id', 'm_dungeon_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_set_id', Input::post('m_dungeon_set_id', isset($m_dungeon) ? $m_dungeon->m_dungeon_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($m_dungeon) ? $m_dungeon->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Flavor text', 'flavor_text', array('class'=>'control-label')); ?>

				<?php echo Form::input('flavor_text', Input::post('flavor_text', isset($m_dungeon) ? $m_dungeon->flavor_text : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Flavor text')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Floor', 'floor', array('class'=>'control-label')); ?>

				<?php echo Form::input('floor', Input::post('floor', isset($m_dungeon) ? $m_dungeon->floor : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Floor')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>