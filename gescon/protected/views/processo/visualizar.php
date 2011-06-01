<?php
$this->breadcrumbs=array(
	'Processos'=>array('gerenciar'),
	$model->pro_id,
);

?>

<h1>Visualizando Processo #<?php echo $model->pro_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pro_id',
		'pro_numero',
		'pro_data_ingresso',
		'pro_obs',
		'pro_data_modificacao',
		'pro_data_desativacao',
		'cli_id',
		'tpr_id',
	),
)); ?>
