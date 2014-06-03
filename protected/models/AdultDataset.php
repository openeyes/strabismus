<?php

/**
 * This is the model class for table "{{adult_dataset}}".
 *
 * The followings are the available columns in table '{{adult_dataset}}':
 * @property string $id
 * @property string $userId
 * @property string $uuid
 * @property integer $pt_age
 * @property string $pt_sex
 * @property string $pt_postcode
 * @property string $pt_ethnic_group
 * @property string $asmt_date
 * @property integer $asmt_num_ops
 * @property string $asmt_category
 * @property string $asmt_type
 * @property string $asmt_other_eye_surg
 * @property string $asmt_orbital_surg
 * @property integer $asmt_previous_toxin
 * @property string $asmt_other_eye_disease
 * @property string $asmt_neuro_disease
 * @property string $asmt_other
 * @property integer $asmt_spectacle_wear
 * @property integer $asmt_refraction_worn
 * @property double $asmt_sphere_right
 * @property double $asmt_cyl_right
 * @property integer $asmt_axis_right
 * @property double $asmt_sphere_left
 * @property double $asmt_cyl_left
 * @property integer $asmt_axis_left
 * @property double $asmt_near_right
 * @property double $asmt_near_left
 * @property double $asmt_bcva_let_right
 * @property double $asmt_bcva_let_left
 * @property double $asmt_bcva_kay_right
 * @property double $asmt_bcva_kay_left
 * @property string $asmt_fixation_right
 * @property string $asmt_fixation_left
 * @property string $asmt_cover_hor_dist
 * @property integer $asmt_hor_angle_dist
 * @property string $asmt_cover_vert_dist
 * @property integer $asmt_ver_angle_dist
 * @property string $asmt_cover_hor_near
 * @property integer $asmt_angle_near
 * @property string $asmt_cover_vert_near
 * @property integer $asmt_ver_angle_near
 * @property string $asmt_pattern
 * @property integer $asmt_ahp_present
 * @property string $asmt_ahp_desc
 * @property integer $asmt_ahp_angle
 * @property integer $asmt_binoc_with_cor
 * @property integer $asmt_binoc_without_cor
 * @property integer $asmt_torsion
 * @property integer $asmt_diplopia
 * @property integer $asmt_stereo_present
 * @property integer $asmt_stereo_frisby
 * @property integer $asmt_stereo_tno
 * @property integer $asmt_stereo_lang
 * @property string $asmt_newcastle_home
 * @property string $asmt_newcastle_near
 * @property string $asmt_newcastle_distance
 * @property integer $asmt_IXTQ
 * @property string $asmt_amblyopia
 * @property string $asmt_amblyopia_treatment
 * @property string $asmt_notes
 * @property string $plan_goals
 * @property string $plan_other
 * @property string $plan_position
 * @property string $plan_eccentric
 * @property string $plan_distance
 * @property string $plan_hor_target_direction
 * @property integer $plan_hor_target_angle
 * @property string $plan_ver_target_direction
 * @property integer $plan_ver_target_angle
 * @property integer $plan_torsion
 * @property string $op_date
 * @property string $op_anaeshetic
 * @property string $op_surgeon_grade
 * @property string $op_assistant_grade
 * @property string $op_measurement_point
 * @property string $op_rmr_surgery
 * @property double $op_rmr_amount
 * @property string $op_rmr_transposition
 * @property string $op_rir_surgery
 * @property double $op_rir_amount
 * @property string $op_rir_transposition
 * @property string $op_rlr_surgery
 * @property double $op_rlr_amount
 * @property string $op_rlr_transposition
 * @property string $op_rsr_surgery
 * @property double $op_rsr_amount
 * @property string $op_rsr_transposition
 * @property string $op_lmr_surgery
 * @property double $op_lmr_amount
 * @property string $op_lmr_transposition
 * @property string $op_lir_surgery
 * @property double $op_lir_amount
 * @property string $op_lir_transposition
 * @property string $op_llr_surgery
 * @property double $op_llr_amount
 * @property string $op_llr_transposition
 * @property string $op_lsr_surgery
 * @property double $op_lsr_amount
 * @property string $op_lsr_transposition
 * @property string $op_rio_surgery
 * @property string $op_rio_position
 * @property string $op_rio_transposition
 * @property double $op_rio_amount
 * @property string $op_rso_surgery
 * @property integer $op_rso_amount
 * @property string $op_lio_surgery
 * @property string $op_lio_position
 * @property string $op_lio_transposition
 * @property double $op_lio_amount
 * @property string $op_lso_surgery
 * @property integer $op_lso_amount
 * @property string $op_eyedraw_right
 * @property string $op_eyedraw_left
 * @property string $op_comps
 * @property integer $op_comp_none
 * @property integer $op_comp_wrong_side
 * @property integer $op_comp_wrong_direction
 * @property integer $op_comp_globe_perf
 * @property integer $op_comp_snapped_muscle
 * @property integer $op_comp_lost_muscle
 * @property integer $op_comp_bleeding
 * @property integer $op_comp_other
 * @property string $op_comments
 * @property string $early_date
 * @property double $early_bcva_let_right
 * @property double $early_bcva_let_left
 * @property double $early_bcva_kay_right
 * @property double $early_bcva_kay_left
 * @property string $early_fixation_right
 * @property string $early_fixation_left
 * @property string $early_cover_hor_dist
 * @property integer $early_hor_angle_dist
 * @property string $early_cover_vert_dist
 * @property integer $early_ver_angle_dist
 * @property string $early_cover_hor_near
 * @property integer $early_angle_near
 * @property string $early_cover_vert_near
 * @property integer $early_ver_angle_near
 * @property string $early_notes
 * @property string $late_date
 * @property double $late_bcva_let_right
 * @property double $late_bcva_let_left
 * @property double $late_bcva_kay_right
 * @property double $late_bcva_kay_left
 * @property string $late_fixation_right
 * @property string $late_fixation_left
 * @property string $late_cover_hor_dist
 * @property integer $late_hor_angle_dist
 * @property string $late_cover_vert_dist
 * @property integer $late_ver_angle_dist
 * @property string $late_cover_hor_near
 * @property integer $late_angle_near
 * @property string $late_cover_vert_near
 * @property integer $late_ver_angle_near
 * @property string $late_notes
 * @property string $late_pattern
 * @property integer $late_stereo_present
 * @property integer $late_stereo_frisby
 * @property integer $late_stereo_tno
 * @property integer $late_stereo_lang
 * @property string $late_newcastle_home
 * @property string $late_newcastle_near
 * @property string $late_newcastle_distance
 * @property integer $late_IXTQ
 * @property string $late_amblyopia
 * @property integer $late_ahp_present
 * @property string $late_ahp_desc
 * @property integer $late_ahp_angle
 * @property integer $late_diplopia
 * @property integer $late_torsion
 * @property integer $late_comp_none
 * @property integer $late_comp_slipped_muscle
 * @property integer $late_comp_rrd
 * @property integer $late_comp_orb_inf
 * @property integer $late_comp_scleritis
 * @property integer $late_comp_endophthalmitis
 * @property integer $late_comp_antseg_ischaemia
 * @property integer $late_comp_iatrogenic_diplopia
 * @property integer $late_comp_new_amblyopia
 * @property integer $late_comp_unscheduled_clinic
 * @property string $late_comp_clinic_cause
 * @property integer $late_comp_unscheduled_theatre
 * @property string $late_comp_theatre_cause
 * @property string $late_comments
 * @property integer $prom_as20_preop
 * @property integer $prom_as20_postop
 * @property integer $prom_likert
 */
class AdultDataset extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdultDataset the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{adult_dataset}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uuid', 'required'),
			array('pt_age, asmt_num_ops, asmt_previous_toxin, asmt_spectacle_wear, asmt_refraction_worn, asmt_axis_right, asmt_axis_left, asmt_hor_angle_dist, asmt_ver_angle_dist, asmt_angle_near, asmt_ver_angle_near, asmt_ahp_present, asmt_ahp_angle, asmt_binoc_with_cor, asmt_binoc_without_cor, asmt_torsion_sub, asmt_torsion, asmt_diplopia, asmt_stereo_present, asmt_stereo_frisby, asmt_stereo_tno, asmt_stereo_lang, asmt_IXTQ, asmt_psychosocial, asmt_functional, asmt_total, plan_hor_target_angle, plan_ver_target_angle, plan_torsion, plan_zero_torsion, op_rso_amount, op_lso_amount, op_comp_none, op_comp_wrong_side, op_comp_wrong_direction, op_comp_globe_perf, op_comp_snapped_muscle, op_comp_lost_muscle, op_comp_bleeding, op_comp_other, early_hor_angle_dist, early_ver_angle_dist, early_angle_near, early_ver_angle_near, early_torsion_sub, late_hor_angle_dist, late_ver_angle_dist, late_angle_near, late_ver_angle_near, late_stereo_present, late_stereo_frisby, late_stereo_tno, late_stereo_lang, late_IXTQ, late_ahp_present, late_ahp_angle, late_binoc_with_cor, late_binoc_without_cor, late_diplopia, late_torsion_sub, late_torsion, late_comp_none, late_comp_slipped_muscle, late_comp_rrd, late_comp_orb_inf, late_comp_scleritis, late_comp_endophthalmitis, late_comp_antseg_ischaemia, late_comp_iatrogenic_diplopia, late_comp_new_amblyopia, late_comp_unscheduled_clinic, late_comp_unscheduled_theatre, prom_as20_preop, prom_as20_postop, prom_likert', 'numerical', 'integerOnly'=>true),
			array('asmt_sphere_right, asmt_cyl_right, asmt_sphere_left, asmt_cyl_left, asmt_near_right, asmt_near_left, asmt_bcva_let_right, asmt_bcva_let_left, asmt_bcva_kay_right, asmt_bcva_kay_left, op_rmr_amount, op_rir_amount, op_rlr_amount, op_rsr_amount, op_lmr_amount, op_lir_amount, op_llr_amount, op_lsr_amount, op_rio_amount, op_lio_amount, early_bcva_let_right, early_bcva_let_left, early_bcva_kay_right, early_bcva_kay_left, late_bcva_let_right, late_bcva_let_left, late_bcva_kay_right, late_bcva_kay_left', 'numerical'),
			array('userId, asmt_ahp_desc, asmt_amblyopia_treatment, late_ahp_desc', 'length', 'max'=>10),
			array('uuid', 'length', 'max'=>36),
			array('pt_sex, asmt_fixation_right, asmt_fixation_left, early_fixation_right, early_fixation_left, late_fixation_right, late_fixation_left', 'length', 'max'=>6),
			array('pt_postcode, asmt_cover_hor_dist, asmt_cover_hor_near, asmt_pattern, op_rmr_transposition, op_rlr_transposition, op_lmr_transposition, op_llr_transposition, early_cover_hor_dist, early_cover_hor_near, late_cover_hor_dist, late_cover_hor_near, late_pattern', 'length', 'max'=>4),
			array('pt_ethnic_group', 'length', 'max'=>26),
			array('asmt_category, asmt_type, asmt_other_eye_surg, asmt_orbital_surg, asmt_other_eye_disease, asmt_neuro_disease, asmt_other, late_comp_clinic_cause, late_comp_theatre_cause', 'length', 'max'=>255),
			array('asmt_cover_vert_dist, asmt_cover_vert_near, plan_hor_target_direction, plan_ver_target_direction, early_cover_vert_dist, early_cover_vert_near, late_cover_vert_dist, late_cover_vert_near', 'length', 'max'=>3),
			array('asmt_newcastle_home, asmt_newcastle_near, asmt_newcastle_distance, plan_eccentric, late_newcastle_home, late_newcastle_near, late_newcastle_distance', 'length', 'max'=>1),
			array('asmt_amblyopia, late_amblyopia', 'length', 'max'=>5),
			array('plan_position, op_measurement_point', 'length', 'max'=>9),
			array('plan_distance', 'length', 'max'=>8),
			array('op_anaeshetic', 'length', 'max'=>12),
			array('op_surgeon_grade, op_assistant_grade', 'length', 'max'=>20),
			array('op_rmr_surgery, op_rir_surgery, op_rlr_surgery, op_rsr_surgery, op_lmr_surgery, op_lir_surgery, op_llr_surgery, op_lsr_surgery', 'length', 'max'=>33),
			array('op_rir_transposition, op_rsr_transposition, op_lir_transposition, op_lsr_transposition', 'length', 'max'=>7),
			array('op_rio_surgery, op_rio_transposition, op_lio_surgery, op_lio_transposition', 'length', 'max'=>22),
			array('op_rio_position, op_lio_position', 'length', 'max'=>14),
			array('op_rso_surgery, op_lso_surgery', 'length', 'max'=>18),
			array('asmt_notes, asmt_hvt_tr, asmt_hvt_tm, asmt_hvt_tl, asmt_hvt_mr, asmt_hvt_mm, asmt_hvt_ml, asmt_hvt_br, asmt_hvt_bm, asmt_hvt_bl, plan_goals, plan_other, op_date, op_eyedraw_right, op_eyedraw_left, op_comps, op_comments, early_date, early_notes, late_date, late_notes, late_comments', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, uuid, pt_age, pt_sex, pt_postcode, pt_ethnic_group, asmt_date, asmt_num_ops, asmt_category, asmt_type, asmt_other_eye_surg, asmt_orbital_surg, asmt_previous_toxin, asmt_other_eye_disease, asmt_neuro_disease, asmt_other, asmt_spectacle_wear, asmt_refraction_worn, asmt_sphere_right, asmt_cyl_right, asmt_axis_right, asmt_sphere_left, asmt_cyl_left, asmt_axis_left, asmt_near_right, asmt_near_left, asmt_bcva_let_right, asmt_bcva_let_left, asmt_bcva_kay_right, asmt_bcva_kay_left, asmt_fixation_right, asmt_fixation_left, asmt_cover_hor_dist, asmt_hor_angle_dist, asmt_cover_vert_dist, asmt_ver_angle_dist, asmt_cover_hor_near, asmt_angle_near, asmt_cover_vert_near, asmt_ver_angle_near, asmt_pattern, asmt_ahp_present, asmt_ahp_desc, asmt_ahp_angle, asmt_binoc_with_cor, asmt_binoc_without_cor, asmt_torsion_sub, asmt_torsion, asmt_torsion_side, asmt_torsion_clock, asmt_torsion_amt, asmt_diplopia, asmt_stereo_present, asmt_stereo_frisby, asmt_stereo_tno, asmt_stereo_lang, asmt_newcastle_home, asmt_newcastle_near, asmt_newcastle_distance, asmt_IXTQ, asmt_amblyopia, asmt_amblyopia_treatment, asmt_notes, plan_goals, plan_other, plan_position, plan_eccentric, plan_distance, plan_hor_target_direction, plan_hor_target_angle, plan_ver_target_direction, plan_ver_target_angle, plan_torsion, op_date, op_anaeshetic, op_surgeon_grade, op_assistant_grade, op_measurement_point, op_rmr_surgery, op_rmr_amount, op_rmr_transposition, op_rir_surgery, op_rir_amount, op_rir_transposition, op_rlr_surgery, op_rlr_amount, op_rlr_transposition, op_rsr_surgery, op_rsr_amount, op_rsr_transposition, op_lmr_surgery, op_lmr_amount, op_lmr_transposition, op_lir_surgery, op_lir_amount, op_lir_transposition, op_llr_surgery, op_llr_amount, op_llr_transposition, op_lsr_surgery, op_lsr_amount, op_lsr_transposition, op_rio_surgery, op_rio_position, op_rio_transposition, op_rio_amount, op_rso_surgery, op_rso_amount, op_lio_surgery, op_lio_position, op_lio_transposition, op_lio_amount, op_lso_surgery, op_lso_amount, op_eyedraw_right, op_eyedraw_left, op_comps, op_comp_none, op_comp_wrong_side, op_comp_wrong_direction, op_comp_globe_perf, op_comp_snapped_muscle, op_comp_lost_muscle, op_comp_bleeding, op_comp_other, op_comments, early_date, early_bcva_let_right, early_bcva_let_left, early_bcva_kay_right, early_bcva_kay_left, early_fixation_right, early_fixation_left, early_cover_hor_dist, early_hor_angle_dist, early_cover_vert_dist, early_ver_angle_dist, early_cover_hor_near, early_angle_near, early_cover_vert_near, early_ver_angle_near, early_torsion_sub, early_torsion, early_torsion_side, early_torsion_clock, early_torsion_amt, early_notes, late_date, late_bcva_let_right, late_bcva_let_left, late_bcva_kay_right, late_bcva_kay_left, late_fixation_right, late_fixation_left, late_cover_hor_dist, late_hor_angle_dist, late_cover_vert_dist, late_ver_angle_dist, late_cover_hor_near, late_angle_near, late_cover_vert_near, late_ver_angle_near, late_notes, late_pattern, late_stereo_present, late_stereo_frisby, late_stereo_tno, late_stereo_lang, late_newcastle_home, late_newcastle_near, late_newcastle_distance, late_IXTQ, late_amblyopia, late_ahp_present, late_ahp_desc, late_ahp_angle, late_binoc_with_cor, late_binoc_without_cor, late_diplopia, late_torsion_sub, late_torsion, late_torsion_side, late_torsion_clock, late_torsion_amt, late_comp_none, late_comp_slipped_muscle, late_comp_rrd, late_comp_orb_inf, late_comp_scleritis, late_comp_endophthalmitis, late_comp_antseg_ischaemia, late_comp_iatrogenic_diplopia, late_comp_new_amblyopia, late_comp_unscheduled_clinic, late_comp_clinic_cause, late_comp_unscheduled_theatre, late_comp_theatre_cause, late_comments, prom_as20_preop, prom_as20_postop, prom_likert', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userId' => 'User',
			'uuid' => 'Uuid',
			'pt_age' => 'Age',
			'pt_sex' => 'Sex',
			'pt_postcode' => 'Postcode (First half)',
			'pt_ethnic_group' => 'Ethnic Group',
			'asmt_date' => 'Assessment Date',
			'asmt_num_ops' => 'Previous operations',
			'asmt_category' => 'Category',
			'asmt_type' => 'Type',
			'asmt_other_eye_surg' => 'Other Eye Surgery',
			'asmt_orbital_surg' => 'Orbital Surgery',
			'asmt_previous_toxin' => 'Previous Toxin',
			'asmt_other_eye_disease' => 'Other Eye Disease',
			'asmt_neuro_disease' => 'Neurological Disease',
			'asmt_other' => 'Other',
			'asmt_spectacle_wear' => 'Asmt Spectacle Wear',
			'asmt_refraction_worn' => 'Asmt Refraction Worn',
			'asmt_sphere_right' => 'Asmt Sphere Right',
			'asmt_cyl_right' => 'Asmt Cyl Right',
			'asmt_axis_right' => 'Asmt Axis Right',
			'asmt_sphere_left' => 'Asmt Sphere Left',
			'asmt_cyl_left' => 'Asmt Cyl Left',
			'asmt_axis_left' => 'Asmt Axis Left',
			'asmt_near_right' => 'Asmt Near Right',
			'asmt_near_left' => 'Asmt Near Left',
			'asmt_bcva_let_right' => 'Asmt Bcva Let Right',
			'asmt_bcva_let_left' => 'Asmt Bcva Let Left',
			'asmt_bcva_kay_right' => 'Asmt Bcva Kay Right',
			'asmt_bcva_kay_left' => 'Asmt Bcva Kay Left',
			'asmt_fixation_right' => 'Asmt Fixation Right',
			'asmt_fixation_left' => 'Asmt Fixation Left',
			'asmt_cover_hor_dist' => 'CT horizontal (distance)',
			'asmt_hor_angle_dist' => 'Distance angle',
			'asmt_cover_vert_dist' => 'CT vertical (distance)',
			'asmt_ver_angle_dist' => 'Distance angle',
			'asmt_cover_hor_near' => 'CT horizontal (near)',
			'asmt_angle_near' => 'Near angle',
			'asmt_cover_vert_near' => 'CT vertical (near)',
			'asmt_ver_angle_near' => 'Near angle',
			'asmt_pattern' => 'Signficant pattern',
			'asmt_ahp_present' => 'Abnormal head posture',
			'asmt_ahp_desc' => 'AHP description',
			'asmt_ahp_angle' => 'AHP angle',
			'asmt_binoc_with_cor' => 'Binocularity with angle correction',
			'asmt_binoc_without_cor' => 'Binocularity without angle correction',
			'asmt_torsion_sub' => 'PP subjective torsion',
			'asmt_torsion' => 'PP objective torsion',
			'asmt_torsion_side' => 'Side',
			'asmt_torsion_clock' => 'Type',
			'asmt_torsion_amt' => 'Amount',
			'asmt_diplopia' => 'Reports any diplopia',
			'asmt_stereo_present' => 'Stereoacuity recordable',
			'asmt_stereo_frisby' => 'Frisby',
			'asmt_stereo_tno' => 'TNO',
			'asmt_stereo_lang' => 'Lang',
			'asmt_newcastle_home' => 'Asmt Newcastle Home',
			'asmt_newcastle_near' => 'Asmt Newcastle Near',
			'asmt_newcastle_distance' => 'Asmt Newcastle Distance',
			'asmt_IXTQ' => 'Asmt Ixtq',
			'asmt_amblyopia' => 'Asmt Amblyopia',
			'asmt_amblyopia_treatment' => 'Asmt Amblyopia Treatment',
			'asmt_notes' => 'Asmt Notes',
			'asmt_psychosocial' => 'Psychosocial',
			'asmt_functional' => 'Functional',
			'asmt_total' => 'Total',
			'plan_goals' => 'Goals',
			'plan_other' => 'Specify',
			'plan_position' => 'Position',
			'plan_eccentric' => 'Value',
			'plan_distance' => 'Measurement Distance',
			'plan_hor_target_direction' => 'Horizontal Direction',
			'plan_hor_target_angle' => 'Horizontal Angle',
			'plan_ver_target_direction' => 'Vertical Direction',
			'plan_ver_target_angle' => 'Vertical Angle',
			'plan_torsion' => 'Plan Torsion',
			'plan_zero_torsion' => 'Torsion = 0',
			'op_date' => 'Op date',
			'op_anaeshetic' => 'Op Anaeshetic',
			'op_surgeon_grade' => 'Grade of Surgeon 1',
			'op_assistant_grade' => 'Grade of Surgeon 2',
			'op_measurement_point' => 'Measured from',
			'op_rmr_surgery' => 'RMR surgery',
			'op_rmr_amount' => 'Amount',
			'op_rmr_transposition' => 'Op Rmr Transposition',
			'op_rir_surgery' => 'RIR surgery',
			'op_rir_amount' => 'Amount',
			'op_rir_transposition' => 'Op Rir Transposition',
			'op_rlr_surgery' => 'RLR surgery',
			'op_rlr_amount' => 'Amount',
			'op_rlr_transposition' => 'Op Rlr Transposition',
			'op_rsr_surgery' => 'RSR surgery',
			'op_rsr_amount' => 'Amount',
			'op_rsr_transposition' => 'Op Rsr Transposition',
			'op_lmr_surgery' => 'LMR surgery',
			'op_lmr_amount' => 'Amount',
			'op_lmr_transposition' => 'Op Lmr Transposition',
			'op_lir_surgery' => 'LIR surgery',
			'op_lir_amount' => 'Amount',
			'op_lir_transposition' => 'Op Lir Transposition',
			'op_llr_surgery' => 'LLR surgery',
			'op_llr_amount' => 'Amount',
			'op_llr_transposition' => 'Op Llr Transposition',
			'op_lsr_surgery' => 'LSR surgery',
			'op_lsr_amount' => 'Amount',
			'op_lsr_transposition' => 'Op Lsr Transposition',
			'op_rio_surgery' => 'Op Rio Surgery',
			'op_rio_position' => 'Op Rio Position',
			'op_rio_transposition' => 'Op Rio Transposition',
			'op_rio_amount' => 'Op Rio Amount',
			'op_rso_surgery' => 'Op Rso Surgery',
			'op_rso_amount' => 'Op Rso Amount',
			'op_lio_surgery' => 'Op Lio Surgery',
			'op_lio_position' => 'Op Lio Position',
			'op_lio_transposition' => 'Op Lio Transposition',
			'op_lio_amount' => 'Op Lio Amount',
			'op_lso_surgery' => 'Op Lso Surgery',
			'op_lso_amount' => 'Op Lso Amount',
			'op_eyedraw_right' => 'Op Eyedraw Right',
			'op_eyedraw_left' => 'Op Eyedraw Left',
			'op_comps' => 'Other',
			'op_comp_none' => 'No complications',
			'op_comp_wrong_side' => 'Wrong side',
			'op_comp_wrong_direction' => 'Wrong direction',
			'op_comp_globe_perf' => 'Globe perforation',
			'op_comp_snapped_muscle' => 'Snapped muscle',
			'op_comp_lost_muscle' => 'Lost muscle',
			'op_comp_bleeding' => 'Excessive bleeding',
			'op_comp_other' => 'Other',
			'op_comments' => 'Comments',
			'early_date' => 'Early Date',
			'early_bcva_let_right' => 'Early Bcva Let Right',
			'early_bcva_let_left' => 'Early Bcva Let Left',
			'early_bcva_kay_right' => 'Early Bcva Kay Right',
			'early_bcva_kay_left' => 'Early Bcva Kay Left',
			'early_fixation_right' => 'Early Fixation Right',
			'early_fixation_left' => 'Early Fixation Left',
			'early_cover_hor_dist' => 'Early Cover Hor Dist',
			'early_hor_angle_dist' => 'Early Hor Angle Dist',
			'early_cover_vert_dist' => 'Early Cover Vert Dist',
			'early_ver_angle_dist' => 'Early Ver Angle Dist',
			'early_cover_hor_near' => 'Early Cover Hor Near',
			'early_angle_near' => 'Early Angle Near',
			'early_cover_vert_near' => 'Early Cover Vert Near',
			'early_ver_angle_near' => 'Early Ver Angle Near',
			'early_torsion_sub' => 'PP subjective torsion',
			'early_torsion' => 'PP Objective torsion',
			'early_torsion_side' => 'Side',
			'early_torsion_clock' => 'Type',
			'early_torsion_amt' => 'Amount',
			'early_notes' => 'Early Notes',
			'late_date' => 'Late Date',
			'late_bcva_let_right' => 'Late Bcva Let Right',
			'late_bcva_let_left' => 'Late Bcva Let Left',
			'late_bcva_kay_right' => 'Late Bcva Kay Right',
			'late_bcva_kay_left' => 'Late Bcva Kay Left',
			'late_fixation_right' => 'Late Fixation Right',
			'late_fixation_left' => 'Late Fixation Left',
			'late_cover_hor_dist' => 'Late Cover Hor Dist',
			'late_hor_angle_dist' => 'Late Hor Angle Dist',
			'late_cover_vert_dist' => 'Late Cover Vert Dist',
			'late_ver_angle_dist' => 'Late Ver Angle Dist',
			'late_cover_hor_near' => 'Late Cover Hor Near',
			'late_angle_near' => 'Late Angle Near',
			'late_cover_vert_near' => 'Late Cover Vert Near',
			'late_ver_angle_near' => 'Late Ver Angle Near',
			'late_notes' => 'Late Notes',
			'late_pattern' => 'Late Pattern',
			'late_stereo_present' => 'Late Stereo Present',
			'late_stereo_frisby' => 'Late Stereo Frisby',
			'late_stereo_tno' => 'Late Stereo Tno',
			'late_stereo_lang' => 'Late Stereo Lang',
			'late_newcastle_home' => 'Late Newcastle Home',
			'late_newcastle_near' => 'Late Newcastle Near',
			'late_newcastle_distance' => 'Late Newcastle Distance',
			'late_IXTQ' => 'Late Ixtq',
			'late_amblyopia' => 'Late Amblyopia',
			'late_ahp_present' => 'Late Ahp Present',
			'late_ahp_desc' => 'Late Ahp Desc',
			'late_ahp_angle' => 'Late Ahp Angle',
			'late_binoc_with_cor' => 'Binocularity with angle correction',
			'late_binoc_without_cor' => 'Binocularity without angle correction',
			'late_diplopia' => 'Late Diplopia',
			'late_torsion_sub' => 'PP subjective torsion',
			'late_torsion' => 'PP objective torsion',
			'late_torsion_side' => 'Side',
			'late_torsion_clock' => 'Type',
			'late_torsion_amt' => 'Amount',
			'late_comp_none' => 'No complications',
			'late_comp_slipped_muscle' => 'Suspected slipped muscle',
			'late_comp_rrd' => 'Retinal detachment',
			'late_comp_orb_inf' => 'Orbital infection',
			'late_comp_scleritis' => 'Scleritis',
			'late_comp_endophthalmitis' => 'Endophthalmitis',
			'late_comp_antseg_ischaemia' =>	'Anterior segment ischaemia',
			'late_comp_iatrogenic_diplopia' => 'Iatrogenic diplopia',
			'late_comp_new_amblyopia' => 'New amblyopia',
			'late_comp_unscheduled_clinic' => 'Unscheduled return to clinic',
			'late_comp_clinic_cause' => 'Cause',
			'late_comp_unscheduled_theatre' => 'Unscheduled return to theatre',
			'late_comp_theatre_cause' => 'Cause',
			'late_comments' => 'Comments',
			'prom_as20_preop' => 'Prom As20 Preop',
			'prom_as20_postop' => 'Prom As20 Postop',
			'prom_likert' => 'Prom Likert',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('userId',$this->userId,true);
		$criteria->compare('uuid',$this->uuid,true);
		$criteria->compare('pt_age',$this->pt_age);
		$criteria->compare('pt_sex',$this->pt_sex,true);
		$criteria->compare('pt_postcode',$this->pt_postcode,true);
		$criteria->compare('pt_ethnic_group',$this->pt_ethnic_group,true);
		$criteria->compare('asmt_date',$this->asmt_date,true);
		$criteria->compare('asmt_num_ops',$this->asmt_num_ops);
		$criteria->compare('asmt_category',$this->asmt_category,true);
		$criteria->compare('asmt_type',$this->asmt_type,true);
		$criteria->compare('asmt_other_eye_surg',$this->asmt_other_eye_surg,true);
		$criteria->compare('asmt_orbital_surg',$this->asmt_orbital_surg,true);
		$criteria->compare('asmt_previous_toxin',$this->asmt_previous_toxin);
		$criteria->compare('asmt_other_eye_disease',$this->asmt_other_eye_disease,true);
		$criteria->compare('asmt_neuro_disease',$this->asmt_neuro_disease,true);
		$criteria->compare('asmt_other',$this->asmt_other,true);
		$criteria->compare('asmt_spectacle_wear',$this->asmt_spectacle_wear);
		$criteria->compare('asmt_refraction_worn',$this->asmt_refraction_worn);
		$criteria->compare('asmt_sphere_right',$this->asmt_sphere_right);
		$criteria->compare('asmt_cyl_right',$this->asmt_cyl_right);
		$criteria->compare('asmt_axis_right',$this->asmt_axis_right);
		$criteria->compare('asmt_sphere_left',$this->asmt_sphere_left);
		$criteria->compare('asmt_cyl_left',$this->asmt_cyl_left);
		$criteria->compare('asmt_axis_left',$this->asmt_axis_left);
		$criteria->compare('asmt_near_right',$this->asmt_near_right);
		$criteria->compare('asmt_near_left',$this->asmt_near_left);
		$criteria->compare('asmt_bcva_let_right',$this->asmt_bcva_let_right);
		$criteria->compare('asmt_bcva_let_left',$this->asmt_bcva_let_left);
		$criteria->compare('asmt_bcva_kay_right',$this->asmt_bcva_kay_right);
		$criteria->compare('asmt_bcva_kay_left',$this->asmt_bcva_kay_left);
		$criteria->compare('asmt_fixation_right',$this->asmt_fixation_right,true);
		$criteria->compare('asmt_fixation_left',$this->asmt_fixation_left,true);
		$criteria->compare('asmt_cover_hor_dist',$this->asmt_cover_hor_dist,true);
		$criteria->compare('asmt_hor_angle_dist',$this->asmt_hor_angle_dist);
		$criteria->compare('asmt_cover_vert_dist',$this->asmt_cover_vert_dist,true);
		$criteria->compare('asmt_ver_angle_dist',$this->asmt_ver_angle_dist);
		$criteria->compare('asmt_cover_hor_near',$this->asmt_cover_hor_near,true);
		$criteria->compare('asmt_angle_near',$this->asmt_angle_near);
		$criteria->compare('asmt_cover_vert_near',$this->asmt_cover_vert_near,true);
		$criteria->compare('asmt_ver_angle_near',$this->asmt_ver_angle_near);
		$criteria->compare('asmt_pattern',$this->asmt_pattern,true);
		$criteria->compare('asmt_ahp_present',$this->asmt_ahp_present);
		$criteria->compare('asmt_ahp_desc',$this->asmt_ahp_desc,true);
		$criteria->compare('asmt_ahp_angle',$this->asmt_ahp_angle);
		$criteria->compare('asmt_binoc_with_cor',$this->asmt_binoc_with_cor);
		$criteria->compare('asmt_binoc_without_cor',$this->asmt_binoc_without_cor);
		$criteria->compare('asmt_torsion',$this->asmt_torsion);
		$criteria->compare('asmt_diplopia',$this->asmt_diplopia);
		$criteria->compare('asmt_stereo_present',$this->asmt_stereo_present);
		$criteria->compare('asmt_stereo_frisby',$this->asmt_stereo_frisby);
		$criteria->compare('asmt_stereo_tno',$this->asmt_stereo_tno);
		$criteria->compare('asmt_stereo_lang',$this->asmt_stereo_lang);
		$criteria->compare('asmt_newcastle_home',$this->asmt_newcastle_home,true);
		$criteria->compare('asmt_newcastle_near',$this->asmt_newcastle_near,true);
		$criteria->compare('asmt_newcastle_distance',$this->asmt_newcastle_distance,true);
		$criteria->compare('asmt_IXTQ',$this->asmt_IXTQ);
		$criteria->compare('asmt_amblyopia',$this->asmt_amblyopia,true);
		$criteria->compare('asmt_amblyopia_treatment',$this->asmt_amblyopia_treatment,true);
		$criteria->compare('asmt_notes',$this->asmt_notes,true);
		$criteria->compare('plan_goals',$this->plan_goals,true);
		$criteria->compare('plan_other',$this->plan_other,true);
		$criteria->compare('plan_position',$this->plan_position,true);
		$criteria->compare('plan_eccentric',$this->plan_eccentric,true);
		$criteria->compare('plan_distance',$this->plan_distance,true);
		$criteria->compare('plan_hor_target_direction',$this->plan_hor_target_direction,true);
		$criteria->compare('plan_hor_target_angle',$this->plan_hor_target_angle);
		$criteria->compare('plan_ver_target_direction',$this->plan_ver_target_direction,true);
		$criteria->compare('plan_ver_target_angle',$this->plan_ver_target_angle);
		$criteria->compare('plan_torsion',$this->plan_torsion);
		$criteria->compare('op_date',$this->op_date,true);
		$criteria->compare('op_anaeshetic',$this->op_anaeshetic,true);
		$criteria->compare('op_surgeon_grade',$this->op_surgeon_grade,true);
		$criteria->compare('op_assistant_grade',$this->op_assistant_grade,true);
		$criteria->compare('op_measurement_point',$this->op_measurement_point,true);
		$criteria->compare('op_rmr_surgery',$this->op_rmr_surgery,true);
		$criteria->compare('op_rmr_amount',$this->op_rmr_amount);
		$criteria->compare('op_rmr_transposition',$this->op_rmr_transposition,true);
		$criteria->compare('op_rir_surgery',$this->op_rir_surgery,true);
		$criteria->compare('op_rir_amount',$this->op_rir_amount);
		$criteria->compare('op_rir_transposition',$this->op_rir_transposition,true);
		$criteria->compare('op_rlr_surgery',$this->op_rlr_surgery,true);
		$criteria->compare('op_rlr_amount',$this->op_rlr_amount);
		$criteria->compare('op_rlr_transposition',$this->op_rlr_transposition,true);
		$criteria->compare('op_rsr_surgery',$this->op_rsr_surgery,true);
		$criteria->compare('op_rsr_amount',$this->op_rsr_amount);
		$criteria->compare('op_rsr_transposition',$this->op_rsr_transposition,true);
		$criteria->compare('op_lmr_surgery',$this->op_lmr_surgery,true);
		$criteria->compare('op_lmr_amount',$this->op_lmr_amount);
		$criteria->compare('op_lmr_transposition',$this->op_lmr_transposition,true);
		$criteria->compare('op_lir_surgery',$this->op_lir_surgery,true);
		$criteria->compare('op_lir_amount',$this->op_lir_amount);
		$criteria->compare('op_lir_transposition',$this->op_lir_transposition,true);
		$criteria->compare('op_llr_surgery',$this->op_llr_surgery,true);
		$criteria->compare('op_llr_amount',$this->op_llr_amount);
		$criteria->compare('op_llr_transposition',$this->op_llr_transposition,true);
		$criteria->compare('op_lsr_surgery',$this->op_lsr_surgery,true);
		$criteria->compare('op_lsr_amount',$this->op_lsr_amount);
		$criteria->compare('op_lsr_transposition',$this->op_lsr_transposition,true);
		$criteria->compare('op_rio_surgery',$this->op_rio_surgery,true);
		$criteria->compare('op_rio_position',$this->op_rio_position,true);
		$criteria->compare('op_rio_transposition',$this->op_rio_transposition,true);
		$criteria->compare('op_rio_amount',$this->op_rio_amount);
		$criteria->compare('op_rso_surgery',$this->op_rso_surgery,true);
		$criteria->compare('op_rso_amount',$this->op_rso_amount);
		$criteria->compare('op_lio_surgery',$this->op_lio_surgery,true);
		$criteria->compare('op_lio_position',$this->op_lio_position,true);
		$criteria->compare('op_lio_transposition',$this->op_lio_transposition,true);
		$criteria->compare('op_lio_amount',$this->op_lio_amount);
		$criteria->compare('op_lso_surgery',$this->op_lso_surgery,true);
		$criteria->compare('op_lso_amount',$this->op_lso_amount);
		$criteria->compare('op_eyedraw_right',$this->op_eyedraw_right,true);
		$criteria->compare('op_eyedraw_left',$this->op_eyedraw_left,true);
		$criteria->compare('op_comps',$this->op_comps,true);
		$criteria->compare('op_comp_none',$this->op_comp_none);
		$criteria->compare('op_comp_wrong_side',$this->op_comp_wrong_side);
		$criteria->compare('op_comp_wrong_direction',$this->op_comp_wrong_direction);
		$criteria->compare('op_comp_globe_perf',$this->op_comp_globe_perf);
		$criteria->compare('op_comp_snapped_muscle',$this->op_comp_snapped_muscle);
		$criteria->compare('op_comp_lost_muscle',$this->op_comp_lost_muscle);
		$criteria->compare('op_comp_bleeding',$this->op_comp_bleeding);
		$criteria->compare('op_comp_other',$this->op_comp_other);
		$criteria->compare('op_comments',$this->op_comments,true);
		$criteria->compare('early_date',$this->early_date,true);
		$criteria->compare('early_bcva_let_right',$this->early_bcva_let_right);
		$criteria->compare('early_bcva_let_left',$this->early_bcva_let_left);
		$criteria->compare('early_bcva_kay_right',$this->early_bcva_kay_right);
		$criteria->compare('early_bcva_kay_left',$this->early_bcva_kay_left);
		$criteria->compare('early_fixation_right',$this->early_fixation_right,true);
		$criteria->compare('early_fixation_left',$this->early_fixation_left,true);
		$criteria->compare('early_cover_hor_dist',$this->early_cover_hor_dist,true);
		$criteria->compare('early_hor_angle_dist',$this->early_hor_angle_dist);
		$criteria->compare('early_cover_vert_dist',$this->early_cover_vert_dist,true);
		$criteria->compare('early_ver_angle_dist',$this->early_ver_angle_dist);
		$criteria->compare('early_cover_hor_near',$this->early_cover_hor_near,true);
		$criteria->compare('early_angle_near',$this->early_angle_near);
		$criteria->compare('early_cover_vert_near',$this->early_cover_vert_near,true);
		$criteria->compare('early_ver_angle_near',$this->early_ver_angle_near);
		$criteria->compare('early_notes',$this->early_notes,true);
		$criteria->compare('late_date',$this->late_date,true);
		$criteria->compare('late_bcva_let_right',$this->late_bcva_let_right);
		$criteria->compare('late_bcva_let_left',$this->late_bcva_let_left);
		$criteria->compare('late_bcva_kay_right',$this->late_bcva_kay_right);
		$criteria->compare('late_bcva_kay_left',$this->late_bcva_kay_left);
		$criteria->compare('late_fixation_right',$this->late_fixation_right,true);
		$criteria->compare('late_fixation_left',$this->late_fixation_left,true);
		$criteria->compare('late_cover_hor_dist',$this->late_cover_hor_dist,true);
		$criteria->compare('late_hor_angle_dist',$this->late_hor_angle_dist);
		$criteria->compare('late_cover_vert_dist',$this->late_cover_vert_dist,true);
		$criteria->compare('late_ver_angle_dist',$this->late_ver_angle_dist);
		$criteria->compare('late_cover_hor_near',$this->late_cover_hor_near,true);
		$criteria->compare('late_angle_near',$this->late_angle_near);
		$criteria->compare('late_cover_vert_near',$this->late_cover_vert_near,true);
		$criteria->compare('late_ver_angle_near',$this->late_ver_angle_near);
		$criteria->compare('late_notes',$this->late_notes,true);
		$criteria->compare('late_pattern',$this->late_pattern,true);
		$criteria->compare('late_stereo_present',$this->late_stereo_present);
		$criteria->compare('late_stereo_frisby',$this->late_stereo_frisby);
		$criteria->compare('late_stereo_tno',$this->late_stereo_tno);
		$criteria->compare('late_stereo_lang',$this->late_stereo_lang);
		$criteria->compare('late_newcastle_home',$this->late_newcastle_home,true);
		$criteria->compare('late_newcastle_near',$this->late_newcastle_near,true);
		$criteria->compare('late_newcastle_distance',$this->late_newcastle_distance,true);
		$criteria->compare('late_IXTQ',$this->late_IXTQ);
		$criteria->compare('late_amblyopia',$this->late_amblyopia,true);
		$criteria->compare('late_ahp_present',$this->late_ahp_present);
		$criteria->compare('late_ahp_desc',$this->late_ahp_desc,true);
		$criteria->compare('late_ahp_angle',$this->late_ahp_angle);
		$criteria->compare('late_diplopia',$this->late_diplopia);
		$criteria->compare('late_torsion',$this->late_torsion);
		$criteria->compare('late_comp_none',$this->late_comp_none);
		$criteria->compare('late_comp_slipped_muscle',$this->late_comp_slipped_muscle);
		$criteria->compare('late_comp_rrd',$this->late_comp_rrd);
		$criteria->compare('late_comp_orb_inf',$this->late_comp_orb_inf);
		$criteria->compare('late_comp_scleritis',$this->late_comp_scleritis);
		$criteria->compare('late_comp_endophthalmitis',$this->late_comp_endophthalmitis);
		$criteria->compare('late_comp_antseg_ischaemia',$this->late_comp_antseg_ischaemia);
		$criteria->compare('late_comp_iatrogenic_diplopia',$this->late_comp_iatrogenic_diplopia);
		$criteria->compare('late_comp_new_amblyopia',$this->late_comp_new_amblyopia);
		$criteria->compare('late_comp_unscheduled_clinic',$this->late_comp_unscheduled_clinic);
		$criteria->compare('late_comp_clinic_cause',$this->late_comp_clinic_cause,true);
		$criteria->compare('late_comp_unscheduled_theatre',$this->late_comp_unscheduled_theatre);
		$criteria->compare('late_comp_theatre_cause',$this->late_comp_theatre_cause,true);
		$criteria->compare('late_comments',$this->late_comments,true);
		$criteria->compare('prom_as20_preop',$this->prom_as20_preop);
		$criteria->compare('prom_as20_postop',$this->prom_as20_postop);
		$criteria->compare('prom_likert',$this->prom_likert);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
    /**
     * Creates an array of near add values
     */
    public function nearAddArray()
    {
        return array(
        			 '0.00'=>'0.00',
                     '0.25'=>'0.25',
                     '0.50'=>'0.50',
                     '0.75'=>'0.75',
                     '1.00'=>'1.00',
        			 '1.00'=>'1.00',
                     '1.25'=>'1.25',
                     '1.50'=>'1.50',
                     '1.75'=>'1.75',
        			 '2.00'=>'0.00',
                     '2.25'=>'2.25',
                     '2.50'=>'2.50',
                     '2.75'=>'2.75',
        			 '3.00'=>'3.00',
                     '3.25'=>'3.25',
                     '3.50'=>'3.50',
                     '3.75'=>'3.75',
        			 '4.00'=>'4.00',                     
                     );
    }
    
    /**
     * Creates an array of esotropia types
     */
    public function esotropiaArray()
    {
        return array(
					'residual esotropia'=>'residual esotropia',
					'consecutive esotropia'=>'consecutive esotropia',
					'early onset (infantile) esotropia'=>'early onset (infantile) esotropia',
					'constant accommodative esotropia (partially accommodative)'=>'constant accommodative esotropia (partially accommodative)',
					'non-accommodative esotropia'=>'non-accommodative esotropia',
					'convergence excess esotropia'=>'convergence excess esotropia',
					'near esotropia'=>'near esotropia',
					'sensory esotropia'=>'sensory esotropia',
					'esotropia secondary to VI nerve palsy'=>'esotropia secondary to VI nerve palsy',
					'esotropia secondary to other neurological disease'=>'esotropia secondary to other neurological disease',
					'esotropia secondary to an orbital cause'=>'esotropia secondary to an orbital cause',
					'esotropia in Duane\'s syndrome'=>'esotropia in Duane\'s syndrome',
					'esotropia in nystagmus block syndrome'=>'esotropia in nystagmus block syndrome',
					'cyclic esotropia'=>'cyclic esotropia',
					'non-specific esotropia'=>'non-specific esotropia',
					'fully accommodative esotropia'=>'fully accommodative esotropia',
					'microtropia'=>'microtropia',                    
                     );
    }

    /**
     * Creates an array of exotropia types
     */
    public function exotropiaArray()
    {
        return array(
					'consecutive exotropia'=>'consecutive exotropia',
					'residual exotropia'=>'residual exotropia',
					'intermittent distance exotropia'=>'intermittent distance exotropia',
					'basic exotropia'=>'basic exotropia',
					'near exotropia (convergence weakness)'=>'near exotropia (convergence weakness)',
					'sensory (secondary) exotropia'=>'sensory (secondary) exotropia',
					'infantile exotropia'=>'infantile exotropia',
					'exotropia in Duane\'s syndrome'=>'exotropia in Duane\'s syndrome',
					'convergence insufficiency'=>'convergence insufficiency',
					'cyclic exotropia'=>'cyclic exotropia',
					'exotropia due to IIIrd nerve palsy'=>'exotropia due to IIIrd nerve palsy',
					'exotropia due to other neurological disease'=>'exotropia due to other neurological disease',
					'exotropia due to an orbital cause'=>'exotropia due to an orbital cause',
                     );
    }


    /**
     * Creates an array of goals
     */
    public function goalArray()
    {
        return array(
        			'-- please select a goal --' => '-- please select a goal --',
        			'improved alignment in primary position' => 'improved alignment in primary position',
        			'improvement in BV' => 'improvement in BV',
        			'improvement of alphabet pattern/upshoots' => 'improvement of alphabet pattern/upshoots',
        			'improvement in AHP' => 'improvement in AHP',
        			'improvement in diplopia' => 'improvement in diplopia',
        			'improve control' => 'improve control',
        			'other (specify)' => 'other (specify)',                    
                     );
    }

    /**
     * Creates an array of complications
     */
    public function compArray()
    {
        return array(
        			'-- please select --' => '-- please select --',
					'Wrong side' => 'Wrong side',
					'Wrong muscle' => 'Wrong muscle',
					'Wrong direction' => 'Wrong direction',
					'Globe perforation' => 'Globe perforation',
					'Snapped/transected muscle' => 'Snapped/transected muscle',
					'Lost muscle' => 'Lost muscle',
					'Excessive bleeding' => 'Excessive bleeding',
					'Other complication' => 'Other complication',                  
                     );
    }

    /**
     * Returns an array of ocular surgery
     */
    public function ocularSurgeryArray()
    {
        return array(
        			'-- please select --' => '-- please select --',
					'Retinal detachment' => 'Retinal detachment',
					'Glaucoma surgery' => 'Glaucoma surgery',              
                     );
    }

    /**
     * Returns an array of orbital surgery
     */
    public function orbitalSurgeryArray()
    {
        return array(
        			'-- please select --' => '-- please select --',
					'Decompression' => 'Decompression',
					'Floor/wall repair' => 'Floor/wall repair',
					'Other' => 'Other',           
                     );
    }
 
    /**
     * Returns an array of orbital surgery
     */
    public function eyeDiseaseSurgeryArray()
    {
        return array(
        			'-- please select --' => '-- please select --',
					'Amblyopia' => 'Amblyopia',
					'Poor vision' => 'Poor vision',
					'Macular pathology' => 'Macular pathology',           
                     );
    }   

    /**
     * Returns an array of goals surgery
     */
    public function adultGoalArray()
    {
        return array(
        			'-- please select --' => '-- please select --',
					'horizontal alignment in primary position' => 'horizontal alignment in primary position',
					'vertical alignment in primary position' => 'vertical alignment in primary position',
					'horizontal alignment in eccentric position' => 'horizontal alignment in eccentric position',
					'vertical alignment in eccentric position' => 'vertical alignment in eccentric position',
					'control of intermittent squint' => 'control of intermittent squint',
					'abnormal head position' => 'abnormal head position',
					'binocularity' => 'binocularity',
					'torsion' => 'torsion',
					'alphabet pattern/shoot/drift' => 'alphabet pattern/shoot/drift',
					'visual acuity (nystagmus)' => 'visual acuity (nystagmus)',
					'other' => 'other'          
                     );
    }   
          	


	 /**
     * Returns an optional tooltip for an attribute
     */
    public function tooltipForAttribute($_attribute)
    {
    	$returnString = "";
    	
	    switch ($_attribute)
	    {
	    	case 'uuid':
	    		$returnString = 'An identifier guaranteed to be unique and assigned to this patient. It is printed out with the operation note, and allows identification of the patient record when follow up data is to be entered';
	    		break;	    		    
		}
		
		return $returnString;
    }
}