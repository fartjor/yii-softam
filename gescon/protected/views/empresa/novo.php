<?php
$this->breadcrumbs=array(
	'Empresas'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Empresa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>