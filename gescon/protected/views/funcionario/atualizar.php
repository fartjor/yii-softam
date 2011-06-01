<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('gerenciar'),
	$model->fun_id=>array('visualizar','id'=>$model->fun_id),
	'Atualizar',
);
?>

<h1>Atualizando Funcionario #<?php echo $model->fun_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>