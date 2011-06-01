<?php
$this->breadcrumbs=array(
	'Clientes'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>