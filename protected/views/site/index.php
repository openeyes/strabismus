<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to the RCOphth strabismus data collection system</h1>

<p>This is an online web application for the collection, review, and analysis of anonymised strabismus data</p>

<h3>Instructions</h3>
<p>Login to add or review datasets</p>
<p>'Create Dataset' brings up a form to submit a new dataset. This action generates a unique number (UUID) which can be saved in the notes (by printing the form) to allow you to identify the patient when entering additional data on a subsequent occasion.</p>
<p>'Manage Datasets' displays a searchable table of your previously entered datasets. This allows you to review and augment data on previous sets.<br />Clicking the <img style="margin-left:5px;margin-right:5px;" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/view.png"/>icon will display an operation note which can be printed and stored in the notes.<br />Clicking the <img style="margin-left:5px;margin-right:5px;" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/update.png"/>icon will display the entire dataset and allow editing.</p>