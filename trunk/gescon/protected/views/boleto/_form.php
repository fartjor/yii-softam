<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boleto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bol_valor'); ?>
		<?php echo $form->textField($model,'bol_valor',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'bol_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bol_vencimento'); ?>
		<?php echo $form->textField($model,'bol_vencimento'); ?>
		<?php echo $form->error($model,'bol_vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bol_transacao'); ?>
		<?php echo $form->textField($model,'bol_transacao',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'bol_transacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bol_situacao'); ?>
		<?php echo $form->textField($model,'bol_situacao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bol_situacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_id'); ?>
		<?php echo $form->textField($model,'pro_id'); ?>
		<?php echo $form->error($model,'pro_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->