<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
/* @var \skeeks\cms\models\CmsContentElement $model */
?>

<div class="container">
    <section class="content-cols">
        <aside class="content-cols__menu">
            <?= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
                'namespace'      => 'menu-left',
                'viewFile'       => '@app/views/widgets/TreeMenuCmsWidget/left-menu-services.php',
                'tree_type_ids'          => [$model->tree_id],
                'level'          => '1',
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