<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cli_id'); ?>
		<?php echo $form->textField($model,'cli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_cpf'); ?>
		<?php echo $form->textField($model,'cli_cpf',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_data_cadastro'); ?>
		<?php echo $form->textField($model,'cli_data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_numero_cliente'); ?>
		<?php echo $form->textField($model,'cli_numero_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_nome'); ?>
		<?php echo $form->textField($model,'cli_nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_sexo'); ?>
		<?php echo $form->textField($model,'cli_sexo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_estado_civil'); ?>
		<?php echo $form->textField($model,'cli_estado_civil',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_profissao'); ?>
		<?php echo $form->textField($model,'cli_profissao',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_email'); ?>
		<?php echo $form->textField($model,'cli_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_conhecimento'); ?>
		<?php echo $form->textField($model,'cli_conhecimento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_obs'); ?>
		<?php echo $form->textField($model,'cli_obs',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_data_modificacao'); ?>
		<?php echo $form->textField($model,'cli_data_modificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_data_desligamento'); ?>
		<?php echo $form->textField($model,'cli_data_desligamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_fone1'); ?>
		<?php echo $form->textField($model,'cli_fone1',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_fone2'); ?>
		<?php echo $form->textField($model,'cli_fone2',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_endereco'); ?>
		<?php echo $form->textField($model,'cli_endereco',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_cidade'); ?>
		<?php echo $form->textField($model,'cli_cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_uf'); ?>
		<?php echo $form->textField($model,'cli_uf',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_cep'); ?>
		<?php echo $form->textField($model,'cli_cep',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->