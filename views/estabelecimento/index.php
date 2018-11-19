<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EstabelecimentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estabelecimentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estabelecimento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Estabelecimento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'cnpj',
            'latitude',
            'longitude',
            'endereco',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
