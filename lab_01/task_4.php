<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Визначення сезону</title>
</head>
<body>
    <h1>Визначення сезону за номером місяця</h1>
    
    <?php 
    $month = 3; 
    
    if($month == 12 || $month == 1 || $month == 2) {
        echo "Місяць $month - це Зима";
    } 
    else if($month == 3 || $month == 4 || $month == 5) {
        echo "Місяць $month - це Весна";
    }
    else if($month == 6 || $month == 7 || $month == 8) {
        echo "Місяць $month - це Літо";
    }
    else if($month == 9 || $month == 10 || $month == 11) {
        echo "Місяць $month - це Осінь";
    }
    else {
        echo "Помилка! Введіть число від 1 до 12";
    }
    ?>
</body>
</html>