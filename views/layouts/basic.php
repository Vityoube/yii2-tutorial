

<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <div class="container">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><?= Html::a('Home','../web/') ?></li>
                    <li role="presentation"><?=Html::a('Articles',['post/index']) ?></li>
                    <li role="presentation"><?=Html::a('Article',['post/show']) ?></li>
                </ul>
                <?= $content  ?>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>