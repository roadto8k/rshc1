<?php
/* @var $kartofel common\models\Kartofel */
/* @var $List1 backend\models\ListCommon Код органа сертификации */
/* @var $List2 backend\models\ListCommon Код испытательной лабаратории*/
/* @var $List3 backend\models\ListCommon Код объекта сертификации*/
/* @var $List4 backend\models\ListCommon Соответствуют требованиям*/
/* @var $List5 backend\models\ListCommon Объект картофель*/
/* @var $List6 backend\models\ListCommon Сорт картофель*/
/* @var $List7 backend\models\ListCommon Категория картофель*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$this->title = 'Добавление нового сертификата';
Yii::$app->name = 'Главная страница';

if ($kartofel->hasErrors()) {
    echo '<pre>';
    print_r($kartofel->getErrors());
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
            <select id="codeorgan" class="chosen-select" name="codeorgan" onchange = "select_region(this);">
                <option value = "1"></option>
                <?php foreach ($List1 as $item): ?>
                <?= '<option id="rghtopt" value="'.$item['value'].'" counter="'.sprintf("%04d", $item['counter']).'" region_id="'.$item['id'].'" filial="'.$item['comment'].'">'.$item['value'].' '.$item['comment'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>
            Код испытательной лаборатории:
            <select id="codelab" class="chosen-select" name="кодиспытатлаб" onchange="select_laba(this);">
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
            <input type="hidden" method="post" value="" name="value_region" id="value_region" >


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
                <?php foreach ($List5 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'" code="'.$item['comment'].'">'.$item['value'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>

            <h4>4. Код ОК 005 [объект]</h4>
            <input class="form-control" name="codeok005" id="codeok" required>
            <br>

            <h4>5. Сорт</h4>
            <select id="codelab" class="chosen-select" name="sort" onchange = "select_sort(this);" required>
                <option value = "1"></option>
                <?php foreach ($List6 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'" code="'.$item['comment'].'">'.$item['value'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>

            <h4>6. Код объекта [сорт]</h4>
            <input class="form-control" name="codeobject" id="sort" required>
            <br>

            <h4>7. Категория</h4>
            <select id="codelab" class="chosen-select" name="categoriya" required>
                <option value = "1"></option>
                <?php foreach ($List7 as $item): ?>
                    <?= '<option id="rghtopt" value="'.$item['value'].'" >'.$item['value'].' '.$item['comment'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>


            <h4>8. Количество</h4>
            <input class="form-control" name="qty" value="<?= $cloneData['qty'] ?>" required>
            <br>
            <h4>9. Еденица измерения</h4>
            <input class="form-control" name="edizmereniya" value="тонн."  type="text" placeholder="тонн." required>
            <br>
            <h4>10. Прочие еденицы измерения</h4>
            <em>необязательное поле</em>
            <input class="form-control" name="prochie" type="text" >
            <br>
            <h4>11. Соответсвтует требованиям</h4>
            <select id="codelab" class="chosen-select" name="codelab" onchange="select_trebovan(this)">
                <option value = "1"></option>
                <?php foreach ($List4 as $item): ?>
                    <?=  '<option id="rghtopt" value="'.$item['value'].'" >'.$item['value'].' '.$item['comment'].'</option> '; ?>
                <?php endforeach;?>
            </select><br><br>
            <input class="form-control" name="sootvetstvietrebovani" id="trebovan" required>
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
        <h5>Объединенная проба</h5>
        <input class="form-control" name="proba" id="proba">
        <br>

        <h5>Сортовая чистота посадок картофеля,%:</h5>
        <input class="form-control" name="chistota" id="chistota">
        <br>

        <h5>Наличие клубней других ботанических сортов,%:</h5>
        <input class="form-control" name="botanichsort" id="botanichsort">
        <br>

        <h5>Наличие клубней пораженных болезнями, всего,%:</h5>
        <input class="form-control" name="bolezn" id="bolezn">
        <br>

        <h4>В том числе:</h4>
        <h5>Наличие клубней с железистой пятнистостью и потемнением мякоти,%:</h5>
        <input class="form-control" name="jelezist" id="jelezist">
        <br>

        <h5>Наличие клубней с механическими повреждениями,%: </h5>
        <input class="form-control" name="mehanich" id="mehanich">
        <br>

        <h5>Наличие клубней с повреждениями с/х вредителями:</h5>
        <input class="form-control" name="vredit" id="vredit">
        <br>

        <h5>Наличие клубней, не отвечающих требованиям по размеру, %:</h5>
        <input class="form-control" name="razmer" id="razmer">
        <br>

    </div>

    <div class="col-lg-6">
        <br><br>
        <h5>Наличие земли и посторонних примесей,%:</h5>
        <input class="form-control" name="primes" id="primes">
        <br>

        <h5>Результаты по определению скрытой зараженности:</h5>
        <input class="form-control" name="scritoi" id="scritoi">
        <br>

        <h5>Поступило проб для исследования, шт: </h5>
        <input class="form-control" name="probissled" id="probissled">
        <br>

        <h5>Наличие растений или клубней в образце с положительной реакцией на фитопатогенные вирусы, % по счету: </h5>
        <input class="form-control" name="fitopatog" id="fitopatog">
        <br>

        <h5>в том числе: ХВК, SBK, MBK:</h5>
        <input class="form-control" name="xbk" id="xbk">
        <br>

        <h5>УВК, ВСЛК:</h5>
        <input class="form-control" name="uvk" id="uvk">
        <br>

        <h5>Наличие растений или клубней в образце с положительной реакцией на бактериальную инфекцию (черная ножка или кольцевая гниль), % по счету:</h5>
        <input class="form-control" name="bakter" id="bakter">
        <br>

        <h5>Другие определения: </h5>
        <input class="form-control" name="drugie" id="drugie">
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
