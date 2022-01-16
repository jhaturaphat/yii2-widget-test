<?php
use yii\widgets\Pjax;

Pjax::begin();

    echo kartik\widgets\FileInput::widget([
        'name' => 'attachments',                     
        'options' => [
            'multiple' => true,                        
        ], 
        'pluginOptions' => [
            'previewFileType' => 'any',
            
            ]
    ]);

Pjax::end();
?>