<?php

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 01.10.2015
 */
/* @var $this \yii\web\View */
/* @var \skeeks\cms\models\Tree $model */

?>

<div class="news content-cols__content content-cols__content-contacts">
    <h1><?= $model->name; ?></h1>
    <div class="container">
        <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
            'namespace' => 'ContentElementsCmsWidget-answer',
            'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/answer',
        ]); ?>
    </div>
</div>
<div class="feedback">
    <div class="container">
        <div class="h__center">Задайте свой вопрос</div>
    <?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
        'form_code' => 'feedback',
         'viewFile' 	=> '@app/views/widgets/FormCmsWidget/feedback',
    ]); ?>
    </div>
</div>
