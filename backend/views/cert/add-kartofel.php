<?php
/* @var $kartofel backend\models\Kartofel */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$this->title = 'Добавление нового сертификата';
Yii::$app->name = 'Сертификаты';

if ($kartofel->hasErrors()) {
    echo '<pre>';
    print_r($kartofel->getErrors());
    echo '</pre>';
}

?>



<a href="<?php echo Url::to(['cert/index']) ?>" class="btn btn-info">Вернуться к списку категорий сертификатов</a>
<br><br>

<h1 align="center">Создание нового сертификата</h1><hr>

<div class="row">


    <div class="col-lg-6">
<br><h4>1. Номер сертификата</h4>

<form name="form">
    Код органа сертификации:
    <select id="codeorgan" class="chosen-select"  name="кодорганаорг">
        <option id="rghtopt" value="1" selected>97</option>
        <option value="2" selected>98</option>
        <option value="3">99</option>
    </select><br><br>
    Код испытательной лаборатории:
    <select id="codelab" class="chosen-select" name="кодиспытатлаб">
        <option id="rghtopt" value="1" selected>97</option>
        <option value="2" selected>98</option>
        <option value="3">99</option>
    </select><br><br>
    Код объекта сертификации:
    <select id="codeobjectcert" class="chosen-select" name="кодобъетксерт">
        <option id="rghtopt" value="1" selected>E1</option>
        <option value="2" selected>E2</option>
        <option value="3">E3</option>
    </select>
</form><br>
        <button class="btn btn-primary" id="fill">Сгенерировать номер сертификата</button><br><br>

        <form method="post" id="certifikatik">
<input type="text" method="post" name="ncert" class="form-control" id="ncert" value="РСЦ                0019-18">


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
            <select id="object" class="chosen-select" name="object">
                <option id="rghtopt" value="1" selected>97</option>
                <option value="2" selected>98</option>
                <option value="3">99</option>
            </select><br><br>

            <h4>4. Сорт</h4>
            <select id="codelab" class="chosen-select" name="sort">
                <option id="rghtopt" value="1" selected>97очень вкусная картошка</option>
                <option value="2" selected>98</option>
                <option value="3">99</option>
            </select><br><br>
            <h4>5. Категория</h4>
            <select id="codelab" class="chosen-select" name="categoriya">
                <option id="rghtopt" value="1" selected>97</option>
                <option value="2" selected>98</option>
                <option value="3">99</option>
            </select><br><br>
            <h4>6. Код ОК 005</h4>
            <small>позже будет автоматическое заполнение из справочника</small><br>
            <input class="form-control" name="codeok005" id="codeok005">
            <br>
            <h4>7. Код объекта</h4>
            <small>позже будет автоматическое заполнение из справочника</small><br>
            <input class="form-control" name="codeobject" id="codeok005">
            <br>
            <h4>8. Количество</h4>
            <input class="form-control" name="qty" id="codeok005">
            <br>
            <h4>9. Еденица измерения</h4>
            <input class="form-control" name="edizmereniya" value="тонн." id="disabledInput" type="text" placeholder="тонн." disabled>
            <br>
            <h4>10. Прочие еденицы измерения</h4>
            <em>необязательное поле</em>
            <input class="form-control" name="prochie" type="text" id="codeok005">
            <br>
            <h4>11. Соответсвтует требованиям</h4>
            <select id="codelab" class="chosen-select" name="sootvetstvietrebovani">
                <option id="rghtopt" value="1" selected>97</option>
                <option value="2" selected>98</option>
                <option value="3">99</option>
            </select><br><br>
    </div>


    <div class="col-lg-6">

        <h4>12. Филиал</h4>
        <input class="form-control" name="filial" id="codeok005">
        <br>

        <h4>13. Регном</h4>
        <input class="form-control" name="regnom" id="codeok005">
        <br>

        <h4>14. Номер бланка</h4>
        <input class="form-control" name="nblank" id="codeok005">
        <br>

        <h4>15. Дата выдачи</h4>
        <input type="date" name="datavidachi">
        <br><br>

        <h4>16. Дата действия</h4>
        <input type="date" name="datadeistviya">
        <br><br>

        <h4>17. Номер партии</h4>
        <input class="form-control" name="npartiya" id="codeok005">
        <br>

        <h4>18. Год урожая</h4>
        <input class="form-control" name="godurojaya" id="codeok005">
        <br>

        <h4>19. Страна поставщик</h4>
        <input class="form-control" name="strana" id="codeok005">
        <br>

        <h4>20. Производитель(продавец)</h4>
        <input class="form-control" name="proizvoditel" id="codeok005">
        <br>

        <h4>21. Кому выдано</h4>
        <input class="form-control" name="komuvidani" id="codeok005">
        <br>

        <h4>22. ФИО</h4>
        <input class="form-control" name="fio" id="codeok005">
        <br>

        <h4>23. Выдан на основании</h4>
        <input class="form-control" name="vidannaosnovanii" id="codeok005">
        <br>

        <h4>24. Испытания проведены</h4>
        <input class="form-control" name="ispitaniyaprovedeni" id="codeok005">
        <br>
        </form>
    </div>














</div>



<button type="submit" form="certifikatik" class="btn btn-default">Добавить</button>

<script>
    var output = document.getElementById("ncert");

    // клик по кнопке "заполнить"
    document.getElementById("fill").onclick = function ()
        //при нажатии кнопки происходит эти действия
    {
        var txt1 = document.getElementById("codeorgan").options.selectedIndex;
        var txt3 = document.getElementById("codeorgan").options[txt1].text;
        var txt2 = document.getElementById("codelab").options.selectedIndex;
        var txt4 = document.getElementById("codelab").options[txt2].text;
        var txt5 = document.getElementById("codeobjectcert").options.selectedIndex;
        var txt6 = document.getElementById("codeobjectcert").options[txt5].text;
        output.value = "РСЦ "+txt3+" "+txt4+" "+txt6+" 0019-18";
    }
    $(".chosen-select").chosen();
</script>
<script src="https://harvesthq.github.io/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="https://harvesthq.github.io/chosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>