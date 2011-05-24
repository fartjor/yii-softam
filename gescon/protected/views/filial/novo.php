<?php
$this->breadcrumbs=array(
	'Filials'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Filial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
