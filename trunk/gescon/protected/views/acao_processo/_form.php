<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'acao-processo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'aca_tipo'); ?>
		<?php echo $form->textField($model,'aca_tipo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'aca_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_id'); ?>
		<?php echo $form->textField($model,'usu_id'); ?>
		<?php echo $form->error($model,'usu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aca_obs'); ?>
		<?php echo $form->textArea($model,'aca_obs',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'aca_obs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_id'); ?>
		<?php echo $form->textField($model,'pro_id'); ?>
		<?php echo $form->error($model,'pro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aca_data'); ?>
		<?php echo $form->textField($model,'aca_data'); ?>
		<?php echo $form->error($model,'aca_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->