<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dataset-form',
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

    <h3>Demographics:</h3>
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
				<?php echo ZHtml::enumDropDownList($model,'pt_ethnic_group', array()); ?>
				<?php echo $form->error($model,'pt_ethnic_group'); ?>
			</div>
			
        </div>
    </div>

    <h3>Pre-operative assessment:</h3>
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
            
			<div class="row">
				<?php echo $form->labelEx($model,'asmt_num_ops'); ?>
				<?php echo $form->textField($model,'asmt_num_ops',array('style'=>'width:40px')); ?>
				<?php echo $form->error($model,'asmt_num_ops'); ?>
			</div>
			
        </div>

        
        <div class="rightcolumn">      

			<div class="row">
				<?php echo $form->labelEx($model,'asmt_category'); ?>
				<?php echo ZHtml::enumDropDownList($model,'asmt_category', array('onChange'=>'categoryChange(this);')); ?>
				<?php echo $form->error($model,'asmt_category'); ?>
			</div>
			
            <div class="row">
                <?php echo $form->labelEx($model,'asmt_type'); ?>
                <?php echo CHtml::dropDownList('exoDropDown', 'consecutive exotropia', $model->exotropiaArray(), array('style'=>'width:200px','onChange'=>'typeChange(this.value);')); ?>
                <?php echo CHtml::dropDownList('esoDropDown', 'residual esotropia', $model->esotropiaArray(), array('style'=>'width:200px','onChange'=>'typeChange(this.value);')); ?>
                 <?php echo $form->hiddenField($model,'asmt_type'); ?>
            </div> 
                        
        </div>
    </div>
    
  	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
            <div class="row">
        		<label style="margin-right:235px;">Right eye:</label><br/>
        	</div>
            <div class="eye">
	        	<div class="row">
	        		<label>BCVA Letters</label>
	        		<?php echo $form->textField($model,'asmt_bcva_let_right',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'asmt_bcva_let_right'); ?>
	        	</div>
	        	<div class="row">
	        		<label>BCVA Kay pictures</label>
	        		<?php echo $form->textField($model,'asmt_bcva_kay_right',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'asmt_bcva_kay_right'); ?>
	        	</div>
	        	<div class="row">
	        		<label>Fixation</label>
	        		<?php echo ZHtml::enumDropDownList($model,'asmt_fixation_right', array()); ?>
			        <?php echo $form->error($model,'asmt_fixation_right'); ?>
	        	</div>
            </div>

        </div>
        
        <div class="rightcolumn">     

        	<div class="row">
        		<label style="margin-right:235px;">Left eye:</label><br/>
        	</div>
        	<div class="eye">
	        	<div class="row">
	        		<label>BCVA Letters</label>
	        		<?php echo $form->textField($model,'asmt_bcva_let_left',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'asmt_bcva_let_left'); ?>
	        	</div>
	        	<div class="row">
	        		<label>BCVA Kay pictures</label>
	        		<?php echo $form->textField($model,'asmt_bcva_kay_left',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'asmt_bcva_kay_left'); ?>
	        	</div>
	        	<div class="row">
	        		<label>Fixation</label>
	        		<?php echo ZHtml::enumDropDownList($model,'asmt_fixation_left', array()); ?>
			        <?php echo $form->error($model,'asmt_fixation_left'); ?>
	        	</div>
        	</div>
        	
        </div>
    </div>
    
  	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
        	<div class="row">
				<?php echo $form->labelEx($model,'asmt_cover_near'); ?>
				<?php echo ZHtml::enumDropDownList($model,'asmt_cover_near', array()); ?>
				<?php echo $form->error($model,'asmt_cover_near'); ?>
			</div>

		   	<div class="row">
	            <?php echo $form->labelEx($model,'asmt_angle_near'); ?>
			    <?php echo $form->textField($model,'asmt_angle_near'); ?>
				<?php echo $form->error($model,'asmt_angle_near'); ?>
		   	</div>
		   				
		   	<div class="row">
            	<?php echo $form->labelEx($model,'asmt_cover_dist'); ?>
				<?php echo ZHtml::enumDropDownList($model,'asmt_cover_dist', array()); ?>
				<?php echo $form->error($model,'asmt_cover_dist'); ?>
		   	</div>

		   	<div class="row">
				<?php echo $form->labelEx($model,'asmt_angle_dist'); ?>
			    <?php echo $form->textField($model,'asmt_angle_dist'); ?>
				<?php echo $form->error($model,'asmt_angle_dist'); ?>
		   	</div>
		   			   	
		   	<div class="row">
            	<?php echo $form->labelEx($model,'asmt_pattern'); ?>
				<?php echo ZHtml::enumDropDownList($model,'asmt_pattern', array()); ?>
				<?php echo $form->error($model,'asmt_pattern'); ?>
		   	</div>
		
        </div>
        <div class="rightcolumn">
		
			<!-- Abnormal head posture -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'asmt_ahp_present', array('style'=>'width:170px')); ?>
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
	        
	        <div class="row">        
	        	<!-- Diplopia -->
	            <?php echo $form->labelEx($model,'asmt_diplopia', array('style'=>'width:170px')); ?>
	            <?php echo $form->checkBox($model,'asmt_diplopia', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'asmt_diplopia'); ?>
			</div>
	
			<!-- Stereo acuity -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'asmt_stereo_present', array('style'=>'width:170px')); ?>
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
	
	        <!-- Newcastle section -->
        	<div  class="row" id="newcastleSectionLabel" style="display:none;">   
	        	<label style='width:170px; margin-right:185px;')>Intermittant Exotropia only:</label><br/>
        	</div>
        	
	        <div class="onecolumndivindented" id="newcastleSection" style="display:none;">
	
	        	<div class="row">        
		            <?php echo $form->labelEx($model,'asmt_newcastle_home', array('style'=>'width:90px')); ?>
					<?php echo ZHtml::enumDropDownList($model,'asmt_newcastle_home', array()); ?>
					<?php echo $form->error($model,'asmt_newcastle_home'); ?>
				</div>
	        	
		        <div class="row">        
		            <?php echo $form->labelEx($model,'asmt_newcastle_near', array('style'=>'width:90px')); ?>
					<?php echo ZHtml::enumDropDownList($model,'asmt_newcastle_near', array()); ?>
					<?php echo $form->error($model,'asmt_newcastle_near'); ?>
				</div>
		
		        <div class="row">        
		            <?php echo $form->labelEx($model,'asmt_newcastle_distance', array('style'=>'width:90px')); ?>
					<?php echo ZHtml::enumDropDownList($model,'asmt_newcastle_distance', array()); ?>
					<?php echo $form->error($model,'asmt_newcastle_distance'); ?>
				</div>
	
		        <div class="row">        
		            <?php echo $form->labelEx($model,'asmt_IXTQ', array('style'=>'width:90px')); ?>
				    <?php echo $form->textField($model,'asmt_IXTQ',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'asmt_IXTQ'); ?>
				</div>
						
			</div>
				        
	        <div class="row">        
	        	<!-- Amblyopia -->
	            <?php echo $form->labelEx($model,'asmt_amblyopia', array('style'=>'width:170px')); ?>
				<?php echo ZHtml::enumDropDownList($model,'asmt_amblyopia', array('onChange'=>'amblyopiaChange(this.value);')); ?>
				<?php echo $form->error($model,'asmt_amblyopia'); ?>
			</div>
	
	        <div class="onecolumndivindented" id="amblyopiaSection" style="display:none;">
		        <div class="row">        
		        	<!-- Amblyopia treatment-->
		            <?php echo $form->labelEx($model,'asmt_amblyopia_treatment'); ?>
					<?php echo ZHtml::enumDropDownList($model,'asmt_amblyopia_treatment', array()); ?>
					<?php echo $form->error($model,'asmt_amblyopia_treatment'); ?>
				</div>
	        </div>
	        
			<!-- Prior toxin treatment -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'asmt_prior_toxin', array('style'=>'width:170px')); ?>
	            <?php echo $form->checkBox($model,'asmt_prior_toxin', array('class'=>'checkBox')); ?>
	            <?php echo $form->error($model,'asmt_prior_toxin'); ?>
	        </div>
	        
			<!-- Notes -->        
	        <div class="row">
	            <?php echo $form->labelEx($model,'asmt_notes', array('style'=>'width:50px')); ?>
	            <?php echo $form->textArea($model, 'asmt_notes', array('rows'=>3, 'cols'=>30)); ?>
	            <?php echo $form->error($model,'asmt_notes'); ?>
	        </div>
        </div>
		                
	</div>

	<div class="twocolumndiv">
    	<div class="leftcolumn">
        </div>
        <div class="rightcolumn">
        </div>
    </div>
    
	<h3>Surgical planning:</h3>
	<div class="twocolumndiv">
        <div class="leftcolumn">
        
        	<?php echo CHtml::dropDownList('goalSelect',null, $model->goalArray(), array('onchange'=>'addGoal();')); ?>
			<table name="table" id="goalTable" align="left" cellspacing="0" width="300">
			    <tbody id="tableBody">
			    
	                <?php
	                
	                // Write out existing goals into a table
	                $goals = $model->plan_goals;
	                if (strlen($goals) > 3)
	                {
		                $goalArray = explode("||", $goals);
		                
		                foreach($goalArray as $goal)
		                {
		                	$goal = str_replace('|', '', $goal);
		                	
		                    echo '
		                    <tr>
		                    <td>'.$goal.'</td>
		                    <td><a onclick="deleteGoal(this);">Delete</a></td></tr>';
		                }
	                }
	                ?>
			    </tbody>
			</table>
			</br>
			<?php echo $form->hiddenField($model,'plan_goals'); ?>
			
			<!-- Details -->        
	        <div class="row">
	            <?php echo $form->labelEx($model,'plan_other', array('style'=>'width:50px')); ?>
	            <?php echo $form->textArea($model, 'plan_other', array('rows'=>3, 'cols'=>30)); ?>
	            <?php echo $form->error($model,'plan_other'); ?>
	        </div>
			       	
        </div>
        <div class="rightcolumn">

			<div class="row">
				<?php echo $form->labelEx($model,'plan_target_direction', array('style'=>'width:100px')); ?>
				<?php echo ZHtml::enumDropDownList($model,'plan_target_direction', array()); ?>
				<?php echo $form->error($model,'plan_target_direction'); ?>
			</div>
			
            <div class="row">
                <?php echo $form->labelEx($model,'plan_target_angle', array('style'=>'width:100px')); ?>
                <?php echo $form->textField($model,'plan_target_angle',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'plan_target_angle'); ?>
            </div>

			<div class="row">
				<?php echo $form->labelEx($model,'plan_target_distance', array('style'=>'width:100px')); ?>
				<?php echo ZHtml::enumDropDownList($model,'plan_target_distance', array()); ?>
				<?php echo $form->error($model,'plan_target_distance'); ?>
			</div>
			
        </div>
    </div>

    <h3>Operation:</h3>
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
							<?php echo ZHtml::enumDropDownList($model,'op_rio_surgery', array('style'=>'width:150px')); ?>
						</td>
						<td>
							 <?php echo $form->textField($model,'op_rio_amount',array('style'=>'width:30px')); ?>
						</td>
						<td>
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
							<?php echo ZHtml::enumDropDownList($model,'op_lio_surgery', array('style'=>'width:150px')); ?>
						</td>
						<td>
							 <?php echo $form->textField($model,'op_lio_amount',array('style'=>'width:30px')); ?>
						</td>
						<td>
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
        
        <div class="row" style="text-align:right; width: 170px;">        
            <?php echo $form->labelEx($model,'op_comp_none'); ?>
            <?php echo $form->checkBox($model,'op_comp_none', array('class'=>'checkBox', 'onChange'=>'compChange(this, "opCompSection");')); ?>
			<?php echo $form->error($model,'op_comp_none'); ?>
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

    <h3>Early post-operative assessment:</h3>
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
    
    <div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
            <div class="row">
        		<label style="margin-right:235px;">Right eye:</label><br/>
        	</div>
            <div class="eye">
	        	<div class="row">
	        		<label>BCVA Letters</label>
	        		<?php echo $form->textField($model,'early_bcva_let_right',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'early_bcva_let_right'); ?>
	        	</div>
	        	<div class="row">
	        		<label>BCVA Kay pictures</label>
	        		<?php echo $form->textField($model,'early_bcva_kay_right',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'early_bcva_kay_right'); ?>
	        	</div>
	        	<div class="row">
	        		<label>Fixation</label>
	        		<?php echo ZHtml::enumDropDownList($model,'early_fixation_right', array()); ?>
			        <?php echo $form->error($model,'early_fixation_right'); ?>
	        	</div>
            </div>

        </div>
        
        <div class="rightcolumn">     

        	<div class="row">
        		<label style="margin-right:235px;">Left eye:</label><br/>
        	</div>
        	<div class="eye">
	        	<div class="row">
	        		<label>BCVA Letters</label>
	        		<?php echo $form->textField($model,'early_bcva_let_left',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'early_bcva_let_left'); ?>
	        	</div>
	        	<div class="row">
	        		<label>BCVA Kay pictures</label>
	        		<?php echo $form->textField($model,'early_bcva_kay_left',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'early_bcva_kay_left'); ?>
	        	</div>
	        	<div class="row">
	        		<label>Fixation</label>
	        		<?php echo ZHtml::enumDropDownList($model,'early_fixation_left', array()); ?>
			        <?php echo $form->error($model,'early_fixation_left'); ?>
	        	</div>
        	</div>
        	
        </div>
    </div>
    
  	<div class="twocolumndiv">
        <div class="leftcolumn">
        
	        <div class="row">        
	        	<!-- Cover test near -->
	            <?php echo $form->labelEx($model,'early_cover_near'); ?>
				<?php echo ZHtml::enumDropDownList($model,'early_cover_near', array()); ?>
				<?php echo $form->error($model,'early_cover_near'); ?>
			</div>       

	        <div class="row">        
	        	<!-- Near angle -->
	            <?php echo $form->labelEx($model,'early_angle_near'); ?>
			    <?php echo $form->textField($model,'early_angle_near'); ?>
				<?php echo $form->error($model,'early_angle_near'); ?>
			</div>
			
	        <div class="row">        
	        	<!-- Cover test distance -->
	            <?php echo $form->labelEx($model,'early_cover_dist'); ?>
				<?php echo ZHtml::enumDropDownList($model,'early_cover_dist', array()); ?>
				<?php echo $form->error($model,'early_cover_dist'); ?>
			</div>
			
	        <div class="row">        
	        	<!-- Distance angle -->
	            <?php echo $form->labelEx($model,'early_angle_dist'); ?>
			    <?php echo $form->textField($model,'early_angle_dist'); ?>
				<?php echo $form->error($model,'early_angle_dist'); ?>
			</div>
		
        </div>
        
        <div class="rightcolumn">
        </div>
    </div>
             

    <h3>Late post-operative assessment:</h3>
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
        	<!-- Notes -->        
	        <div class="row">
	            <?php echo $form->labelEx($model,'late_notes', array('style'=>'width:50px')); ?>
	            <?php echo $form->textArea($model, 'late_notes', array('rows'=>3, 'cols'=>30, 'style'=>'position:absolute;')); ?>
	            <?php echo $form->error($model,'late_notes'); ?>
	        </div>
        </div>
    </div> 
    <div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
            <div class="row">
        		<label style="margin-right:235px;">Right eye:</label><br/>
        	</div>
            <div class="eye">
	        	<div class="row">
	        		<label>BCVA Letters</label>
	        		<?php echo $form->textField($model,'late_bcva_let_right',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'late_bcva_let_right'); ?>
	        	</div>
	        	<div class="row">
	        		<label>BCVA Kay pictures</label>
	        		<?php echo $form->textField($model,'late_bcva_kay_right',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'late_bcva_kay_right'); ?>
	        	</div>
	        	<div class="row">
	        		<label>Fixation</label>
	        		<?php echo ZHtml::enumDropDownList($model,'late_fixation_right', array()); ?>
			        <?php echo $form->error($model,'late_fixation_right'); ?>
	        	</div>
            </div>

        </div>
        
        <div class="rightcolumn">     

        	<div class="row">
        		<label style="margin-right:235px;">Left eye:</label><br/>
        	</div>
        	<div class="eye">
	        	<div class="row">
	        		<label>BCVA Letters</label>
	        		<?php echo $form->textField($model,'late_bcva_let_left',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'late_bcva_let_left'); ?>
	        	</div>
	        	<div class="row">
	        		<label>BCVA Kay pictures</label>
	        		<?php echo $form->textField($model,'late_bcva_kay_left',array('style'=>'width:40px')); ?>
			        <?php echo $form->error($model,'late_bcva_kay_left'); ?>
	        	</div>
	        	<div class="row">
	        		<label>Fixation</label>
	        		<?php echo ZHtml::enumDropDownList($model,'late_fixation_left', array()); ?>
			        <?php echo $form->error($model,'late_fixation_left'); ?>
	        	</div>
        	</div>
        	
        </div>
    </div>

  	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
	        <div class="row">        
	        	<!-- Cover test near -->
	            <?php echo $form->labelEx($model,'late_cover_near'); ?>
				<?php echo ZHtml::enumDropDownList($model,'late_cover_near', array()); ?>
				<?php echo $form->error($model,'late_cover_near'); ?>
			</div>       

	        <div class="row">        
	        	<!-- Near angle -->
	            <?php echo $form->labelEx($model,'late_angle_near'); ?>
			    <?php echo $form->textField($model,'late_angle_near'); ?>
				<?php echo $form->error($model,'late_angle_near'); ?>
			</div>
			
	        <div class="row">        
	        	<!-- Cover test distance -->
	            <?php echo $form->labelEx($model,'late_cover_dist'); ?>
				<?php echo ZHtml::enumDropDownList($model,'late_cover_dist', array()); ?>
				<?php echo $form->error($model,'late_cover_dist'); ?>
			</div>
			
	        <div class="row">        
	        	<!-- Distance angle -->
	            <?php echo $form->labelEx($model,'late_angle_dist'); ?>
			    <?php echo $form->textField($model,'late_angle_dist'); ?>
				<?php echo $form->error($model,'late_angle_dist'); ?>
			</div>
			
	        <div class="row">        
	        	<!-- Pattern -->
	            <?php echo $form->labelEx($model,'late_pattern'); ?>
				<?php echo ZHtml::enumDropDownList($model,'late_pattern', array()); ?>
				<?php echo $form->error($model,'late_pattern'); ?>
			</div>
		
        </div>
        
        <div class="rightcolumn">
        
			<!-- Abnormal head posture -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'late_ahp_present', array('style'=>'width:170px')); ?>
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
	        
	        <div class="row">        
	        	<!-- Diplopia -->
	            <?php echo $form->labelEx($model,'late_diplopia', array('style'=>'width:170px')); ?>
	            <?php echo $form->checkBox($model,'late_diplopia', array('class'=>'checkBox')); ?>
				<?php echo $form->error($model,'late_diplopia'); ?>
			</div>
					
			<!-- Stereo acuity -->
		   	<div class="row">
	            <?php echo $form->labelEx($model,'late_stereo_present', array('style'=>'width:170px')); ?>
	            <?php echo $form->checkBox($model,'late_stereo_present', array('class'=>'checkBox', 'onChange'=>'stereoChange(this, "lateStereoSection");')); ?>
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
	        
	        <!-- Late Newcastle section -->
        	<div class="row" id="lateNewcastleSectionLabel" style="display:none;">   
	        	<label style='width:170px; margin-right:185px;'>Intermittant Exotropia only:</label><br/>
        	</div>
        	
	        <div class="onecolumndivindented" id="lateNewcastleSection" style="display:none;">	   
	
	        	<div class="row">        
		            <?php echo $form->labelEx($model,'late_newcastle_home', array('style'=>'width:90px')); ?>
					<?php echo ZHtml::enumDropDownList($model,'late_newcastle_home', array()); ?>
					<?php echo $form->error($model,'late_newcastle_home'); ?>
				</div>
	        	
		        <div class="row">        
		            <?php echo $form->labelEx($model,'late_newcastle_near', array('style'=>'width:90px')); ?>
					<?php echo ZHtml::enumDropDownList($model,'late_newcastle_near', array()); ?>
					<?php echo $form->error($model,'late_newcastle_near'); ?>
				</div>
		
		        <div class="row">        
		            <?php echo $form->labelEx($model,'late_newcastle_distance', array('style'=>'width:90px')); ?>
					<?php echo ZHtml::enumDropDownList($model,'late_newcastle_distance', array()); ?>
					<?php echo $form->error($model,'late_newcastle_distance'); ?>
				</div>
	
		        <div class="row">        
		            <?php echo $form->labelEx($model,'late_IXTQ', array('style'=>'width:90px')); ?>
				    <?php echo $form->textField($model,'late_IXTQ',array('style'=>'width:40px')); ?>
					<?php echo $form->error($model,'late_IXTQ'); ?>
				</div>
						
			</div>
		
	        <div class="row">        
	        	<!-- Amblyopia -->
	            <?php echo $form->labelEx($model,'late_amblyopia'); ?>
				<?php echo ZHtml::enumDropDownList($model,'late_amblyopia', array()); ?>
				<?php echo $form->error($model,'late_amblyopia'); ?>
			</div>
        </div>
    </div>

	<div class="twocolumndiv" style="border-bottom: none;">
        <div class="leftcolumn">
        
	        <div class="row" style="text-align:right; width: 170px;">        
	        	<!-- Complications -->
	            <?php echo $form->labelEx($model,'late_comp_none'); ?>
	            <?php echo $form->checkBox($model,'late_comp_none', array('class'=>'checkBox', 'onChange'=>'compChange(this, "lateCompSection");')); ?>
				<?php echo $form->error($model,'late_comp_none'); ?>
			</div>
		
	        <div id="lateCompSection" style="display:block; text-align:right; width: 240px;">
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
        
	<div class="twocolumndiv">
        <div class="leftcolumn">
    	</div>
        <div class="rightcolumn">
        </div>
    </div>  
           
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<!-- Calls javascript to initialise page -->
<?php
    Yii::app()->clientScript->registerScript('initScript',"formInit();",CClientScript::POS_LOAD);
?>