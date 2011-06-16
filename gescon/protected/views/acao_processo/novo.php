<?php
$this->breadcrumbs=array(
	'Acao Processos'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Acao_processo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>