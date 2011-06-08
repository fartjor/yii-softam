<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'car_nome'); ?>
		<?php echo $form->textField($model,'car_nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'car_obs'); ?>
		<?php echo $form->textField($model,'car_obs',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_ativo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'car_ativo', $model->ativoOptions, 
					array('empty' => 'Todos')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>
	<br /><br />

<?php $this->endWidget(); ?>

</div><!-- search-form -->