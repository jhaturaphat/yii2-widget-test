<?php
use yii\bootstrap4\Modal;
use yii\helpers\Html;


Modal::begin([
    'id' => 'my-modal',
    'title' => 'Hello world',
    'toggleButton' => ['label' => 'แสดง Modal', 'class' => 'btn btn-primary'],
    'clientOptions' => ['show' => true],
    'size'=>'modal-lg',
]);

echo 'Say hello...';

Modal::end();


$this->registerCss(" 
  .modal {
    padding: 0 !important; // override inline padding-right added from js
  }
  .modal .modal-dialog {
    width: 100%;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal .modal-body {
    overflow-y: auto;
  } ");