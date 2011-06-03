<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	
	<div class="row">
		<?php echo $form->label($model,'fil_nome'); ?>
		<?php echo $form->textField($model,'fil_nome',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'fil_cnpj'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fil_cnpj', 
							'mask' => '99.999.999/9999-99', 'htmlOptions' => array('size' => 14)));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_cpf_representante'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fil_cpf_representante', 
							'mask' => '999.999.999-99', 'htmlOptions' => array('size' => 14)));?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'fil_nome_representante'); ?>
		<?php echo $form->textField($model,'fil_nome_representante',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'emp_id',CHtml::listData(Empresa::model()->findAll(), 
														"emp_id", "emp_nome"), 
			  											array(	'empty' => 'Selecione uma Empresa -->',
			  											  	  	'id' => 'emp_id',
														)
			  										); ?> 
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_uf'); ?>
		<?php echo $form->dropDownList($model,'fil_uf',array(
					'' => 'Selecione um estado -->','AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA',
					'CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA',
					'MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB',
					'PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN',
					'RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE',
					'SP'=>'SP','TO'=>'TO')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_cidade'); ?>
		<?php echo $form->textField($model,'fil_cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_cep'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'fil_cep', 
							'mask' => '99999-999', 'htmlOptions' => array('size' => 9)));?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'fil_ativo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'fil_ativo', $model->AtivoOptions, 
					array('empty' => 'Todos')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>
	<br /><br />

<?php $this->endWidget(); ?>

</div><!-- search-form -->