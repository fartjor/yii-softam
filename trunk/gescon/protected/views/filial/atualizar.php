<?php
$this->breadcrumbs=array(
	'Filials'=>array('gerenciar'),
	$model->fil_id=>array('visualizar','id'=>$model->fil_id),
	'Atualizar',
);
?>

<h1>Atualizando Filial #<?php echo $model->fil_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>