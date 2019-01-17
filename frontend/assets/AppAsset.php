<?php
/**
 * AppAsset
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 20.10.2014
 * @since 1.0.0
 */

namespace frontend\assets;

/**
 * Class AppAsset
 * @package frontend\assets
 */
class AppAsset extends \skeeks\cms\base\AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/phone.css',
        'css/style.css',
        'css/layerslider/css/layerslider.css'

    ];
    public $js = [
        'css/layerslider/js/greensock.js',
        'css/layerslider/js/layerslider.transitions.js',
        'css/layerslider/js/layerslider.kreaturamedia.jquery.js',
        'smarty/js/scripts.js',
        'js/app.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        '\skeeks\sx\assets\Custom',
        '\skeeks\cms\assets\FancyboxAssets',
    ];

    public function init()
    {
        parent::init();
        // resetting BootstrapAsset to not load own css files
        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
    }
}