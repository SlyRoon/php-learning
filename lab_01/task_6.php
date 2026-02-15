<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 6</title>
</head>
<body>
    <h1>Робота з тризначним числом</h1>
    
    <?php 
    $number = mt_rand(100, 999);
    
    echo "<h2>Початкове число: $number</h2>";
    
    // 1. Сума цифр
    $digit1 = floor($number / 100);        
    $digit2 = floor(($number % 100) / 10); 
    $digit3 = $number % 10;               
    
    $sum = $digit1 + $digit2 + $digit3;
    echo "<p><strong>1. Сума цифр:</strong> $digit1 + $digit2 + $digit3 = $sum</p>";

    $reversed = $digit3 * 100 + $digit2 * 10 + $digit1;
    echo "<p><strong>2. Число в зворотному порядку:</strong> $reversed</p>";

    $digits = [$digit1, $digit2, $digit3];
    rsort($digits); 
    
    $max_number = $digits[0] * 100 + $digits[1] * 10 + $digits[2];
    echo "<p><strong>3. Найбільше можливе число:</strong> $max_number</p>";
    ?>
</body>
</html>
