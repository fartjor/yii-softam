<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_id), array('view', 'id'=>$data->pro_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_numero')); ?>:</b>
	<?php echo CHtml::encode($data->pro_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_data_ingresso')); ?>:</b>
	<?php echo CHtml::encode($data->pro_data_ingresso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_obs')); ?>:</b>
	<?php echo CHtml::encode($data->pro_obs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_data_modificacao')); ?>:</b>
	<?php echo CHtml::encode($data->pro_data_modificacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_data_desativacao')); ?>:</b>
	<?php echo CHtml::encode($data->pro_data_desativacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_id')); ?>:</b>
	<?php echo CHtml::encode($data->cli_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_id')); ?>:</b>
	<?php echo CHtml::encode($data->tpr_id); ?>
	<br />

	*/ ?>

</div>