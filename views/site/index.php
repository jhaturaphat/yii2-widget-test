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
                <?php
            echo kartik\widgets\StarRating::widget([
                'name' => 'rating',
                'pluginOptions' => ['size' => 'lg']
            ]);
        ?>
            </div>
            <div class="col-md-3">
                <?php
        echo kartik\widgets\SwitchInput::widget([
            'name' => 'activation_status',
            'pluginOptions' => ['size' => 'large']
        ]);
        ?>
            </div>
            <div class="col-md-3">
                <?php
                    
                    echo kartik\widgets\Spinner::widget(['preset' => 'large', 'align' => 'left']);
            ?>
            </div>
            <div class="col-md-3">
            <?php               
                use kartik\widgets\Alert;
    
                echo Alert::widget([
                    'type' => Alert::TYPE_INFO,
                    'title' => 'Note',
                    'titleOptions' => ['icon' => 'info-sign'],
                    'body' => 'This is an informative alert'
                ]);       
            ?>
            </div>
        </div>

        <?php
            use kartik\widgets\Growl;

            echo Growl::widget([
                'type' => Growl::TYPE_SUCCESS,
                'icon' => 'fas fa-check-circle',
                'title' => 'Note',
                'showSeparator' => true,
                'body' => 'This is a successful growling alert.'
            ]);
        ?>

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
                <?php                
                $data = [
                    "red" => "red",
                    "green" => "green",
                    "blue" => "blue",
                    "orange" => "orange",
                    "white" => "white",
                    "black" => "black",
                    "purple" => "purple",
                    "cyan" => "cyan",
                    "teal" => "teal"
                ];
                    echo '<label class="control-label">Tag Multiple</label>';
                    echo kartik\select2\Select2::widget([
                        'name' => 'color_2',
                        'value' => ['red', 'green'], // initial value
                        'data' => $data,
                        'maintainOrder' => true,
                        'theme' => kartik\select2\Select2::THEME_MATERIAL,
                        'options' => ['placeholder' => 'Select a color ...', 'multiple' => true],
                        'pluginOptions' => [
                            'tags' => true,
                            'maximumInputLength' => 10
                        ],
                    ]);
                ?>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <!-- row3  -->
        <div class="row">
        <?php
                echo kartik\widgets\FileInput::widget([
                    'name' => 'attachments',                     
                    'options' => [
                        'multiple' => true,                        
                    ], 
                    'pluginOptions' => [
                        'previewFileType' => 'any',
                        
                        ]
                ]);
                ?>
        </div>


    </div>
</div>