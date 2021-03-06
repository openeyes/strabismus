<?php
/* @var $this AdultDatasetController */
/* @var $model AdultDataset */

$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dataset', 'url'=>array('index')),
	array('label'=>'Create Dataset', 'url'=>array('create')),
	array('label'=>'Quick Create', 'url'=>array('quick')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#adult-dataset-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2 style="font-weight: bold;">Dashboard</h2>
<h3 style="font-weight: bold;">Operations</h3>
<table class="dashboard dashboard-ops">
  <tr>
    <th>Total</th>
    <th>This Year</th>
    <th>Total Adults</th>
    <th>Total Kids</th>
    <th>Adults this Year</th>
    <th>Kids this Year</th>
    <th>Squint Types Total</th>
    <th>Squint Types this Year</th>
  </tr>
  <tr>
    <td class="odd"><?= $op_stats['total_ops'] ?></td>
    <td class="even"><?= $op_stats['ops_this_year'] ?></td>
    <td class="odd"><?= $op_stats['total_adults'] ?></td>
    <td class="even"><?= $op_stats['total_kids'] ?></td>
    <td class="odd"><?= $op_stats['adults_this_year'] ?></td>
    <td class="even"><?= $op_stats['kids_this_year'] ?></td>
    <td class="odd">
      <ul class="count-list">
        <? foreach($op_stats['total_cats'] as $cat): ?>
        <li><?= $cat['cat'] ?>:&nbsp;<?= $cat['count'] ?></li>
	<? endforeach ?>
      </ul>
    </td>
    <td class="even">
      <ul class="count-list">
        <? foreach($op_stats['cats_this_year'] as $cat): ?>
        <li><?= $cat['cat'] ?>:&nbsp;<?= $cat['count'] ?></li>
	<? endforeach ?>
      </ul>
    </td>
  </tr>
</table>

<h3 style="font-weight: bold;">Accuracy<h3>
<table class="dashboard dashboard-accuracy">
  <tr>
    <th>Precision</th>
    <th>Unwanted Overcorrection</th>
  </tr>
  <tr>
    <td class="even"><?= $accuracy_stats['near'] ?>% within 10p.d. of aim</td>
    <td class="even"><?= $accuracy_stats['unwanted'] ?>%</td>
  </tr>
</table>

<h3 style="font-weight: bold;">Safety</h3>
<table class="dashboard dashboard-ops">
  <tr>
    <th>Intra-op complications this year</th>
    <th>Post-op complications this year</th>
    <th>Rate of complications this year</th>
    <th>Rate of complications long term</th>
  </tr>
  <tr>
    <td class="odd"><?= $safety_stats['intra_this_year'] ?></td>
    <td class="even"><?= $safety_stats['post_this_year'] ?></td>
    <td class="odd"><?= $safety_stats['rate_this_year'] ?>%</td>
    <td class="even"><?= $safety_stats['rate_long_term'] ?>%</td>
  </tr>
</table>

<h2 style="font-weight: bold;">Manage Datasets</h2>

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
	'id'=>'adult-dataset-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'enableSorting' => true,
	'selectionChanged' => 'goToViewPage',
	'columns'=>array(
//		'id',
//		'userId',
		array(
			'name' => 'op_date',
			'value' => 'date("d/m/Y",strtotime($data->op_date))',
			'sortable' => true,
		),
//		'asmt_category',
		'asmt_type',
		array(
			'type' => 'raw',
			'header' => 'Completion',
			'value' => '$data->completionScore()',
			'sortable' => true,
		),
		'uuid',
/*		array(
			'name' => 'pt_postcode',
			'header' => 'Outcode',
			'sortable' => true,
		),
		'pt_age',
		'pt_sex',
		'pt_ethnic_group',
		'asmt_date',
		'asmt_num_ops',
		'asmt_category',
		'asmt_type',
		'asmt_other_eye_surg',
		'asmt_orbital_surg',
		'asmt_previous_toxin',
		'asmt_other_eye_disease',
		'asmt_neuro_disease',
		'asmt_other',
		'asmt_spectacle_wear',
		'asmt_refraction_worn',
		'asmt_sphere_right',
		'asmt_cyl_right',
		'asmt_axis_right',
		'asmt_sphere_left',
		'asmt_cyl_left',
		'asmt_axis_left',
		'asmt_near_right',
		'asmt_near_left',
		'asmt_bcva_let_right',
		'asmt_bcva_let_left',
		'asmt_bcva_kay_right',
		'asmt_bcva_kay_left',
		'asmt_fixation_right',
		'asmt_fixation_left',
		'asmt_cover_hor_dist',
		'asmt_hor_angle_dist',
		'asmt_cover_vert_dist',
		'asmt_ver_angle_dist',
		'asmt_cover_hor_near',
		'asmt_angle_near',
		'asmt_cover_vert_near',
		'asmt_ver_angle_near',
		'asmt_pattern',
		'asmt_ahp_present',
		'asmt_ahp_desc',
		'asmt_ahp_angle',
		'asmt_binoc_with_cor',
		'asmt_binoc_without_cor',
		'asmt_torsion',
		'asmt_diplopia',
		'asmt_stereo_present',
		'asmt_stereo_frisby',
		'asmt_stereo_tno',
		'asmt_stereo_lang',
		'asmt_newcastle_home',
		'asmt_newcastle_near',
		'asmt_newcastle_distance',
		'asmt_IXTQ',
		'asmt_amblyopia',
		'asmt_amblyopia_treatment',
		'asmt_notes',
		'plan_goals',
		'plan_other',
		'plan_position',
		'plan_eccentric',
		'plan_distance',
		'plan_hor_target_direction',
		'plan_hor_target_angle',
		'plan_ver_target_direction',
		'plan_ver_target_angle',
		'plan_torsion',
		'op_anaeshetic',
		'op_surgeon_grade',
		'op_assistant_grade',
		'op_measurement_point',
		'op_rmr_surgery',
		'op_rmr_amount',
		'op_rmr_transposition',
		'op_rir_surgery',
		'op_rir_amount',
		'op_rir_transposition',
		'op_rlr_surgery',
		'op_rlr_amount',
		'op_rlr_transposition',
		'op_rsr_surgery',
		'op_rsr_amount',
		'op_rsr_transposition',
		'op_lmr_surgery',
		'op_lmr_amount',
		'op_lmr_transposition',
		'op_lir_surgery',
		'op_lir_amount',
		'op_lir_transposition',
		'op_llr_surgery',
		'op_llr_amount',
		'op_llr_transposition',
		'op_lsr_surgery',
		'op_lsr_amount',
		'op_lsr_transposition',
		'op_rio_surgery',
		'op_rio_position',
		'op_rio_transposition',
		'op_rio_amount',
		'op_rso_surgery',
		'op_rso_amount',
		'op_lio_surgery',
		'op_lio_position',
		'op_lio_transposition',
		'op_lio_amount',
		'op_lso_surgery',
		'op_lso_amount',
		'op_eyedraw_right',
		'op_eyedraw_left',
		'op_comps',
		'op_comp_none',
		'op_comp_wrong_side',
		'op_comp_wrong_direction',
		'op_comp_globe_perf',
		'op_comp_snapped_muscle',
		'op_comp_lost_muscle',
		'op_comp_bleeding',
		'op_comp_other',
		'op_comments',
		'early_date',
		'early_bcva_let_right',
		'early_bcva_let_left',
		'early_bcva_kay_right',
		'early_bcva_kay_left',
		'early_fixation_right',
		'early_fixation_left',
		'early_cover_hor_dist',
		'early_hor_angle_dist',
		'early_cover_vert_dist',
		'early_ver_angle_dist',
		'early_cover_hor_near',
		'early_angle_near',
		'early_cover_vert_near',
		'early_ver_angle_near',
		'early_notes',
		'late_date',
		'late_bcva_let_right',
		'late_bcva_let_left',
		'late_bcva_kay_right',
		'late_bcva_kay_left',
		'late_fixation_right',
		'late_fixation_left',
		'late_cover_hor_dist',
		'late_hor_angle_dist',
		'late_cover_vert_dist',
		'late_ver_angle_dist',
		'late_cover_hor_near',
		'late_angle_near',
		'late_cover_vert_near',
		'late_ver_angle_near',
		'late_notes',
		'late_pattern',
		'late_stereo_present',
		'late_stereo_frisby',
		'late_stereo_tno',
		'late_stereo_lang',
		'late_newcastle_home',
		'late_newcastle_near',
		'late_newcastle_distance',
		'late_IXTQ',
		'late_amblyopia',
		'late_ahp_present',
		'late_ahp_desc',
		'late_ahp_angle',
		'late_diplopia',
		'late_torsion',
		'late_comp_none',
		'late_comp_slipped_muscle',
		'late_comp_rrd',
		'late_comp_orb_inf',
		'late_comp_scleritis',
		'late_comp_endophthalmitis',
		'late_comp_antseg_ischaemia',
		'late_comp_iatrogenic_diplopia',
		'late_comp_new_amblyopia',
		'late_comp_unscheduled_clinic',
		'late_comp_clinic_cause',
		'late_comp_unscheduled_theatre',
		'late_comp_theatre_cause',
		'late_comments',
		'prom_as20_preop',
		'prom_as20_postop',
		'prom_likert',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
