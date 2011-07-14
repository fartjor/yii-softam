<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_cpf'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fun_cpf', 
							'mask' => '999.999.999-99', 'htmlOptions' => array('size' => 14)));?>
		<?php echo $form->error($model,'fun_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_numero_funcionario'); ?>
		<?php echo $form->textField($model,'fun_numero_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_nome'); ?>
		<?php echo $form->textField($model,'fun_nome',array('size'=>60,'maxlength'=>100)); ?>
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
		<?php echo $form->label($model,'fun_funcao'); ?>
		<?php echo $form->textField($model,'fun_funcao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'car_id',CHtml::listData(Cargo::model()->findAll(), 
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
											CHtml::listData(Empresa::model()->findAll($criteria), 'emp_id', 'emp_nome'),
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
		<?php echo $form->label($model,'fun_cidade'); ?>
		<?php echo $form->textField($model,'fun_cidade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fun_uf'); ?>
		<?php echo $form->dropDownList($model,'fun_uf',array(
					'' => 'Todos','AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA',
					'CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA',
					'MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB',
					'PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN',
					'RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE',
					'SP'=>'SP','TO'=>'TO')); ?>
		<?php echo $form->error($model,'fun_uf'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>
<br /><br />

</div><!-- search-form -->