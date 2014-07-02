<?php
/* @var $this AdultDatasetController */
/* @var $model AdultDataset */

$this->breadcrumbs=array(
	'Adult Datasets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AdultDataset', 'url'=>array('index')),
	array('label'=>'Create AdultDataset', 'url'=>array('create')),
	array('label'=>'View AdultDataset', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AdultDataset', 'url'=>array('admin')),
);
?>

<h1>Update AdultDataset <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>