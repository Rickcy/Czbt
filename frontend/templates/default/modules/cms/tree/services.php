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
            <h1 style="margin-left: 20px"><?= $model->name; ?></h1>
            <div class="sub-menu__mobile">
                <h1><?= $model->name; ?></h1>
                <div><a   href="/uslugi/11-obuchenie-i-perepodgotovka-sotrudnikov">Обучение и переподготовка сотрудников</a></div>
                <div><a  href="/uslugi/10-specialnaya-ocenka-uslovij-truda-sout">Специальная оценка условий труда (СОУТ)</a></div>
                <div><a  href="/uslugi/9-protezirovanie-zubov">Производственный контроль</a></div>
                <div><a  href="/uslugi/19-autsorsing-i-audit">Аутсорсинг и Аудит</a></div>
                <div><a  href="/uslugi/19-autsorsing-i-audit">Нормативные документы</a></div>
            </div>
            <?= $model->description_full; ?>
        </section>
    </section>
</div>

