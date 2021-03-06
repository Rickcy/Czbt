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
            <div class="sub-menu__mobile">
                <h1>Услуги</h1>

                <div><a  <?=$model->code == 'obuchenie-i-perepodgotovka-sotrudnikov' ? 'class ="active"' : ''?>  href="/uslugi/11-obuchenie-i-perepodgotovka-sotrudnikov">Обучение и переподготовка сотрудников</a></div>
                <div><a <?=$model->code == 'specialnaya-ocenka-uslovij-truda-sout' ? 'class ="active"' : ''?> href="/uslugi/10-specialnaya-ocenka-uslovij-truda-sout">Специальная оценка условий труда (СОУТ)</a></div>
                <div><a <?=$model->code == 'protezirovanie-zubov' ?'class ="active"': ''?> href="/uslugi/9-protezirovanie-zubov">Производственный контроль</a></div>
                <div><a <?=$model->code == 'autsorsing-i-audit' ?'class ="active"':'' ?> href="/uslugi/19-autsorsing-i-audit">Аутсорсинг и Аудит</a></div>
                <div>
                    <a   class="has-children">Нормативные документы</a>
                    <ul class="childrens" >
                        <li style="margin-top: 5px">
                            <a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == 'zakonodatelnaya-baza' ? 'class ="active"' : ''?>  href="/uslugi/22-zakonodatelnaya-baza">Законодательная база</a>
                        </li style="margin-top: 5px">
                        <li style="margin-top: 5px">
                            <a  style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == 'otvetstvennost-rabotadatelya' ? 'class ="active"' : ''?> href="/uslugi/23-otvetstvennost-rabotadatelya">Ответственность работадателя</a>
                        </li style="margin-top: 5px">
                        <li style="margin-top: 5px">
                            <a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == 'obrazcy-dokumentov' ? 'class ="active"' : ''?>  href="/uslugi/24-obrazcy-dokumentov">Образцы документов</a>
                        </li>
                        <li style="margin-top: 5px">
                            <a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == 'dopolnitelnye-strahovye-tarify' ? 'class ="active"' : ''?>  href="/uslugi/25-dopolnitelnye-strahovye-tarify">Дополнительные страховые тарифы</a>
                        </li>
                        <li style="margin-top: 5px">
                            <a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == 'dannye-po-sout-v-czbt' ? 'class ="active"' : ''?>  href="/uslugi/26-dannye-po-sout-v-czbt">Данные по СОУТ в ЦЗБТ</a>
                        </li>
                    </ul>


                </div>
            </div>
            <h1><?= $model->name; ?></h1>
            <?= $model->description_full; ?>
        </section>
    </section>
</div>