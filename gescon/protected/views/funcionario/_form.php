<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_cpf'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fun_cpf', 
							'mask' => '999.999.999-99', 'htmlOptions' => array('size' => 14)));?>
		<?php echo $form->error($model,'fun_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_numero_funcionario'); ?>
		<?php echo $form->textField($model,'fun_numero_funcionario'); ?>
		<?php echo $form->error($model,'fun_numero_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_nome'); ?>
		<?php echo $form->textField($model,'fun_nome',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fun_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_sexo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'fun_sexo', $model->SexoOptions); ?>
		<?php echo $form->error($model,'fun_sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_estado_civil'); ?>
		<?php echo CHtml::activeDropDownList($model, 'fun_estado_civil', $model->EstadoOptions); ?>
		<?php echo $form->error($model,'fun_estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_funcao'); ?>
		<?php echo $form->textField($model,'fun_funcao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fun_funcao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_email'); ?>
		<?php echo $form->textField($model,'fun_email',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fun_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'car_id',CHtml::listData(Cargo::model()->ativos()->findAll(), 
														"car_id", "car_nome"), 
			  											array(	'empty' => 'Selecione um Cargo -->',
			  											  	  	'id' => 'car_id',
														)
			  										); ?> 
		<?php echo $form->error($model,'car_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Empresa'); ?>
		<?php
			$criteria = new CDbCriteria();
			$criteria->order='emp_nome';
		?>
		<?php echo CHtml::dropDownList('departamento','departamento',
											CHtml::listData(Empresa::model()->ativos()->findAll($criteria), 'emp_id', 'emp_nome'),
                                          	array(
												'empty'=>'Selecione uma Empresa -->',
												'ajax' => array(
													'type'=>'GET', //request type
													'url'=>CController::createUrl('/empresa/carregarfiliais'), //url to call.
													'update'=>'#fil_id', //selector to update
													'data'=>array(
															'empresa' => 'js:this.value',
														)
													)
											)
										);?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'fil_id',array(), 
			  											array(	'empty' => 'Selecione uma Filial -->',
			  											  	  	'id' => 'fil_id',
														)
			  										); ?> 
		<?php echo $form->error($model,'emp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_fone1'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fun_fone1', 
							'mask' => '(99)9999-9999', 'htmlOptions' => array('size' => 13)));?>
		<?php echo $form->error($model,'fun_fone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_fone2'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fun_fone2', 
							'mask' => '(99)9999-9999', 'htmlOptions' => array('size' => 13)));?>
		<?php echo $form->error($model,'fun_fone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_endereco'); ?>
		<?php echo $form->textField($model,'fun_endereco',array('size'=>45,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'fun_endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_cidade'); ?>
		<?php echo $form->textField($model,'fun_cidade',array('size'=>45,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fun_cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_uf'); ?>
		<?php echo $form->dropDownList($model,'fun_uf',array(
					'AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA',
					'CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA',
					'MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB',
					'PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN',
					'RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE',
					'SP'=>'SP','TO'=>'TO')); ?>
		<?php echo $form->error($model,'fun_uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_cep'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fun_cep', 
							'mask' => '99999-999', 'htmlOptions' => array('size' => 9)));?>
		<?php echo $form->error($model,'fun_cep'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'fun_obs'); ?>
		<?php echo $form->textArea($model,'fun_obs',array('cols'=>45,'rows'=>4, 'maxlength' => 255)); ?>
		<?php echo $form->error($model,'fun_endereco'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->