<?php
$this->breadcrumbs=array(
        'Datasets'=>array('index'),
        'View',
);

$this->menu=array(
        array('label'=>'Update Dataset', 'url'=>array('dataset/update/'.$model->id)),
        array('label'=>'Manage Datasets', 'url'=>array('admin')),
);
?>

<h1>Operation Note</h1>

<h5>Patient:</h5>
<div class="twocolumndiv">
    <div class="leftcolumn" style="height:150px;">
        <img src="<?= Yii::app()->request->baseUrl; ?>/graphics/label.gif" width="260" height="140"/>
    </div>
    <div class="rightcolumn">
        <table class="opnoteTable">
            <tbody>
                <tr>
                    <td colspan="2"><button onclick="window.print();">Print</button></td>
                </tr>
                <tr>
                    <td width="20%"><?= CHtml::activeLabel($model, 'uuid'); ?></td>
                    <td width="80%"><?= $model->uuid ?></td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, 'pt_age'); ?></td>
                    <td><?php echo $model->pt_age ?></td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, 'pt_sex'); ?></td>
                    <td><?php echo $model->pt_sex ?></td>
                </tr>
            </tbody>
        </table>    
    </div>
</div>

<h5>Surgical planning:</h5>
<div class="onecolumndiv">

    <table class="opnoteTable">
        <tbody>
            <tr>
                <td width="20%"><?php echo CHtml::activeLabel($model, 'plan_goals'); ?></td>
                <td width="80%">
                    <?php if ($goals = $model->getGoals()) {
                        foreach ($goals as $i => $g) {
                            if ($i != 0)
                                echo ",";
                            ?>
                            <span><?= $g; ?></span>
                        <?php }
                    } ?>
                </td>
            </tr>
            <tr>
                <td width="20%"><?php echo CHtml::activeLabel($model, 'plan_other'); ?></td>
                <td width="80%"><?php echo $model->plan_other; ?></td>
            </tr>
            <tr>
                <td><?php echo CHtml::activeLabel($model, 'plan_hor_target_direction'); ?></td>
                <td><?php echo $model->plan_hor_target_direction; ?></td>
            </tr>
            <tr>
                <td><?php echo CHtml::activeLabel($model, 'plan_hor_target_angle'); ?></td>
                <td><?php echo $model->plan_hor_target_angle; ?></td>
            </tr>
            <tr>
                <td><?php echo CHtml::activeLabel($model, 'plan_distance'); ?></td>
                <td><?php echo $model->plan_distance; ?></td>
            </tr>
        </tbody>
    </table>
    
</div>

<h5>Operation:</h5>
<div class="twocolumndiv">
    <div class="leftcolumn">
        <table class="opnoteTable">
            <tbody>
                <tr>
                    <td width="40%"><?php echo CHtml::activeLabel($model, 'op_date'); ?></td>
                    <td width="60%"><?php if (!is_null($model->op_date)) echo Yii::app()->dateFormatter->formatDateTime($model->op_date, 'medium', null) ; ?></td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, 'op_measurement_point'); ?></td>
                    <td><?php echo $model->op_measurement_point; ?></td>
                </tr>
            </tbody>
        </table>    
    </div>
    <div class="rightcolumn">
        <table class="opnoteTable">
            <tbody>
                <tr>
                    <td width="40%"><?php echo CHtml::activeLabel($model, 'op_surgeon_grade'); ?></td>
                    <td width="60%"><?php echo $model->op_surgeon_grade; ?></td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, 'op_assistant_grade'); ?></td>
                    <td><?php echo $model->op_assistant_grade; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<h5>Muscles:</h5>
<div class="twocolumndiv">
    <div class="leftcolumn">
        <table class="muscles" cellspacing="0">
            <thead>
                <th width="5%">Muscle</th>
                <th width="70%">Surgery</th>
                <th width="10%">Amount</th>
                <th width="15%">Trans</th>
            </thead>
            <tbody>
                <?php
                    $showDiagram = false;
                    $muscleCodes = array('rmr','rir','rlr','rsr','rio','rso');
                    foreach ($muscleCodes as $muscle)
                    {
                        // Only print out results if muscles have been moved
                        $amount = "op_".$muscle."_amount";
                        if ($model->$amount != 0)
                        {
                            $showDiagram = true;
                            echo ' <tr> ';
                            echo ' <td>'.strtoupper($muscle).'</td> ';
                                             
                            $prop = "op_".$muscle."_surgery";
                            echo ' <td>'.$model->$prop.'</td> ';
                            echo ' <td>'.$model->$amount.'</td> ';
                                        
                            if ($muscle == 'rmr' || $muscle == 'rlr')
                            {
                                $prop = "op_".$muscle."_transposition";
                                echo ' <td>'.$model->$prop.'</td> ';
                            }
                            echo ' </tr> ';
                        }
                    }
                ?>
            </tbody>
        </table>
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
                <?php
                    $showDiagram = false;
                    $muscleCodes = array('lmr','lir','llr','lsr','lio','lso');
                    foreach ($muscleCodes as $muscle)
                    {
                        // Only print out results if muscles have been moved
                        $amount = "op_".$muscle."_amount";
                        if ($model->$amount != 0)
                        {
		            $showDiagram = true;
                            echo ' <tr> ';
                            echo ' <td>'.strtoupper($muscle).'</td> ';
                            $prop = "op_".$muscle."_surgery";
                            echo ' <td>'.$model->$prop.'</td> ';
                            echo ' <td>'.$model->$amount.'</td> ';
                            if ($muscle == 'lmr' || $muscle == 'llr')
                            {
                                $prop = "op_".$muscle."_transposition";
                                echo ' <td>'.$model->$prop.'</td> ';
                            }
                            echo ' </tr> ';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="twocolumndiv">
    <div class="leftcolumn">
        <h5>Complications:</h5>
        <?php
            if ($comps = $model->getComplications()) {
                foreach ($comps as $i => $c) {
                    if ($i != 0)
                        echo ",";
                    ?>
                    <span><?= $c; ?></span>
                <?php }
            }
        ?>
    </div>
    <div class="rightcolumn">
        <h5>Comments:</h5>
        <?= $model->op_comments.'<br/>'; ?>
    </div>
</div>
