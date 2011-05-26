<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->car_id), array('view', 'id'=>$data->car_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_nome')); ?>:</b>
	<?php echo CHtml::encode($data->car_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_data_ingresso')); ?>:</b>
	<?php echo CHtml::encode($data->car_data_ingresso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_ativo')); ?>:</b>
	<?php echo CHtml::encode($data->car_ativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_obs')); ?>:</b>
	<?php echo CHtml::encode($data->car_obs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_data_modificacao')); ?>:</b>
	<?php echo CHtml::encode($data->car_data_modificacao); ?>
	<br />


</div>