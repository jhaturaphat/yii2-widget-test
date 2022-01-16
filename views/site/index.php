<?php

use kartik\widgets\SideNav;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">    

    <div class="body-content">
    <!-- row 1 -->
        <div class="row">
            <div class="col-md-3">
            <?= $this->render('@app/views/site/star-rating')  ?>
            </div>
            <div class="col-md-3">
            <?= $this->render('@app/views/site/switch-input')  ?>
            </div>
            <div class="col-md-3">
            <?= kartik\widgets\Spinner::widget(['preset' => 'large', 'align' => 'left']); ?>
            </div>
            <div class="col-md-3">
            <?= $this->render('@app/views/site/alert')  ?>
            </div>
        </div>

        <?= $this->render('@app/views/site/alert-growl')  ?>

        <!-- row2 -->
        <div class="row">            
            <div class="col-md-3">
                <?php
                    use kartik\color\ColorInput;
                    echo ColorInput::widget([
                        'name' => 'color', 
                        'options' => ['placeholder' => 'Select color...']
                    ]);
                ?>
            </div>
            <div class="col-md-3">
                <?php
                use kartik\widgets\AlertBlock;
 
                echo AlertBlock::widget([
                    'type' => AlertBlock::TYPE_ALERT,
                    'useSessionFlash' => true
                ]);
                ?>
            </div>
            <div class="col-md-3">
                <?= $this->render('@app/views/site/select2') ?>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <!-- row3  -->
        <div class="row">
        <div class="col-md-4"><?= $this->render('@app/views/site/fileinput') ?></div>
        <div class="col-md-4"><?= $this->render('@app/views/site/modal') ?></div>
        <div class="col-md-4"><?= $this->render('@app/views/site/date-time-picker') ?></div>
        </div>


    </div>
</div>