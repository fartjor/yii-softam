<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_nome'); ?>
		<?php echo $form->textField($model,'car_nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_data_ingresso'); ?>
		<?php echo $form->textField($model,'car_data_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_ativo'); ?>
		<?php echo $form->textField($model,'car_ativo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_obs'); ?>
		<?php echo $form->textField($model,'car_obs',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_data_modificacao'); ?>
		<?php echo $form->textField($model,'car_data_modificacao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->