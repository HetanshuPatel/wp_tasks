<!DOCTYPE html>
<html>
<head>
  <title>Fibonacci Numbers</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["inputNumber"];

    if (!is_numeric($n) || $n < 1 || floor($n) != $n) {
      echo "<p>Please enter a positive integer.</p>";
    } else {
      $fibonacciNumbers = generateFibonacciNumbers($n);

      echo "<h2>Fibonacci Numbers</h2>";
      echo "<ul>";
      foreach ($fibonacciNumbers as $number) {
        echo "<li>$number</li>";
      }
      echo "</ul>";
    }
  }

  function generateFibonacciNumbers($n) {
    $fibonacciNumbers = array();
    $fibonacciNumbers[0] = 0;
    $fibonacciNumbers[1] = 1;

    for ($i = 2; $i < $n; $i++) {
      $fibonacciNumbers[$i] = $fibonacciNumbers[$i - 1] + $fibonacciNumbers[$i - 2];
    }

    return $fibonacciNumbers;
  }
  ?>
</body>
</html>
