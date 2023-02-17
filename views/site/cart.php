<?php

/**
 * @var $models \app\models\Cart[]
 * @var $model \app\models\Cart
 */
?>
    <table class="table table-bordered">
        <tr>
            <td>Количество</td>
            <td>Количество</td>
        </tr>
        <?php foreach ($models as $model): ?>
            <tr>
                <td><?= $model->product->name ?></td>
                <td><?= $model->count ?></td>
            </tr>


        <?php endforeach; ?>
    </table>

<?= \yii\helpers\Html::a("Оформить", null, ["class" => "btn btn-outline-primary"]) ?>