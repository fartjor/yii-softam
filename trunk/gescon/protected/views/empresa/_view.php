<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->emp_id), array('view', 'id'=>$data->emp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_id')); ?>:</b>
	<?php echo CHtml::encode($data->end_id); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_cpf_socio_majoritario')); ?>:</b>
	<?php echo CHtml::encode($data->emp_cpf_socio_majoritario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_id')); ?>:</b>
	<?php echo CHtml::encode($data->tel_id); ?>
	<br />

	*/ ?>

</div>