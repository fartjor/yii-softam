<?php
$this->breadcrumbs=array(
	'Tipo Processos'=>array('gerenciar'),
	$model->tpr_id,
);

?>

<h1>Visualizando Tipo_processo #<?php echo $model->tpr_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tpr_id',
		'tpr_numero',
		'tpr_nome',
		'tpr_area_atuacao',
		'tpr_data_ingresso',
		'tpr_obs',
		'tpr_data_modificacao',
		'tpr_data_desativacao',
	),
)); ?>
