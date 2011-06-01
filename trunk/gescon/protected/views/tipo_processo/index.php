<?php
$this->breadcrumbs=array(
	'Tipo Processos',
);

$this->menu=array(
	array('label'=>'Create Tipo_processo', 'url'=>array('create')),
	array('label'=>'Manage Tipo_processo', 'url'=>array('admin')),
);
?>

<h1>Tipo Processos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
