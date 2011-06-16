<?php
$this->breadcrumbs=array(
	'Acao Processos'=>array('gerenciar'),
	$model->aca_id=>array('visualizar','id'=>$model->aca_id),
	'Atualizar',
);
?>

<h1>Atualizando Acao_processo #<?php echo $model->aca_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>