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
<div class="news">
    <div class="container">
        <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
            'namespace' => 'ContentElementsCmsWidget-answer',
            'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/answer',
        ]); ?>
    </div>
</div>
