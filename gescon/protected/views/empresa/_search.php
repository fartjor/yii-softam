<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'emp_id'); ?>
		<?php echo $form->textField($model,'emp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_nome'); ?>
		<?php echo $form->textField($model,'emp_nome',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cnpj'); ?>
		<?php echo $form->textField($model,'emp_cnpj',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_data_ingresso'); ?>
		<?php echo $form->textField($model,'emp_data_ingresso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_site'); ?>
		<?php echo $form->textField($model,'emp_site',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_email'); ?>
		<?php echo $form->textField($model,'emp_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cpf_socio_majoritario'); ?>
		<?php echo $form->textField($model,'emp_cpf_socio_majoritario',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_fone1'); ?>
		<?php echo $form->textField($model,'emp_fone1',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_fone2'); ?>
		<?php echo $form->textField($model,'emp_fone2',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_uf'); ?>
		<?php echo $form->textField($model,'emp_uf',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cidade'); ?>
		<?php echo $form->textField($model,'emp_cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_endereco'); ?>
		<?php echo $form->textField($model,'emp_endereco',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_cep'); ?>
		<?php echo $form->textField($model,'emp_cep',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->