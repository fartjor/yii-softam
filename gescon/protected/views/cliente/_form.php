<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Empresa'); ?>
		<?php
			$criteria = new CDbCriteria();
			$criteria->order='emp_nome';
		?>
		<?php echo CHtml::dropDownList('empresa','empresa',
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
		<?php echo $form->labelEx($model,'cli_cpf'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'cli_cpf', 
							'mask' => '999.999.999-99', 'htmlOptions' => array('size' => 14)));?>
		<?php echo $form->error($model,'cli_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_nome'); ?>
		<?php echo $form->textField($model,'cli_nome',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cli_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_sexo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'cli_sexo', $model->SexoOptions); ?>
		<?php echo $form->error($model,'cli_sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_estado_civil'); ?>
		<?php echo CHtml::activeDropDownList($model, 'cli_estado_civil', $model->EstadoOptions); ?>
		<?php echo $form->error($model,'cli_estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_profissao'); ?>
		<?php echo $form->textField($model,'cli_profissao',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cli_profissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_email'); ?>
		<?php echo $form->textField($model,'cli_email',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cli_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_conhecimento'); ?>
		<?php echo $form->textField($model,'cli_conhecimento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cli_conhecimento'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'cli_fone1'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'cli_fone1', 
							'mask' => '(99)9999-9999', 'htmlOptions' => array('size' => 13)));?>
		<?php echo $form->error($model,'cli_fone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_fone2'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'cli_fone2', 
							'mask' => '(99)9999-9999', 'htmlOptions' => array('size' => 13)));?>
		<?php echo $form->error($model,'cli_fone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_endereco'); ?>
		<?php echo $form->textField($model,'cli_endereco',array('size'=>45,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'cli_endereco'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'cli_bairro'); ?>
		<?php echo $form->textField($model,'cli_bairro',array('size'=>45,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'cli_bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_cidade'); ?>
		<?php echo $form->textField($model,'cli_cidade',array('size'=>45,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'cli_cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_uf'); ?>
		<?php echo $form->dropDownList($model,'cli_uf',array(
					'AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA',
					'CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA',
					'MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB',
					'PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN',
					'RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE',
					'SP'=>'SP','TO'=>'TO')); ?>
		<?php echo $form->error($model,'cli_uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cli_cep'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'cli_cep', 
							'mask' => '99999-999', 'htmlOptions' => array('size' => 9)));?>
		<?php echo $form->error($model,'cli_cep'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'cli_obs'); ?>
		<?php echo $form->textArea($model,'cli_obs',array('cols'=>45,'rows'=> 4,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cli_obs'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'cli_situacao'); ?>
		<?php echo CHtml::activeDropDownList($model, 'cli_situacao', $model->situacaoOptions); ?>
		<?php echo $form->error($model,'cli_situacao'); ?>
	</div>
	
	<div class="row">
		<?php if ($model->isNewRecord){echo $form->labelEx($model,'usuario');} ?>
		<?php if ($model->isNewRecord){echo $form->textField($model,'usuario',array('size'=>45,'maxlength'=>60));} ?>
		<?php if ($model->isNewRecord){echo $form->error($model,'usuario');} ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->