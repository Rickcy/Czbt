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
            <h1 style="margin-left: 20px"><?= $model->name; ?></h1>
            <div class="sub-menu__mobile">
                <h1><?= $model->name; ?></h1>
                <div><a <?=$model->code == 'about' ? 'class ="active"': ''?> href="/about">О компании</a></div>
                <div><a <?=$model->code == 'sfera-uslug' ? 'class ="active"' : ''?> href="/about/sfera-uslug">Сферы услуг</a></div>
                <div><a <?=$model->code == 'specialisty-kompanii' ? 'class ="active"' : ''?> href="/about/specialista-kompanii">Специалисты компании</a></div>
                <div><a <?=$model->code == 'dokumentaciya' ? 'class ="active"' : ''?> href="/dokumentaciya">Документация</a></div>
            </div>
            <?php if($model->code == 'sfera-uslug'):?>
            <div class="sub-menu__mobile" style="background: inherit;padding-top: 0px">
                <div><a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;"   href="/uslugi/11-obuchenie-i-perepodgotovka-sotrudnikov">Обучение и переподготовка сотрудников</a></div>
                <div><a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;"  href="/uslugi/10-specialnaya-ocenka-uslovij-truda-sout">Специальная оценка условий труда (СОУТ)</a></div>
                <div><a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;"  href="/uslugi/9-protezirovanie-zubov">Производственный контроль</a></div>
                <div><a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;"  href="/uslugi/19-autsorsing-i-audit">Аутсорсинг и Аудит</a></div>
            </div>
            <?php endif;?>
            <?= $model->description_full; ?>
        </section>
    </section>
</div>

