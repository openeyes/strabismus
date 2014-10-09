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
            	
	<div class="twocolumndiv">
        <div class="leftcolumn">
        </div>
        <div class="rightcolumn">
        </div>
    </div>
	<table><tr><td width="80%">
    <h3>Demographics:</h3>
	</td><td width="20%">
    <div onClick="disclose('demographics');">
		<img id="demographicsImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="demographicsImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</td></tr></table>

 	<span id='demographics' style="display:none;">
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'pt_age'); ?>
                <?php echo $form->textField($model,'pt_age',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'pt_age'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'pt_sex'); ?>
                <?php echo ZHtml::enumDropDownList($model,'pt_sex', array()); ?>
                <?php echo $form->error($model,'pt_sex'); ?>
            </div>         

        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'pt_postcode'); ?>
                <?php echo $form->textField($model,'pt_postcode',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'pt_postcode'); ?>
            </div>

			<div class="row">
				<?php echo $form->labelEx($model,'pt_ethnic_group'); ?>
				<?php echo ZHtml::enumDropDownList($model,'pt_ethnic_group', array('style'=>'width:200px')); ?>
				<?php echo $form->error($model,'pt_ethnic_group'); ?>
			</div>
			
        </div>
    </div>
    </span>
	<table><tr><td width="80%">
    <h3>Classification:</h3>
	</td><td width="20%">
    <div onClick="disclose('classification');">
		<img id="classificationImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="classificationImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</td></tr></table>

 	<span id='classification' style="display:none;">
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
    </span>
	<table><tr><td width="80%">
    <h3>Co-factors:</h3>
	</td><td width="20%">
    <div onClick="disclose('co_factors');">
		<img id="co_factorsImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="co_factorsImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</td></tr></table>

 	<span id='co_factors' style="display:none;">
    <div class="twocolumndiv">
        <div class="leftcolumn">

			<div class="row">
				<?php echo $form->labelEx($model,'asmt_num_ops'); ?>
				<?php echo $form->textField($model,'asmt_num_ops',array('style'=>'width:40px')); ?>
				<?php echo $form->error($model,'asmt_num_ops'); ?>
			</div>
			
			<div class="row">
		        <?php echo $form->labelEx($model,'asmt_other_eye_surg'); ?>
	            <?php echo CHtml::dropDownList('ocularSurgeryDropDown', '', $model->ocularSurgeryArray(), array('style'=>'width:200px','onChange'=>'addToTextarea(this.id, "AdultDataset_asmt_other_eye_surg")')); ?>
	            <label for="AdultDataset_asmt_other_eye_surg"></label>
				<?php echo $form->textArea($model,'asmt_other_eye_surg',array('rows'=>1, 'cols'=>25)); ?>
				<?php echo $form->error($model,'asmt_other_eye_surg'); ?>
			</div>
			
			<div class="row">
		        <?php echo $form->labelEx($model,'asmt_orbital_surg'); ?>
	            <?php echo CHtml::dropDownList('orbitalSurgeryDropDown', '', $model->orbitalSurgeryArray(), array('style'=>'width:200px','onChange'=>'addToTextarea(this.id, "AdultDataset_asmt_orbital_surg")')); ?>
	            <label for="AdultDataset_asmt_other_eye_surg"></label>
				<?php echo $form->textArea($model,'asmt_orbital_surg',array('rows'=>1, 'cols'=>25)); ?>
				<?php echo $form->error($model,'asmt_orbital_surg'); ?>
			</div>
			
			<!-- Previous toxin treatment -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'asmt_previous_toxin', array()); ?>
	            <?php echo $form->checkBox($model,'asmt_previous_toxin', array('class'=>'checkBox')); ?>
	            <?php echo $form->error($model,'asmt_previous_toxin'); ?>
	        </div>
			
        </div>
        <div class="rightcolumn">

			<div class="row">
		        <?php echo $form->labelEx($model,'asmt_other_eye_disease'); ?>
	            <?php echo CHtml::dropDownList('eyeDiseaseDropDown', '', $model->eyeDiseaseSurgeryArray(), array('style'=>'width:200px','onChange'=>'addToTextarea(this.id, "AdultDataset_asmt_other_eye_disease")')); ?>
	            <label for="AdultDataset_asmt_other_eye_surg"></label>
				<?php echo $form->textArea($model,'asmt_other_eye_disease',array('rows'=>1, 'cols'=>25)); ?>
				<?php echo $form->error($model,'asmt_other_eye_disease'); ?>
			</div>

			<div class="row">
		        <?php echo $form->labelEx($model,'asmt_neuro_disease'); ?>
				<?php echo $form->textArea($model,'asmt_neuro_disease',array('rows'=>2, 'cols'=>25)); ?>
				<?php echo $form->error($model,'asmt_neuro_disease'); ?>
			</div>

			<div class="row">
		        <?php echo $form->labelEx($model,'asmt_other'); ?>
				<?php echo $form->textArea($model,'asmt_other',array('rows'=>2, 'cols'=>25)); ?>
				<?php echo $form->error($model,'asmt_other'); ?>
			</div>						
        </div>
    </div>
    </span>
	<table><tr><td width="80%">
    <h3>Surgical Planning:</h3>
	</td><td width="20%">
    <div onClick="disclose('surg_plan');">
		<img id="surg_planImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="surg_planImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</td></tr></table>
	
 	<span id='surg_plan' style="display:none;">
    <h4 style='margin-left:20px;'>Goals*:</h4>
	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn plan-goals">
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_hor_align_pri'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_hor_align_pri', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_hor_align_pri'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_ver_align_pri'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_ver_align_pri', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_ver_align_pri'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_hor_align_ecc'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_hor_align_ecc', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_hor_align_ecc'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_ver_align_ecc'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_ver_align_ecc', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_ver_align_ecc'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_con_int_squint'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_con_int_squint', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_con_int_squint'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_abn_head_postn'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_abn_head_postn', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_hor_ali'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_binoc'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_binoc', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_binoc'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_torsion'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_torsion', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_torsion'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_alppat'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_alppat', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_alppat'); ?>
                </div>
            </div>
            <div style="width: 280px; text-align:right;">
                <div class="row">        
                    <?php echo $form->labelEx($model,'plan_goal_vis_acu'); ?>
                    <?php echo $form->checkBox($model,'plan_goal_vis_acu', array('class'=>'checkBox')); ?>
                    <?php echo $form->error($model,'plan_goal_vis_acu'); ?>
                </div>
            </div>
            <p style="color:#66f">*Please note that goals affect your accuracy score</p>
            
        </div>
        
        <div class="rightcolumn">      

<!--
			<div class="row">
		        <?php echo $form->labelEx($model,'plan_other'); ?>
				<?php echo $form->textArea($model,'plan_other',array('rows'=>2, 'cols'=>25)); ?>
				<?php echo $form->error($model,'plan_other'); ?>
			</div>
-->
			                        
        </div>
        
    </div>

	<h4 style='margin-left:20px;'>Targets:</h4>    
	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
			<div class="row">
				<?php echo $form->labelEx($model,'plan_position'); ?>
				<?php echo ZHtml::enumDropDownList($model,'plan_position', array('style'=>'width:200px','onChange'=>'setEccentric(this.value, "setEccentricDiv");')); ?>
				<?php echo $form->error($model,'plan_position'); ?>
			</div> 
			    
        </div>
        
        <div class="rightcolumn">
          
 			<div class="row" id="setEccentricDiv" style="display:none;">
				<?php echo $form->labelEx($model,'plan_eccentric'); ?>
				<?php echo ZHtml::enumDropDownList($model,'plan_eccentric', array('style'=>'width:200px')); ?>
				<?php echo $form->error($model,'plan_eccentric'); ?>
			</div> 
			                        
        </div>
    </div>
    
	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
			<div class="row">
				<?php echo $form->labelEx($model,'plan_distance'); ?>
				<?php echo ZHtml::enumDropDownList($model,'plan_distance', array('style'=>'width:200px')); ?>
				<?php echo $form->error($model,'plan_distance'); ?>
			</div> 
			    
        </div>
        
        <div class="rightcolumn">                   
        </div>
    </div>

	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
			<div class="row">
				<?php echo $form->labelEx($model,'plan_hor_target_direction'); ?>
				<?php echo ZHtml::enumDropDownList($model,'plan_hor_target_direction', array('style'=>'width:200px')); ?>
				<?php echo $form->error($model,'plan_hor_target_direction'); ?>
			</div> 
			    
        </div>
        
        <div class="rightcolumn">
        
			<div class="row">
				<?php echo $form->labelEx($model,'plan_hor_target_angle'); ?>
				<?php echo $form->textField($model,'plan_hor_target_angle',array('style'=>'width:40px')); ?>
				<?php echo $form->error($model,'plan_hor_target_angle'); ?>
			</div>
			                   
        </div>
    </div>

	<div class="twocolumndiv">
        <div class="leftcolumn">
        
			<div class="row">
				<?php echo $form->labelEx($model,'plan_ver_target_direction'); ?>
				<?php echo ZHtml::enumDropDownList($model,'plan_ver_target_direction', array('style'=>'width:200px')); ?>
				<?php echo $form->error($model,'plan_ver_target_direction'); ?>
			</div> 
			    
        </div>
        
        <div class="rightcolumn">
        
			<div class="row">
				<?php echo $form->labelEx($model,'plan_ver_target_angle'); ?>
				<?php echo $form->textField($model,'plan_ver_target_angle',array('style'=>'width:40px')); ?>
				<?php echo $form->error($model,'plan_ver_target_angle'); ?>
				Torsion = 0
	            <?php //echo $form->labelEx($model,'plan_zero_torsion', array()); ?>
	            <?php echo $form->checkBox($model,'plan_zero_torsion', array('class'=>'checkBox')); ?>
			</div>
			
<!--
			<div class="row">
	            <?php echo $form->labelEx($model,'plan_zero_torsion', array()); ?>
	            <?php echo $form->checkBox($model,'plan_zero_torsion', array('class'=>'checkBox')); ?>
	            <?php echo $form->error($model,'plan_zero_torsion'); ?>
	        </div>
-->
			                   
        </div>
    </div>
 	</span>		              
    
	<table><tr><td width="80%">
    <h3>Pre-operative assessment:</h3>
	</td><td width="20%">
    <div onClick="disclose('pre_op');">
		<img id="pre_opImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="pre_opImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</td></tr></table>
	
 	<span id='pre_op' style="display:none;">
	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        	<div class="row">
                <?php echo $form->labelEx($model,'asmt_date'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'asmt_date',
                    'value'=>$model->asmt_date,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->asmt_date,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'asmt_date'); ?>
            </div>
			
        </div>

        
        <div class="rightcolumn">      


			

                        
        </div>
    </div>


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

	<div class="twocolumndiv" style="border-bottom: none;">
    	<div class="leftcolumn">
    		<!-- Abnormal head posture -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'asmt_ahp_present', array('style'=>'width:200px')); ?>
	            <?php echo $form->checkBox($model,'asmt_ahp_present', array('class'=>'checkBox', 'onChange'=>'ahpChange(this,"asmtAhpSection");')); ?>
	            <?php echo $form->error($model,'asmt_ahp_present'); ?>
	        </div>
	          
	        <div class="onecolumndivindented" id="asmtAhpSection" style="display:none;">
		        <div class="row">        
		        	<!-- AHP description -->
		            <?php echo $form->labelEx($model,'asmt_ahp_desc'); ?>
					<?php echo ZHtml::enumDropDownList($model,'asmt_ahp_desc', array()); ?>
					<?php echo $form->error($model,'asmt_ahp_desc'); ?>
				</div>
		        <div class="row">        
		        	<!-- AHP angle -->
		            <?php echo $form->labelEx($model,'asmt_ahp_angle'); ?>
				    <?php echo $form->textField($model,'asmt_ahp_angle',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'asmt_ahp_angle'); ?>
				</div>
	        </div>
        </div>
        <div class="rightcolumn">
    		<div class="row">
            	<?php echo $form->labelEx($model,'asmt_pattern'); ?>
				<?php echo ZHtml::enumDropDownList($model,'asmt_pattern', array()); ?>
				<?php echo $form->error($model,'asmt_pattern'); ?>
		   	</div>
        </div>
    </div>

	<div class="twocolumndiv" style="border-bottom: none;">
    	<div class="leftcolumn">
    	
			<div class="row">
				<?php echo $form->labelEx($model,'asmt_binoc_with_cor', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'asmt_binoc_with_cor', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'asmt_binoc_with_cor'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'asmt_binoc_without_cor', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'asmt_binoc_without_cor', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'asmt_binoc_without_cor'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'asmt_torsion_sub', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'asmt_torsion_sub', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'asmt_torsion_sub'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'asmt_torsion', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'asmt_torsion', array('class'=>'checkBox', 'onChange'=>'ahpChange(this,"asmtTorSection");')); ?>
				<?php echo $form->error($model,'asmt_torsion'); ?>
			</div>
			
			<div class="onecolumndivindented" id="asmtTorSection" style="display:none;">
		        <div class="row">        
		            <?php echo $form->labelEx($model,'asmt_torsion_side'); ?>
					<?php echo ZHtml::enumDropDownList($model,'asmt_torsion_side', array()); ?>
					<?php echo $form->error($model,'asmt_torsion_side'); ?>
				</div>
		        <div class="row">        
		            <?php echo $form->labelEx($model,'asmt_torsion_clock'); ?>
					<?php echo ZHtml::enumDropDownList($model,'asmt_torsion_clock', array()); ?>
					<?php echo $form->error($model,'asmt_torsion_clock'); ?>
				</div>
		        <div class="row">        
		            <?php echo $form->labelEx($model,'asmt_torsion_amt'); ?>
				    <?php echo $form->textField($model,'asmt_torsion_amt',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'asmt_torsion_amt'); ?>
				</div>
	        </div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'asmt_diplopia', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'asmt_diplopia', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'asmt_diplopia'); ?>
			</div>

 	
        </div>
        <div class="rightcolumn">
			<!-- Stereo acuity -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'asmt_stereo_present', array('style'=>'width:200px; margin-left:-80px')); ?>
	            <?php echo $form->checkBox($model,'asmt_stereo_present', array('class'=>'checkBox', 'onChange'=>'stereoChange(this,"asmtStereoSection");')); ?>
	            <?php echo $form->error($model,'asmt_stereo_present'); ?>
	        </div>
	        
	        <div class="onecolumndivindented" id="asmtStereoSection" style="display:none;">
		        <div class="row">        
		        	<!-- Frisby-->
		            <?php echo $form->labelEx($model,'asmt_stereo_frisby'); ?>
				    <?php echo $form->textField($model,'asmt_stereo_frisby',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'asmt_stereo_frisby'); ?>
				</div>
		        <div class="row">        
		        	<!-- TNO-->
		            <?php echo $form->labelEx($model,'asmt_stereo_tno'); ?>
				    <?php echo $form->textField($model,'asmt_stereo_tno',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'asmt_stereo_tno'); ?>
				</div>
		        <div class="row">        
		        	<!-- Frisby-->
		            <?php echo $form->labelEx($model,'asmt_stereo_lang'); ?>
				    <?php echo $form->textField($model,'asmt_stereo_lang',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'asmt_stereo_lang'); ?>
				</div>
	        </div>
	        
	        <h5>AS-20 score:</h5>
	        <div class="row">
                <?php echo $form->labelEx($model,'asmt_psychosocial'); ?>
                <?php echo $form->textField($model,'asmt_psychosocial',array('style'=>'width:30px')); ?>
                <?php echo $form->error($model,'asmt_psychosocial'); ?>
            </div>
 
 	        <div class="row">
                <?php echo $form->labelEx($model,'asmt_functional'); ?>
                <?php echo $form->textField($model,'asmt_functional',array('style'=>'width:30px')); ?>
                <?php echo $form->error($model,'asmt_functional'); ?>
            </div>
            
	        <div class="row">
                <?php echo $form->labelEx($model,'asmt_total'); ?>
                <?php echo $form->textField($model,'asmt_total',array('style'=>'width:30px')); ?>
                <?php echo $form->error($model,'asmt_total'); ?>
            </div>  
            
        </div>
    </div>
    
    
 
 	<!-- HVT section -->
 	<label style="width:200px">9 Positions</label>
 	<div title="HVT" onClick="disclose('asmt_hvt');">
		<img id="asmt_hvtImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="asmt_hvtImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</br>
	
 	<table class='hvt' id='asmt_hvt' style="display:none;">
	 	<tbody>
		 	<tr>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'tr',
							'model'=>$model,
							'attribute'=>'asmt_hvt_tr',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectTr', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectTr', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectTr', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectTr', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectTr', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectTr', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectTr">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectTr">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectTr">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueSelectTr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectTr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectTr" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'tm',
							'model'=>$model,
							'attribute'=>'asmt_hvt_tm',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectTm', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectTm', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectTm', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectTm', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectTm', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectTm', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectTm">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectTm">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectTm">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueSelectTm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectTm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectTm" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'tl',
							'model'=>$model,
							'attribute'=>'asmt_hvt_tl',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectTl', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectTl', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectTl', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectTl', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectTl', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectTl', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectTl">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectTl">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectTl">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        
			        </br>

					<select id="horValueSelectTl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectTl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectTl" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 	</tr>

		 	<tr>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'mr',
							'model'=>$model,
							'attribute'=>'asmt_hvt_mr',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectMr', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectMr', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectMr', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectMr', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectMr', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectMr', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectMr">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectMr">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectMr">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueSelectMr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectMr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectMr" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'mm',
							'model'=>$model,
							'attribute'=>'asmt_hvt_mm',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectMm', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectMm', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectMm', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectMm', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectMm', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectMm', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectMm">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectMm">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectMm">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueSelectMm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectMm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectMm" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'ml',
							'model'=>$model,
							'attribute'=>'asmt_hvt_ml',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectMl', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectMl', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectMl', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectMl', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectMl', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectMl', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectMl">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectMl">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectMl">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        
			        </br>

					<select id="horValueSelectMl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectMl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectMl" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 	</tr>

		 	<tr>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'br',
							'model'=>$model,
							'attribute'=>'asmt_hvt_br',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectBr', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectBr', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectBr', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectBr', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectBr', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectBr', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectBr">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectBr">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectBr">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueSelectBr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectBr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectBr" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'bm',
							'model'=>$model,
							'attribute'=>'asmt_hvt_bm',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectBm', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectBm', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectBm', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectBm', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectBm', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectBm', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectBm">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectBm">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectBm">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueSelectBm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectBm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectBm" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'bl',
							'model'=>$model,
							'attribute'=>'asmt_hvt_bl',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horSelectBl', 'attribute'=>'value'),
											'ver'=>array('id'=>'verSelectBl', 'attribute'=>'value'),
											'tor'=>array('id'=>'torSelectBl', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueSelectBl', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueSelectBl', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueSelectBl', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horSelectBl">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verSelectBl">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torSelectBl">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        
			        </br>

					<select id="horValueSelectBl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueSelectBl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueSelectBl" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 	</tr>

	 	</tbody>
 	</table>


	<div class="twocolumndiv">
        <div class="leftcolumn">     
        </div>
        <div class="rightcolumn">
        </div>
    </div>
    
    </span>
 

	<table><tr><td width="80%">    
    <h3>Operation:</h3>
	</td><td width="20%">
    <div onClick="disclose('op_note');">
		<img id="op_noteImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="op_noteImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</td></tr></table>
	
 	<span id='op_note' style="display:none;">
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
        </div>
        
        <div class="rightcolumn">
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
    
    <div class="twocolumndiv">
        <div class="leftcolumn">
        
			
        <div style="display:block; text-align:right; width: 240px;">
        <div class="row">        
            <?php echo $form->labelEx($model,'op_comp_none', array('class'=>'no-complications')); ?>
            <?php echo $form->checkBox($model,'op_comp_none', array('class'=>'checkBox', 'onChange'=>'compChange(this, "opCompSection");')); ?>
			<?php echo $form->error($model,'op_comp_none'); ?>
	</div>
</div>
        <div id="opCompSection" style="display:block; text-align:right; width: 240px;">

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
        
        <!-- Complications (NB set height of div since position of textarea is absolute) -->
        <div class="rightcolumn" style="height:60px;">
               	
        	<div class="row">
        		<?php echo $form->labelEx($model,'op_comments', array('style'=>'width:50px')); ?> 
	            <?php echo $form->textArea($model, 'op_comments', array('rows'=>3, 'cols'=>30, 'style'=>'position:absolute;')); ?>
	            <?php echo $form->error($model,'op_comments'); ?>
        	</div>
        	
        </div>

    </div>
 	</span>
    
	<table><tr><td width="80%">
    <h3>Early post-operative assessment:</h3>
	</td><td width="20%">
    <div onClick="disclose('early');">
		<img id="earlyImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="earlyImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</td></tr></table>
	
 	<span id='early' style="display:none;">
	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        	<div class="row">
                <?php echo $form->labelEx($model,'early_date'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'early_date',
                    'value'=>$model->early_date,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->early_date,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'early_date'); ?>
            </div>        
    	</div>
    	
        <div class="rightcolumn">
        	<!-- Notes -->        
	        <div class="row">
	            <?php echo $form->labelEx($model,'early_notes', array('style'=>'width:50px')); ?>
	            <?php echo $form->textArea($model, 'early_notes', array('rows'=>3, 'cols'=>30, 'style'=>'position:absolute;')); ?>
	            <?php echo $form->error($model,'early_notes'); ?>
	        </div>
        </div>
    </div> 
    
  	<div class="twocolumndiv">
        <div class="leftcolumn">
        
        	<div class="row">
				<?php echo $form->labelEx($model,'early_cover_hor_near'); ?>
				<?php echo ZHtml::enumDropDownList($model,'early_cover_hor_near', array()); ?>
				<?php echo $form->error($model,'early_cover_hor_near'); ?>
			</div>

		   	<div class="row">
	            <?php echo $form->labelEx($model,'early_angle_near'); ?>
			    <?php echo $form->textField($model,'early_angle_near'); ?>
				<?php echo $form->error($model,'early_angle_near'); ?>
		   	</div>
		   				
		   	<div class="row">
            	<?php echo $form->labelEx($model,'early_cover_vert_near'); ?>
				<?php echo ZHtml::enumDropDownList($model,'early_cover_vert_near', array()); ?>
				<?php echo $form->error($model,'early_cover_vert_near'); ?>
		   	</div>

		   	<div class="row">
				<?php echo $form->labelEx($model,'early_ver_angle_near'); ?>
			    <?php echo $form->textField($model,'early_ver_angle_near'); ?>
				<?php echo $form->error($model,'early_ver_angle_near'); ?>
		   	</div>
		   	
		   	<div class="row">
				<?php echo $form->labelEx($model,'early_torsion_sub'); ?>
				<?php echo $form->checkBox($model,'early_torsion_sub', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'early_torsion_sub'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'early_torsion'); ?>
				<?php echo $form->checkBox($model,'early_torsion', array('class'=>'checkBox', 'onChange'=>'ahpChange(this,"earlyTorSection");')); ?>
				<?php echo $form->error($model,'early_torsion'); ?>
			</div>
			
			<div class="onecolumndivindented" id="earlyTorSection" style="display:none;">
		        <div class="row">        
		            <?php echo $form->labelEx($model,'early_torsion_side'); ?>
					<?php echo ZHtml::enumDropDownList($model,'early_torsion_side', array()); ?>
					<?php echo $form->error($model,'early_torsion_side'); ?>
				</div>
		        <div class="row">        
		            <?php echo $form->labelEx($model,'early_torsion_clock'); ?>
					<?php echo ZHtml::enumDropDownList($model,'early_torsion_clock', array()); ?>
					<?php echo $form->error($model,'early_torsion_clock'); ?>
				</div>
		        <div class="row">        
		            <?php echo $form->labelEx($model,'early_torsion_amt'); ?>
				    <?php echo $form->textField($model,'early_torsion_amt',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'early_torsion_amt'); ?>
				</div>
	        </div>
		
        </div>
        <div class="rightcolumn">
		
        	<div class="row">
				<?php echo $form->labelEx($model,'early_cover_hor_dist'); ?>
				<?php echo ZHtml::enumDropDownList($model,'early_cover_hor_dist', array()); ?>
				<?php echo $form->error($model,'early_cover_hor_dist'); ?>
			</div>

		   	<div class="row">
	            <?php echo $form->labelEx($model,'early_hor_angle_dist'); ?>
			    <?php echo $form->textField($model,'early_hor_angle_dist'); ?>
				<?php echo $form->error($model,'early_hor_angle_dist'); ?>
		   	</div>
		   				
		   	<div class="row">
            	<?php echo $form->labelEx($model,'early_cover_vert_dist'); ?>
				<?php echo ZHtml::enumDropDownList($model,'early_cover_vert_dist', array()); ?>
				<?php echo $form->error($model,'early_cover_vert_dist'); ?>
		   	</div>

		   	<div class="row">
				<?php echo $form->labelEx($model,'early_ver_angle_dist'); ?>
			    <?php echo $form->textField($model,'early_ver_angle_dist'); ?>
				<?php echo $form->error($model,'early_ver_angle_dist'); ?>
		   	</div>
	          
        </div>
		                
	</div>
 	</span>             

	<table><tr><td width="80%">
    <h3>Late post-operative assessment:</h3>
	</td><td width="20%">
    <div onClick="disclose('late');">
		<img id="lateImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="lateImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</td></tr></table>
	
 	<span id='late' style="display:none;">
 	
	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        	<div class="row">
                <?php echo $form->labelEx($model,'late_date'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'late_date',
                    'value'=>$model->late_date,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->late_date,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'late_date'); ?>
            </div>
			
        </div>

        
        <div class="rightcolumn">      


			

                        
        </div>
    </div>


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
    		<!-- Abnormal head posture -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'late_ahp_present', array('style'=>'width:200px')); ?>
	            <?php echo $form->checkBox($model,'late_ahp_present', array('class'=>'checkBox', 'onChange'=>'ahpChange(this,"lateAhpSection");')); ?>
	            <?php echo $form->error($model,'late_ahp_present'); ?>
	        </div>
	          
	        <div class="onecolumndivindented" id="lateAhpSection" style="display:none;">
		        <div class="row">        
		        	<!-- AHP description -->
		            <?php echo $form->labelEx($model,'late_ahp_desc'); ?>
					<?php echo ZHtml::enumDropDownList($model,'late_ahp_desc', array()); ?>
					<?php echo $form->error($model,'late_ahp_desc'); ?>
				</div>
		        <div class="row">        
		        	<!-- AHP angle -->
		            <?php echo $form->labelEx($model,'late_ahp_angle'); ?>
				    <?php echo $form->textField($model,'late_ahp_angle',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'late_ahp_angle'); ?>
				</div>
	        </div>
        </div>
        <div class="rightcolumn">
    		<div class="row">
            	<?php echo $form->labelEx($model,'late_pattern'); ?>
				<?php echo ZHtml::enumDropDownList($model,'late_pattern', array()); ?>
				<?php echo $form->error($model,'late_pattern'); ?>
		   	</div>
        </div>
    </div>

	<div class="twocolumndiv"  style="border-bottom: none;">
    	<div class="leftcolumn">
    	
			<div class="row">
				<?php echo $form->labelEx($model,'late_binoc_with_cor', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'late_binoc_with_cor', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'late_binoc_with_cor'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'late_binoc_without_cor', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'late_binoc_without_cor', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'late_binoc_without_cor'); ?>
			</div>
		
		   	<div class="row">
				<?php echo $form->labelEx($model,'late_torsion_sub', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'late_torsion_sub', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'late_torsion_sub'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'late_torsion', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'late_torsion', array('class'=>'checkBox', 'onChange'=>'ahpChange(this,"lateTorSection");')); ?>
				<?php echo $form->error($model,'late_torsion'); ?>
			</div>
			
			<div class="onecolumndivindented" id="lateTorSection" style="display:none;">
		        <div class="row">        
		            <?php echo $form->labelEx($model,'late_torsion_side'); ?>
					<?php echo ZHtml::enumDropDownList($model,'late_torsion_side', array()); ?>
					<?php echo $form->error($model,'late_torsion_side'); ?>
				</div>
		        <div class="row">        
		            <?php echo $form->labelEx($model,'late_torsion_clock'); ?>
					<?php echo ZHtml::enumDropDownList($model,'late_torsion_clock', array()); ?>
					<?php echo $form->error($model,'late_torsion_clock'); ?>
				</div>
		        <div class="row">        
		            <?php echo $form->labelEx($model,'late_torsion_amt'); ?>
				    <?php echo $form->textField($model,'late_torsion_amt',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'late_torsion_amt'); ?>
				</div>
	        </div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'late_diplopia', array('style'=>'width:200px')); ?>
				<?php echo $form->checkBox($model,'late_diplopia', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'late_diplopia'); ?>
			</div>
        </div>
        <div class="rightcolumn">
			<!-- Stereo acuity -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'late_stereo_present',array('style' => 'width:200px')); ?>
	            <?php echo $form->checkBox($model,'late_stereo_present', array('class'=>'checkBox', 'onChange'=>'stereoChange(this,"lateStereoSection");')); ?>
	            <?php echo $form->error($model,'late_stereo_present'); ?>
	        </div>
	        
	        <div class="onecolumndivindented" id="lateStereoSection" style="display:none;">
		        <div class="row">        
		        	<!-- Frisby-->
		            <?php echo $form->labelEx($model,'late_stereo_frisby'); ?>
				    <?php echo $form->textField($model,'late_stereo_frisby',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'late_stereo_frisby'); ?>
				</div>
		        <div class="row">        
		        	<!-- TNO-->
		            <?php echo $form->labelEx($model,'late_stereo_tno'); ?>
				    <?php echo $form->textField($model,'late_stereo_tno',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'late_stereo_tno'); ?>
				</div>
		        <div class="row">        
		        	<!-- Frisby-->
		            <?php echo $form->labelEx($model,'late_stereo_lang'); ?>
				    <?php echo $form->textField($model,'late_stereo_lang',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'late_stereo_lang'); ?>
				</div>
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
    </div>

	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
	        <div style="width: 240px; text-align:right;">
	        <div class="row">        
	        	<!-- Complications -->
	            <?php echo $form->labelEx($model,'late_comp_none', array('class'=>'no-complications')); ?>
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
		        <div class="row">        
		            <?php echo $form->labelEx($model,'late_comp_unscheduled_clinic'); ?>
		            <?php echo $form->checkBox($model,'late_comp_unscheduled_clinic', array('class'=>'checkBox','onChange'=>'lateClinicChange(this, "lateClinicCauseRow");')); ?>
					<?php echo $form->error($model,'late_comp_unscheduled_clinic'); ?>
				</div>
		        <div class="row" id="lateClinicCauseRow">        
		            <?php echo $form->labelEx($model,'late_comp_clinic_cause'); ?>
		            <?php echo $form->textField($model,'late_comp_clinic_cause',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'late_comp_clinic_cause'); ?>
				</div>
		        <div class="row">        
		            <?php echo $form->labelEx($model,'late_comp_unscheduled_theatre'); ?>
		            <?php echo $form->checkBox($model,'late_comp_unscheduled_theatre', array('class'=>'checkBox','onChange'=>'lateTheatreChange(this, "lateTheatreCauseRow");')); ?>
					<?php echo $form->error($model,'late_comp_unscheduled_theatre'); ?>
				</div>
		        <div class="row" id="lateTheatreCauseRow">        
		            <?php echo $form->labelEx($model,'late_comp_theatre_cause'); ?>
		            <?php echo $form->textField($model,'late_comp_theatre_cause',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'late_comp_theatre_cause'); ?>
				</div>							    
	        </div>
    	</div>
        <div class="rightcolumn">
        	<div class="row">
	            <?php echo $form->labelEx($model,'late_comments', array('style'=>'width:50px')); ?>
	            <?php echo $form->textArea($model, 'late_comments', array('rows'=>3, 'cols'=>30, 'style'=>'position:absolute;')); ?>
	            <?php echo $form->error($model,'late_comments'); ?>
	        </div>
        </div>
    </div> 
	<div class="twocolumndiv" style="border-bottom:none;">
        <div class="leftcolumn">
	        <h5>AS-20 score:</h5>
	        <div class="row">
                <?php echo $form->labelEx($model,'late_as20_psychosocial'); ?>
                <?php echo $form->textField($model,'late_as20_psychosocial',array('style'=>'width:30px')); ?>
                <?php echo $form->error($model,'late_as20_psychosocial'); ?>
            </div>
 
 	        <div class="row">
                <?php echo $form->labelEx($model,'late_as20_functional'); ?>
                <?php echo $form->textField($model,'late_as20_functional',array('style'=>'width:30px')); ?>
                <?php echo $form->error($model,'late_as20_functional'); ?>
            </div>
            
	        <div class="row">
                <?php echo $form->labelEx($model,'late_as20_total'); ?>
                <?php echo $form->textField($model,'late_as20_total',array('style'=>'width:30px')); ?>
                <?php echo $form->error($model,'late_as20_total'); ?>
            </div>  
    	</div>
        <div class="rightcolumn">
        </div>
    </div>
 	<!-- Late HVT section -->
 	<label style="width:200px">9 Positions</label>
 	<div title="Late HVT" onClick="disclose('late_hvt');">
		<img id="late_hvtImgOpen" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseOpen16.gif" align="abstop" style="display:none;">
		<img id="late_hvtImgClose" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/discloseClose16.gif" align="abstop" style="display:block;">
	</div>
	</br>
 	<table class='hvt' id='late_hvt' style="display:none;">
	 	<tbody>
		 	<tr>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateTr',
							'model'=>$model,
							'attribute'=>'late_hvt_tr',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectTr', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectTr', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectTr', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectTr', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectTr', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectTr', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectTr">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectTr">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectTr">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueLateSelectTr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectTr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectTr" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateTm',
							'model'=>$model,
							'attribute'=>'late_hvt_tm',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectTm', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectTm', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectTm', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectTm', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectTm', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectTm', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectTm">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectTm">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectTm">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueLateSelectTm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectTm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectTm" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateTl',
							'model'=>$model,
							'attribute'=>'late_hvt_tl',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectTl', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectTl', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectTl', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectTl', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectTl', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectTl', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectTl">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectTl">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectTl">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        
			        </br>

					<select id="horValueLateSelectTl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectTl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectTl" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 	</tr>

		 	<tr>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateMr',
							'model'=>$model,
							'attribute'=>'late_hvt_mr',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectMr', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectMr', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectMr', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectMr', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectMr', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectMr', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectMr">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectMr">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectMr">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueLateSelectMr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectMr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectMr" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateMm',
							'model'=>$model,
							'attribute'=>'late_hvt_mm',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectMm', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectMm', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectMm', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectMm', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectMm', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectMm', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectMm">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectMm">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectMm">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueLateSelectMm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectMm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectMm" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateMl',
							'model'=>$model,
							'attribute'=>'late_hvt_ml',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectMl', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectMl', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectMl', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectMl', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectMl', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectMl', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectMl">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectMl">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectMl">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        
			        </br>

					<select id="horValueLateSelectMl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectMl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectMl" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 	</tr>

		 	<tr>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateBr',
							'model'=>$model,
							'attribute'=>'late_hvt_br',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectBr', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectBr', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectBr', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectBr', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectBr', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectBr', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectBr">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectBr">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectBr">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueLateSelectBr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectBr" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectBr" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateBm',
							'model'=>$model,
							'attribute'=>'late_hvt_bm',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectBm', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectBm', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectBm', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectBm', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectBm', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectBm', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectBm">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectBm">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectBm">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        </br>

					<select id="horValueLateSelectBm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectBm" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectBm" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>
		 		<td>
					<?php
						$this->widget('application.modules.eyedraw.OEEyeDrawWidget', array(
							'mode'=>'edit',
							'toolbar' => false,
							'width'=>220,
							'height'=>220,
							'idSuffix'=> 'lateBl',
							'model'=>$model,
							'attribute'=>'late_hvt_bl',
							'listenerArray' => array('hvtListener'),
							'onReadyCommandArray'=>array(
								array('addDoodle', array('HVTGrid')),
								array(
									'addDoodle', 
									array(
										'HVT', 
										array('originX'=>-250, 'rotation'=>M_PI/4), 
										array(
											'hor'=>array('id'=>'horLateSelectBl', 'attribute'=>'value'),
											'ver'=>array('id'=>'verLateSelectBl', 'attribute'=>'value'),
											'tor'=>array('id'=>'torLateSelectBl', 'attribute'=>'value'),
											'horValue'=>array('id'=>'horValueLateSelectBl', 'attribute'=>'value'),
											'verValue'=>array('id'=>'verValueLateSelectBl', 'attribute'=>'value'),
											'torValue'=>array('id'=>'torValueLateSelectBl', 'attribute'=>'value'),
										)
									)
								),
								array('addDoodle', array('HVT', array('rotation'=>M_PI/4))),
								array('deselectDoodles'),
							),
						));
					?>
					</br>
					<select id="horLateSelectBl">
			            <option value="XT">XT</option>
			            <option value="None" selected="true" >None</option>
			            <option value="ET">ET</option>
			        </select>
			
			        <select id="verLateSelectBl">
			            <option value="R/L">R/L</option>
			            <option value="None" selected="true" >None</option>
			            <option value="L/R">L/R</option>
			        </select>
			            
			        <select id="torLateSelectBl">
			            <option value="Excyclotorsion">Excyclotorsion</option>
			            <option value="None" selected="true" >None</option>
			            <option value="Incyclotorsion">Incyclotorsion</option>
			        </select>
			        
			        </br>

					<select id="horValueLateSelectBl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
					
					<select id="verValueLateSelectBl" style="width:59px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
						<option value=25>25</option>
						<option value=26>26</option>
						<option value=27>27</option>
						<option value=28>28</option>
						<option value=29>29</option>
						<option value=30>30</option>
						<option value=31>31</option>
						<option value=32>32</option>
						<option value=33>33</option>
						<option value=34>34</option>
						<option value=35>35</option>
						<option value=36>36</option>
						<option value=37>37</option>
						<option value=38>38</option>
						<option value=39>39</option>
						<option value=40>40</option>
						<option value=41>41</option>
						<option value=42>42</option>
						<option value=43>43</option>
						<option value=44>44</option>
						<option value=45>45</option>
						<option value=46>46</option>
						<option value=47>47</option>
						<option value=48>48</option>
						<option value=49>49</option>
						<option value=50>50</option>
					</select>
			
					<select id="torValueLateSelectBl" style="width:109px;">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
					</select>
		 		</td>

		 	</tr>

	 	</tbody>
 	</table>


	<div class="twocolumndiv">
        <div class="leftcolumn">     
        </div>
        <div class="rightcolumn">
        </div>
    </div>
    
    </span>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create and print note' : 'Save and print note'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<!-- Calls javascript to initialise page -->
<?php
    Yii::app()->clientScript->registerScript('initScript',"adultFormInit();",CClientScript::POS_LOAD);
?>