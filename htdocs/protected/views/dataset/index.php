<?php
/* @var $this DatasetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datasets',
);

$this->menu=array(
	array('label'=>'Create Dataset', 'url'=>array('create')),
	array('label'=>'Quick Create', 'url'=>array('quick')),
	array('label'=>'Manage Dataset', 'url'=>array('admin')),
);
?>

<h1>Datasets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
