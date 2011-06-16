<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bol_codigo'); ?>
		<?php echo $form->textField($model,'bol_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bol_valor'); ?>
		<?php echo $form->textField($model,'bol_valor',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bol_vencimento'); ?>
		<?php echo $form->textField($model,'bol_vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bol_transacao'); ?>
		<?php echo $form->textField($model,'bol_transacao',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bol_situacao'); ?>
		<?php echo $form->textField($model,'bol_situacao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_id'); ?>
		<?php echo $form->textField($model,'pro_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->