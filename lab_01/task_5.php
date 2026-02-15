<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Голосна чи приголосна</title>
</head>
<body>
    <h1>Визначення типу літери</h1>
    
    <?php 
    $letter = 'о'; 
    
    switch($letter) {
        case 'а':
        case 'е':
        case 'и':
        case 'і':
        case 'о':
        case 'у':
        case 'я':
        case 'ю':
        case 'є':
        case 'ї':
            echo "Символ '$letter' - це голосна";
            break;
        
        case 'б':
        case 'в':
        case 'г':
        case 'ґ':
        case 'д':
        case 'ж':
        case 'з':
        case 'й':
        case 'к':
        case 'л':
        case 'м':
        case 'н':
        case 'п':
        case 'р':
        case 'с':
        case 'т':
        case 'ф':
        case 'х':
        case 'ц':
        case 'ч':
        case 'ш':
        case 'щ':
            echo "Символ '$letter' - це приголосна";
            break;
        
        default:
            echo "Символ '$letter' - не є буквою";
            break;
    }
    ?>
</body>
</html>