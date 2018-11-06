<?php
/* @var $kartofel backend\models\Kartofel */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>

<a href="<?php echo Url::to(['cert/index']) ?>" class="btn btn-info">Вернуться к списку категорий сертификатов</a>
<br><br>


<select id="genre" name="жанры">
    <option value="blues" selected>Мягкий блюз</option>
    <option value="rock" selected>Жёсткий рок</option>
    <option value="classic">Классика</option>
</select>

<select id="animals" name="животные">
    <option value="1" selected>кот</option>
    <option value="2" selected>собака</option>
    <option value="3">птица</option>
</select>

<button href="#" id="fill">Заполнить</button>
<script>
    var select = form.elements.genre;
    var output = document.getElementById("kartofel-ncert");



    // клик по кнопке "заполнить"
    document.getElementById("fill").onclick = function ()
        //при нажатии кнопки происходит эти действия
    {
        var txt1 = document.getElementById("genre").options.selectedIndex;
        var txt3 = document.getElementById("genre").options[txt1].text;
        var txt2 = document.getElementById("animals").options.selectedIndex;
        var txt4 = document.getElementById("animals").options[txt2].text;
        output.value = txt3+"-"+txt4;
    }

</script>
<?php $form = ActiveForm::begin(['id' => 'blog-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>

<?php echo $form->field($kartofel, 'filial')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'regnom')->label('регном'); ?>
<?php echo $form->field($kartofel, 'ncert')->label('Номер сертификата', ['id' => 'kartofel-ncert']); ?>


<?php echo $form->field($kartofel, 'nblank')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'datavidachi')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'datadeistviya')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'object')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'sort')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'categoriya')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'npartiya')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'godurojaya')->label('Филиал'); ?>
<?php echo $form->field($kartofel, 'strana')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'edizmereniya')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'qty')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'prochie')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'codeok005')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'codeobject')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'sootvetstvietrebovani')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'proizvoditel')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'komuvidani')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'fio')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'vidannaosnovanii')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'ispitaniyaprovedeni')->label('Описание'); ?>
<?php echo $form->field($kartofel, 'sozdano')->label('Описание'); ?>







<?php echo Html::submitButton('Добавить', ['class' => 'btn btn-primary']);?>


<?php ActiveForm::end(); ?>
