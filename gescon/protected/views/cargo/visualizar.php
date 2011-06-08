<?php
$this->breadcrumbs=array(
	'Cargos'=>array('gerenciar'),
	$model->car_id,
);

?>

<h1>Visualizando Cargo #<?php echo $model->car_id; ?></h1>

<?php 
	if (isset($model->car_data_modificacao))
		$data_modificacao = date('d/m/Y H:i:s', strtotime($model->car_data_modificacao));
	else
		$data_modificacao = '';
	
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'car_id',
		'car_nome',
		array(
			'name' => 'Situação',
			'value' => $model->getAtivoText()	
		),
		'car_obs',
		array(
			'name' => 'Data de Cadastro',
			'value' => date('d/m/Y H:i:s', strtotime($model->car_data_ingresso))
		),
		array(
			'name' => 'Data de modificação',
			'value' => $data_modificacao	
		),
	),
)); ?>
