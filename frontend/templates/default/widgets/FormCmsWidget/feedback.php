<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 17.03.2015
 *
 * @var $widget \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget
 */
use skeeks\modules\cms\form2\widgets\ActiveFormConstructForm as ActiveForm;

$modelHasRelatedProperties = $widget->modelForm->createModelFormSend();

?>
<?php $form = ActiveForm::begin([
    'id'                                        => $widget->form_code,
    'modelForm'                                 => $widget->modelForm,
    'afterValidateCallback'                     => new \yii\web\JsExpression(<<<JS
            function(jForm, ajax)
            {
                var handler = new sx.classes.AjaxHandlerStandartRespose(ajax, {
                    'blockerSelector' : '#' + jForm.attr('id'),
                    'enableBlocker' : true,
                });

                handler.bind('success', function(response)
                {
                    $('input, textarea', jForm).each(function(value, key)
                    {
                        var name = $(this).attr('name');
                        if (name != '_csrf' && name != 'sx-model-value' && name != 'sx-model')
                        {
                            $(this).val('');
                        }
                    });
                });
            }
JS
    ),
]);
?>
    <div class="feedback-wrapper">
    <div class="left">
<? if ($properties = $modelHasRelatedProperties->relatedProperties) : ?>
    <? foreach ($properties as $property) : ?>

        <?php if($property->code != 'message'):?>
        <?= $property->renderActiveForm($form, $modelHasRelatedProperties)->input('text',['class' =>$property->code,'placeholder' => $property->name])->label(false); ?>
        <?php endif;?>
    <? endforeach; ?>
<? endif; ?>
    </div>
    <div class="left">
        <div class="right_wrap">
        <? if ($properties = $modelHasRelatedProperties->relatedProperties) : ?>
            <? foreach ($properties as $property) : ?>

                <?php if($property->code == 'message'):?>
                    <?= $property->renderActiveForm($form, $modelHasRelatedProperties)->textarea(['class' =>$property->code,'placeholder' => 'Задать вопрос'])->label(false); ?>
                <?php endif;?>
            <? endforeach; ?>
        <? endif; ?>
    </div>
    </div>
        <div class="button"><?= \yii\helpers\Html::submitButton("" . \Yii::t('skeeks/form2/app', $widget->btnSubmit), [
                'class' => '',
            ]); ?>
        </div>

    </div>
<?php ActiveForm::end(); ?>