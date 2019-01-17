<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 *
 * @var \skeeks\cms\models\CmsContentElement $model
 *
 */
?>

<div class="news__item-h"><a href="<?= $model->url; ?>"><?= $model->name; ?></a></div>
<div class="news__item">
    <div class="news__item-img"><a href="<?= $model->url; ?>"><img src="<?= $model->image->src; ?>"></a></div>
    <div class="news__item-text">
        <div class="news__item-text-cont"><?=$model->description_short?></div>
        <a href="<?= $model->url; ?>" class="news__item-text-more">Подробнее</a>
    </div>
</div>
