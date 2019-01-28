<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (РЎРєРёРєРЎ)
 * @date 24.05.2015
 */
/* @var $this \yii\web\View */
/* @var $model \skeeks\cms\models\Tree */

?>

<?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
    'namespace' => 'ContentElementsCmsWidget-home-slides',
    'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/slides',
]); ?>




<!-- MAIN CONTENT -->
<div class="services">
    <div class="container">
        <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
            'namespace' => 'ContentElementsCmsWidget-home',
            'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/publications',
            'label' => 'Услуги'
        ]); ?>

    </div>
</div>
<div class="news">
    <div class="container">
        <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
            'namespace' => 'ContentElementsCmsWidget-home-news',
            'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/news',
            'label' => 'Новости'
        ]); ?>


    </div>
</div>
<div class="clients">
    <div class="container">
        <div class="h__center">Наши клиенты</div>
        <div class="clients-wrapper">
            <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
                'namespace' => 'ContentElementsCmsWidget-home-partners',
                'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/partners',

            ]); ?>
        </div>
    </div>
</div>




<!--=== Content Part ===-->
<div class="gis">
    <a class="dg-widget-link" href="http://2gis.ru/barnaul/firm/563479234652858/center/83.74783515930177,53.36913234333624/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Барнаула</a>
    <div class="dg-widget-link">
        <a href="http://2gis.ru/barnaul/firm/563479234652858/photos/563479234652858/center/83.74783515930177,53.36913234333624/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a>
    </div>
    <div class="dg-widget-link">
        <a href="http://2gis.ru/barnaul/center/83.747831,53.367605/zoom/16/routeTab/rsType/bus/to/83.747831,53.367605╎Центр содействия занятости и безопасности труда?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Центр содействия занятости и безопасности труда</a>
    </div>
    <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
    <script charset="utf-8">new DGWidgetLoader({"width":640,"height":400,"pos":{"lat":53.36913234333624,"lon":83.74783515930177,"zoom":16},"opt":{"city":"barnaul"},"org":[{"id":"563479234652858"}]});</script>
    <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
</div>
