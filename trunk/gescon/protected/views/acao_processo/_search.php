<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'aca_id'); ?>
		<?php echo $form->textField($model,'aca_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aca_tipo'); ?>
		<?php echo $form->textField($model,'aca_tipo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_id'); ?>
		<?php echo $form->textField($model,'usu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aca_obs'); ?>
		<?php echo $form->textArea($model,'aca_obs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_id'); ?>
		<?php echo $form->textField($model,'pro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aca_data'); ?>
		<?php echo $form->textField($model,'aca_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->