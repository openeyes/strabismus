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

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_esotropia_type')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_esotropia_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_category')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_category); ?>
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

	*/ ?>

</div>