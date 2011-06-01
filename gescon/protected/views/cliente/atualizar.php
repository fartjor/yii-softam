<?php
$this->breadcrumbs=array(
	'Clientes'=>array('gerenciar'),
	$model->cli_id=>array('visualizar','id'=>$model->cli_id),
	'Atualizar',
);
?>

<h1>Atualizando Cliente #<?php echo $model->cli_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>