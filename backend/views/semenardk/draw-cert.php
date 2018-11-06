
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Картофель</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        .par1{font-family: Arial; font-size: 14px;}
        .par2{font-family: Times New Roman; font-size: 16px; }
        .par3{font-family: Times New Roman; font-size: 14px;}
        .page2
        {margin:0px;
            background: transparent url("http://img.ipev.ru/2016/01/21/Back_working_small.jpg") no-repeat scroll 0px 0px;
            width:785px;
            height:1110px; margin: 0px; background-position: 1px 3px;}
        .page1
        {margin:0px;}
        @media print {
            .more {
                page-break-before: always;
            }
        }
        .bord
        {border-color: transparent;}
        .bordc {border-color: transparent;}
    </style>
</head>
<body bgcolor="" style="background-image: url('http://img.ipev.ru/2016/06/16/Front_working.jpg'); background-repeat: no-repeat; background-position:  1px  3px; position: absolute; margin: 0px;">
<div style="width: 785px; height: 1110px;">
    <table border="0" cellpadding="0" cellspacing="0" height="385" width="785">
        <tbody>
        <tr>
            <td height="225" width="61"></td>
            <td width="640"></td>
            <td width="67"></td>
        </tr>
        <tr>
            <td height="89" style="font-family: Times New Roman; font-size: 16px; height: 89px;">
                <div style="width: 70px;"></div>
            </td>
            <td style="vertical-align: top;">
                <div style="width: 640.383px; height: 86px; font-family: Times New Roman; font-size: 16px; line-height: 29px; text-align: center; vertical-align: top; overflow: hidden;">Филиал ФГБУ &laquo;Россельхозцентр&raquo; по <?= $model['filial'] ?><br />
                    Регистрационный номер <?= $model['regnom'] ?></div>
            </td>
            <td>
                <div style="width: 61px;"></div>
            </td>
        </tr>
        <tr>
            <td height="63"></td>
            <td align="center" valign="bottom"><?= $model['ncert'] ?></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <table border="0" cellpadding="0" cellspacing="0" height="169" width="785">
        <tbody>
        <tr>
            <td width="63">
                <div style="width: 70px;"></div>
            </td>
            <td valign="bottom" width="400">
                <div style="width: 380.383px; height: 140px; font-family: Times New Roman; font-size: 16px; line-height: 29px; text-align: center; vertical-align: top; overflow: hidden;"><?= $model['datavidachi'] ?></div>
            </td>
            <td valign="bottom" width="247">
                <div style="width: 260.383px; height: 140px; font-family: Times New Roman; font-size: 16px; line-height: 29px; text-align: center; vertical-align: top; overflow: hidden; text-indent: 10px;"><?= $model['datadeistviya'] ?>
                    <?php foreach ($renewal as $item): ?>

                        <br> <?= $item['date'] ?>

                    <?php endforeach;?>
                </div>
            </td>
            <td width="57">
                <div style="width: 61px;"></div>
            </td>
        </tr>
        </tbody>
    </table>

    <table border="0" cellpadding="0" cellspacing="0" height="127" width="785">
        <tbody>
        <tr>
            <td width="61">
                <div style="width: 70px;"></div>
            </td>
            <td style="width=: 476px; height: 90px; vertical-align: bottom;" width="476">
                <div style="width: 467px; height: 109px; font-family: Times New Roman; font-size: 16px; line-height: 29px; text-align: justify; vertical-align: top; overflow: hidden; text-indent: 67px;"><?= $model['object'] ?> Название: <?= $model['sort'] ?>, Категория - <?= $model['categoriya'] ?> ,
                    Партия № <?= $model['npartiya'] ?>, Год урожая - <?= $model['godurojaya'] ?>, Количество: <?= $model['qty'] ?> <?= $model['edizmereniya'] ?> <?= $model['prochie'] ?> Страна поставщик: <?= $model['strana'] ?></div>
            </td>
            <td width="184">
                <table border="0" height="90" width="158">
                    <tbody>
                    <tr>
                        <td height="58" style="width: 166px; height: 40px; letter-spacing: 6px; text-indent: 10px; white-space: nowrap;"><?= $model['codeok005'] ?></td>
                    </tr>
                    <tr>
                        <td height="43" style="height: 40px; letter-spacing: 16px; text-indent: 10px;" valign="bottom"><?= $model['codeobject'] ?></td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td width="50">
                <div style="width: 50px;"></div>
            </td>
        </tr>
        </tbody>
    </table>

    <table border="0" cellpadding="0" cellspacing="0" height="266" width="785">
        <tbody>
        <tr>
            <td height="89" width="65"></td>
            <td width="663">
                <div style="font-family: Times New Roman; font-size: 16px; height: 82px; line-height: 29px; overflow: hidden; text-align: justify; text-indent: 216px; padding-top: 9px; vertical-align: top; width: 650px;"><?= $model['sootvetstvietrebovani'] ?></div>
            </td>
            <td width="61"></td>
        </tr>
        <tr>
            <td height="87">
                <div style="width: 70px;"></div>
            </td>
            <td>
                <div style="font-family: Times New Roman; font-size: 16px; height: 82px; line-height: 29px; overflow: hidden; text-align: justify; text-indent: 216px; padding-top: 4px; vertical-align: top; width: 650px;"><?= $model['proizvoditel'] ?></div>
            </td>
            <td>
                <div style="width: 61px;"></div>
            </td>
        </tr>
        <tr>
            <td height="90"></td>
            <td>
                <div style="font-family: Times New Roman; font-size: 16px; height: 82px; line-height: 29px; overflow: hidden; text-align: justify; text-indent: 153px; padding-top: 2px; vertical-align: top; width: 650px;"><?= $model['komuvidani'] ?></div>
            </td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <table border="0" cellpadding="0" cellspacing="0" width="785">
        <tbody>
        <tr>
            <td height="60" width="70"></td>
            <td width="440"></td>
            <td align="center" valign="bottom" width="213"><?= $model['fio'] ?></td>
            <td width="62"></td>
        </tr>
        </tbody>
    </table>
</div>

<p class="more"></p>
<div class="page2">
    <table width="785" cellspacing="0" cellpadding="0" border="0">
        <tbody>
        <tr>
            <td width="70" height="77"><img src="http://img.ipev.ru/2016/09/09/left_70_77_1.gif" /></td>
            <td width="655">&nbsp;</td>
            <td width="60">&nbsp;</td>
        </tr>
        <tr>
            <td height="74">
                <div style="width: 69px;"></div>
            </td>
            <td>
                <div style="font-family: Times New Roman; font-size: 16px; height: 62px; line-height: 20px; overflow: hidden; text-align: justify; text-indent: 253px; padding-top: 15px; vertical-align: top; width: 650px;"><?= $model['vidannaosnovanii'] ?></div>
            </td>
            <td>
                <div style="width: 60px;"></div>
            </td>
        </tr>
        <tr>
            <td height="109">&nbsp;</td>
            <td style="text-indent: 200px; vertical-align: top; line-height: 29px;"><?= $model['ispitaniyaprovedeni'] ?></td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
    <table width="785" height="741" cellspacing="0" cellpadding="0" border="0">
        <tbody>
        <tr>
            <td width="70" height="30">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
            <td width="60">&nbsp;</td>
        </tr>
        <tr>
            <td height="655">
                <div style="width: 70px;"></div>
            </td>
            <td colspan="2" valign="top">
                <table style="width: 647px;" cellspacing="0" cellpadding="0" border="1">
                    <tbody>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">1. Сортовая (видовая) чистота, % (типичность):<strong><?= $model['1sortovaya'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">Категория сортовой чистоты:<strong><?= $model['catsortchis'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">2. Чистота,%:<strong><?= $model['2chistota'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">9.Жизнеспособность, %:<strong><?= $model['9jiznesp'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">в том числе , %: <strong><?= $model['2vtomchisle'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">метод определения:<strong><?= $model['9metod'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">3. Семян других культурных растений,%:<strong><?= $model['3drcult'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">10.Влажность,%:<strong><?= $model['10vlajnost'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">в том числе семян других видов вики,%:<strong><?= $model['3vtcviki'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">11.Масса 1000 семян, г:<strong><?= $model['11massa'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">4. Семян других видов кормовых трав,%:<strong><?= $model['4cormovie'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">12.Зараженность болезнями:<strong><?= $model['12zarajenn'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">5.Семян других растений(шт/кг или %):<strong><?= $model['5drrasten'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">Склероции ,%:<strong><?= $model['12skleroc'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">6.Семян сорных растений, всего (шт/кг или %):<strong><?= $model['6sornih'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">Головневые образования, %:<strong><br /><?= $model['12golovnevie'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">в том числе наиболее вредных сорняков (для кормовых трав); шт/кг:<strong><?= $model['6vtcnaibvred'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">13. Заселенность вредителями, шт/кг:<strong><br /><?= $model['13zaselenvred'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">Семян карантинных растений, всего (шт/кг):<strong><br /><?= $model['6karant'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">14. Одноростковость, %:<strong><?= $model['14odnorast'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">Семян ядовитых растений, всего (шт/кг):<strong><br /><?= $model['6yadovit'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">15. Стебельки длиннее 1 см шт/кг*:<strong><?= $model['15stebel'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">7.Энергия прорастания, %:<strong><?= $model['7energiya'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">16. Выравненность, % *:<strong><?= $model['16viravnen'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">8. Всхожесть, %:<strong><?= $model['8vshojest'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">17.Односемянность, %*:<strong><?= $model['17odnosem'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">в том числе твердых: %:<strong><?= $model['8vtctvrd'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">&nbsp;</td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="2" style="width: 632px; height: 13px; border-color: #999999; vertical-align: top;">Условия проращивания: <strong><?= $model['uslprorash'] ?></strong></td>
                        <td colspan="2" style="width: 447px; height: 13px; border-color: #999999; vertical-align: top;">&nbsp;</td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="width: 1369px; height: 13px; border-color: #999999; vertical-align: top;" colspan="4">18. Ботанический состав семян других видов:<strong> <?= $model['18sostav'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="width: 1369px; height: 13px; border-color: #999999; vertical-align: top;" colspan="4">19. Другие определения:<strong><?= $model['19drugie'] ?></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td colspan="4" style="width: 1369px; height: 13px; border-color: #999999; vertical-align: top;">20. Сертификат соответствия на сельхозугодье:&nbsp;<strong><?= $model['20sert'] ?></strong></td>
                    </tr>
                    <tr style="height: 15px;">
                        <td colspan="4" style="width: 1369px; height: 15px; border-color: #999999; vertical-align: top;">21. Фитосанитарный паспорт поля:&nbsp;<strong> <?= $model['21pasport'] ?></strong></td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td>
                <div style="width: 60px;"></div>
            </td>
        </tr>
        <tr>
            <td height="56">&nbsp;</td>
            <td width="433">&nbsp;</td>
            <td width="222" valign="bottom" align="center"><?= $model['fio'] ?></td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
