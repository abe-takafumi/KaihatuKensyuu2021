<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <style type="text/css">
            table.ht {
                width: 600px;
                height: 150px;
                border: 2px #2b2b2b solid;
            }
            td, th {
                border: 2px #2b2b2b solid;
            }
            table.cs {
                width: 600px;
                height: 150px;
                border: 2px #2b2b2b solid;
            }
            td, th {
                border: 2px #2b2b2b solid;
            }
        </style>
        <title>第二回課題、フォーム部品練習</title>
    </head>
    <body>
        <h1>消費税計算</h1>
        <form method='post' action='tax.php'>
        <table class="ht" border="1" style="border-collapse:collapse;">
            <tr>
                <th>商品名</th>
                <th>価格（単位：円、税抜き）</td>
                <th>個数</th>
                <th>税率</th>
            </tr>
            <tr>
                <td><input type="text" name="shohin1" size="20" maxlength="20" /></td>
                <td><input type="text" name="cost1" size="20" maxlength="20" /></td>
                <td><input type="text" name="kazu1" size="3" maxlength="3" />個</td>
                <td>
                    <input type="radio" name="zei1" value="8" />8%
                    <input type="radio" name="zei1" value="10" />10%
                </td>
            </tr>
            <tr>
                <td><input type="text" name="shohin2" size="20" maxlength="20" /></td>
                <td><input type="text" name="cost2" size="20" maxlength="20" /></td>
                <td><input type="text" name="kazu2" size="3" maxlength="3" />個</td>
                <td>
                    <input type="radio" name="zei2" value="8" />8%
                    <input type="radio" name="zei2" value="10" />10%
                </td>
            </tr>
            <tr>
                <td><input type="text" name="shohin3" size="20" maxlength="20" /></td>
                <td><input type="text" name="cost3" size="20" maxlength="20" /></td>
                <td><input type="text" name="kazu3" size="3" maxlength="3" />個</td>
                <td>
                    <input type="radio" name="zei3" value="8" />8%
                    <input type="radio" name="zei3" value="10" />10%
                </td>
            </tr>
            <tr>
                <td><input type="text" name="shohin4" size="20" maxlength="20" /></td>
                <td><input type="text" name="cost4" size="20" maxlength="20" /></td>
                <td><input type="text" name="kazu4" size="3" maxlength="3" />個</td>
                <td>
                    <input type="radio" name="zei4" value="8" />8%
                    <input type="radio" name="zei4" value="10" />10%
                </td>
            </tr>
            <tr>
                <td><input type="text" name="shohin5" size="20" maxlength="20" /></td>
                <td><input type="text" name="cost5" size="20" maxlength="20" /></td>
                <td><input type="text" name="kazu5" size="3" maxlength="3" />個</td>
                <td>
                    <input type="radio" name="zei5" value="8" />8%
                    <input type="radio" name="zei5" value="10" />10%
                </td>
            </tr>
        </table>
            <input type="submit" value="送信">
            <input type="reset" value="リセット">

        </form>
        <?php
            $price1 = $_POST['cost1'] * $_POST['kazu1'];
            $price1 = $price1 + $price1 * $_POST['zei1'] * 0.01;

            $price2 = $_POST['cost2'] * $_POST['kazu2'];
            $price2 = $price2 + $price2 * $_POST['zei2'] * 0.01;

            $price3 = $_POST['cost3'] * $_POST['kazu3'];
            $price3 = $price3 + $price3 * $_POST['zei3'] * 0.01;

            $price4 = $_POST['cost4'] * $_POST['kazu4'];
            $price4 = $price4 + $price4 * $_POST['zei4'] * 0.01;

            $price5 = $_POST['cost5'] * $_POST['kazu5'];
            $price5 = $price5 + $price5 * $_POST['zei5'] * 0.01;

            $price_sum = $price1 + $price2 + $price3 + $price4 + $price5;
        ?>
        <table class="cs" border="1" style="border-collapse:collapse;">
            <tr>
                <th>商品名</th>
                <th>価格（単位：円、税抜き）</td>
                <th>個数</th>
                <th>税率</th>
                <th>小計（単位：円）</th>
            </tr>
            <tr>
                <td><?php echo $_POST['shohin1']; ?></td>
                <td><?php echo $_POST['cost1']; ?></td>
                <td><?php echo $_POST['kazu1']; ?></td>
                <td><?php echo $_POST['zei1'] ."%";?></td>
                <td><?php echo $price1;?></td>
            </tr>
            <tr>
                <td><?php echo $_POST['shohin2']; ?></td>
                <td><?php echo $_POST['cost2']; ?></td>
                <td><?php echo $_POST['kazu2']; ?></td>
                <td><?php echo $_POST['zei2']."%";?></td>
                <td><?php echo $price2 ;?></td>
            </tr>
            <tr>
                <td><?php echo $_POST['shohin3'];?></td>
                <td><?php echo $_POST['cost3'];?></td>
                <td><?php echo $_POST['kazu3'];?></td>
                <td><?php echo $_POST['zei3']."%";?></td>
                <td><?php echo $price3;?></td>
            </tr>
            <tr>
                <td><?php echo $_POST['shohin4']; ?></td>
                <td><?php echo $_POST['cost4']; ?></td>
                <td><?php echo $_POST['kazu4']; ?></td>
                <td><?php echo $_POST['zei4']."%"; ?></td>
                <td><?php echo $price4; ?></td>
            </tr>
            <tr>
                <td><?php echo $_POST['shohin5']; ?></td>
                <td><?php echo $_POST['cost5']; ?></td>
                <td><?php echo $_POST['kazu5']; ?></td>
                <td><?php echo $_POST['zei5'] ."%";?></td>
                <td><?php echo $price5; ?></td>
            </tr>
            <tr>
                <td colspan="4" style="text-align:left;">合計</td>
                <td><?php echo $price_sum;?></td>
            </tr>
        </table>
    </body>
</html>
