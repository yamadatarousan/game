<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M treasure id', 'm_treasure_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_treasure_id', Input::post('m_treasure_id', isset($m_treasure) ? $m_treasure->m_treasure_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M treasure id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M treasure set id', 'm_treasure_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_treasure_set_id', Input::post('m_treasure_set_id', isset($m_treasure) ? $m_treasure->m_treasure_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M treasure set id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M item id', 'm_item_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_item_id', Input::post('m_item_id', isset($m_treasure) ? $m_treasure->m_item_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M item id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Count', 'count', array('class'=>'control-label')); ?>

				<?php echo Form::input('count', Input::post('count', isset($m_treasure) ? $m_treasure->count : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Count')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>