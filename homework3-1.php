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
