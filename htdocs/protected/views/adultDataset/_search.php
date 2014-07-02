<?php
/* @var $this AdultDatasetController */
/* @var $model AdultDataset */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uuid'); ?>
		<?php echo $form->textField($model,'uuid',array('size'=>36,'maxlength'=>36)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_age'); ?>
		<?php echo $form->textField($model,'pt_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_sex'); ?>
		<?php echo $form->textField($model,'pt_sex',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_postcode'); ?>
		<?php echo $form->textField($model,'pt_postcode',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_ethnic_group'); ?>
		<?php echo $form->textField($model,'pt_ethnic_group',array('size'=>26,'maxlength'=>26)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_date'); ?>
		<?php echo $form->textField($model,'asmt_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_num_ops'); ?>
		<?php echo $form->textField($model,'asmt_num_ops'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_category'); ?>
		<?php echo $form->textField($model,'asmt_category',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_type'); ?>
		<?php echo $form->textField($model,'asmt_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_other_eye_surg'); ?>
		<?php echo $form->textField($model,'asmt_other_eye_surg',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_orbital_surg'); ?>
		<?php echo $form->textField($model,'asmt_orbital_surg',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_previous_toxin'); ?>
		<?php echo $form->textField($model,'asmt_previous_toxin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_other_eye_disease'); ?>
		<?php echo $form->textField($model,'asmt_other_eye_disease',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_neuro_disease'); ?>
		<?php echo $form->textField($model,'asmt_neuro_disease',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_other'); ?>
		<?php echo $form->textField($model,'asmt_other',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_spectacle_wear'); ?>
		<?php echo $form->textField($model,'asmt_spectacle_wear'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_refraction_worn'); ?>
		<?php echo $form->textField($model,'asmt_refraction_worn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_sphere_right'); ?>
		<?php echo $form->textField($model,'asmt_sphere_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cyl_right'); ?>
		<?php echo $form->textField($model,'asmt_cyl_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_axis_right'); ?>
		<?php echo $form->textField($model,'asmt_axis_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_sphere_left'); ?>
		<?php echo $form->textField($model,'asmt_sphere_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cyl_left'); ?>
		<?php echo $form->textField($model,'asmt_cyl_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_axis_left'); ?>
		<?php echo $form->textField($model,'asmt_axis_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_near_right'); ?>
		<?php echo $form->textField($model,'asmt_near_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_near_left'); ?>
		<?php echo $form->textField($model,'asmt_near_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_bcva_let_right'); ?>
		<?php echo $form->textField($model,'asmt_bcva_let_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_bcva_let_left'); ?>
		<?php echo $form->textField($model,'asmt_bcva_let_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_bcva_kay_right'); ?>
		<?php echo $form->textField($model,'asmt_bcva_kay_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_bcva_kay_left'); ?>
		<?php echo $form->textField($model,'asmt_bcva_kay_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_fixation_right'); ?>
		<?php echo $form->textField($model,'asmt_fixation_right',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_fixation_left'); ?>
		<?php echo $form->textField($model,'asmt_fixation_left',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cover_hor_dist'); ?>
		<?php echo $form->textField($model,'asmt_cover_hor_dist',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_hor_angle_dist'); ?>
		<?php echo $form->textField($model,'asmt_hor_angle_dist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cover_vert_dist'); ?>
		<?php echo $form->textField($model,'asmt_cover_vert_dist',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_ver_angle_dist'); ?>
		<?php echo $form->textField($model,'asmt_ver_angle_dist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cover_hor_near'); ?>
		<?php echo $form->textField($model,'asmt_cover_hor_near',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_angle_near'); ?>
		<?php echo $form->textField($model,'asmt_angle_near'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cover_vert_near'); ?>
		<?php echo $form->textField($model,'asmt_cover_vert_near',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_ver_angle_near'); ?>
		<?php echo $form->textField($model,'asmt_ver_angle_near'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_pattern'); ?>
		<?php echo $form->textField($model,'asmt_pattern',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_ahp_present'); ?>
		<?php echo $form->textField($model,'asmt_ahp_present'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_ahp_desc'); ?>
		<?php echo $form->textField($model,'asmt_ahp_desc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_ahp_angle'); ?>
		<?php echo $form->textField($model,'asmt_ahp_angle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_binoc_with_cor'); ?>
		<?php echo $form->textField($model,'asmt_binoc_with_cor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_binoc_without_cor'); ?>
		<?php echo $form->textField($model,'asmt_binoc_without_cor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_torsion'); ?>
		<?php echo $form->textField($model,'asmt_torsion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_diplopia'); ?>
		<?php echo $form->textField($model,'asmt_diplopia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_stereo_present'); ?>
		<?php echo $form->textField($model,'asmt_stereo_present'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_stereo_frisby'); ?>
		<?php echo $form->textField($model,'asmt_stereo_frisby'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_stereo_tno'); ?>
		<?php echo $form->textField($model,'asmt_stereo_tno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_stereo_lang'); ?>
		<?php echo $form->textField($model,'asmt_stereo_lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_newcastle_home'); ?>
		<?php echo $form->textField($model,'asmt_newcastle_home',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_newcastle_near'); ?>
		<?php echo $form->textField($model,'asmt_newcastle_near',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_newcastle_distance'); ?>
		<?php echo $form->textField($model,'asmt_newcastle_distance',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_IXTQ'); ?>
		<?php echo $form->textField($model,'asmt_IXTQ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_amblyopia'); ?>
		<?php echo $form->textField($model,'asmt_amblyopia',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_amblyopia_treatment'); ?>
		<?php echo $form->textField($model,'asmt_amblyopia_treatment',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_notes'); ?>
		<?php echo $form->textArea($model,'asmt_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_goals'); ?>
		<?php echo $form->textArea($model,'plan_goals',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_other'); ?>
		<?php echo $form->textArea($model,'plan_other',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_position'); ?>
		<?php echo $form->textField($model,'plan_position',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_eccentric'); ?>
		<?php echo $form->textField($model,'plan_eccentric',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_distance'); ?>
		<?php echo $form->textField($model,'plan_distance',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_hor_target_direction'); ?>
		<?php echo $form->textField($model,'plan_hor_target_direction',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_hor_target_angle'); ?>
		<?php echo $form->textField($model,'plan_hor_target_angle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_ver_target_direction'); ?>
		<?php echo $form->textField($model,'plan_ver_target_direction',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_ver_target_angle'); ?>
		<?php echo $form->textField($model,'plan_ver_target_angle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_torsion'); ?>
		<?php echo $form->textField($model,'plan_torsion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_date'); ?>
		<?php echo $form->textField($model,'op_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_anaeshetic'); ?>
		<?php echo $form->textField($model,'op_anaeshetic',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_surgeon_grade'); ?>
		<?php echo $form->textField($model,'op_surgeon_grade',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_assistant_grade'); ?>
		<?php echo $form->textField($model,'op_assistant_grade',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_measurement_point'); ?>
		<?php echo $form->textField($model,'op_measurement_point',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rmr_surgery'); ?>
		<?php echo $form->textField($model,'op_rmr_surgery',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rmr_amount'); ?>
		<?php echo $form->textField($model,'op_rmr_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rmr_transposition'); ?>
		<?php echo $form->textField($model,'op_rmr_transposition',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rir_surgery'); ?>
		<?php echo $form->textField($model,'op_rir_surgery',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rir_amount'); ?>
		<?php echo $form->textField($model,'op_rir_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rir_transposition'); ?>
		<?php echo $form->textField($model,'op_rir_transposition',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rlr_surgery'); ?>
		<?php echo $form->textField($model,'op_rlr_surgery',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rlr_amount'); ?>
		<?php echo $form->textField($model,'op_rlr_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rlr_transposition'); ?>
		<?php echo $form->textField($model,'op_rlr_transposition',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rsr_surgery'); ?>
		<?php echo $form->textField($model,'op_rsr_surgery',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rsr_amount'); ?>
		<?php echo $form->textField($model,'op_rsr_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rsr_transposition'); ?>
		<?php echo $form->textField($model,'op_rsr_transposition',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lmr_surgery'); ?>
		<?php echo $form->textField($model,'op_lmr_surgery',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lmr_amount'); ?>
		<?php echo $form->textField($model,'op_lmr_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lmr_transposition'); ?>
		<?php echo $form->textField($model,'op_lmr_transposition',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lir_surgery'); ?>
		<?php echo $form->textField($model,'op_lir_surgery',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lir_amount'); ?>
		<?php echo $form->textField($model,'op_lir_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lir_transposition'); ?>
		<?php echo $form->textField($model,'op_lir_transposition',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_llr_surgery'); ?>
		<?php echo $form->textField($model,'op_llr_surgery',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_llr_amount'); ?>
		<?php echo $form->textField($model,'op_llr_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_llr_transposition'); ?>
		<?php echo $form->textField($model,'op_llr_transposition',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lsr_surgery'); ?>
		<?php echo $form->textField($model,'op_lsr_surgery',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lsr_amount'); ?>
		<?php echo $form->textField($model,'op_lsr_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lsr_transposition'); ?>
		<?php echo $form->textField($model,'op_lsr_transposition',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rio_surgery'); ?>
		<?php echo $form->textField($model,'op_rio_surgery',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rio_position'); ?>
		<?php echo $form->textField($model,'op_rio_position',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rio_transposition'); ?>
		<?php echo $form->textField($model,'op_rio_transposition',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rio_amount'); ?>
		<?php echo $form->textField($model,'op_rio_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rso_surgery'); ?>
		<?php echo $form->textField($model,'op_rso_surgery',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_rso_amount'); ?>
		<?php echo $form->textField($model,'op_rso_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lio_surgery'); ?>
		<?php echo $form->textField($model,'op_lio_surgery',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lio_position'); ?>
		<?php echo $form->textField($model,'op_lio_position',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lio_transposition'); ?>
		<?php echo $form->textField($model,'op_lio_transposition',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lio_amount'); ?>
		<?php echo $form->textField($model,'op_lio_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lso_surgery'); ?>
		<?php echo $form->textField($model,'op_lso_surgery',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lso_amount'); ?>
		<?php echo $form->textField($model,'op_lso_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_eyedraw_right'); ?>
		<?php echo $form->textArea($model,'op_eyedraw_right',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_eyedraw_left'); ?>
		<?php echo $form->textArea($model,'op_eyedraw_left',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comps'); ?>
		<?php echo $form->textArea($model,'op_comps',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comp_none'); ?>
		<?php echo $form->textField($model,'op_comp_none'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comp_wrong_side'); ?>
		<?php echo $form->textField($model,'op_comp_wrong_side'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comp_wrong_direction'); ?>
		<?php echo $form->textField($model,'op_comp_wrong_direction'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comp_globe_perf'); ?>
		<?php echo $form->textField($model,'op_comp_globe_perf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comp_snapped_muscle'); ?>
		<?php echo $form->textField($model,'op_comp_snapped_muscle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comp_lost_muscle'); ?>
		<?php echo $form->textField($model,'op_comp_lost_muscle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comp_bleeding'); ?>
		<?php echo $form->textField($model,'op_comp_bleeding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comp_other'); ?>
		<?php echo $form->textField($model,'op_comp_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_comments'); ?>
		<?php echo $form->textArea($model,'op_comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_date'); ?>
		<?php echo $form->textField($model,'early_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_bcva_let_right'); ?>
		<?php echo $form->textField($model,'early_bcva_let_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_bcva_let_left'); ?>
		<?php echo $form->textField($model,'early_bcva_let_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_bcva_kay_right'); ?>
		<?php echo $form->textField($model,'early_bcva_kay_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_bcva_kay_left'); ?>
		<?php echo $form->textField($model,'early_bcva_kay_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_fixation_right'); ?>
		<?php echo $form->textField($model,'early_fixation_right',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_fixation_left'); ?>
		<?php echo $form->textField($model,'early_fixation_left',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_cover_hor_dist'); ?>
		<?php echo $form->textField($model,'early_cover_hor_dist',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_hor_angle_dist'); ?>
		<?php echo $form->textField($model,'early_hor_angle_dist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_cover_vert_dist'); ?>
		<?php echo $form->textField($model,'early_cover_vert_dist',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_ver_angle_dist'); ?>
		<?php echo $form->textField($model,'early_ver_angle_dist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_cover_hor_near'); ?>
		<?php echo $form->textField($model,'early_cover_hor_near',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_angle_near'); ?>
		<?php echo $form->textField($model,'early_angle_near'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_cover_vert_near'); ?>
		<?php echo $form->textField($model,'early_cover_vert_near',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_ver_angle_near'); ?>
		<?php echo $form->textField($model,'early_ver_angle_near'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'early_notes'); ?>
		<?php echo $form->textArea($model,'early_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_date'); ?>
		<?php echo $form->textField($model,'late_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_bcva_let_right'); ?>
		<?php echo $form->textField($model,'late_bcva_let_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_bcva_let_left'); ?>
		<?php echo $form->textField($model,'late_bcva_let_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_bcva_kay_right'); ?>
		<?php echo $form->textField($model,'late_bcva_kay_right'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_bcva_kay_left'); ?>
		<?php echo $form->textField($model,'late_bcva_kay_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_fixation_right'); ?>
		<?php echo $form->textField($model,'late_fixation_right',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_fixation_left'); ?>
		<?php echo $form->textField($model,'late_fixation_left',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_cover_hor_dist'); ?>
		<?php echo $form->textField($model,'late_cover_hor_dist',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_hor_angle_dist'); ?>
		<?php echo $form->textField($model,'late_hor_angle_dist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_cover_vert_dist'); ?>
		<?php echo $form->textField($model,'late_cover_vert_dist',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_ver_angle_dist'); ?>
		<?php echo $form->textField($model,'late_ver_angle_dist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_cover_hor_near'); ?>
		<?php echo $form->textField($model,'late_cover_hor_near',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_angle_near'); ?>
		<?php echo $form->textField($model,'late_angle_near'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_cover_vert_near'); ?>
		<?php echo $form->textField($model,'late_cover_vert_near',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_ver_angle_near'); ?>
		<?php echo $form->textField($model,'late_ver_angle_near'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_notes'); ?>
		<?php echo $form->textArea($model,'late_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_pattern'); ?>
		<?php echo $form->textField($model,'late_pattern',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_stereo_present'); ?>
		<?php echo $form->textField($model,'late_stereo_present'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_stereo_frisby'); ?>
		<?php echo $form->textField($model,'late_stereo_frisby'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_stereo_tno'); ?>
		<?php echo $form->textField($model,'late_stereo_tno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_stereo_lang'); ?>
		<?php echo $form->textField($model,'late_stereo_lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_newcastle_home'); ?>
		<?php echo $form->textField($model,'late_newcastle_home',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_newcastle_near'); ?>
		<?php echo $form->textField($model,'late_newcastle_near',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_newcastle_distance'); ?>
		<?php echo $form->textField($model,'late_newcastle_distance',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_IXTQ'); ?>
		<?php echo $form->textField($model,'late_IXTQ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_amblyopia'); ?>
		<?php echo $form->textField($model,'late_amblyopia',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_ahp_present'); ?>
		<?php echo $form->textField($model,'late_ahp_present'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_ahp_desc'); ?>
		<?php echo $form->textField($model,'late_ahp_desc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_ahp_angle'); ?>
		<?php echo $form->textField($model,'late_ahp_angle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_diplopia'); ?>
		<?php echo $form->textField($model,'late_diplopia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_torsion'); ?>
		<?php echo $form->textField($model,'late_torsion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_none'); ?>
		<?php echo $form->textField($model,'late_comp_none'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_slipped_muscle'); ?>
		<?php echo $form->textField($model,'late_comp_slipped_muscle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_rrd'); ?>
		<?php echo $form->textField($model,'late_comp_rrd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_orb_inf'); ?>
		<?php echo $form->textField($model,'late_comp_orb_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_scleritis'); ?>
		<?php echo $form->textField($model,'late_comp_scleritis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_endophthalmitis'); ?>
		<?php echo $form->textField($model,'late_comp_endophthalmitis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_antseg_ischaemia'); ?>
		<?php echo $form->textField($model,'late_comp_antseg_ischaemia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_iatrogenic_diplopia'); ?>
		<?php echo $form->textField($model,'late_comp_iatrogenic_diplopia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_new_amblyopia'); ?>
		<?php echo $form->textField($model,'late_comp_new_amblyopia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_unscheduled_clinic'); ?>
		<?php echo $form->textField($model,'late_comp_unscheduled_clinic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_clinic_cause'); ?>
		<?php echo $form->textField($model,'late_comp_clinic_cause',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_unscheduled_theatre'); ?>
		<?php echo $form->textField($model,'late_comp_unscheduled_theatre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comp_theatre_cause'); ?>
		<?php echo $form->textField($model,'late_comp_theatre_cause',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'late_comments'); ?>
		<?php echo $form->textArea($model,'late_comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prom_as20_preop'); ?>
		<?php echo $form->textField($model,'prom_as20_preop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prom_as20_postop'); ?>
		<?php echo $form->textField($model,'prom_as20_postop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prom_likert'); ?>
		<?php echo $form->textField($model,'prom_likert'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->