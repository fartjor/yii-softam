<?php
$this->breadcrumbs=array(
	'Telefones'=>array('gerenciar'),
	'Novo',
);

?>

<h1>Novo Telefone</h1>

<?php echo $this->renderPartial('/telefone/_form', array('model'=>$model)); ?>