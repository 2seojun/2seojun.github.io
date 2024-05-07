<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $childetiket = isset($_POST['childetiket']) ? $_POST['childetiket'] : 0;
    $adulttiket = isset($_POST['adulttiket']) ? $_POST['adulttiket'] : 0;
    $childBIG3 = isset($_POST['childBIG3']) ? $_POST['childBIG3'] : 0;
    $adultBIG3 = isset($_POST['adultBIG3']) ? $_POST['adultBIG3'] : 0;
    $childFreeTicker = isset($_POST['childFreeTicker']) ? $_POST['childFreeTicker'] : 0;
    $adultFreeTicker = isset($_POST['adultFreeTicker']) ? $_POST['adultFreeTicker'] : 0;
    $childYearTicker = isset($_POST['childYearTicker']) ? $_POST['childYearTicker'] : 0;
    $adultYearTicker = isset($_POST['adultYearTicker']) ? $_POST['adultYearTicker'] : 0;

    $total = ($childetiket * 7000) + ($adulttiket * 10000) + ($childBIG3 * 12000) + ($adultBIG3 * 16000) +
             ($childFreeTicker * 21000) + ($adultFreeTicker * 26000) + ($childYearTicker * 70000) + ($adultYearTicker * 90000);

    $customer_name = isset($_POST['customer_name']) ? $_POST['customer_name'] : "";
}
?>

<html>
<head>
<meta charset="utf-8">
    <title>amusementPark</title>
    <style>
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #ccc;
        }
        a { text-decoration: none; }
    </style>
</head>
<body>
    <div class="input-wrap"> 
        <form action="" method="POST"> 
            <p>고객성명<input type="text" name="customer_name"></p>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>구분</th>
                        <th colspan="2">어린이</th>  
                        <th colspan="2">어른</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>입장권</td>
                        <td>7.000</td>
                        <td><select name="childetiket">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                            </p></td>
                        <td>10.000</td>
                        <td> 
                            <select name="adulttiket">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                            </p>
                            </td>
                            <td>입장</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BIG3</td>
                        <td>12.000</td>
                        <td><select name="childBIG3">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                            </p></td>
                        <td>16.000</td>
                        <td> 
                            <select name="adultBIG3">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                            </p>
                            </td>
                            <td>입장+놀이3종</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>자유이용권</td>
                        <td>21.000</td>
                        <td><select name="childFreeTicker">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                            </p></td>
                        <td>26.000</td>
                        <td> 
                            <select name="adultFreeTicker">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                            </p>
                            </td>
                            <td>입장+놀이자유</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>연간이용권</td>
                        <td>70.000</td>
                        <td><select name="childYearTicker">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                            </p></td>
                        <td>90.000</td>
                        <td> 
                            <select name="adultYearTicker">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                            </p>
                            </td>
                            <td>입장+놀이자유</td>
                    </tr>
                   
                </tbody>
            </table>
            <input type="submit" name="합계" value="합계">
       </form>
       <?php echo date("y년m월d일 h시 i분"); ?>
       
       
       <?php 
if(isset($total) && isset($customer_name)) {
    echo "<p>{$customer_name} 고객님, 감사합니다.</p>";

    if (isset($childetiket) && $childetiket >= 1) {
        echo "<p>어린이 티켓: {$childetiket}장</p>";
    }
    if (isset($adulttiket) && $adulttiket >= 1) {
        echo "<p>어른 티켓: {$adulttiket}장</p>";
    }
////////////////////////////////////////////////////////////


    if (isset($childBIG3) && $childBIG3 >= 1) {
        echo "<p>어린이 BIG3티켓: {$childBIG3}장</p>";
    }
    if (isset($adultBIG3) && $adultBIG3 >= 1) {
        echo "<p>어른 BIG3티켓: {$adultBIG3}장</p>";
    }

////////////////////////////////////////////////////////////

    if (isset($childFreeTicker) && $childFreeTicker >= 1) {
        echo "<p>어린이 자유이용권: {$childFreeTicker}장</p>";
    }
    if (isset($adultFreeTicker) && $adultFreeTicker >= 1) {
        echo "<p>어른 자유이용권: {$adultFreeTicker}장</p>";    
    }
    
///////////////////////////////////////////////////////////

    if (isset($childYearTicker) && $childYearTicker >= 1) {
        echo "<p>어린이 연간이용권: {$childYearTicker}장</p>";
    }

    if (isset($adultYearTicker) && $adultYearTicker >= 1) {
        echo "<p>어른 연간이용권: {$adultYearTicker}장</p>";
    }
    echo "<p>총 가격: {$total}원</p>";
} 
?>
      
    </div>
</body>
</html>