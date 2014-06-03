<?php
/* @var $this AdultDatasetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Adult Datasets',
);

$this->menu=array(
	array('label'=>'Create AdultDataset', 'url'=>array('create')),
	array('label'=>'Manage AdultDataset', 'url'=>array('admin')),
);
?>

<h1>Adult Datasets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
