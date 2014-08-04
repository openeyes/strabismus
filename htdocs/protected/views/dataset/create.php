<?php
/* @var $this AdultDatasetController */
/* @var $model AdultDataset */

$this->breadcrumbs=array(
	'Adult Datasets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AdultDataset', 'url'=>array('index')),
	array('label'=>'Manage AdultDataset', 'url'=>array('admin')),
);
?>

<h1>Create Adult Dataset</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>