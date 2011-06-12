<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cli_cpf'); ?>
		<?php $this->widget('CMaskedTextField', array('model' => $model, 'attribute' => 'cli_cpf', 
							'mask' => '999.999.999-99', 'htmlOptions' => array('size' => 14)));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_nome'); ?>
		<?php echo $form->textField($model,'cli_nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_sexo'); ?>
		<?php echo CHtml::activeDropDownList($model, 'cli_sexo', $model->SexoOptions,
				array('empty' => 'Todos')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_estado_civil'); ?>
		<?php echo CHtml::activeDropDownList($model, 'cli_estado_civil', $model->EstadoOptions,
					array('empty' => 'Todos')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_profissao'); ?>
		<?php echo $form->textField($model,'cli_profissao',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_cidade'); ?>
		<?php echo $form->textField($model,'cli_cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cli_uf'); ?>
		<?php echo $form->dropDownList($model,'cli_uf',array(
					''=> 'Todos', 'AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA',
					'CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA',
					'MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB',
					'PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN',
					'RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE',
					'SP'=>'SP','TO'=>'TO')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'cli_situacao'); ?>
		<?php echo CHtml::activeDropDownList($model, 'cli_situacao', $model->situacaoOptions, 
		array('empty' => 'Todos')); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>
	<br /><br />

<?php $this->endWidget(); ?>

</div><!-- search-form -->