<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('名前', 'name', array('class'=>'control-label')); ?>
			<?php echo Form::input('name', Input::post('name', isset($councilors) ? $councilors->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'アイコン')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('ニックネーム', 'nickname', array('class'=>'control-label')); ?>
			<?php echo Form::input('nickname', Input::post('nickname', isset($councilors) ? $councilors->nickname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'ニックネーム')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('場所', 'location', array('class'=>'control-label')); ?>
			<?php echo Form::input('location', Input::post('location', isset($councilors) ? $councilors->location : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'場所')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('アイコン', 'icon_url', array('class'=>'control-label')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::file('icon_url', array('class' => 'col-md-8', 'placeholder'=>'アイコン')); ?>
		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', '登録', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
