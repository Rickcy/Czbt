<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 01.10.2015
 */
/* @var $this \yii\web\View */
/* @var \skeeks\cms\models\Tree $model */

?>
<div class="container">
    <section class="content-cols">
        <aside class="content-cols__menu">
        <?= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
            'namespace'      => 'menu-left',
            'viewFile'       => '@app/views/widgets/TreeMenuCmsWidget/left-menu-services.php',
                'tree_type_ids'          => [$model->id],
            'level'          => '1',
            'order'          => SORT_DESC,
            'with'          => ['cmsContentElements'],
            'enabledRunCache'=> \skeeks\cms\components\Cms::BOOL_N,
        ]); ?>
        </aside>
        <section class="content-cols__content">
            <h1><?= $model->name; ?></h1>
            <?= $model->description_full; ?>
        </section>
    </section>
</div>

