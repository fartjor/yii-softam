<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_nome'); ?>
		<?php echo $form->textField($model,'emp_nome',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_cnpj'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'emp_cnpj', 
							'mask' => '99.999.999/9999-99', 'htmlOptions' => array('size' => 14)));?>
		<?php echo $form->error($model,'emp_cnpj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_site'); ?>
		<?php echo $form->textField($model,'emp_site',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_email'); ?>
		<?php echo $form->textField($model,'emp_email',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_cpf_socio_majoritario'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'emp_cpf_socio_majoritario', 
							'mask' => '999.999.999-99', 'htmlOptions' => array('size' => 14)));?>
		<?php echo $form->error($model,'emp_cpf_socio_majoritario'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'emp_nome_socio_majoritario'); ?>
		<?php echo $form->textField($model,'emp_nome_socio_majoritario',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_nome_socio_majoritario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_fone1'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'emp_fone1', 
							'mask' => '(99)9999-9999', 'htmlOptions' => array('size' => 13)));?>
		<?php echo $form->error($model,'emp_fone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_fone2'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'emp_fone2', 
							'mask' => '(99)9999-9999', 'htmlOptions' => array('size' => 13)));?>
		<?php echo $form->error($model,'emp_fone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_uf'); ?>
		<?php echo $form->dropDownList($model,'emp_uf',array(
					'AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA',
					'CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA',
					'MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB',
					'PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN',
					'RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE',
					'SP'=>'SP','TO'=>'TO')); ?>
		<?php echo $form->error($model,'emp_uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_cidade'); ?>
		<?php echo $form->textField($model,'emp_cidade',array('size'=>45,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'emp_cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_endereco'); ?>
		<?php echo $form->textField($model,'emp_endereco',array('size'=>45,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'emp_endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_cep'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'emp_cep', 
							'mask' => '99999-999', 'htmlOptions' => array('size' => 9)));?>
		<?php echo $form->error($model,'emp_cep'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'emp_situacao'); ?>
		<?php echo CHtml::activeDropDownList($model, 'emp_situacao', $model->SituacaoOptions); ?>
		<?php echo $form->error($model,'emp_situacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar Empresa' : 'Salvar Empresa'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
