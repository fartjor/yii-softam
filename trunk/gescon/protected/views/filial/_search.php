<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fil_id'); ?>
		<?php echo $form->textField($model,'fil_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_cnpj'); ?>
		<?php echo $form->textField($model,'fil_cnpj',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_nome'); ?>
		<?php echo $form->textField($model,'fil_nome',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_data_ingresso'); ?>
		<?php echo $form->textField($model,'fil_data_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_site'); ?>
		<?php echo $form->textField($model,'fil_site',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_email'); ?>
		<?php echo $form->textField($model,'fil_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_cpf_representante'); ?>
		<?php echo $form->textField($model,'fil_cpf_representante',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_ativo'); ?>
		<?php echo $form->textField($model,'fil_ativo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_obs'); ?>
		<?php echo $form->textField($model,'fil_obs',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_data_modificacao'); ?>
		<?php echo $form->textField($model,'fil_data_modificacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_data_desligamento'); ?>
		<?php echo $form->textField($model,'fil_data_desligamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_id'); ?>
		<?php echo $form->textField($model,'emp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_fone1'); ?>
		<?php echo $form->textField($model,'fil_fone1',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_fone2'); ?>
		<?php echo $form->textField($model,'fil_fone2',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_uf'); ?>
		<?php echo $form->textField($model,'fil_uf',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_cidade'); ?>
		<?php echo $form->textField($model,'fil_cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_endereco'); ?>
		<?php echo $form->textField($model,'fil_endereco',array('size'=>60,'maxlength'=>220)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fil_cep'); ?>
		<?php echo $form->textField($model,'fil_cep',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->