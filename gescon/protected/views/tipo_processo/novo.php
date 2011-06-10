<?php
$this->breadcrumbs=array(
	'Tipos de Processo'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Tipo de Processo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>