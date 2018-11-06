
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Картофель</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">.par1{font-family: Arial; font-size: 14px;}
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
                <div style="width: 640.383px; height: 86px; font-family: Times New Roman; font-size: 16px; line-height: 29px; text-align: center; vertical-align: top; overflow: hidden;">Филиал ФГБУ &laquo;Россельхозцентр&raquo; по <?= $kartofel['filial'] ?><br />
                    Регистрационный номер <?= $kartofel['regnom'] ?></div>
            </td>
            <td>
                <div style="width: 61px;"></div>
            </td>
        </tr>
        <tr>
            <td height="63"></td>
            <td align="center" valign="bottom"><?= $kartofel['ncert'] ?></td>
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
                <div style="width: 380.383px; height: 140px; font-family: Times New Roman; font-size: 16px; line-height: 29px; text-align: center; vertical-align: top; overflow: hidden;"><?= $kartofel['datavidachi'] ?></div>
            </td>
            <td valign="bottom" width="247">
                <div style="width: 260.383px; height: 140px; font-family: Times New Roman; font-size: 16px; line-height: 29px; text-align: center; vertical-align: top; overflow: hidden; text-indent: 10px;"><?= $kartofel['datadeistviya'] ?></div>
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
                <div style="width: 467px; height: 109px; font-family: Times New Roman; font-size: 16px; line-height: 29px; text-align: justify; vertical-align: top; overflow: hidden; text-indent: 67px;"><?= $kartofel['object'] ?> Название: <?= $kartofel['sort'] ?>, Категория - <?= $kartofel['categoriya'] ?> ,
                    Партия № <?= $kartofel['npartiya'] ?>, Год урожая - <?= $kartofel['godurojaya'] ?>, Количество: <?= $kartofel['qty'] ?> <?= $kartofel['edizmereniya'] ?> <?= $kartofel['prochie'] ?> Страна поставщик: <?= $kartofel['strana'] ?></div>
            </td>
            <td width="184">
                <table border="0" height="90" width="158">
                    <tbody>
                    <tr>
                        <td height="58" style="width: 166px; height: 40px; letter-spacing: 6px; text-indent: 10px; white-space: nowrap;"><?= $kartofel['codeok005'] ?></td>
                    </tr>
                    <tr>
                        <td height="43" style="height: 40px; letter-spacing: 16px; text-indent: 10px;" valign="bottom"><?= $kartofel['codeobject'] ?></td>
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
                <div style="font-family: Times New Roman; font-size: 16px; height: 82px; line-height: 29px; overflow: hidden; text-align: justify; text-indent: 216px; padding-top: 9px; vertical-align: top; width: 650px;"><?= $kartofel['sootvetstvietrebovani'] ?></div>
            </td>
            <td width="61"></td>
        </tr>
        <tr>
            <td height="87">
                <div style="width: 70px;"></div>
            </td>
            <td>
                <div style="font-family: Times New Roman; font-size: 16px; height: 82px; line-height: 29px; overflow: hidden; text-align: justify; text-indent: 216px; padding-top: 4px; vertical-align: top; width: 650px;"><?= $kartofel['proizvoditel'] ?></div>
            </td>
            <td>
                <div style="width: 61px;"></div>
            </td>
        </tr>
        <tr>
            <td height="90"></td>
            <td>
                <div style="font-family: Times New Roman; font-size: 16px; height: 82px; line-height: 29px; overflow: hidden; text-align: justify; text-indent: 153px; padding-top: 2px; vertical-align: top; width: 650px;"><?= $kartofel['komuvidani'] ?></div>
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
            <td align="center" valign="bottom" width="213"><?= $kartofel['fio'] ?></td>
            <td width="62"></td>
        </tr>
        </tbody>
    </table>
</div>

<p class="more"></p>

<div class="page2">
    <table border="0" cellpadding="0" cellspacing="0" width="785">
        <tbody>
        <tr>
            <td height="77" width="70"><img src="http://img.ipev.ru/2016/09/09/left_70_77_1.gif" /></td>
            <td width="655"></td>
            <td width="60"></td>
        </tr>
        <tr>
            <td height="74">
                <div style="width: 69px;"></div>
            </td>
            <td>
                <div style="font-family: Times New Roman; font-size: 16px; height: 62px; line-height: 20px; overflow: hidden; text-align: justify; text-indent: 253px; padding-top: 15px; vertical-align: top; width: 650px;"><?= $kartofel['vidannaosnovanii'] ?></div>
            </td>
            <td>
                <div style="width: 60px;"></div>
            </td>
        </tr>
        <tr>
            <td height="109"></td>
            <td style="text-indent: 200px; line-height: 29px; font-family: Times New Roman; font-size: 16px; vertical-align: top;"><?= $kartofel['vidannaosnovanii'] ?></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <table border="0" cellpadding="0" cellspacing="0" width="785">
        <tbody>
        <tr style="height: 79px;">
            <td style="height: 79px;" width="70"><img src="http://img.ipev.ru/2016/09/09/left_70_77_1.gif" /></td>
            <td colspan="2" style="height: 79px;"></td>
            <td style="height: 79px;" width="60"></td>
        </tr>
        <tr style="height: 640px;">
            <td style="height: 640px;">
                <div style="width: 70px;"></div>
            </td>
            <td colspan="2" style="font-family: Times New Roman; font-size: 16px; height: 640px;" valign="top">
                <table border="1" cellpadding="0" cellspacing="0" style="width: 644px;">
                    <tbody>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Объединенная проба ( <strong>250</strong> ) клубней</td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Сортовая чистота посадок картофеля,%: <strong>100</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие клубней других ботанических сортов,%: <strong>не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие клубней пораженных болезнями, всего,%: <strong>не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">В том числе:<strong> не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие клубней с железистой пятнистостью и потемнением мякоти,%:<strong> не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие клубней с механическими повреждениями,%: <strong>не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие клубней с повреждениями с/х вредителями:<strong> не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие клубней, не отвечающих требованиям по размеру, %: <strong>не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие земли и посторонних примесей,%:<strong> не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Результаты по определению скрытой зараженности:<strong> Протокол  РСЦ 052 052 04 0021-18 от 09.04.2018 г.</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Поступило проб для исследования, шт:<strong> 7</strong></td>
                    </tr>
                    <tr style="height: 26px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие растений или клубней в образце с положительной реакцией на фитопатогенные вирусы, % по счету:<strong> не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">в том числе: ХВК, SBK, MBK:&nbsp;<strong>не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">УВК, ВСЛК: <strong>не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 23px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Наличие растений или клубней в образце с положительной реакцией на бактериальную инфекцию (черная ножка или кольцевая гниль), % по счету:<strong> не обнаружено</strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;">Другие определения: <strong></strong></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px;"></td>
                    </tr>
                    <tr style="height: 13px;">
                        <td style="height: 13px; border-color: #000000; width: 640px; font-family: Times New Roman; font-size: 16px;"></td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td style="height: 640px;">
                <div style="width: 60px;"></div>
            </td>
        </tr>
        <tr style="height: 56px;">
            <td style="height: 56px;"><strong>&nbsp;</strong></td>
            <td style="height: 56px;" width="433"><strong>&nbsp;</strong></td>
            <td align="center" style="width: 222px; vertical-align: top; height: 56px;" valign="bottom" width="222"><?= $kartofel['fio'] ?></td>
            <td style="height: 56px;"><strong>&nbsp;</strong></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>

