<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $model   \skeeks\cms\models\Tree */
$hasChildrens = $model->children;
$hasChildrensContents = count($model->cmsContentElements) > 0;
$activeClass = '';
if (strpos(\Yii::$app->request->pathInfo, $model->dir) !== false)
{
    $activeClass = ' active';
}
?>
<?php if (in_array($model->dir,['sfera-uslug','about','dokumentaciya'])):?>
    <? if ($hasChildrens) : ?>
        <li class="<?= $activeClass; ?>">
            <a href="<?= $model->url; ?>" title="<?= $model->name; ?>"><?= $model->name; ?></a>
        </li>



        <? foreach($model->getChildren()
                       ->andWhere(['active' => $widget->active])
                       ->orderBy([$widget->orderBy => $widget->order])
                       ->all() as $childTree) : ?>
            <li class="<?= $activeClass; ?>">
                    <a href="<?= $childTree->url; ?>" title="<?= $childTree->name; ?>"><?= $childTree->name; ?></a>

            </li>
        <? endforeach; ?>


    <? else: ?>

            <li class="<?= $activeClass; ?>">
                <a href="<?= $model->url; ?>" title="<?= $model->name; ?>"><?= $model->name; ?></a>
            </li>


    <? endif; ?>

<?php endif;?>