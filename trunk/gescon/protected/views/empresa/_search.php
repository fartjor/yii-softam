<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'emp_nome'); ?>
		<?php echo $form->textField($model,'emp_nome',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cnpj'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'emp_cnpj', 
							'mask' => '99.999.999/9999-99', 'htmlOptions' => array('size' => 14)));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cpf_socio_majoritario'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'emp_cpf_socio_majoritario', 
							'mask' => '999.999.999-99', 'htmlOptions' => array('size' => 14)));?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'emp_nome_socio_majoritario'); ?>
		<?php echo $form->textField($model,'emp_nome_socio_majoritario',array('size'=>45,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_uf'); ?>
		<?php echo $form->dropDownList($model,'emp_uf',array(
					'' => 'Selecione um estado -->','AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA',
					'CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA',
					'MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB',
					'PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN',
					'RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE',
					'SP'=>'SP','TO'=>'TO')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cidade'); ?>
		<?php echo $form->textField($model,'emp_cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cep'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'emp_cep', 
							'mask' => '99999-999', 'htmlOptions' => array('size' => 9)));?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'emp_situacao'); ?>
		<?php echo CHtml::activeDropDownList($model, 'emp_situacao', $model->SituacaoOptions, 
					array('empty' => 'Todos')); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>
	<br /><br />

<?php $this->endWidget(); ?>

</div><!-- search-form -->