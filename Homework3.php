<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
</head>
<body>
    <h1>Factorial</h1>
    <p>1부터 30까지의 숫자의 합과 곱:</p>

    <?php
    $n = 30;
    $sum = 0;
    $prod = 1;
    
    for($i = 1; $i <= $n; $i++) {
        echo $i . " ";
        $sum += $i;
        $prod *= $i;
    }
    
    echo "<br>";
    echo "Sum: " . $sum . "<br>";
    echo "Factorial: " . $prod;
    ?>
</body>
</html>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>랜덤한 숫자 생성 및 소팅</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="n">생성할 숫자 개수:</label>
    <input type="number" id="n" name="n" value="5" min="1">
    <button type="submit">숫자 생성 및 소팅</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 출력 갯수의 숫자
    $n = $_POST["n"];

    // 배열을 초기화합니다.
    $data = array();

    // n개의 랜덤한 정수를 생성하고 배열에 추가합니다.
    for ($i = 0; $i < $n; $i++) {
        $data[$i] = rand(10, 100); // 10부터 100까지의 범위에서 랜덤한 숫자 생성
    }

    //랜덤 숫자 출력
    echo "생성된 숫자: ";
    foreach ($data as $number) {
        echo $number . " ";
    }

    //숫자 정렬
    sort($data);

    //정렬된 값을 출력
    echo "<br> 소팅된 숫자: ";
    foreach ($data as $number) {
        echo $number . " ";
    }
}
?>

</body>
</html>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci 수열과 비례 출력</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="n">출력할 피보나치 수열 개수:</label>
    <input type="number" id="n" name="n" value="5" min="1" max="100">
    <button type="submit">출력</button>
</form>

<?php
function fibonacci($n) {
    $fib = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자가 입력한 데이터에서 n 값을 가져옵니다.
    $n = $_POST["n"];

    // 피보나치 수열을 계산합니다.
    $fibonacci_sequence = fibonacci($n);

    // 결과 출력
    echo '<table border="1">';
    echo '<tr><th>i</th><th>fi</th><th>fi+1</th><th>fi+1 / fi</th></tr>';
    for ($i = 0; $i < $n; $i++) {
        $fi = $fibonacci_sequence[$i];
        $fi_plus_1 = ($i < $n - 1) ? $fibonacci_sequence[$i + 1] : '';
        $ratio = ($fi_plus_1 !== '') ? number_format($fi_plus_1 / $fi, 6) : '';
        echo "<tr><td>$i</td><td>$fi</td><td>$fi_plus_1</td><td>$ratio</td></tr>";
    }
    echo '</table>';
}
?>

</body>
</html>

















<!DOCTYPE html>
<html>
<head>
    <title>도형 면적과 체적 계산기</title>
</head>
<body>
    <h1>도형 면적과 체적 계산기</h1>
    <h2>삼각형 면적</h2>
    <form method="post" action="">
        <label for="tri-base">밑변:</label>
        <input type="number" name="tri-base" id="tri-base" required>
        <br>
        <label for="tri-height">높이:</label>
        <input type="number" name="tri-height" id="tri-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['tri-base']) && isset($_POST['tri-height'])) {
            $base = $_POST['tri-base'];
            $height = $_POST['tri-height'];
            $area = $base * $height / 2;
            echo "<p>삼각형의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>직사각형 면적</h2>
    <form method="post" action="">
        <label for="rect-width">가로:</label>
        <input type="number" name="rect-width" id="rect-width" required>
        <br>
        <label for="rect-height">세로:</label>
        <input type="number" name="rect-height" id="rect-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['rect-width']) && isset($_POST['rect-height'])) {
            $width = $_POST['rect-width'];
            $height = $_POST['rect-height'];
            $area = $width * $height;
            echo "<p>직사각형의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>원 면적</h2>
    <form method="post" action="">
        <label for="cir-radius">반지름:</label>
        <input type="number" name="cir-radius" id="cir-radius" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['cir-radius'])) {
            $radius = $_POST['cir-radius'];
            $area = pi() * pow($radius, 2);
            echo "<p>원의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>직육면체 체적</h2>
    <form method="post" action="">
        <label for="rectp-width">가로:</label>
        <input type="number" name="rectp-width" id="rectp-width" required>
        <br>
        <label for="rectp-length">세로:</label>
        <input type="number" name="rectp-length" id="rectp-length" required>
        <br>
        <label for="rectp-height">높이:</label>
        <input type="number" name="rectp-height" id="rectp-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
    if(isset($_POST['rectp-width']) && isset($_POST['rectp-length']) && isset($_POST['rectp-height'])) {
        $width = $_POST['rectp-width'];
        $length = $_POST['rectp-length'];
        $height = $_POST['rectp-height'];
        $volume = $width * $length * $height;
        echo "<p>직육면체의 체적은 $volume 입니다.</p>";
    }
?>


<h2>원통 체적</h2>
<form method="post" action="">
    <label for="cyl-radius">반지름:</label>
    <input type="number" name="cyl-radius" id="cyl-radius" required>
    <br>
    <label for="cyl-height">높이:</label>
    <input type="number" name="cyl-height" id="cyl-height" required>
    <br>
    <input type="submit" value="계산">
</form>
<?php
    if(isset($_POST['cyl-radius']) && isset($_POST['cyl-height'])) {
        $radius = $_POST['cyl-radius'];
        $height = $_POST['cyl-height'];
        $volume = pi() * pow($radius, 2) * $height;
        echo "<p>원통의 체적은 $volume 입니다.</p>";
    }
?>


<h2>구 체적</h2>
<form method="post" action="">
    <label for="sph-radius">반지름:</label>
    <input type="number" name="sph-radius" id="sph-radius" required>
    <br>
    <input type="submit" value="계산">
</form>
<?php
    if(isset($_POST['sph-radius'])) {
        $radius = $_POST['sph-radius'];
        $volume = 4/3 * pi() * pow($radius, 3);
        echo "<p>구의 체적은 $volume 입니다.</p>";
    }
?>
</body>
</html>










<!DOCTYPE html>
<html>
<head>
    <title>달력</title>
</head>
<body>
<form action="calendar.php" method="post">
년(年)을 입력하세요 : <input type="number" name="y" /><br />
월(月)을 입력하세요 : <input type="number" name="m" /><br />
<input type="submit" value="확인" />
</form>
<?PHP
if(isset($_POST['y']) && strlen($_POST['y']) > 0 && isset($_POST['m']) && strlen($_POST['m']) > 0) {
    $m = $_POST["m"];
    $y = $_POST["y"];
    if(checkdate($m,1,$y)) {
        $firstweekday = getDate(mktime(0,0,0,$m,1,$y)); //해당 월 1일의 요일
        $firstweekday = $firstweekday['wday'];
        $lastday = date("t", mktime(0,0,0,$m,1,$y)); //t = 주어진 월의 총 일 수(ex : 2014년 1월 = "31" 일)
        $fc = ceil(($firstweekday+$lastday)/7); //총 주의 수
        $count = $fc*7; //for 문 count
        $j=1;
        echo "<table border='1' width=\"500\" bordercolor=\"#0120FF\">";
        echo "<tr bgcolor=\"#66F1FF\" align=\"center\"><td colspan=\"7\">". $y."년 ".$m."월 달력</td></tr>";
        echo "<tr align=\"right\" bgcolor=\"#129ZZF\"><td>일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td>토</td></tr>";
        for($i=1; $i<=$count; $i++){
            if($i%7==1){
                echo "<tr>";
            }
            echo "<td>";
            if($i>$firstweekday && $j<=$lastday){
                echo $j;
                $j++;
            }
            else {
                echo "&nbsp;";
            }
            echo "</td>";
            if($i%7==0){
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br/>";        
    }
}
else {  
    echo "<script>alert(\"올바른 날짜형식을 입력해 주세요\");</script>";  
}
?>
</body>
</html>