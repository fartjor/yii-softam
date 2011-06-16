<?php
$this->breadcrumbs=array(
	'Boletos'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Boleto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>