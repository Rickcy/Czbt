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

<!-- OWL SLIDER -->

<? if ($widget->dataProvider->query->count()) : ?>

    <?


    if ($widget->dataProvider->query->count() >= 1)
    {

        $timestamp = \Yii::$app->assetManager->appendTimestamp;
        \Yii::$app->assetManager->appendTimestamp = false;
        $skinsPath = \frontend\assets\BoomerangThemeAsset::getAssetUrl("assets/layerslider/skins/");

        \Yii::$app->assetManager->appendTimestamp = $timestamp;
        $this->registerJs(<<<JS
        jQuery("#layerslider-partners").layerSlider({
            pauseOnHover: false,
            autoPlayVideos: false,
            skinsPath: '{$skinsPath}',
            responsive: false,
            responsiveUnder: 1280,
            layersContainer: 1280,
            skin: 'borderlessdark3d',
            hoverPrevNext: false,
        });
JS
        );
    }


    ?>
    <section id="slider-wrapper" class="layer-slider-wrapper layer-slider-static">
        <? echo \yii\widgets\ListView::widget([
            'dataProvider'      => $widget->dataProvider,
            'itemView'          => 'partner-item',
            'emptyText'          => '',
            'options'           =>
                [
                    'tag'       => 'div',
                    'style' => "max-width: 1000px; height: 230px;text-align : center",
                    'id' => "layerslider-partners"
                ],
            'itemOptions' => [
                'tag' => false,
            ],
            'layout'            => "{items}"
        ])?>
    </section>


<? endif; ?>

<!-- /OWL SLIDER -->
