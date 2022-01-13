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