<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pro_id'); ?>
		<?php echo $form->textField($model,'pro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_numero'); ?>
		<?php echo $form->textField($model,'pro_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_data_ingresso'); ?>
		<?php echo $form->textField($model,'pro_data_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_obs'); ?>
		<?php echo $form->textField($model,'pro_obs',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_data_modificacao'); ?>
		<?php echo $form->textField($model,'pro_data_modificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_data_desativacao'); ?>
		<?php echo $form->textField($model,'pro_data_desativacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_id'); ?>
		<?php echo $form->textField($model,'cli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tpr_id'); ?>
		<?php echo $form->textField($model,'tpr_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->