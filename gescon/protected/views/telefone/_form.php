<div class="form">

<?php $form2=$this->beginWidget('CActiveForm', array(
	'id'=>'telefone-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form2->errorSummary($model); ?>

	<div class="row">
		<?php echo $form2->labelEx($model,'tel_fone1'); ?>
		<?php echo $form2->textField($model,'tel_fone1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form2->error($model,'tel_fone1'); ?>
	</div>

	<div class="row">
		<?php echo $form2->labelEx($model,'tel_fone2'); ?>
		<?php echo $form2->textField($model,'tel_fone2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form2->error($model,'tel_fone2'); ?>
	</div>

	<div class="row">
		<?php echo $form2->labelEx($model,'tel_fone3'); ?>
		<?php echo $form2->textField($model,'tel_fone3',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form2->error($model,'tel_fone3'); ?>
	</div>

	<div class="row buttons">
		 <?php echo CHtml::ajaxSubmitButton(Yii::t('telefone','Salvar Telefones'),
		 										CHtml::normalizeUrl(array('telefone/novo','render'=>false,
		 										'tel_fone1'=> '92 91076124',
		 										'tel_fone1'=> '92 91076124',
		 										'tel_fone1'=> '92 91076124',
		 										'Telefone' => true,)),
		 										array('success'=>'js: function(data) {
                        							$("#tel_id").append(data);
                        							$("#formtelefones").dialog("close");
                    							}'),
		 										array('id'=>'buttonSalvarTelefone')); 
		 ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->