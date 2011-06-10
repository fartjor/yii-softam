<?php
$this->breadcrumbs=array(
	'Tipos de Processo'=>array('gerenciar'),
	$model->tpr_id,
);

?>

<h1>Visualizando Tipos de processo #<?php echo $model->tpr_id; ?></h1>

<?php 
	if (isset($model->tpr_data_modificacao))
		$data_modificacao = date('d/m/Y H:i:s', strtotime($model->tpr_data_modificacao));
	else
		$data_modificacao = '';
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tpr_id',
		'tpr_nome',
		'tpr_area_atuacao',
		'tpr_obs',
		array(
			'name' => 'Data de Cadastro',
			'value' => date('d/m/Y H:i:s', strtotime($model->tpr_data_ingresso))
		),
		array(
			'name' => 'Data de modificação',
			'value' => $data_modificacao	
		),
	),
)); ?>
