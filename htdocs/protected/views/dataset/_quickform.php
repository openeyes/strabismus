<?php
/* @var $this AdultDatasetController */
/* @var $model AdultDataset */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'adult-dataset-form',
    'enableAjaxValidation'=>false,
)); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'uuid',array('class'=>'reval')); ?>
        <?php echo $form->textField($model,'uuid',array('style'=>'width:280px','readonly'=>'readonly')); //, 'readonly'=>'readonly'?>
        <span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('uuid'); ?></span></a></span>
    </div>

    <h3>Demographics</h3>

    <div class="twocolumndiv">
        <div class="leftcolumn">
            <div class="row">
                <?php echo $form->labelEx($model,'pt_age'); ?>
                <?php echo $form->textField($model,'pt_age',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'pt_age'); ?>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="row">
                <?php echo $form->labelEx($model,'pt_postcode'); ?>
                <?php echo $form->textField($model,'pt_postcode',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'pt_postcode'); ?>
            </div>
        </div>
    </div>

    <h3>Classification</h3>

    <div class="twocolumndiv">
        <div class="leftcolumn">
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_category'); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_category', array('style'=>'width:200px','onChange'=>'categoryChange(this);')); ?>
                <?php echo $form->error($model,'asmt_category'); ?>
            </div>     
        </div>
        <div class="rightcolumn">
            <div class="row">
                 <?php echo $form->labelEx($model,'asmt_type'); ?>
                 <?php echo CHtml::dropDownList('typeDropDown', 'hi', $model->exotropiaArray(), array('style'=>'width:200px','onChange'=>'adultTypeChange(this.value);')); ?>
                 <?php echo $form->hiddenField($model,'asmt_type'); ?>
            </div> 
        </div>
    </div>

    <h3>Pre-operative assessment</h3>
    
    <div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_cover_hor_near'); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_cover_hor_near', array()); ?>
                <?php echo $form->error($model,'asmt_cover_hor_near'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_angle_near'); ?>
                <?php echo $form->textField($model,'asmt_angle_near'); ?>
                <?php echo $form->error($model,'asmt_angle_near'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_cover_vert_near'); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_cover_vert_near', array()); ?>
                <?php echo $form->error($model,'asmt_cover_vert_near'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_ver_angle_near'); ?>
                <?php echo $form->textField($model,'asmt_ver_angle_near'); ?>
                <?php echo $form->error($model,'asmt_ver_angle_near'); ?>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_cover_hor_dist'); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_cover_hor_dist', array()); ?>
                <?php echo $form->error($model,'asmt_cover_hor_dist'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_hor_angle_dist'); ?>
                <?php echo $form->textField($model,'asmt_hor_angle_dist'); ?>
                <?php echo $form->error($model,'asmt_hor_angle_dist'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_cover_vert_dist'); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_cover_vert_dist', array()); ?>
                <?php echo $form->error($model,'asmt_cover_vert_dist'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_ver_angle_dist'); ?>
                <?php echo $form->textField($model,'asmt_ver_angle_dist'); ?>
                <?php echo $form->error($model,'asmt_ver_angle_dist'); ?>
            </div>
        </div>
    </div>
    <div class="twocolumndiv">
         <div class="leftcolumn">
              <div class="row">
                   <label for="AdultDataset_asmt_total" style="font-weight:bold">AS-20 Total</label>
                   <?php echo $form->textField($model,'asmt_total',array('style'=>'width:30px')); ?>
                   <?php echo $form->error($model,'asmt_total'); ?>
              </div>
        </div>
        <div class="rightcolumn"></div>  
    </div>

    <h3>Operation</h3>    
    
    <div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
            <div class="row">
                <?php echo $form->labelEx($model,'op_date'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'op_date',
                    'value'=>$model->asmt_date,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->op_date,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'op_date'); ?>
            </div>
        	<div class="row">
				<?php echo $form->labelEx($model,'op_anaeshetic'); ?>
				<?php echo ZHtml::enumDropDownList($model,'op_anaeshetic', array()); ?>
				<?php echo $form->error($model,'op_anaeshetic'); ?>
			</div>
            
        	<div class="row">
				<?php echo $form->labelEx($model,'op_measurement_point'); ?>
				<?php echo ZHtml::enumDropDownList($model,'op_measurement_point', array()); ?>
				<?php echo $form->error($model,'op_measurement_point'); ?>
			</div>
        	<div class="row">
				<?php echo $form->labelEx($model,'op_surgeon_grade'); ?>
				<?php echo ZHtml::enumDropDownList($model,'op_surgeon_grade', array()); ?>
				<?php echo $form->error($model,'op_surgeon_grade'); ?>
			</div>
			
        	<div class="row">
				<?php echo $form->labelEx($model,'op_assistant_grade'); ?>
				<?php echo ZHtml::enumDropDownList($model,'op_assistant_grade', array()); ?>
				<?php echo $form->error($model,'op_assistant_grade'); ?>
			</div> 
        </div>
        
        <div class="rightcolumn">
            <div style="display:block; text-align:right; width: 160px;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'op_comp_none', array('class'=>'no-complications', 'style' => 'width:120px;')); ?>
                    <?php echo $form->checkBox($model,'op_comp_none', array('class'=>'checkBox', 'onChange'=>'compChange(this, "opCompSection");')); ?>
                    <?php echo $form->error($model,'op_comp_none'); ?>
                </div>
            </div>
            <div id="opCompSection" style="display:block; text-align:right; width: 160px; float:left;">

                <div class="row">        
                    <?php echo $form->labelEx($model,'op_comp_wrong_side'); ?>
                    <?php echo $form->checkBox($model,'op_comp_wrong_side', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'op_comp_wrong_side'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'op_comp_wrong_direction'); ?>
                    <?php echo $form->checkBox($model,'op_comp_wrong_direction', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'op_comp_wrong_direction'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'op_comp_globe_perf'); ?>
                    <?php echo $form->checkBox($model,'op_comp_globe_perf', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'op_comp_globe_perf'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'op_comp_snapped_muscle'); ?>
                    <?php echo $form->checkBox($model,'op_comp_snapped_muscle', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'op_comp_snapped_muscle'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'op_comp_lost_muscle'); ?>
                    <?php echo $form->checkBox($model,'op_comp_lost_muscle', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'op_comp_lost_muscle'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'op_comp_bleeding'); ?>
                    <?php echo $form->checkBox($model,'op_comp_bleeding', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'op_comp_bleeding'); ?>
                </div>
                <div class="row">
                    <?php echo $form->labelEx($model,'op_comps'); ?>
                    <?php echo $form->textArea($model, 'op_comps', array('rows'=>3, 'cols'=>10)); ?>
                    <?php echo $form->error($model,'op_comps'); ?>
                </div>              
            </div>
        </div>
    </div>
    <div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
            <table cellspacing="0">
                <thead>
                    <th width="5%">Muscle</th>
                    <th width="70%">Surgery</th>
                    <th width="10%">Amount</th>
                    <th width="15%">Trans</th>
                </thead>
                <tbody>     
                    <tr>
                        <td>RMR</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rmr_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_rmr_amount',array('style'=>'width:30px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rmr_transposition', array('style'=>'width:60px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>RIR</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rir_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_rir_amount',array('style'=>'width:30px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rir_transposition', array('style'=>'width:60px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>RLR</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rlr_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_rlr_amount',array('style'=>'width:30px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rlr_transposition', array('style'=>'width:60px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>RSR</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rsr_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_rsr_amount',array('style'=>'width:30px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rsr_transposition', array('style'=>'width:60px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>RIO</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rio_surgery', array('style'=>'width:150px','onChange'=>'obliqueChange(this, "right_recession", "right_transposition");')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_rio_amount',array('style'=>'width:30px')); ?>
                        </td>
                        <td>
                            <span id="right_recession" style="display:none;">
                                <?php echo ZHtml::enumDropDownList($model,'op_rio_position', array('style'=>'width:60px')); ?>
                            </span>
                            <span id="right_transposition" style="display:none;">
                                <?php echo ZHtml::enumDropDownList($model,'op_rio_transposition', array('style'=>'width:60px')); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>RSO</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_rso_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_rso_amount',array('style'=>'width:30px')); ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Right operation diagram -->
        </div>
        
        <div class="rightcolumn">
            <table cellspacing="0">
                <thead>
                    <th width="5%">Muscle</th>
                    <th width="70%">Surgery</th>
                    <th width="10%">Amount</th>
                    <th width="15%">Trans</th>
                </thead>
                <tbody>     
                    <tr>
                        <td>LMR</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_lmr_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_lmr_amount',array('style'=>'width:30px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_lmr_transposition', array('style'=>'width:60px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>LIR</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_lir_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_lir_amount',array('style'=>'width:30px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_lir_transposition', array('style'=>'width:60px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>LLR</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_llr_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_llr_amount',array('style'=>'width:30px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_llr_transposition', array('style'=>'width:60px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>LSR</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_lsr_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_lsr_amount',array('style'=>'width:30px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_lsr_transposition', array('style'=>'width:60px','onChange'=>'rectusChange(this);')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>LIO</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_lio_surgery', array('style'=>'width:150px','onChange'=>'obliqueChange(this, "left_recession", "left_transposition");')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_lio_amount',array('style'=>'width:30px')); ?>
                        </td>
                        <td>
                            <span id="left_recession" style="display:none;">
                                <?php echo ZHtml::enumDropDownList($model,'op_lio_position', array('style'=>'width:60px')); ?>
                            </span>
                            <span id="left_transposition" style="display:none;">
                                <?php echo ZHtml::enumDropDownList($model,'op_lio_transposition', array('style'=>'width:60px')); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>LSO</td>
                        <td>
                            <?php echo ZHtml::enumDropDownList($model,'op_lso_surgery', array('style'=>'width:150px')); ?>
                        </td>
                        <td>
                             <?php echo $form->textField($model,'op_lso_amount',array('style'=>'width:30px')); ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Left operation diagram -->
        </div>
    </div>

    <h3>Late post-operative assessment</h3>
    
    <div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
            <div class="row">
                <?php echo $form->labelEx($model,'late_cover_hor_near'); ?>
                <?php echo ZHtml::enumDropDownList($model,'late_cover_hor_near', array()); ?>
                <?php echo $form->error($model,'late_cover_hor_near'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'late_angle_near'); ?>
                <?php echo $form->textField($model,'late_angle_near'); ?>
                <?php echo $form->error($model,'late_angle_near'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'late_cover_vert_near'); ?>
                <?php echo ZHtml::enumDropDownList($model,'late_cover_vert_near', array()); ?>
                <?php echo $form->error($model,'late_cover_vert_near'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'late_ver_angle_near'); ?>
                <?php echo $form->textField($model,'late_ver_angle_near'); ?>
                <?php echo $form->error($model,'late_ver_angle_near'); ?>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="row">
                <?php echo $form->labelEx($model,'late_cover_hor_dist'); ?>
                <?php echo ZHtml::enumDropDownList($model,'late_cover_hor_dist', array()); ?>
                <?php echo $form->error($model,'late_cover_hor_dist'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'late_hor_angle_dist'); ?>
                <?php echo $form->textField($model,'late_hor_angle_dist'); ?>
                <?php echo $form->error($model,'late_hor_angle_dist'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'late_cover_vert_dist'); ?>
                <?php echo ZHtml::enumDropDownList($model,'late_cover_vert_dist', array()); ?>
                <?php echo $form->error($model,'late_cover_vert_dist'); ?>
            </div>
            <div class="row">
                <?php echo $form->labelEx($model,'late_ver_angle_dist'); ?>
                <?php echo $form->textField($model,'late_ver_angle_dist'); ?>
                <?php echo $form->error($model,'late_ver_angle_dist'); ?>
            </div>
        </div>
    </div>
    <div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
              <div class="row">
                   <label for="AdultDataset_late_as20_total" style="font-weight:bold">AS-20 Total</label>
                   <?php echo $form->textField($model,'late_as20_total',array('style'=>'width:30px')); ?>
                   <?php echo $form->error($model,'late_as20_total'); ?>
              </div>
		   	<div class="row">
		              <?php echo $form->labelEx($model,'late_unwanted_overcorrection', array('style'=>'width:200px')); ?>
	          	      <?php echo $form->checkBox($model,'late_unwanted_overcorrection', array('class'=>'checkBox')); ?>
	            	      <?php echo $form->error($model,'late_unwanted_overcorrection'); ?>
		   	</div>
		   	<div class="row">
		              <?php echo $form->labelEx($model,'late_outcome_near_target', array('style'=>'width:200px')); ?>
	          	      <?php echo $form->checkBox($model,'late_outcome_near_target', array('class'=>'checkBox')); ?>
	            	      <?php echo $form->error($model,'late_outcome_near_target'); ?>
		   	</div>

    	</div>
        <div class="rightcolumn">
            <div style="width: 240px; text-align:right;">
                <div class="row">        
                    <!-- Complications -->
                    <?php echo $form->labelEx($model,'late_comp_none', array('class'=>'no-complications', 'style' => 'width:200px;')); ?>
                    <?php echo $form->checkBox($model,'late_comp_none', array('class'=>'checkBox', 'onChange'=>'compChange(this, "lateCompSection");')); ?>
                    <?php echo $form->error($model,'late_comp_none'); ?>
                </div>
            </div>
            <div id="lateCompSection" style="width: 240px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_slipped_muscle'); ?>
                    <?php echo $form->checkBox($model,'late_comp_slipped_muscle', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'late_comp_slipped_muscle'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_rrd'); ?>
                    <?php echo $form->checkBox($model,'late_comp_rrd', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'late_comp_rrd'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_orb_inf'); ?>
                    <?php echo $form->checkBox($model,'late_comp_orb_inf', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'late_comp_orb_inf'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_scleritis'); ?>
                    <?php echo $form->checkBox($model,'late_comp_scleritis', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'late_comp_scleritis'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_endophthalmitis'); ?>
                    <?php echo $form->checkBox($model,'late_comp_endophthalmitis', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'late_comp_endophthalmitis'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_antseg_ischaemia'); ?>
                    <?php echo $form->checkBox($model,'late_comp_antseg_ischaemia', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'late_comp_antseg_ischaemia'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_iatrogenic_diplopia'); ?>
                    <?php echo $form->checkBox($model,'late_comp_iatrogenic_diplopia', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'late_comp_iatrogenic_diplopia'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_new_amblyopia'); ?>
                    <?php echo $form->checkBox($model,'late_comp_new_amblyopia', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'late_comp_new_amblyopia'); ?>
                </div>
            </div>
            <div style="width: 240px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_unscheduled_clinic', array('style' => 'width:200px;')); ?>
                    <?php echo $form->checkBox($model,'late_comp_unscheduled_clinic', array('class'=>'checkBox','onChange'=>'lateClinicChange(this, "lateClinicCauseRow");')); ?>
                    <?php echo $form->error($model,'late_comp_unscheduled_clinic'); ?>
                </div>
                <div class="row" id="lateClinicCauseRow">
                    <?php echo $form->labelEx($model,'late_comp_clinic_cause',array('style'=>'width:160px;')); ?>
                    <?php echo $form->textField($model,'late_comp_clinic_cause',array('style'=>'width:40px;')); ?>
                    <?php echo $form->error($model,'late_comp_clinic_cause'); ?>
                </div>
                <div class="row">        
                    <?php echo $form->labelEx($model,'late_comp_unscheduled_theatre',array('style' => 'width:200px;')); ?>
                    <?php echo $form->checkBox($model,'late_comp_unscheduled_theatre', array('class'=>'checkBox','onChange'=>'lateTheatreChange(this, "lateTheatreCauseRow");')); ?>
                    <?php echo $form->error($model,'late_comp_unscheduled_theatre'); ?>
                </div>
                <div class="row" id="lateTheatreCauseRow">        
                    <?php echo $form->labelEx($model,'late_comp_theatre_cause',array('style'=>'width:160px;')); ?>
                    <?php echo $form->textField($model,'late_comp_theatre_cause',array('style'=>'width:40px')); ?>
                    <?php echo $form->error($model,'late_comp_theatre_cause'); ?>
                </div>                                                      
            </div>
        </div>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create and Print Op Note' : 'Save and Print Op Note'); ?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<!-- Calls javascript to initialise page -->
<?php
    Yii::app()->clientScript->registerScript('initScript',"adultFormInit();",CClientScript::POS_LOAD);
?>
