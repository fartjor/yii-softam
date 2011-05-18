<?php
$this->breadcrumbs=array(
	'Telefones'=>array('gerenciar'),
	$model->tel_id,
);

?>

<h1>Visualizando Telefone #<?php echo $model->tel_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tel_id',
		'tel_fone1',
		'tel_fone2',
		'tel_fone3',
	),
)); ?>
