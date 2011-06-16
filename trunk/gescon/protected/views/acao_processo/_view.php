<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('aca_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->aca_id), array('view', 'id'=>$data->aca_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aca_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->aca_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_id')); ?>:</b>
	<?php echo CHtml::encode($data->usu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aca_obs')); ?>:</b>
	<?php echo CHtml::encode($data->aca_obs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_id')); ?>:</b>
	<?php echo CHtml::encode($data->pro_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aca_data')); ?>:</b>
	<?php echo CHtml::encode($data->aca_data); ?>
	<br />


</div>