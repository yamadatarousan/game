<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M battle id', 'm_battle_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_battle_id', Input::post('m_battle_id', isset($m_battle) ? $m_battle->m_battle_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M battle id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M enemy set id', 'm_enemy_set_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_enemy_set_id', Input::post('m_enemy_set_id', isset($m_battle) ? $m_battle->m_enemy_set_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M enemy set id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>