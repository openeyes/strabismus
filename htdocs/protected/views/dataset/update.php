<?php
$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dataset', 'url'=>array('index')),
	array('label'=>'Create Dataset', 'url'=>array('create')),
	array('label'=>'View Dataset', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dataset', 'url'=>array('admin')),
);
?>

<h1>Update Dataset <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>