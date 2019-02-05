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
                <div><a class="active" <?=$model->code == '11-obuchenie-i-perepodgotovka-sotrudnikov' ? 'class ="active"' : ''?>  href="/uslugi/11-obuchenie-i-perepodgotovka-sotrudnikov">Обучение и переподготовка сотрудников</a></div>
                <div><a <?=$model->code == '10-specialnaya-ocenka-uslovij-truda-sout' ? 'class ="active"' : ''?> href="/uslugi/10-specialnaya-ocenka-uslovij-truda-sout">Специальная оценка условий труда (СОУТ)</a></div>
                <div><a <?=$model->code == '9-protezirovanie-zubov' ?'class ="active"': ''?> href="/uslugi/9-protezirovanie-zubov">Производственный контроль</a></div>
                <div><a <?=$model->code == '19-autsorsing-i-audit' ?'class ="active"':'' ?> href="/uslugi/19-autsorsing-i-audit">Аутсорсинг и Аудит</a></div>
                <div>
                    <a   class="has-children">Нормативные документы</a>
                    <ul class="childrens" >
                        <li style="margin-top: 5px">
                            <a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == '22-zakonodatelnaya-baza' ? 'class ="active"' : ''?>  href="/uslugi/22-zakonodatelnaya-baza">Законодательная база</a>
                        </li style="margin-top: 5px">
                        <li style="margin-top: 5px">
                            <a  style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == '23-otvetstvennost-rabotadatelya' ? 'class ="active"' : ''?> href="/uslugi/23-otvetstvennost-rabotadatelya">Ответственность работадателя</a>
                        </li style="margin-top: 5px">
                        <li style="margin-top: 5px">
                            <a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == '24-obrazcy-dokumentov' ? 'class ="active"' : ''?>  href="/uslugi/24-obrazcy-dokumentov">Образцы документов</a>
                        </li>
                        <li style="margin-top: 5px">
                            <a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == '25-dopolnitelnye-strahovye-tarify' ? 'class ="active"' : ''?>  href="/uslugi/25-dopolnitelnye-strahovye-tarify">Дополнительные страховые тарифы</a>
                        </li>
                        <li style="margin-top: 5px">
                            <a style="background: inherit;color: #0e0e0e;border: 1px #ceb9b9 solid;" <?=$model->code == '26-dannye-po-sout-v-czbt' ? 'class ="active"' : ''?>  href="/uslugi/26-dannye-po-sout-v-czbt">Данные по СОУТ в ЦЗБТ</a>
                        </li>
                    </ul>


                </div>
            </div>
            <h1><?= $model->name; ?></h1>
            <?= $model->description_full; ?>
        </section>
    </section>
</div>