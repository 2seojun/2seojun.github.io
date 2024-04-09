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