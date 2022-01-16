<?php
use yii\bootstrap4\Modal;
use yii\helpers\Html;


Modal::begin([
    'id' => 'my-modal',
    // 'title' => 'Hello world',
    'toggleButton' => ['label' => 'แสดง Modal Full Screen', 'class' => 'btn btn-primary'],
    'clientOptions' => ['show' => true],
    'size'=>'modal-lg',
]);

echo 'Say hello...';

Modal::end();


Modal::begin([    
    'title' => 'Hello world',
    'toggleButton' => ['label' => 'แสดง Modal Normal', 'class' => 'btn btn-primary'],
    'clientOptions' => ['show' => true],
    'size'=>'modal-lg',
]);

echo 'Say hello...';

Modal::end();


$this->registerCss(" 
  #my-modal {
    padding: 0 !important; // override inline padding-right added from js
  }
  #my-modal .modal-dialog {
    width: 100% !important;
    max-width: none !important;
    height: 100% !important;
    margin: 0 !important;
  }
  #my-modal .modal-content {
    height: 100% !important;
    border: 0 !important;
    border-radius: 0 !important;
  }
  #my-modal .modal-body {
    overflow-y: auto !important;
  }
  #my-modal .modal-header{
    border-bottom: none !important;
  }");