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