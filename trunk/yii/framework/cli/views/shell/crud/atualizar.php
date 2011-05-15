<?php
/**
 * This is the template for generating the update view for crud.
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
	\$model->{$nameColumn}=>array('visualizar','id'=>\$model->{$ID}),
	'Atualizar',
);\n";
?>
?>

<h1>Atualizando <?php echo $modelClass." #<?php echo \$model->{$ID}; ?>"; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>