<html >
<head>

<title>Number Comparison Result</title>
</head>
<body>

<?php
if(isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    
    if($number1 > $number2) {
        echo "<h2>The first number ($number1) is greater than the second number ($number2).</h2>";
    } elseif($number1 < $number2) {
        echo "<h2>The second number ($number2) is greater than the first number ($number1).</h2>";
    } else {
        echo "<h2>Both numbers are equal.</h2>";
    }
}
?>

</body>
</html>