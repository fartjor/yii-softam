<?php
$this->breadcrumbs=array(
	'Cargos'=>array('gerenciar'),
	$model->car_id=>array('visualizar','id'=>$model->car_id),
	'Atualizar',
);
?>

<h1>Atualizando Cargo #<?php echo $model->car_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>