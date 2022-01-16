<?php
use kartik\widgets\DateTimePicker;
 
echo '<label class="control-label">Event Time</label>';

echo DateTimePicker::widget([
    'name' => 'dp_2',
    'type' => DateTimePicker::TYPE_COMPONENT_APPEND,
    'value' => '23-Feb-1982 10:01',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd-M-yyyy hh:ii'
    ]
]);