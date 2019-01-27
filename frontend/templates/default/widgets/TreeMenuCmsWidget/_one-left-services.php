<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $model   \skeeks\cms\models\CmsContentElement */
$hasChildrens = count($model->childrenContentElements) > 0;
$activeClass = '';
if (strpos(\Yii::$app->request->pathInfo, $model->code) !== false)
{
    $activeClass = ' active';
}
?>

<li class="<?= $activeClass; ?>">
    <? if ($hasChildrens) : ?>
        <a href="<?= $model->url; ?>" title="<?= $model->name; ?>" class="dropdown-toggle">
            <?= $model->name; ?>
        </a>

        <ul>
            <? foreach($model->getChildrenContentElements()
                           ->andWhere(['active' => $widget->active])
                           ->orderBy([$widget->orderBy => $widget->order])
                           ->all() as $childTree) : ?>
                <li class="children<?= strpos(\Yii::$app->request->pathInfo, $childTree->dir) !== false ? "active" : ""?>">
                    <a href="<?= $childTree->url; ?>" title="<?= $childTree->name; ?>"><?= $childTree->name; ?></a>
                </li>
            <? endforeach; ?>
        </ul>
    <? else: ?>
        <a href="<?= $model->url; ?>" title="<?= $model->name; ?>"><?= $model->name; ?></a>
    <? endif; ?>
</li>