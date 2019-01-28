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
                'viewFile'       => '@app/views/widgets/TreeMenuCmsWidget/left-menu.php',
                'label'          => '',
//                'treePid'          => $model->id,
                'level'          => '1',
                'with'          => ['children','cmsContentElements'],
                'enabledRunCache'=> \skeeks\cms\components\Cms::BOOL_N,
            ]); ?>

        </aside>
        <section class="content-cols__content">
            <h1><?= $model->name; ?></h1>
            <div class="sub-menu__mobile">
                <h1><?= $model->name; ?></h1>
                <div><a <?=$model->code != 'about' ?: 'class ="active"'?> href="/about">О компании</a></div>
                <div><a <?=$model->code != 'uslugi' ?: 'class ="active"'?> href="/uslugi">Сферы услуг</a></div>
                <div><a <?=$model->code != 'specialisty-kompanii' ?: 'class ="active"'?> href="/about/specialisty-kompanii">Специалисты компании</a></div>
                <div><a <?=$model->code != 'dokumentaciya' ?: 'class ="active"'?> href="/dokumentaciya">Документация</a></div>
            </div>
            <?= $model->description_full; ?>
        </section>
    </section>
</div>

