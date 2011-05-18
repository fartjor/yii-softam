<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'emp_id'); ?>
		<?php echo $form->textField($model,'emp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_id'); ?>
		<?php echo $form->textField($model,'end_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_nome'); ?>
		<?php echo $form->textField($model,'emp_nome',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cnpj'); ?>
		<?php echo $form->textField($model,'emp_cnpj',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_data_ingresso'); ?>
		<?php echo $form->textField($model,'emp_data_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_site'); ?>
		<?php echo $form->textField($model,'emp_site',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_email'); ?>
		<?php echo $form->textField($model,'emp_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cpf_socio_majoritario'); ?>
		<?php echo $form->textField($model,'emp_cpf_socio_majoritario',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_id'); ?>
		<?php echo $form->textField($model,'tel_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->