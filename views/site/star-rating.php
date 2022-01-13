<?php
use kartik\widgets\StarRating;

    echo StarRating::widget([
        'name' => 'rating',
        'pluginOptions' => ['size' => 'lg']
    ]);
?>