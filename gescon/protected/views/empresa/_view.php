<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->emp_id), array('view', 'id'=>$data->emp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_nome')); ?>:</b>
	<?php echo CHtml::encode($data->emp_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->emp_cnpj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_data_ingresso')); ?>:</b>
	<?php echo CHtml::encode($data->emp_data_ingresso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_site')); ?>:</b>
	<?php echo CHtml::encode($data->emp_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_email')); ?>:</b>
	<?php echo CHtml::encode($data->emp_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_cpf_socio_majoritario')); ?>:</b>
	<?php echo CHtml::encode($data->emp_cpf_socio_majoritario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_fone1')); ?>:</b>
	<?php echo CHtml::encode($data->emp_fone1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_fone2')); ?>:</b>
	<?php echo CHtml::encode($data->emp_fone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_uf')); ?>:</b>
	<?php echo CHtml::encode($data->emp_uf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_cidade')); ?>:</b>
	<?php echo CHtml::encode($data->emp_cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_endereco')); ?>:</b>
	<?php echo CHtml::encode($data->emp_endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_cep')); ?>:</b>
	<?php echo CHtml::encode($data->emp_cep); ?>
	<br />

	*/ ?>

</div>