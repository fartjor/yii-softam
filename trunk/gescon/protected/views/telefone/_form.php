<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'telefone-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_fone1'); ?>
		<?php echo $form->textField($model,'tel_fone1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tel_fone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_fone2'); ?>
		<?php echo $form->textField($model,'tel_fone2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tel_fone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_fone3'); ?>
		<?php echo $form->textField($model,'tel_fone3',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tel_fone3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->