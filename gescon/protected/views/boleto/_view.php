<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bol_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bol_codigo), array('view', 'id'=>$data->bol_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bol_valor')); ?>:</b>
	<?php echo CHtml::encode($data->bol_valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bol_vencimento')); ?>:</b>
	<?php echo CHtml::encode($data->bol_vencimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bol_transacao')); ?>:</b>
	<?php echo CHtml::encode($data->bol_transacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bol_situacao')); ?>:</b>
	<?php echo CHtml::encode($data->bol_situacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_id')); ?>:</b>
	<?php echo CHtml::encode($data->pro_id); ?>
	<br />


</div>