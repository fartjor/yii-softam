<?php
$this->breadcrumbs=array(
	'Cargos'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Cargo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>