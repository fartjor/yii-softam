<?php
$this->breadcrumbs=array(
	'Processos'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Processo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>