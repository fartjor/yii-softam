<?php
$this->breadcrumbs=array(
	'Boletos',
);

$this->menu=array(
	array('label'=>'Create Boleto', 'url'=>array('create')),
	array('label'=>'Manage Boleto', 'url'=>array('admin')),
);
?>

<h1>Boletos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
