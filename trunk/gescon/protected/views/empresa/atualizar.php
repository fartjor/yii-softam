<?php
$this->breadcrumbs=array(
	'Empresas'=>array('gerenciar'),
	$model->emp_id=>array('visualizar','id'=>$model->emp_id),
	'Atualizar',
);
?>

<h1>Atualizando Empresa #<?php echo $model->emp_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>