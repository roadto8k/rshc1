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
    <div class="col-lg-6 col-md-6">
        <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->field($model, '1sortovaya')->label('1. Сортовая (видовая) чистота, % (типичность):'); ?>

        <?php echo $form->field($model, '2chistota')->label('2. Чистота,%:'); ?>

        <?php echo $form->field($model, '2vtomchisle')->label('в том числе , %:'); ?>

        <?php echo $form->field($model, '3drcult')->label('3. Семян других культурных растений,%:'); ?>

        <?php echo $form->field($model, '3vtcviki')->label('в том числе семян других видов вики,%:'); ?>

        <?php echo $form->field($model, '4cormovie')->label('4. Семян других видов кормовых трав,%:'); ?>

        <?php echo $form->field($model, '5drrasten')->label('5.Семян других растений(шт/кг или %):'); ?>

        <?php echo $form->field($model, '6sornih')->label('6.Семян сорных растений, всего (шт/кг или %):'); ?>

        <?php echo $form->field($model, '6vtcnaibvred')->label('в том числе наиболее вредных сорняков (для кормовых трав); шт/кг:'); ?>

        <?php echo $form->field($model, '6karant')->label('Семян карантинных растений, всего (шт/кг):'); ?>

        <?php echo $form->field($model, '6yadovit')->label('Семян ядовитых растений, всего (шт/кг):'); ?>

        <?php echo $form->field($model, '7energiya')->label('7.Энергия прорастания, %:'); ?>

        <?php echo $form->field($model, '8vshojest')->label('8. Всхожесть, %:'); ?>

        <?php echo $form->field($model, '8vtctvrd')->label('в том числе твердых: %:'); ?>

        <?php echo $form->field($model, 'uslprorash')->label('Условия проращивания:'); ?>

        <?php echo $form->field($model, 'catsortchis')->label('Категория сортовой чистоты:'); ?>

        <?php echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);?>

    </div>
    <div class="col-lg-6 col-md-6">

        <?php echo $form->field($model, '9jiznesp')->label('9.Жизнеспособность, %:'); ?>

        <?php echo $form->field($model, '9metod')->label('метод определения:'); ?>

        <?php echo $form->field($model, '10vlajnost')->label('10.Влажность,%:'); ?>

        <?php echo $form->field($model, '11massa')->label('11.Масса 1000 семян, г:'); ?>

        <?php echo $form->field($model, '12zarajenn')->label('12.Зараженность болезнями:'); ?>

        <?php echo $form->field($model, '12skleroc')->label('Склероции ,%:'); ?>

        <?php echo $form->field($model, '12golovnevie')->label('Головневые образования, %:'); ?>

        <?php echo $form->field($model, '13zaselenvred')->label('13. Заселенность вредителями, шт/кг:'); ?>

        <?php echo $form->field($model, '14odnorast')->label('14. Одноростковость, %:'); ?>

        <?php echo $form->field($model, '15stebel')->label('15. Стебельки длиннее 1 см шт/кг*:'); ?>

        <?php echo $form->field($model, '16viravnen')->label('16. Выравненность, % *:'); ?>

        <?php echo $form->field($model, '17odnosem')->label('17.Односемянность, %*:'); ?>

        <?php echo $form->field($model, '18sostav')->label('18. Ботанический состав семян других видов:'); ?>

        <?php echo $form->field($model, '19drugie')->label('19. Другие определения:'); ?>

        <?php echo $form->field($model, '20sert')->label('20. Сертификат соответствия на сельхозугодье: '); ?>

        <?php echo $form->field($model, '21pasport')->label('21. Фитосанитарный паспорт поля: '); ?>





        <?php ActiveForm::end(); ?>
    </div>
</div>
