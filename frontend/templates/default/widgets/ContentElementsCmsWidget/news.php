<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget */
?>

<? if ($widget->label) : ?>
    <div class="h__center"><?=$widget->label?></div>

<? endif; ?>
<div class="">
    <? if ($widget->enabledPjaxPagination = \skeeks\cms\components\Cms::BOOL_Y) : ?>
        <? \skeeks\cms\modules\admin\widgets\Pjax::begin(); ?>
    <? endif; ?>

    <? echo \yii\widgets\ListView::widget([
        'dataProvider'      => $widget->dataProvider,
        'itemView'          => 'news-item',
        'emptyText'          => '',
        'options'           =>
            [

            ],
        'itemOptions' => [
                    'class'     => 'news__item-wrap',
//                    'tag'       => 'div',
        ],
                'layout'            => "\n{items}\n<p class=\"row\">{pager}</p>"
    ])?>

    <? if ($widget->enabledPjaxPagination = \skeeks\cms\components\Cms::BOOL_Y) : ?>
        <? \skeeks\cms\modules\admin\widgets\Pjax::end(); ?>
    <? endif; ?>
</div>
<? if ($widget->label) : ?>

    <div class="news__showmore"><a href="<?=\yii\helpers\Inflector::slug($widget->label,'-')?>">Посмотреть все</a></div>
<? endif; ?>


<div class="services-wrapper">


</div>
