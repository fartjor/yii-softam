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
		<?php
				$this->widget('CMaskedTextField',array(
    				'mask'=>'99/99/9999',
    				'attribute' => 'pro_data_ingresso',
    				'model' => $model,
				));
?>
	</div>

	<div class="row">
		<?php 
			if (!(Yii::app()->user->getState('funcao') == '1')){
				echo $form->label($model,'cli_id');
				echo CHtml::activeDropDownList($model,'cli_id',CHtml::listData(Cliente::model()->findAll(), 
														"cli_id", "cli_nome"), 
			  											array(	'empty' => 'Selecione um Cliente -->',
			  											  	  	'id' => 'cli_id',
														)
			  										); 
			}
			else
				echo $form->hiddenField($model,'cli_id');	
		?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tpr_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'tpr_id',CHtml::listData(Tipo_processo::model()->findAll(), 
														"tpr_id", "tpr_nome"), 
			  											array(	'empty' => 'Selecione um Tipo de Processo -->',
			  											  	  	'id' => 'tpr_id',
														)
			  										); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>
<br /><br />
</div><!-- search-form -->