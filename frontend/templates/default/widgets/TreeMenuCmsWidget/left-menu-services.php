<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $models  \skeeks\cms\models\Tree[] */
/* @var $model  \skeeks\cms\models\Tree */


?>

<nav>

    <? if ($models = $widget->activeQuery->all()) : ?>
        <ul >
            <? foreach ($models as $model) : ?>
                <?php foreach ($model->getCmsContentElements()->orderBy(['priority'=> SORT_ASC])->all() as $element):?>

                <?= $this->render("_one-left-services", [
                    "widget"        => $widget,
                    "model"         => $element,
                ]); ?>
                <?php endforeach; ?>
            <? endforeach; ?>
        </ul>
    <? endif; ?>
</nav>
