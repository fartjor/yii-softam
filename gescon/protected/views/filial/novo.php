<?php
$this->breadcrumbs=array(
	'Filiais'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Nova Filial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
