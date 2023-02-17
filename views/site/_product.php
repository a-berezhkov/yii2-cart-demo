<h2><?= $model->name ?></h2>

<p><?= $model->desc ?></p>

<a class="btn btn-outline-secondary" href="#"><?= $model->price ?> Р</a>

<? $count = $model->getCount($model->id) ?>

<?= \yii\helpers\Html::a($count? $count :"Купить" , ["/site/buy", "id" => $model->id], ["class" => "btn btn-outline-primary"]) ?>

