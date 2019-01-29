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
<?php if(!$model->parent_content_element_id):?>
<a href="<?= $model->url; ?>" title="<?= $model->name; ?>" class="services__item" style="background: url('<?= !$model->image ?: $model->image->src; ?>') no-repeat; "></a>
<?php endif;?>
