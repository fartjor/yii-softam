<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'end_id'); ?>
		<?php echo $form->textField($model,'end_id'); ?>
		<?php echo $form->error($model,'end_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_nome'); ?>
		<?php echo $form->textField($model,'emp_nome',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_cnpj'); ?>
		<?php echo $form->textField($model,'emp_cnpj',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'emp_cnpj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_data_ingresso'); ?>
		<?php echo $form->textField($model,'emp_data_ingresso'); ?>
		<?php echo $form->error($model,'emp_data_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_site'); ?>
		<?php echo $form->textField($model,'emp_site',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_email'); ?>
		<?php echo $form->textField($model,'emp_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_cpf_socio_majoritario'); ?>
		<?php echo $form->textField($model,'emp_cpf_socio_majoritario',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'emp_cpf_socio_majoritario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_id'); ?>
		<?php echo $form->textField($model,'tel_id'); ?>
		<?php echo $form->error($model,'tel_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->