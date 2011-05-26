<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'car_nome'); ?>
		<?php echo $form->textField($model,'car_nome',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'car_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_ativo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'car_ativo', $model->AtivoOptions); ?>
		<?php echo $form->error($model,'car_ativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_obs'); ?>
		<?php echo $form->textArea($model,'car_obs',array('cols'=> 44, 'rows' => 4,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'car_obs'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->