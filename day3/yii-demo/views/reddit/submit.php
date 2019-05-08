<?php
use yii\widgets\ActiveForm;
$form = ActiveForm::begin([
    'action' => '/reddit/save' //ide mentem el a formból az adatokat
]) ?>

<?= $form->field($postForm, 'title') ?>
<?= $form->field($postForm, 'content') ?>
<?= $form->field($postForm, 'creator') ?>

    <button type="submit" class= "btn btn-success">
        <?= 'Submit' ?>
    </button>

<?php ActiveForm::end() ?>