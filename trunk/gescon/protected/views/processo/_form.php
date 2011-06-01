<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'processo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_numero'); ?>
		<?php echo $form->textField($model,'pro_numero'); ?>
		<?php echo $form->error($model,'pro_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'cli_id',CHtml::listData(Cliente::model()->findAll(), 
														"cli_id", "cli_nome"), 
			  											array(	'empty' => 'Selecione um Cliente -->',
			  											  	  	'id' => 'cli_id',
														)
			  										); ?>
		<?php echo $form->error($model,'cli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tpr_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'tpr_id',CHtml::listData(Tipo_processo::model()->findAll(), 
														"tpr_id", "tpr_nome"), 
			  											array(	'empty' => 'Selecione um Tipo de Processo -->',
			  											  	  	'id' => 'tpr_id',
														)
			  										); ?>
		<?php echo $form->error($model,'tpr_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pro_obs'); ?>
		<?php echo $form->textArea($model,'pro_obs',array('cols'=>45,'rows' => 4, 'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pro_obs'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->