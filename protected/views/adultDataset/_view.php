<?php
/* @var $this AdultDatasetController */
/* @var $data AdultDataset */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uuid')); ?>:</b>
	<?php echo CHtml::encode($data->uuid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_age')); ?>:</b>
	<?php echo CHtml::encode($data->pt_age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_sex')); ?>:</b>
	<?php echo CHtml::encode($data->pt_sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_postcode')); ?>:</b>
	<?php echo CHtml::encode($data->pt_postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_ethnic_group')); ?>:</b>
	<?php echo CHtml::encode($data->pt_ethnic_group); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_date')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_num_ops')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_num_ops); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_category')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_type')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_other_eye_surg')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_other_eye_surg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_orbital_surg')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_orbital_surg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_previous_toxin')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_previous_toxin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_other_eye_disease')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_other_eye_disease); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_neuro_disease')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_neuro_disease); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_other')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_spectacle_wear')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_spectacle_wear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_refraction_worn')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_refraction_worn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_sphere_right')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_sphere_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cyl_right')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cyl_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_axis_right')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_axis_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_sphere_left')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_sphere_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cyl_left')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cyl_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_axis_left')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_axis_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_near_right')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_near_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_near_left')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_near_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_bcva_let_right')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_bcva_let_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_bcva_let_left')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_bcva_let_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_bcva_kay_right')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_bcva_kay_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_bcva_kay_left')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_bcva_kay_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_fixation_right')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_fixation_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_fixation_left')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_fixation_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cover_hor_dist')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cover_hor_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_hor_angle_dist')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_hor_angle_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cover_vert_dist')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cover_vert_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_ver_angle_dist')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_ver_angle_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cover_hor_near')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cover_hor_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_angle_near')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_angle_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cover_vert_near')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cover_vert_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_ver_angle_near')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_ver_angle_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_pattern')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_pattern); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_ahp_present')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_ahp_present); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_ahp_desc')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_ahp_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_ahp_angle')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_ahp_angle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_binoc_with_cor')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_binoc_with_cor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_binoc_without_cor')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_binoc_without_cor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_torsion')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_torsion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_diplopia')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_diplopia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_stereo_present')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_stereo_present); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_stereo_frisby')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_stereo_frisby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_stereo_tno')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_stereo_tno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_stereo_lang')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_stereo_lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_newcastle_home')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_newcastle_home); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_newcastle_near')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_newcastle_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_newcastle_distance')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_newcastle_distance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_IXTQ')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_IXTQ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_amblyopia')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_amblyopia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_amblyopia_treatment')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_amblyopia_treatment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_notes')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_goals')); ?>:</b>
	<?php echo CHtml::encode($data->plan_goals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_other')); ?>:</b>
	<?php echo CHtml::encode($data->plan_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_position')); ?>:</b>
	<?php echo CHtml::encode($data->plan_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_eccentric')); ?>:</b>
	<?php echo CHtml::encode($data->plan_eccentric); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_distance')); ?>:</b>
	<?php echo CHtml::encode($data->plan_distance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_hor_target_direction')); ?>:</b>
	<?php echo CHtml::encode($data->plan_hor_target_direction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_hor_target_angle')); ?>:</b>
	<?php echo CHtml::encode($data->plan_hor_target_angle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_ver_target_direction')); ?>:</b>
	<?php echo CHtml::encode($data->plan_ver_target_direction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_ver_target_angle')); ?>:</b>
	<?php echo CHtml::encode($data->plan_ver_target_angle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_torsion')); ?>:</b>
	<?php echo CHtml::encode($data->plan_torsion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_date')); ?>:</b>
	<?php echo CHtml::encode($data->op_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_anaeshetic')); ?>:</b>
	<?php echo CHtml::encode($data->op_anaeshetic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_surgeon_grade')); ?>:</b>
	<?php echo CHtml::encode($data->op_surgeon_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_assistant_grade')); ?>:</b>
	<?php echo CHtml::encode($data->op_assistant_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_measurement_point')); ?>:</b>
	<?php echo CHtml::encode($data->op_measurement_point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rmr_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_rmr_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rmr_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_rmr_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rmr_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_rmr_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rir_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_rir_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rir_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_rir_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rir_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_rir_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rlr_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_rlr_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rlr_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_rlr_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rlr_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_rlr_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rsr_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_rsr_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rsr_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_rsr_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rsr_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_rsr_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lmr_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_lmr_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lmr_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_lmr_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lmr_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_lmr_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lir_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_lir_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lir_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_lir_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lir_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_lir_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_llr_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_llr_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_llr_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_llr_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_llr_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_llr_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lsr_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_lsr_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lsr_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_lsr_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lsr_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_lsr_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rio_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_rio_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rio_position')); ?>:</b>
	<?php echo CHtml::encode($data->op_rio_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rio_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_rio_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rio_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_rio_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rso_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_rso_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_rso_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_rso_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lio_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_lio_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lio_position')); ?>:</b>
	<?php echo CHtml::encode($data->op_lio_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lio_transposition')); ?>:</b>
	<?php echo CHtml::encode($data->op_lio_transposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lio_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_lio_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lso_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->op_lso_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lso_amount')); ?>:</b>
	<?php echo CHtml::encode($data->op_lso_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_eyedraw_right')); ?>:</b>
	<?php echo CHtml::encode($data->op_eyedraw_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_eyedraw_left')); ?>:</b>
	<?php echo CHtml::encode($data->op_eyedraw_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comps')); ?>:</b>
	<?php echo CHtml::encode($data->op_comps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comp_none')); ?>:</b>
	<?php echo CHtml::encode($data->op_comp_none); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comp_wrong_side')); ?>:</b>
	<?php echo CHtml::encode($data->op_comp_wrong_side); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comp_wrong_direction')); ?>:</b>
	<?php echo CHtml::encode($data->op_comp_wrong_direction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comp_globe_perf')); ?>:</b>
	<?php echo CHtml::encode($data->op_comp_globe_perf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comp_snapped_muscle')); ?>:</b>
	<?php echo CHtml::encode($data->op_comp_snapped_muscle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comp_lost_muscle')); ?>:</b>
	<?php echo CHtml::encode($data->op_comp_lost_muscle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comp_bleeding')); ?>:</b>
	<?php echo CHtml::encode($data->op_comp_bleeding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comp_other')); ?>:</b>
	<?php echo CHtml::encode($data->op_comp_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_comments')); ?>:</b>
	<?php echo CHtml::encode($data->op_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_date')); ?>:</b>
	<?php echo CHtml::encode($data->early_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_bcva_let_right')); ?>:</b>
	<?php echo CHtml::encode($data->early_bcva_let_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_bcva_let_left')); ?>:</b>
	<?php echo CHtml::encode($data->early_bcva_let_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_bcva_kay_right')); ?>:</b>
	<?php echo CHtml::encode($data->early_bcva_kay_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_bcva_kay_left')); ?>:</b>
	<?php echo CHtml::encode($data->early_bcva_kay_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_fixation_right')); ?>:</b>
	<?php echo CHtml::encode($data->early_fixation_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_fixation_left')); ?>:</b>
	<?php echo CHtml::encode($data->early_fixation_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_cover_hor_dist')); ?>:</b>
	<?php echo CHtml::encode($data->early_cover_hor_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_hor_angle_dist')); ?>:</b>
	<?php echo CHtml::encode($data->early_hor_angle_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_cover_vert_dist')); ?>:</b>
	<?php echo CHtml::encode($data->early_cover_vert_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_ver_angle_dist')); ?>:</b>
	<?php echo CHtml::encode($data->early_ver_angle_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_cover_hor_near')); ?>:</b>
	<?php echo CHtml::encode($data->early_cover_hor_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_angle_near')); ?>:</b>
	<?php echo CHtml::encode($data->early_angle_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_cover_vert_near')); ?>:</b>
	<?php echo CHtml::encode($data->early_cover_vert_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_ver_angle_near')); ?>:</b>
	<?php echo CHtml::encode($data->early_ver_angle_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('early_notes')); ?>:</b>
	<?php echo CHtml::encode($data->early_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_date')); ?>:</b>
	<?php echo CHtml::encode($data->late_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_bcva_let_right')); ?>:</b>
	<?php echo CHtml::encode($data->late_bcva_let_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_bcva_let_left')); ?>:</b>
	<?php echo CHtml::encode($data->late_bcva_let_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_bcva_kay_right')); ?>:</b>
	<?php echo CHtml::encode($data->late_bcva_kay_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_bcva_kay_left')); ?>:</b>
	<?php echo CHtml::encode($data->late_bcva_kay_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_fixation_right')); ?>:</b>
	<?php echo CHtml::encode($data->late_fixation_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_fixation_left')); ?>:</b>
	<?php echo CHtml::encode($data->late_fixation_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_cover_hor_dist')); ?>:</b>
	<?php echo CHtml::encode($data->late_cover_hor_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_hor_angle_dist')); ?>:</b>
	<?php echo CHtml::encode($data->late_hor_angle_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_cover_vert_dist')); ?>:</b>
	<?php echo CHtml::encode($data->late_cover_vert_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_ver_angle_dist')); ?>:</b>
	<?php echo CHtml::encode($data->late_ver_angle_dist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_cover_hor_near')); ?>:</b>
	<?php echo CHtml::encode($data->late_cover_hor_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_angle_near')); ?>:</b>
	<?php echo CHtml::encode($data->late_angle_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_cover_vert_near')); ?>:</b>
	<?php echo CHtml::encode($data->late_cover_vert_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_ver_angle_near')); ?>:</b>
	<?php echo CHtml::encode($data->late_ver_angle_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_notes')); ?>:</b>
	<?php echo CHtml::encode($data->late_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_pattern')); ?>:</b>
	<?php echo CHtml::encode($data->late_pattern); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_stereo_present')); ?>:</b>
	<?php echo CHtml::encode($data->late_stereo_present); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_stereo_frisby')); ?>:</b>
	<?php echo CHtml::encode($data->late_stereo_frisby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_stereo_tno')); ?>:</b>
	<?php echo CHtml::encode($data->late_stereo_tno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_stereo_lang')); ?>:</b>
	<?php echo CHtml::encode($data->late_stereo_lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_newcastle_home')); ?>:</b>
	<?php echo CHtml::encode($data->late_newcastle_home); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_newcastle_near')); ?>:</b>
	<?php echo CHtml::encode($data->late_newcastle_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_newcastle_distance')); ?>:</b>
	<?php echo CHtml::encode($data->late_newcastle_distance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_IXTQ')); ?>:</b>
	<?php echo CHtml::encode($data->late_IXTQ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_amblyopia')); ?>:</b>
	<?php echo CHtml::encode($data->late_amblyopia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_ahp_present')); ?>:</b>
	<?php echo CHtml::encode($data->late_ahp_present); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_ahp_desc')); ?>:</b>
	<?php echo CHtml::encode($data->late_ahp_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_ahp_angle')); ?>:</b>
	<?php echo CHtml::encode($data->late_ahp_angle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_diplopia')); ?>:</b>
	<?php echo CHtml::encode($data->late_diplopia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_torsion')); ?>:</b>
	<?php echo CHtml::encode($data->late_torsion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_none')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_none); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_slipped_muscle')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_slipped_muscle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_rrd')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_rrd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_orb_inf')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_orb_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_scleritis')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_scleritis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_endophthalmitis')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_endophthalmitis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_antseg_ischaemia')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_antseg_ischaemia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_iatrogenic_diplopia')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_iatrogenic_diplopia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_new_amblyopia')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_new_amblyopia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_unscheduled_clinic')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_unscheduled_clinic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_clinic_cause')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_clinic_cause); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_unscheduled_theatre')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_unscheduled_theatre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comp_theatre_cause')); ?>:</b>
	<?php echo CHtml::encode($data->late_comp_theatre_cause); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('late_comments')); ?>:</b>
	<?php echo CHtml::encode($data->late_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prom_as20_preop')); ?>:</b>
	<?php echo CHtml::encode($data->prom_as20_preop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prom_as20_postop')); ?>:</b>
	<?php echo CHtml::encode($data->prom_as20_postop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prom_likert')); ?>:</b>
	<?php echo CHtml::encode($data->prom_likert); ?>
	<br />

	*/ ?>

</div>