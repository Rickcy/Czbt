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
                'treePid'          => $model->id,
                'level'          => '2',
                'enabledRunCache'=> \skeeks\cms\components\Cms::BOOL_N,
            ]); ?>

<!--            <nav>-->
<!--                <ul>-->
<!--                    <li><a href="#">Обучение и переподготовка сотрудников</a></li>-->
<!--                    <li><a href="#">Специальная оценка условий труда (СОУТ)</a></li>-->
<!--                    <li><a href="#" class="active">Производственный контроль</a></li>-->
<!--                    <li><a href="#">Аутсорсинг и Аудит</a></li>-->
<!--                    <li><a href="#">Нормативные документы (образцы)</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
        </aside>
        <section class="content-cols__content">
            <h1><?= $model->description_full; ?></h1>
<!--            <div class="h__blue h__blue-1">ОБУЧЕНИЕ И ПЕРЕПОДГОТОВКА СОТРУДНИКОВ</div>-->
            <?= $model->description_full; ?>
        </section>
    </section>
</div>

