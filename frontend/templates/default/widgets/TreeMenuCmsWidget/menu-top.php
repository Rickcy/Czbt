<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $trees  \skeeks\cms\models\Tree[] */
?>


<div class="header-bottom-wrapper">
    <nav class="main-menu">
        <a href="javascript:void(0);" class="gamb"></a>
        <ul>
            <li class="<?= \Yii::$app->request->absoluteUrl == \yii\helpers\Url::home(true) ? 'active' : ''; ?>">
                <a href="<?= \yii\helpers\Url::home(); ?>">Главная</a>
            </li>
            <?php if ($trees = $widget->activeQuery->all()) : ?>
                <? foreach ($trees as $tree) : ?>
                    <?= $this->render("_one", [
                        "widget"        => $widget,
                        "model"         => $tree,
                    ]); ?>
                <? endforeach; ?>
            <? endif; ?>
        </ul>
    </nav>
</div>

