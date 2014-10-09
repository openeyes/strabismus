<?php
/* @var $this AdultDatasetController */
/* @var $model AdultDataset */

$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dataset', 'url'=>array('index')),
	array('label'=>'Manage Dataset', 'url'=>array('admin')),
);
?>

<h1>Create Dataset</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>