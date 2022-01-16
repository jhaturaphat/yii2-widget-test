<?php      
use yii\widgets\Pjax;



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

    Pjax::begin();
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
    Pjax::end();