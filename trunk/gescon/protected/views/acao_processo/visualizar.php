<?php
$this->breadcrumbs=array(
	'Acao Processos'=>array('gerenciar'),
	$model->aca_id,
);

?>

<h1>Visualizando Acao_processo #<?php echo $model->aca_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'aca_id',
		'aca_tipo',
		'usu_id',
		'aca_obs',
		'pro_id',
		'aca_data',
	),
)); ?>
