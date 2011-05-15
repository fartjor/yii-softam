<?php
/**
 * This is the template for generating the 'view' view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($columns);
$label=$this->class2name($modelClass,true);
echo "\$this->breadcrumbs=array(
	'$label'=>array('gerenciar'),
	\$model->{$nameColumn},
);\n";
?>

?>

<h1>Visualizando <?php echo $modelClass." #<?php echo \$model->{$ID}; ?>"; ?></h1>

<?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>
