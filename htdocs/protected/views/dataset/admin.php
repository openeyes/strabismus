<?php
$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dataset', 'url'=>array('index')),
	array('label'=>'Create Dataset', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('dataset-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Datasets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form --> 

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dataset-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
		'name'=>'op_date',
		'htmlOptions'=>array('width'=>'80px'),
		),
		'uuid',
		array(
		'name'=>'pt_age',
		'htmlOptions'=>array('width'=>'30px'),
		),
		array(
		'name'=>'pt_sex',
		'htmlOptions'=>array('width'=>'50px'),
		),
		'asmt_type',
		/*
		'pt_ethnic_group',
		'asmt_date',
		'asmt_category',
		'asmt_spectacle_wear',
		'asmt_refraction_worn',
		'asmt_sphere_right',
		'asmt_cyl_right',
		'asmt_axis_right',
		'asmt_sphere_left',
		'asmt_cyl_left',
		'asmt_axis_left',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
