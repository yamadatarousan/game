<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('M item id', 'm_item_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_item_id', Input::post('m_item_id', isset($m_item) ? $m_item->m_item_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M item id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Item type', 'item_type', array('class'=>'control-label')); ?>

				<?php echo Form::input('item_type', Input::post('item_type', isset($m_item) ? $m_item->item_type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Item type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($m_item) ? $m_item->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Flavor text', 'flavor_text', array('class'=>'control-label')); ?>

				<?php echo Form::input('flavor_text', Input::post('flavor_text', isset($m_item) ? $m_item->flavor_text : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Flavor text')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('M item effect id', 'm_item_effect_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('m_item_effect_id', Input::post('m_item_effect_id', isset($m_item) ? $m_item->m_item_effect_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'M item effect id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>