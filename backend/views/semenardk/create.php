<?php
/* @var $model common\models\Semenardk */
/* @var $List1 backend\models\ListCommon Код органа сертификации */
/* @var $List2 backend\models\ListCommon Код испытательной лабаратории*/
/* @var $List3 backend\models\ListCommon Код объекта сертификации*/
/* @var $List11 backend\models\List11 Соответствуют требованиям*/
/* @var $List8 backend\models\ListCommon Объект семена*/
/* @var $List9 backend\models\ListCommon Сорт семена*/
/* @var $List10 backend\models\ListCommon Категория семена*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$this->title = 'Добавление нового сертификата';
Yii::$app->name = 'Главная страница';

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}

?>


<script type="text/javascript">

    function select_sort(sort_id) {
        document.getElementById('sort').value = sort_id.options[sort_id.selectedIndex].getAttribute('code');
    }

    function select_object(object_id) {
        document.getElementById('codeok').value = object_id.options[object_id.selectedIndex].getAttribute('code');
    }

    function select_laba(laba_id) {
        document.getElementById('regnom').value = laba_id.options[laba_id.selectedIndex].getAttribute('laba');
    }

    function select_trebovan(gost_id) {
        document.getElementById('trebovan').value = gost_id.options[gost_id.selectedIndex].getAttribute('value');
    }

</script>

<a href="<?php echo Url::to(['cert/index']) ?>" class="btn btn-info">Вернуться к списку категорий сертификатов</a>
<br><br>

<h1 align="center">Создание нового сертификата</h1><hr>

<div class="row">


    <div class="col-lg-6">
        <br><h4>1. Номер сертификата</h4>

        <form name="form">
            Код органа сертификации:
            <select id="codeorgan" class="chosen-select"  name="кодорганаорг" onchange = "select_region(this);">
                <option value = "1"></option>
                <?php foreach ($List1 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'" counter="'.sprintf("%04d", $item['counter']).'" region_id="'.$item['id'].'" filial="'.$item['comment'].'">'.$item['value'].' '.$item['comment'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>
            Код испытательной лаборатории:
            <select id="codelab" class="chosen-select" name="кодиспытатлаб" onchange="select_laba(this);">
                <option value = "1"></option>
                <?php foreach ($List2 as $item): ?>
                    <?= '<option id="rghtopt" laba="'.mb_strimwidth($item['comment'], 0, 20) .'" value="'.$item['value'].'">'.$item['value'].' '.$item['comment'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>
            Код объекта сертификации:
            <select id="codeobjectcert" class="chosen-select" name="кодобъетксерт">
                <?php foreach ($List3 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'">'.$item['value'].' '.$item['comment'].'</option> '; ?>
                <?php endforeach;?>
            </select>
        </form><br>
        <button class="btn btn-primary" id="fill">Сгенерировать номер сертификата</button><br><br>

        <form method="post" id="certifikatik">
            <input type="text" method="post" name="ncert" class="form-control" id="ncert" value="РСЦ                    -<?= $settings->currentyear?>" required>
            <input type="hidden" method="post" value="" name="value_region" id="value_region">


            <br>

            <h4>2. Сертификат</h4>
            <div class="radio">
                <label>
                    <input type="radio" name="cert" id="optionsRadios1" value="Первичный" checked>
                    Первичный
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="cert" id="optionsRadios2" value="Переоформленный">
                    Переоформленный
                </label>
            </div>
            <br>


            <h4>3. Объект</h4>
            <select id="object" class="chosen-select" name="object" onchange = "select_object(this);" required>
                <option value = "1"></option>
                <?php foreach ($List8 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'" code="'.$item['comment'].'">'.$item['value'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>
            <h4>4. Код ОК 005 [объект]</h4>
            <input class="form-control" name="codeok005" id="codeok" required>
            <br>


            <h4>5. Сорт</h4>
            <select id="codelab" class="chosen-select" name="sort" onchange = "select_sort(this);" required>
                <option value = "1"></option>
                <?php foreach ($List9 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'" code="'.$item['comment'].'">'.$item['value'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>
            <h4>6. Код объекта [сорт]</h4>
            <input class="form-control" name="codeobject" id="sort" required>
            <br>

            <h4>7. Категория</h4>
            <select id="codelab" class="chosen-select" name="categoriya" required>
                <option value = "1"></option>
                <?php foreach ($List10 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'" >'.$item['value'].' '.$item['comment'].'</option> '; ?>
                <?php endforeach;?>
                <br>
            </select><br><br>


            <h4>8. Количество</h4>
            <input class="form-control" name="qty" value="<?= $cloneData['qty'] ?>" required>
            <br>
            <h4>9. Еденица измерения</h4>
            <input class="form-control" name="edizmereniya" value="тонн." id="disabledInput" type="text" placeholder="тонн." required>
            <br>
            <h4>10. Прочие еденицы измерения</h4>
            <em>необязательное поле</em>
            <input class="form-control" name="prochie" type="text" >
            <br>
            <h4>11. Соответсвтует требованиям</h4>
            <select id="codelab" class="chosen-select" name="codelab" onchange="select_trebovan(this)">
                <option value = "1"></option>
                <?php foreach ($List11 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'">'.$item['value'].' '.$item['comment'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>
            <input class="form-control" name="sootvetstvietrebovani" value="<?= $cloneData['sootvetstvietrebovani'] ?>" id="trebovan" required>
            <br><br>
    </div>


    <div class="col-lg-6">

        <h4>12. Филиал</h4>
        <input class="form-control" name="filial" id="filialid" required>
        <br>

        <h4>13. Регном</h4>
        <input class="form-control" name="regnom" id="regnom" required>
        <br>

        <h4>14. Номер бланка</h4>
        <input class="form-control" name="nblank" required>
        <br>

        <h4>15. Дата выдачи</h4>
        <input type="date" name="datavidachi" required>
        <br><br>

        <h4>16. Дата действия</h4>
        <input type="date" name="datadeistviya" required>
        <br><br>

        <h4>17. Номер партии</h4>
        <input class="form-control" name="npartiya" value="<?= $cloneData['npartiya'] ?>" required>
        <br>

        <h4>18. Год урожая</h4>
        <input class="form-control" name="godurojaya" value="<?= $cloneData['godurojaya'] ?>" required>
        <br>

        <h4>19. Страна поставщик</h4>
        <input class="form-control" name="strana" value="<?= $cloneData['strana'] ?>" required>
        <br>

        <h4>20. Производитель(продавец)</h4>
        <input class="form-control" name="proizvoditel" value="<?= $cloneData['proizvoditel'] ?>" required>
        <br>

        <h4>21. Кому выдано</h4>
        <input class="form-control" name="komuvidani" value="<?= $cloneData['komuvidani'] ?>" required>
        <br>

        <h4>22. ФИО</h4>
        <input class="form-control" name="fio" value="<?= $cloneData['fio'] ?>" required>
        <br>

        <h4>23. Выдан на основании</h4>
        <input class="form-control" name="vidannaosnovanii" value="<?= $cloneData['vidannaosnovanii'] ?>" required>
        <br>

        <h4>24. Испытания проведены</h4>
        <input class="form-control" name="ispitaniyaprovedeni" value="<?= $cloneData['ispitaniyaprovedeni'] ?>" required>
        <br>

    </div>

</div>


<div class="row">

    <div class="col-lg-6">
        <h3>Результаты испытаний:</h3>
        <h5>1. Сортовая (видовая) чистота, % (типичность):</h5>
        <input class="form-control" name="1sortovaya" id="1sortovaya">
        <br>
        <h5>2. Чистота,%:</h5>
        <input class="form-control" name="2chistota" id="2chistota">
        <br>
        <h5>в том числе , %:</h5>
        <input class="form-control" name="2vtomchisle" id="2vtomchisle">
        <br>
        <h5>3. Семян других культурных растений,%:</h5>
        <input class="form-control" name="3drcult" id="3drcult">
        <br>
        <h5>в том числе семян других видов вики,%:</h5>
        <input class="form-control" name="3vtcviki" id="3vtcviki">
        <br>
        <h5>4. Семян других видов кормовых трав,%:</h5>
        <input class="form-control" name="4cormovie" id="4cormovie">
        <br>
        <h5>5.Семян других растений(шт/кг или %):</h5>
        <input class="form-control" name="5drrasten" id="5drrasten">
        <br>
        <h5>6.Семян сорных растений, всего (шт/кг или %):</h5>
        <input class="form-control" name="6sornih" id="6sornih">
        <br>
        <h5>в том числе наиболее вредных сорняков (для кормовых трав); шт/кг:</h5>
        <input class="form-control" name="6vtcnaibvred" id="6vtcnaibvred">
        <br>
        <h5>Семян карантинных растений, всего (шт/кг):</h5>
        <input class="form-control" name="6karant" id="6karant">
        <br>
        <h5>Семян ядовитых растений, всего (шт/кг):</h5>
        <input class="form-control" name="6yadovit" id="6yadovit">
        <br>
        <h5>7.Энергия прорастания, %:</h5>
        <input class="form-control" name="7energiya" id="7energiya">
        <br>
        <h5>8. Всхожесть, %:</h5>
        <input class="form-control" name="8vshojest" id="8vshojest">
        <br>
        <h5>в том числе твердых: %:</h5>
        <input class="form-control" name="8vtctvrd" id="8vtctvrd">
        <br>
        <h5>Условия проращивания:</h5>
        <input class="form-control" name="uslprorash" id="uslprorash">
        <br>
        <h5>Категория сортовой чистоты:</h5>
        <input class="form-control" name="catsortchis" id="catsortchis">
        <br>
    </div>
    <div class="col-lg-6">
        <br><br>
        <h5>9.Жизнеспособность, %:</h5>
        <input class="form-control" name="9jiznesp" id="9jiznesp">
        <br>
        <h5>метод определения:</h5>
        <input class="form-control" name="9metod" id="9metod">
        <br>
        <h5>10.Влажность,%:</h5>
        <input class="form-control" name="10vlajnost" id="10vlajnost">
        <br>
        <h5>11.Масса 1000 семян, г:</h5>
        <input class="form-control" name="11massa" id="11massa">
        <br>
        <h5>12.Зараженность болезнями:</h5>
        <input class="form-control" name="12zarajenn" id="12zarajenn">
        <br>
        <h5>Склероции ,%:</h5>
        <input class="form-control" name="12skleroc" id="12skleroc">
        <br>
        <h5>Головневые образования, %:</h5>
        <input class="form-control" name="12golovnevie" id="12golovnevie">
        <br>
        <h5>13. Заселенность вредителями, шт/кг:</h5>
        <input class="form-control" name="13zaselenvred" id="13zaselenvred">
        <br>
        <h5>14. Одноростковость, %:</h5>
        <input class="form-control" name="14odnorast" id="14odnorast">
        <br>
        <h5>15. Стебельки длиннее 1 см шт/кг*:</h5>
        <input class="form-control" name="15stebel" id="15stebel">
        <br>
        <h5>16. Выравненность, % *:</h5>
        <input class="form-control" name="16viravnen" id="16viravnen">
        <br>
        <h5>17.Односемянность, %*:</h5>
        <input class="form-control" name="17odnosem" id="17odnosem">
        <br>
        <h5>18. Ботанический состав семян других видов:</h5>
        <input class="form-control" name="18sostav" id="18sostav">
        <br>
        <h5>19. Другие определения:</h5>
        <input class="form-control" name="19drugie" id="19drugie">
        <br>
        <h5>20. Сертификат соответствия на сельхозугодье:</h5>
        <input class="form-control" name="20sert" id="20sert">
        <br>
        <h5>21. Фитосанитарный паспорт поля: </h5>
        <input class="form-control" name="21pasport" id="21pasport">
        <br>
    </div>
</div>



</form>
<div class="col-lg-offset-5 col-lg-3">
    <button type="submit" form="certifikatik" class="btn-lg btn-success right">Добавить</button>
    <!--<button type="submit" target="_blank" form="certifikatik" class="btn btn-success">Добавить</button>
<a href="<?/*= Url::to(['kartofel/draw-cert'])*/?>" type="submit" role="button" form="certifikatik" target="_blank" form="certifikatik" class="btn btn-default">Предпросмотр</a>-->
</div>


<script>
    var output = document.getElementById("ncert");
    function select_region(region_id) {
        document.getElementById('filialid').value = region_id.options[region_id.selectedIndex].getAttribute('filial');
        var txt7 = region_id.options[region_id.selectedIndex].getAttribute('counter');
        return txt7;
    }
    // клик по кнопке "заполнить"
    document.getElementById("fill").onclick = function ()
        //при нажатии кнопки происходит эти действия
    {
        var txt1 = document.getElementById("codeorgan").options.selectedIndex;
        var txt3 = document.getElementById("codeorgan").options[txt1].value;
        var txt2 = document.getElementById("codelab").options.selectedIndex;
        var txt4 = document.getElementById("codelab").options[txt2].value;
        var txt5 = document.getElementById("codeobjectcert").options.selectedIndex;
        var txt6 = document.getElementById("codeobjectcert").options[txt5].value;

        var txt7 = document.getElementById("codeorgan").options.selectedIndex;
        var txt8 = document.getElementById("codeorgan").options[txt7].getAttribute('counter');
        output.value = "РСЦ "+txt3+" "+txt4+" "+txt6+" "+txt8+"-<?= $settings->currentyear?>";
        document.getElementById("value_region").value = document.getElementById("codeorgan").options[txt7].getAttribute('value');
    }
    $(".chosen-select").chosen();
</script>
<script src="https://harvesthq.github.io/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="https://harvesthq.github.io/chosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>