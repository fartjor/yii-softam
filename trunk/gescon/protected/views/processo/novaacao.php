<?php
$this->breadcrumbs=array(
	'Processos'=>array('processo/gerenciar'),
	$processo=>array('processo/visualizar/' . $processo),
	'Ação de Processos' => array('../acao_processo/gerenciar/processo/'. $processo),
	'Nova ação',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'aca_tipo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'aca_tipo', $model->tipoOptions); ?>
		<?php echo $form->error($model,'aca_tipo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'aca_obs'); ?>
		<?php echo $form->textArea($model,'aca_obs',array('cols'=>50,'maxlength'=>400, 'rows' => '5')); ?>
		<?php echo $form->error($model,'aca_obs'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar Ação'); ?>
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form -->