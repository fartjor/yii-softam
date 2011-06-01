<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Funcionario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>