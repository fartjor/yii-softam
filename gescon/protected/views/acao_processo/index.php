<?php
$this->breadcrumbs=array(
	'Acao Processos',
);

$this->menu=array(
	array('label'=>'Create Acao_processo', 'url'=>array('create')),
	array('label'=>'Manage Acao_processo', 'url'=>array('admin')),
);
?>

<h1>Acao Processos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
