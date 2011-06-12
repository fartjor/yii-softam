<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl. '/js/price.js' ?>">

</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'processo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'cli_id',CHtml::listData(Cliente::model()->findAll(), 
														"cli_id", "cli_nome"), 
			  											array(	'empty' => 'Selecione um Cliente -->',
			  											  	  	'id' => 'cli_id',
														)
			  										); ?>
		<?php echo $form->error($model,'cli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tpr_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'tpr_id',CHtml::listData(Tipo_processo::model()->findAll(), 
														"tpr_id", "tpr_nome"), 
			  											array(	'empty' => 'Selecione um Tipo de Processo -->',
			  											  	  	'id' => 'tpr_id',
														)
			  										); ?>
		<?php echo $form->error($model,'tpr_id'); ?>
	</div>
    <?php $this->beginWidget('ext.coolfieldset.JCollapsibleFieldset', array(
        'collapsed'=>false,
        'legend'=>'Dados do Veículo',
        'legendHtmlOptions'=>array('title'=>'Clique aqui para inserir dados do Veículo!')
    )); ?>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_placa'); ?>
			<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'pro_car_placa', 
							'mask' => 'aaa-9999', 'htmlOptions' => array('size' => 8)));?>
			<?php echo $form->error($model,'pro_car_placa'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_renavan'); ?>
			<?php echo $form->textField($model,'pro_car_renavan', array('size' => 20)); ?>
			<?php echo $form->error($model,'pro_car_renavan'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_chaci'); ?>
			<?php echo $form->textField($model,'pro_car_chaci', array('size' => 30)); ?>
			<?php echo $form->error($model,'pro_car_chaci'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_ano'); ?>
			<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'pro_car_ano', 
							'mask' => '9999', 'htmlOptions' => array('size' => 4)));?>
			<?php echo $form->error($model,'pro_car_ano'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_modelo'); ?>
			<?php echo $form->textField($model,'pro_car_modelo', array('size' => 30)); ?>
			<?php echo $form->error($model,'pro_car_modelo'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_marca'); ?>
			<?php echo $form->textField($model,'pro_car_marca', array('size' => 30)); ?>
			<?php echo $form->error($model,'pro_car_marca'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_valor'); ?>
			<?php echo $form->textField($model,'pro_car_valor',array('size' => 20, 'id' => 'pro_car_valor')); ?>
			<?php echo $form->error($model,'pro_car_valor'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_qtde_prestacoes'); ?>
			<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'pro_car_qtde_prestacoes', 
							'mask' => '99', 'htmlOptions' => array('size' => 2)));?>
			<?php echo $form->error($model,'pro_car_qtde_prestacoes'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'pro_car_valor_parcela'); ?>
			<?php echo $form->textField($model,'pro_car_valor_parcela',array('size' => 20, 'id' => 'pro_car_valor_parcela')); ?>
			<?php echo $form->error($model,'pro_car_valor_parcela'); ?>
		</div>
    <?php $this->endWidget('ext.coolfieldset.JCollapsibleFieldset'); ?><!-- collabsible fieldset -->
	
	<div class="row">
		<?php echo $form->labelEx($model,'pro_obs'); ?>
		<?php echo $form->textArea($model,'pro_obs',array('cols'=>45,'rows' => 4, 'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pro_obs'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<script>
$('#pro_car_valor').priceFormat({
    prefix: 'R$ ',
    centsSeparator: ',',
    thousandsSeparator: '.'
});
$('#pro_car_valor_parcela').priceFormat({
    prefix: 'R$ ',
    centsSeparator: ',',
    thousandsSeparator: '.'
});
</script>