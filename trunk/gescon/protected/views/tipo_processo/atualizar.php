<?php
$this->breadcrumbs=array(
	'Tipo Processos'=>array('gerenciar'),
	$model->tpr_id=>array('visualizar','id'=>$model->tpr_id),
	'Atualizar',
);
?>

<h1>Atualizando Tipo de Processo #<?php echo $model->tpr_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>