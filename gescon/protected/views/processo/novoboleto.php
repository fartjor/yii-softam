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
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'tipo', $model->tipoOptions, array('id' => 'tipo')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'tipo', $model->tipoOptions, array('id' => 'tipo')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>
	
	
	<div class="row" style="display:none" id="qtde">
		<?php echo $form->labelEx($model,'qtde'); ?>
		<?php echo $form->textField($model,'qtde',array('size'=>2, 'maxlength'=>2,'OnKeyUp' => 'javascript:somente_numero(this);')); ?>
		<?php echo $form->error($model,'qtde'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Gerar Boletos'); ?>
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form -->
<?php Yii::app()->clientScript->registerScript('jquery',CClientScript::POS_READY);?>
<script>
	$("#tipo").change(function () {
    	if( $("#tipo option:selected").val() == 'M')
        	$("#qtde").show("300");
    	else
    		$("#qtde").hide("300");	
  	})
  	
  	function somente_numero(campo){  
		var digits="0123456789"  
		var campo_temp   
		for (var i=0;i<campo.value.length;i++){  
			campo_temp=campo.value.substring(i,i+1)   
			if (digits.indexOf(campo_temp)==-1){  
				campo.value = campo.value.substring(0,i);  
			}  
		}  
	}

</script>