<?php
$this->breadcrumbs=array(
	'Boletos'=>array('gerenciar'),
	$model->bol_codigo=>array('visualizar','id'=>$model->bol_codigo),
	'Atualizar',
);
?>

<h1>Atualizando Boleto #<?php echo $model->bol_codigo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>