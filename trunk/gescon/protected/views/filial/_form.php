<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'filial-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>  
	
	<div class="row">
		<?php echo $form->labelEx($model,'emp_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'emp_id',CHtml::listData(Empresa::model()->ativos()->findAll(), 
														"emp_id", "emp_nome"), 
			  											array(	'empty' => 'Selecione uma Empresa -->',
			  											  	  	'id' => 'emp_id',
														)
			  										); ?> 
		<?php echo $form->error($model,'emp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_cnpj'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fil_cnpj', 
							'mask' => '99.999.999/9999-99', 'htmlOptions' => array('size' => 14)));?>
		<?php echo $form->error($model,'fil_cnpj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_nome'); ?>
		<?php echo $form->textField($model,'fil_nome',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fil_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_site'); ?>
		<?php echo $form->textField($model,'fil_site',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fil_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_email'); ?>
		<?php echo $form->textField($model,'fil_email',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fil_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_cpf_representante'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fil_cpf_representante', 
							'mask' => '999.999.999-99', 'htmlOptions' => array('size' => 14)));?>
		<?php echo $form->error($model,'fil_cpf_representante'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'fil_nome_representante'); ?>
		<?php echo $form->textField($model,'fil_nome_representante',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fil_nome_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_ativo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'fil_ativo', $model->AtivoOptions); ?>
		<?php echo $form->error($model,'fil_ativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_obs'); ?>
		<?php echo $form->textField($model,'fil_obs',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fil_obs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_fone1'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fil_fone1', 
							'mask' => '(99)9999-9999', 'htmlOptions' => array('size' => 13)));?>
		<?php echo $form->error($model,'fil_fone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_fone2'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fil_fone2', 
							'mask' => '(99)9999-9999', 'htmlOptions' => array('size' => 13)));?>
		<?php echo $form->error($model,'fil_fone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_uf'); ?>
		<?php echo $form->dropDownList($model,'fil_uf',array(
					'AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA',
					'CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA',
					'MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB',
					'PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN',
					'RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE',
					'SP'=>'SP','TO'=>'TO')); ?>
		<?php echo $form->error($model,'fil_uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_cidade'); ?>
		<?php echo $form->textField($model,'fil_cidade',array('size'=>45,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'fil_cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fil_endereco'); ?>
		<?php echo $form->textField($model,'fil_endereco',array('size'=>45,'maxlength'=>220)); ?>
		<?php echo $form->error($model,'fil_endereco'); ?>
	</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar Filial' : 'Salvar Filial'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
