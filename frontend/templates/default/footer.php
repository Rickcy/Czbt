<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
?>
<!-- FOOTER -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top_wrapper">
                <div class="footer-top__social">
                    <?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
                        'namespace'         => 'text-footer-links',
                        'text'              => <<<HTML
					  <a href="#" target="_blank" title="Мы в VK" class="social__vk">http://vk.com/url</a><br>
                    <a href="#" target="_blank" title="Мы в Instagram" class="social__inst">http://instagram.com/url</a><br>
                    <a href="#" target="_blank" title="Мы в Facebook" class="social__fb">http://facebook.com/url</a>
HTML
                        ,
                    ]); ?>

                </div>
                <div class="footer-top__map">
                    <a href="#">карта сайта</a>
                </div>
                <div class="footer-top__email">
                    <a href="mailto:czbt@bk.ru">czbt@bk.ru</a>
                </div>
                <div class="footer-top__phone">
                    <div class="icon"></div>
                    <?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
                        'namespace'         => 'text-footer-calls',
                        'text'              => <<<HTML
					 
                    <div class="text">
                        8 (3852) 60 33 55<br>
                        8 800 250 66 93<br>
                        Звонок по РФ бесплатный
                    </div>
HTML
                        ,
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div clas="footer-bottom_wrapper">
                &copy; 2018, ООО Центр содействия занятости и безопасности труда. Все права защищены.
            </div>
        </div>
    </div>
</footer>

<!--<footer class="footer">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-3">-->
<!--				<div class="col">-->
<!--					--><?//= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
//					'namespace'         => 'text-footer-left',
//					'text'              => <<<HTML
//					<h4>Контакты</h4>
//				   <ul>
//						<li>г . Москва, ул . Вятская д. 27 стр . 4 (м. Савеловская)</li>
//						<li>Телефон: <a href="tel:8 (915) 337-08-90">8 (915) 337-08-90</a></li>
//						<li>Email: <a href="mailto:adria@mail.ru" title="adria@mail.ru">adria@mail.ru</a></li>
//						<li><hr /></li>
//						<li><a href="/contacts" title="Все контакты" class="btn btn-primary">Все контакты + карта</a></li>
//					</ul>
//HTML
//	,
//				]); ?>
<!---->
<!---->
<!--				 </div>-->
<!--			</div>-->
<!---->
<!--			<div class="col-md-3">-->
<!--				<div class="col">-->
<!--					--><?//= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
//						'namespace'         => 'ContentElementsCmsWidget-footer',
//						'viewFile'          => '@template/widgets/ContentElementsCmsWidget/articles-footer',
//						'label'             => 'Новости и статьи',
//						'enabledCurrentTree'=> \skeeks\cms\components\Cms::BOOL_N,
//						'limit'             => 4,
//					]); ?>
<!---->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--			<div class="col-md-3">-->
<!--				<div class="col col-social-icons">-->
<!--					--><?//= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
//						'namespace'      => 'menu-footer-2',
//						'viewFile'       => '@template/widgets/TreeMenuCmsWidget/menu-footer.php',
//						'label'          => 'Меню',
//						'level'          => '1',
//					]); ?>
<!---->
<!---->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--			 <div class="col-md-3">-->
<!--				<div class="col">-->
<!--					--><?//= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
//					'namespace'         => 'text-footer-bout-us',
//					'text'              => <<<HTML
//					<h4>О нас</h4>
//					<p class="no-margin">
//					Стоматологическая клиника «АДРИА» занимается медецинской деятельностью порядка 16 лет. За это время мы накопили колоссальный опыт, позволяющий нашим пациентам чувствовать себя спокойно и уверенно.
//					<br><br>
//					</p>
//HTML
//	,
//				]); ?>
<!---->
<!---->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!---->
<!--		<hr>-->
<!---->
<!--		<div class="row">-->
<!--			<div class="col-lg-8 copyright">-->
<!--				2015 © Все права защищены, SkeekS CMS — система управления сайтом.-->
<!--			</div>-->
<!--			<div class="col-lg-4">-->
<!--				<div class=" pull-right">-->
<!--					<a href="http://skeeks.com" title="Разработка сайта — SkeekS" target="_blank">Разработка сайта — SkeekS</a> (<a href="http://cms.skeeks.com" title="Система управления сайтом yii2 cms — SkeekS" target="_blank">Yii2 CMS SkeekS</a>)-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</footer>-->



<div style="display: none;">
	<div id="callback" style="width: 600px;">
        <div class="h__center">Заказать обратный звонок</div>
		<?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
			'namespace' => 'FormWidget-all',
			'form_code' => 'callback',
			'viewFile' => '@app/views/widgets/FormCmsWidget/callback.php',
		])?>
	</div>
</div>