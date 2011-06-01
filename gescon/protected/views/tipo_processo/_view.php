<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tpr_id), array('view', 'id'=>$data->tpr_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_numero')); ?>:</b>
	<?php echo CHtml::encode($data->tpr_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_nome')); ?>:</b>
	<?php echo CHtml::encode($data->tpr_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_area_atuacao')); ?>:</b>
	<?php echo CHtml::encode($data->tpr_area_atuacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_data_ingresso')); ?>:</b>
	<?php echo CHtml::encode($data->tpr_data_ingresso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_obs')); ?>:</b>
	<?php echo CHtml::encode($data->tpr_obs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_data_modificacao')); ?>:</b>
	<?php echo CHtml::encode($data->tpr_data_modificacao); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_data_desativacao')); ?>:</b>
	<?php echo CHtml::encode($data->tpr_data_desativacao); ?>
	<br />

	*/ ?>

</div>