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
$hasParent = $model->parentContentElement ? $model->parentContentElement->id : false;

$activeClass = '';
if (strpos(\Yii::$app->request->pathInfo, $model->code) !== false)
{
    $activeClass = ' active';
}
?>
<?php if(!$model->parent_content_element_id):?>
<li class="<?= $activeClass; ?>">

    <? if ($hasChildrens) : ?>
        <a  title="<?= $model->name; ?>" class="has-children">
            <?= $model->name; ?>
        </a>

        <ul class="childrens
        <?php
        foreach ($model->childrenContentElements as $element){
            if(strpos(\Yii::$app->request->pathInfo, $element->code) !== false){
                echo 'active';
            }
        }
        ?>">
            <? foreach($model->getChildrenContentElements()
                           ->andWhere(['active' => $widget->active])
                           ->orderBy([$widget->orderBy => SORT_DESC])
                           ->all() as $childTree) : ?>
                <li class="children <?=strpos(\Yii::$app->request->pathInfo, $childTree->code) == false ?: 'active' ?>">
                    <a href="<?= $childTree->url; ?>" title="<?= $childTree->name; ?>"><?= $childTree->name; ?></a>
                </li>
            <? endforeach; ?>
        </ul>
    <? else: ?>
        <a href="<?= $model->url; ?>" title="<?= $model->name; ?>"><?= $model->name; ?></a>
    <? endif; ?>
</li>
<?php endif;?>