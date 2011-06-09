<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-processo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'tpr_nome'); ?>
		<?php echo $form->textField($model,'tpr_nome',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tpr_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tpr_area_atuacao'); ?>
		<?php echo $form->textField($model,'tpr_area_atuacao',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tpr_area_atuacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tpr_obs'); ?>
		<?php echo $form->textArea($model,'tpr_obs',array('cols'=>45, 'rows' => 4,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tpr_obs'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tpr_situacao'); ?>
		<?php echo CHtml::activeDropDownList($model, 'tpr_situacao', $model->situacaoOptions); ?>
		<?php echo $form->error($model,'tpr_situacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->