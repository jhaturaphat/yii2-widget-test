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