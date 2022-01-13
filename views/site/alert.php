<?php

use kartik\widgets\Alert;
    
                echo Alert::widget([
                    'type' => Alert::TYPE_INFO,
                    'title' => 'Note',
                    'titleOptions' => ['icon' => 'info-sign'],
                    'body' => 'This is an informative alert'
                ]); 