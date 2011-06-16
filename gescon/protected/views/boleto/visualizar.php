<?php
$this->breadcrumbs=array(
	'Boletos'=>array('gerenciar'),
	$model->bol_codigo,
);

?>

<h1>Visualizando Boleto #<?php echo $model->bol_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bol_codigo',
		'bol_valor',
		'bol_vencimento',
		'bol_transacao',
		'bol_situacao',
		'pro_id',
	),
)); ?>
