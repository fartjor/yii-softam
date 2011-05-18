<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tel_id'); ?>
		<?php echo $form->textField($model,'tel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_fone1'); ?>
		<?php echo $form->textField($model,'tel_fone1',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_fone2'); ?>
		<?php echo $form->textField($model,'tel_fone2',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel_fone3'); ?>
		<?php echo $form->textField($model,'tel_fone3',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->