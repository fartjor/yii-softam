<?php
$this->breadcrumbs=array(
	'Cargos'=>array('gerenciar'),
	$model->car_id,
);

?>

<h1>Visualizando Cargo #<?php echo $model->car_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'car_id',
		'car_nome',
		'car_data_ingresso',
		array(
			'name' => 'Situação',
			'value' => $model->getAtivoText()	
		),
		'car_obs',
		'car_data_modificacao',
	),
)); ?>
