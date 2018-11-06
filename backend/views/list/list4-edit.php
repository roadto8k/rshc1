<?php
/**
 * Created by PhpStorm.
 * User: user
* Date: 17.09.2018
* Time: 14:19
*/
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


    <a href="<?php echo Url::to(['list/edit', 'table' => 'list4']) ?>" class="btn btn-info">Вернуться к списку</a>
    <br><br>
<h3>Результаты испытаний <?= $model['value'] ?></h3><br>

    <div class="row">
    <div class="col-md-8">
<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'proba')->label('Объединенная проба'); ?>

<?php echo $form->field($model, 'chistota')->label('Сортовая чистота посадок картофеля,%:'); ?>

<?php echo $form->field($model, 'botanichsort')->label('Наличие клубней других ботанических сортов,%:'); ?>

<?php echo $form->field($model, 'bolezn')->label('Наличие клубней пораженных болезнями, всего,%:'); ?>

        <h3>В том числе:</h3>

<?php echo $form->field($model, 'jelezist')->label('Наличие клубней с железистой пятнистостью и потемнением мякоти,%:'); ?>

<?php echo $form->field($model, 'mehanich')->label('Наличие клубней с механическими повреждениями,%:'); ?>

        <?php echo $form->field($model, 'vredit')->label('Наличие клубней с повреждениями с/х вредителями:'); ?>

        <?php echo $form->field($model, 'razmer')->label('Наличие клубней, не отвечающих требованиям по размеру, %:'); ?>

        <?php echo $form->field($model, 'primes')->label('Наличие земли и посторонних примесей,%:'); ?>

        <?php echo $form->field($model, 'scritoi')->label('Результаты по определению скрытой зараженности:'); ?>

        <?php echo $form->field($model, 'probissled')->label('Поступило проб для исследования, шт:'); ?>

        <?php echo $form->field($model, 'fitopatog')->label('Наличие растений или клубней в образце с положительной реакцией на фитопатогенные вирусы, % по счету:'); ?>

        <?php echo $form->field($model, 'xbk')->label('в том числе: ХВК, SBK, MBK:'); ?>

        <?php echo $form->field($model, 'uvk')->label('УВК, ВСЛК:'); ?>

        <?php echo $form->field($model, 'bakter')->label('Наличие растений или клубней в образце с положительной реакцией на бактериальную инфекцию (черная ножка или кольцевая гниль), % по счету:'); ?>

        <?php echo $form->field($model, 'drugie')->label('Другие определения:'); ?>





<?php echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);?>


<?php ActiveForm::end(); ?>
    </div>
    </div>
