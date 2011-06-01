<?php
$this->breadcrumbs=array(
	'Tipo Processos'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Tipo de Processo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>