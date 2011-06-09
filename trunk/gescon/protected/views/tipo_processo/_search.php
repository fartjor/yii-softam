<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'tpr_nome'); ?>
		<?php echo $form->textField($model,'tpr_nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tpr_area_atuacao'); ?>
		<?php echo $form->textField($model,'tpr_area_atuacao',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tpr_situacao'); ?>
		<?php echo CHtml::activeDropDownList($model, 'tpr_situacao', $model->situacaoOptions, 
					array('empty' => 'Todos')); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>
	<br /><br />

<?php $this->endWidget(); ?>

</div><!-- search-form -->