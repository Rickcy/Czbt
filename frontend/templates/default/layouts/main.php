<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="<?= AppAsset::getAssetUrl('favicon.ico'); ?>"  type="image/x-icon" />
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

            <?= $this->render('@app/views/header'); ?>
    <main>
                <?= $content; ?>
    </main>
            <?= $this->render('@app/views/footer'); ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>