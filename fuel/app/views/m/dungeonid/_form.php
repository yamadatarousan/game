<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M dungeon id', 'm_dungeon_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_dungeon_id', Input::post('m_dungeon_id', isset($m_dungeonid) ? $m_dungeonid->m_dungeon_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M dungeon id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>