<?php

/**
 * This is the model class for table "{{dataset}}".
 *
 * The followings are the available columns in table '{{dataset}}':
 * @property string $id
 * @property string $userId
 * @property string $uuid
 * @property integer $pt_age
 * @property string $pt_sex
 * @property string $pt_postcode
 * @property string $pt_ethnic_group
 * @property string $asmt_date
 * @property string $asmt_category
 * @property integer $asmt_spectacle_wear
 * @property integer $asmt_refraction_worn
 * @property double $asmt_sphere_right
 * @property double $asmt_cyl_right
 * @property integer $asmt_axis_right
 * @property double $asmt_sphere_left
 * @property double $asmt_cyl_left
 * @property integer $asmt_axis_left
 */
class Dataset extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dataset the static model class
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
		return '{{dataset}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, uuid, asmt_date', 'required'),
			array('asmt_date, op_date', 'type', 'type'=>'date', 'dateFormat'=>'yyyy-mm-dd'),
			array('op_date, op_rmr_surgery, op_rmr_amount, op_rir_surgery, op_rir_amount, op_rlr_surgery, op_rlr_amount, op_rsr_surgery, op_rsr_amount, op_lmr_surgery, op_lmr_amount, op_lir_surgery, op_lir_amount, op_llr_surgery, op_llr_amount, op_lsr_surgery, op_lsr_amount, op_rio_amount, op_rso_amount, op_lio_amount, op_lso_amount, asmt_bcva_let_right, asmt_bcva_let_left, asmt_bcva_kay_right, asmt_bcva_kay_left, early_date, early_bcva_let_right, early_bcva_let_left, early_bcva_kay_right, early_bcva_kay_left, late_bcva_let_right, late_bcva_let_left, late_bcva_kay_right, late_bcva_kay_left, late_date, late_notes, asmt_num_ops, op_eyedraw_right, op_eyedraw_left', 'safe'),
			array('pt_age, asmt_num_ops, asmt_spectacle_wear, asmt_refraction_worn, asmt_axis_right, asmt_axis_left, asmt_angle_dist, asmt_angle_near, asmt_ahp_present, asmt_ahp_angle, asmt_diplopia, asmt_stereo_present, asmt_stereo_frisby, asmt_stereo_tno, asmt_stereo_lang, asmt_IXTQ, late_IXTQ, asmt_prior_toxin, op_comp_none, op_comp_wrong_side, op_comp_wrong_direction, op_comp_globe_perf, op_comp_snapped_muscle, op_comp_lost_muscle, op_comp_bleeding, op_comp_other, early_angle_dist, early_angle_near, late_angle_dist, late_angle_near, late_stereo_present, late_stereo_frisby, late_stereo_tno, late_stereo_lang, late_ahp_present, late_ahp_angle, late_diplopia, late_comp_none, late_comp_slipped_muscle, late_comp_rrd, late_comp_orb_inf, late_comp_scleritis, late_comp_endophthalmitis, late_comp_antseg_ischaemia, late_comp_iatrogenic_diplopia, late_comp_new_amblyopia, late_comp_unscheduled_clinic, late_comp_unscheduled_theatre', 'numerical', 'integerOnly'=>true),
			array('asmt_bcva_let_right, asmt_bcva_let_left, asmt_bcva_kay_right, asmt_bcva_kay_left, early_bcva_let_right, early_bcva_let_left, early_bcva_kay_right, early_bcva_kay_left, late_bcva_let_right, late_bcva_let_left, late_bcva_kay_right, late_bcva_kay_left, asmt_sphere_right, asmt_cyl_right, asmt_sphere_left, asmt_cyl_left, plan_target_angle, op_rmr_amount, op_rir_amount, op_rlr_amount, op_rsr_amount, op_lmr_amount, op_lir_amount, op_llr_amount, op_lsr_amount, op_rio_amount, op_rso_amount, op_lio_amount, op_lso_amount', 'numerical'),
			array('userId', 'length', 'max'=>10),
			array('uuid', 'length', 'max'=>36),
			array('pt_sex', 'length', 'max'=>6),
			array('pt_postcode', 'length', 'max'=>4),
			array('pt_ethnic_group, op_rmr_transposition, op_rlr_transposition, op_rsr_transposition, op_rir_transposition, op_lmr_transposition, op_llr_transposition, op_lsr_transposition, op_lsr_transposition', 'length', 'max'=>26),
			array('asmt_category, asmt_type, op_surgeon_grade, op_assistant_grade, late_comp_clinic_cause, late_comp_theatre_cause', 'length', 'max'=>200),
			array('plan_goals, plan_other, op_comps, op_comments, asmt_notes, early_notes, late_comments', 'length', 'max'=>500),
			array('plan_target_distance, plan_target_direction, asmt_fixation_right, asmt_fixation_left, asmt_cover_dist, asmt_cover_near, asmt_pattern, asmt_ahp_desc, asmt_newcastle_home, asmt_newcastle_near, asmt_newcastle_distance, late_newcastle_home, late_newcastle_near, late_newcastle_distance, asmt_amblyopia, asmt_amblyopia_treatment, early_fixation_right, early_fixation_left, early_cover_dist, early_cover_near, late_fixation_right, late_fixation_left, late_cover_dist, late_cover_near, late_pattern, late_amblyopia, late_ahp_desc, op_measurement_point, op_rio_surgery, op_rso_surgery, op_lio_surgery, op_lso_surgery', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, uuid, pt_age, pt_sex, pt_postcode, pt_ethnic_group, asmt_date, asmt_category, asmt_spectacle_wear, asmt_refraction_worn, asmt_sphere_right, asmt_cyl_right, asmt_axis_right, asmt_sphere_left, asmt_cyl_left, asmt_axis_left, asmt_near_right, asmt_near_left, op_date', 'safe', 'on'=>'search'),
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
			'uuid' => 'UUID',
			'pt_age' => 'Age',
			'pt_sex' => 'Sex',
			'pt_postcode' => 'Postcode (First half)',
			'pt_ethnic_group' => 'Ethnic Group',
			'asmt_date' => 'Assessment Date',
			'asmt_num_ops' => 'Previous operations',
			'asmt_category' => 'Category',
			'asmt_type' => 'Type',
			'asmt_spectacle_wear' => 'Spectacle Wear',
			'asmt_refraction_worn' => 'Refraction Worn',
			'asmt_sphere_right' => 'Sphere',
			'asmt_cyl_right' => 'Cylinder',
			'asmt_axis_right' => 'Axis',
			'asmt_sphere_left' => 'Sphere',
			'asmt_cyl_left' => 'Cyl',
			'asmt_axis_left' => 'Axis',
			'asmt_near_right' => 'Near Add',
			'asmt_near_left' => 'Near Add',
			'asmt_bcva_let_right' => 'BCVA letters right',
			'asmt_bcva_let_left' => 'BCVA letters left',
			'asmt_bcva_kay_right' => 'BCVA Kay right',
			'asmt_bcva_kay_left' => 'BCVA Kay right',
			'asmt_cover_dist' => 'Cover test (distance)',
			'asmt_cover_near' => 'Cover test (near)',
			'asmt_angle_dist' => 'Distance angle',
			'asmt_angle_near' => 'Near angle',
			'asmt_pattern' =>'Signficant pattern',
			'asmt_ahp_present' => 'Abnormal head posture',
			'asmt_ahp_angle' => 'AHP angle',
			'asmt_ahp_desc' => 'AHP description',
			'asmt_diplopia' => 'Diplopia volunteered',
			'asmt_stereo_present' => 'Stereoacuity recordable',
			'asmt_stereo_frisby' => 'Frisby',
			'asmt_stereo_tno' => 'TNO',
			'asmt_stereo_lang' => 'Lang',
			'asmt_newcastle_home' => 'NCS Home',
			'asmt_newcastle_near' => 'NCS Near',
			'asmt_newcastle_distance' => 'NCS Distance',
			'asmt_IXTQ' => 'IXTQ score',			
			'asmt_amblyopia' => 'Amblyopia',
			'asmt_amblyopia_treatment' => 'Treatment',
			'asmt_prior_toxin' => 'Prior toxin treatment',
			'asmt_notes' => 'Additonal notes',
			'plan_goals' => 'Goals of Surgery',
			'plan_other' => 'Details',
			'plan_target_direction' => 'Target direction',
			'plan_target_angle' => 'Target angle',
			'plan_target_distance' => 'Position',
			'op_date' => 'Op date',
			'op_surgeon_grade' => 'Grade of Surgeon 1',
			'op_assistant_grade' => 'Grade of Surgeon 2',
			'op_measurement_point' => 'Measured from',
			'op_rmr_surgery' => 'RMR surgery',
			'op_rmr_amount' => 'Amount',
			'op_rir_surgery' => 'RIR surgery',
			'op_rir_amount' => 'Amount',
			'op_rlr_surgery' => 'RLR surgery',
			'op_rlr_amount' => 'Amount',
			'op_rsr_surgery' => 'RSR surgery',
			'op_rsr_amount' => 'Amount',
			'op_lmr_surgery' => 'LMR surgery',
			'op_lmr_amount' => 'Amount',
			'op_lir_surgery' => 'LIR surgery',
			'op_lir_amount' => 'Amount',
			'op_llr_surgery' => 'LLR surgery',
			'op_llr_amount' => 'Amount',
			'op_lsr_surgery' => 'LSR surgery',
			'op_lsr_amount' => 'Amount',
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
			'early_date' => 'Date',
			'early_bcva_let_right' => 'BCVA Letters',
			'early_bcva_let_left' => 'BCVA Letters',
			'early_bcva_kay_right' => 'BCVA Kay',
			'early_bcva_kay_left' => 'BCVA Kay',
			'early_angle_dist' => 'Distance angle',
			'early_angle_near' => 'Near angle',
			'early_notes' => 'Notes',
			'late_date' => 'Date',
			'late_bcva_let_right' => 'BCVA letters right',
			'late_bcva_let_left' => 'BCVA letters left',
			'late_bcva_kay_right' => 'BCVA Kay right',
			'late_bcva_kay_left' => 'BCVA Kay left',
			'late_angle_dist' => 'Distance angle',
			'late_angle_near' => 'Near angle',
			'late_notes' => 'Notes',
			'late_pattern' =>'Signficant pattern',
			'late_stereo_present' => 'Stereoacuity recordable',
			'late_stereo_frisby' => 'Frisby',
			'late_stereo_tno' => 'TNO',
			'late_stereo_lang' => 'Lang',
			'late_newcastle_home' => 'NCS Home',
			'late_newcastle_near' => 'NCS Near',
			'late_newcastle_distance' => 'NCS Distance',
			'late_IXTQ' => 'IXTQ score',
			'late_amblyopia' => 'Post-op amblyopia',
			'late_ahp_present' => 'Abnormal head posture',
			'late_ahp_angle' => 'AHP angle',
			'late_ahp_desc' => 'AHP description',
			'late_diplopia' => 'Diplopia volunteered',
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
		
		// Ensure search is only on user's records
        $criteria->addColumnCondition(array('userId' => Yii::app()->user->id));
        
		$criteria->compare('uuid',$this->uuid,true);
		$criteria->compare('pt_age',$this->pt_age);
		$criteria->compare('pt_sex',$this->pt_sex,true);
		$criteria->compare('asmt_type',$this->asmt_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
     * Override the before validate method to put in the current userId
     *
     */
    protected function beforeValidate()
    {
        // Set current userId
        if ($this->isNewRecord)
        {
            $this->userId = Yii::app()->user->id;
        }
        
        return parent::beforeValidate();
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
        			'--please select a goal--' => '--please select a goal--',
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
        			'--please select--' => '--please select--',
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
    
    /**
     * Strips list of goals to give human readable text
     */
    public function readableGoals()
    {
	    $returnString = str_replace('||' , ', ' , $this->plan_goals);
	    return ucfirst(str_replace('|', '', $returnString));
    }
}