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

        <section class="content-cols__content">
            <h1><?= $model->description_full; ?></h1>
            <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
                'namespace' => 'ContentElementsCmsWidget-services',
                'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/services',
            ]); ?>
        </section>
    </section>
</div>

