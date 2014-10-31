<?php
use yii\helpers\Html;
//use yii\widgets\LinkPager;
?>
<h1>User</h1>
<ul>
<?php foreach ($alluser as $v): ?>
    <li>
        <?=Html::encode("{$v->user_name} ({$v->user_password})") ?>:
        <?=$country->id?>
    </li>
<?php endforeach; ?>
</ul>

<?php //LinkPager::widget(['pagination' => $pagination]) ?>