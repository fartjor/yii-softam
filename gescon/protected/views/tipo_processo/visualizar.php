<?php
$this->breadcrumbs=array(
	'Tipos de Processo'=>array('gerenciar'),
	$model->tpr_id,
);

?>

<h1>Visualizando Tipos de processo #<?php echo $model->tpr_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tpr_id',
		'tpr_nome',
		'tpr_area_atuacao',
		'tpr_data_ingresso',
		'tpr_obs',
		'tpr_data_modificacao',
	),
)); ?>
