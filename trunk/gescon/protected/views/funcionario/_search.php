<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fun_id'); ?>
		<?php echo $form->textField($model,'fun_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_cpf'); ?>
		<?php echo $form->textField($model,'fun_cpf',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_data_cadastro'); ?>
		<?php echo $form->textField($model,'fun_data_cadastro'); ?>
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
		<?php echo $form->label($model,'fun_sexo'); ?>
		<?php echo $form->textField($model,'fun_sexo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_estado_civil'); ?>
		<?php echo $form->textField($model,'fun_estado_civil',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_funcao'); ?>
		<?php echo $form->textField($model,'fun_funcao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_email'); ?>
		<?php echo $form->textField($model,'fun_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_estado'); ?>
		<?php echo $form->textField($model,'fun_estado',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_obs'); ?>
		<?php echo $form->textField($model,'fun_obs',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_data_modificacao'); ?>
		<?php echo $form->textField($model,'fun_data_modificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_data_desligamento'); ?>
		<?php echo $form->textField($model,'fun_data_desligamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_id'); ?>
		<?php echo $form->textField($model,'emp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_fone1'); ?>
		<?php echo $form->textField($model,'fun_fone1',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_fone2'); ?>
		<?php echo $form->textField($model,'fun_fone2',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_endereco'); ?>
		<?php echo $form->textField($model,'fun_endereco',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_cidade'); ?>
		<?php echo $form->textField($model,'fun_cidade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_uf'); ?>
		<?php echo $form->textField($model,'fun_uf',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fun_cep'); ?>
		<?php echo $form->textField($model,'fun_cep',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->