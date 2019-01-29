<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget */

$models = [];
foreach ($widget->dataProvider->models as $key =>$item){
    if(!$item->parent_content_element_id){
        $models[] = $item;
    }
}
$widget->dataProvider->setModels($models);
?>

<? if ($widget->label) : ?>
    <div class="h__center"><a class="h__center" href="<?=\yii\helpers\Inflector::slug($widget->label,'-')?>"><?=$widget->label?></a></div>

<? endif; ?>
<div class="services-wrapper">
    <? if ($widget->enabledPjaxPagination = \skeeks\cms\components\Cms::BOOL_Y) : ?>
        <? \skeeks\cms\modules\admin\widgets\Pjax::begin(); ?>
    <? endif; ?>

    <? echo \yii\widgets\ListView::widget([
        'dataProvider'      => $widget->dataProvider,
        'itemView'          => 'publication-item',
        'emptyText'          => '',
        'options'           =>
            [
            ],
        'itemOptions' => [
//                    'class'     => 'col-lg-3 col-md-3 col-sm-6',
//                    'tag'       => 'div',
        ],
                'layout'            => "\n{items}\n<p class=\"row\">{pager}</p>"
    ])?>

    <? if ($widget->enabledPjaxPagination = \skeeks\cms\components\Cms::BOOL_Y) : ?>
        <? \skeeks\cms\modules\admin\widgets\Pjax::end(); ?>
    <? endif; ?>
</div>

<div class="services-wrapper__sm">
    <div class="line">
        <? if ($widget->label) : ?>
            <div><?=$widget->label?></div>
        <? endif; ?>

        <a href="<?=$widget->dataProvider->models[0]->url?>" class="services__item services__item-1"><i></i><?=$widget->dataProvider->models[0]->name?></a>
        <a href="<?=$widget->dataProvider->models[1]->url?>" class="services__item services__item-2"><i></i><?=$widget->dataProvider->models[1]->name?></a>
    </div>
    <div class="line">
        <?php foreach ($widget->dataProvider->models as $key => $item):?>
        <?php if ($key > 1):?>
        <a href="<?=$item->url?>" class="services__item services__item-<?=$key +1?>"><i></i><?=$item->name?></a>
        <?php endif;?>
        <?php endforeach;?>
    </div>
</div>




