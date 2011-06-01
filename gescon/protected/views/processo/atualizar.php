<?php
$this->breadcrumbs=array(
	'Processos'=>array('gerenciar'),
	$model->pro_id=>array('visualizar','id'=>$model->pro_id),
	'Atualizar',
);
?>

<h1>Atualizando Processo #<?php echo $model->pro_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>