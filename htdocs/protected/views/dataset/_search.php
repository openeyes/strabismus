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
		<?php echo $form->label($model,'asmt_category'); ?>
		<?php echo $form->textField($model,'asmt_category',array('size'=>60,'maxlength'=>108)); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->