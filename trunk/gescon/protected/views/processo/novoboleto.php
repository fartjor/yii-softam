<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl. '/js/price.js' ?>">
</script>
<?php 
	$mprocesso = Processo::model()->findByPk($processo);
	$model->bol_valor = $mprocesso->pro_car_valor_parcela*100/2;
?>

<?php
$this->breadcrumbs=array(
	'Processos'=>array('processo/gerenciar'),
	$processo=>array('processo/visualizar/' . $processo),
	'Financeiro' => array('../boleto/gerenciar/processo/'. $processo),
	'Novo Boleto',
);
?>

<h1>Novo Boleto para o Processo #<?php echo $processo; ?></h1>
<br />

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bol_tipo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'bol_tipo', $model->tipoOptions, 
								array('id' => 'tipo',
										
							)); ?>
		<?php echo $form->error($model,'bol_tipo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    					'name'=>'data',
    					// additional javascript options for the date picker plugin
    					'options'=>array(
        					'showAnim'=>'fold',
							'dateFormat' => 'dd/mm/yy',
    					),
    					'htmlOptions'=>array(
        					'style'=>'height:20px; width:120px;'
    					),
			));
		?>
		
		<?php echo $form->error($model,'data'); ?>
	</div>
	
	
	<div class="row" style="display:none" id="qtde">
		<?php echo $form->labelEx($model,'qtde'); ?>
		<?php echo $form->textField($model,'qtde',
						array(	'size'=>2, 'maxlength'=>2,
								'OnKeyUp' => 'javascript:somente_numero(this);',
						)
					); ?>
		<?php echo $form->error($model,'qtde'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bol_valor'); ?>
		<?php echo $form->textField($model,'bol_valor',array('size'=>15, 'maxlength'=>15,'id' => 'valor')); ?>
		<?php echo $form->error($model,'bol_valor'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Gerar Boletos'); ?>
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form -->
<?php Yii::app()->clientScript->registerScript('jquery',CClientScript::POS_READY);?>
<script>
	$("#tipo").change(function () {
    	if( $("#tipo option:selected").val() == 'M'){
        	$("#qtde").show("300");
    		$("#valor").val("<?php echo $mprocesso->pro_car_valor_parcela/10*100; ?>");
    		$('#valor').priceFormat({
    		    prefix: 'R$ ',
    		    centsSeparator: ',',
    		    thousandsSeparator: '.'
    		});
    	}
    	else{
    		$("#qtde").hide("300");
    		$("#valor").val("<?php echo $mprocesso->pro_car_valor_parcela*100/2; ?>");
    		$('#valor').priceFormat({
    		    prefix: 'R$ ',
    		    centsSeparator: ',',
    		    thousandsSeparator: '.'
    		});
        }
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
<script>
$('#valor').priceFormat({
    prefix: 'R$ ',
    centsSeparator: ',',
    thousandsSeparator: '.'
});
</script>