<?php
$this->breadcrumbs=array(
	'Empresas'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Nova Empresa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
