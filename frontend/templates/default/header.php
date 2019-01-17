<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
?>
<!-- HEADER -->



    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top__address">
                        г.Барнаул, ул.Полярная, 3в
                    </div>
                    <div class="header-top__phone">
                        <div>
                            8 (3852) <span>60 33 55</span><br>
                            <span>8 800 250 66 93</span>
                        </div>
                        <div>
                            <span>Звонок по РФ бесплатный</span>
                        </div>
                    </div>
                    <div class="header-top__callback">
                        <a href="#">Заказать обратный звонок</a>
                    </div>
                </div>
                <div class="header-top-wrapper__sm">
                    <a href="#" class="address"></a>
                    <a href="mailto:czbt@bk.ru" class="email"></a>
                    <a href="#" class="social social__vk" target="_blank" title="Мы в VK"></a>
                    <a href="#" class="social social__inst" target="_blank" title="Мы в Instagram"></a>
                    <a href="#" class="social social__fb" target="_blank" title="Мы в Facebook"></a>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="header-middle-wrapper">
                    <a href="/" alt="Главная страница" title="Главная страница" class="header-middle__logo">
                        Центр содействия занятости<br>
                        и безопасности труда
                    </a>
                    <div class="header-middle__social">
                        <a href="#" target="_blank" title="Мы в VK" class="social__vk"></a>
                        <a href="#" target="_blank" title="Мы в Instagram" class="social__inst"></a>
                        <a href="#" target="_blank" title="Мы в Facebook" class="social__fb"></a>
                    </div>
                    <a href="javascript:void(0);" class="gamb"></a>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <?= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
                    'namespace'      => 'menu-top',
                    'viewFile'       => '@app/views/widgets/TreeMenuCmsWidget/menu-top.php',
                    'label'          => '',
                    'level'          => '1',
                    'enabledRunCache'=> \skeeks\cms\components\Cms::BOOL_N,
                ]); ?>
            </div>
        </div>
    </header>





