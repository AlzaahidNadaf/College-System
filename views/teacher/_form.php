<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    
    <div class="col-md-6">
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'birthday')->widget(\yii\jui\DatePicker::className(), [
    // if you are using bootstrap, the following line will set the correct style of the input field
    'options' => ['class' => 'form-control'],
    // ... you can configure more DatePicker properties here
])->label("DOB")?>
    <?= $form->field($model, 'sex')->dropDownList([0 => 'Male',1 =>'Female',2 => 'Unspecified'])->label("Gender") ?>
    <?= $form->field($model, 'religion')->dropDownList([0 => 'Hindu',1 =>'Muslim',2 => 'Christian',3 => 'Sikh'])->label("Religion") ?>
  
    
    </div>
    <div class="col-md-6">

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'blood_group')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>


    
    </div>

    </div>

   

  

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
