<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchTeacher */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teacher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'teacher_id',
            'name:ntext',
            'birthday:ntext',
            //'sex:ntext',
            //'religion:ntext',
            //'blood_group:ntext',
            //'address:ntext',
            //'phone:ntext',
            //'email:ntext',
            'created_at',
            'updated_at',
            [
                'label' => "Gender",
                'value' => function($dataProvider){
                    if($dataProvider->sex == 0){
                        return "Male";
                    }if($dataProvider->sex == 1){
                        return "Female";
                    }
                    else {
                        return "Unspecified";
                    }
                }
            ],
            [
                'label' => "Religion",
                'value' => function($dataProvider){
                    if($dataProvider->religion == 0){
                        return "Hindu";
                    }if($dataProvider->religion == 1){
                        return "Muslim";
                    }
                    if($dataProvider->religion == 2){
                        return "Christian";
                    }
                    else {
                        return "Sikh";
                    }
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
