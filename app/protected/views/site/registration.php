<?php if($total < 20 && $date): ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teams-Registration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
		'class' => 'form-horizontal',
	)
)); ?>

<div class="alert alert-info" role="alert">
	<div class="form-group">
		<?php echo $form->labelEx($model,'name', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->textField($model,'name', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'university', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->textField($model,'university', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'university'); ?>
		</div>
	</div>

</div>

<div class="panel panel-primary">
  <div class="panel-heading">สมาชิกคนที่ 1 (หัวหน้าทีม)</div>
  <div class="panel-body">
	<div class="form-group">
		<?php echo $form->labelEx($model,'name1', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo $form->textField($model,'name1', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'name1'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tel1', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-2">
			<?php echo $form->textField($model,'tel1', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'tel1'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email1', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo $form->textField($model,'email1', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'email1'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'level1', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-1">
			<?php echo $form->dropdownList($model,'level1', array('1' => 1, '2' => 2), array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'level1'); ?>
		</div>
	</div>
  </div>
</div>

<div class="panel panel-success">
  <div class="panel-heading">สมาชิกคนที่ 2</div>
  <div class="panel-body">
	<div class="form-group">
		<?php echo $form->labelEx($model,'name2', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo $form->textField($model,'name2', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'name2'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tel2', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-2">
			<?php echo $form->textField($model,'tel2', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'tel2'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email2', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo $form->textField($model,'email2', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'email2'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'level2', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-1">
			<?php echo $form->dropdownList($model,'level2', array('1' => 1, '2' => 2), array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'level2'); ?>
		</div>
	</div>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">สมาชิกคนที่ 3</div>
  <div class="panel-body">
	<div class="form-group">
		<?php echo $form->labelEx($model,'name3', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo $form->textField($model,'name3', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'name3'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tel3', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-2">
			<?php echo $form->textField($model,'tel3', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'tel3'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email3', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo $form->textField($model,'email3', array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'email3'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'level3', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-1">
			<?php echo $form->dropdownList($model,'level3', array('1' => 1, '2' => 2), array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'level3'); ?>
		</div>
	</div>
  </div>
</div>

<div class="jumbotron" align="center">
	<?php echo CHtml::submitButton('สมัครเข้าแข่งขัน', array('class' => 'btn btn-primary btn-lg')); ?>
	<?php echo CHtml::resetButton('ยกเลิก', array('class' => 'btn btn-default btn-lg')); ?>
</div>

<?php $this->endWidget(); ?>

<?php else: ?>

<h1 align="center" style="margin: 50px 0 50px 0; font-size: 36pt">
	<span class="label label-danger">
		ปิดรับสมัครทีมผู้เข้าแข่งขัน
	</span>
</h1>

<div align="center">
<?php echo CHtml::image('images/close.gif', '', array(
	'style' => 'margin-bottom: 50px;',
)); ?>
</div>
<?php endif; ?>