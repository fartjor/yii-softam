<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tel_id), array('view', 'id'=>$data->tel_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_fone1')); ?>:</b>
	<?php echo CHtml::encode($data->tel_fone1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_fone2')); ?>:</b>
	<?php echo CHtml::encode($data->tel_fone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_fone3')); ?>:</b>
	<?php echo CHtml::encode($data->tel_fone3); ?>
	<br />


</div>