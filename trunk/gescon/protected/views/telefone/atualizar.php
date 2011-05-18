<?php
$this->breadcrumbs=array(
	'Telefones'=>array('gerenciar'),
	$model->tel_id=>array('visualizar','id'=>$model->tel_id),
	'Atualizar',
);
?>

<h1>Atualizando Telefone #<?php echo $model->tel_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>