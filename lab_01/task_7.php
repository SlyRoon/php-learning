<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Завдання 7 - Робота з циклами</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            margin-bottom: 50px;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
        .black-bg {
            background-color: black;
            padding: 20px;
            position: relative;
            height: 700px;
            margin-top: 30px;
        }
        .black-bg h2 {
            color: white;
        }
    </style>
</head>
<body>
    <h1>Завдання 7 - Робота з циклами</h1>
    
    <h2>1. Таблиця з різними кольорами</h2>
    <table>
        <?php
        $colors = [
            ['#00FF7F', '#20B2AA', '#CD853F', '#8B8B83', '#FFFF00'],
            ['#DA70D6', '#E6E6FA', '#8B008B', '#008B8B', '#BDB76B'],
            ['#32CD32', '#4B0082', '#FFFFE0', '#FFA500', '#FF1493'],
            ['#ADFF2F', '#654321', '#00FF00', '#708090', '#1E90FF'],
            ['#FFB6C1', '#00FF00', '#8B0000', '#808069', '#9ACD32']
        ];
        
        for($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for($j = 0; $j < 5; $j++) {
                echo "<td style='background-color: {$colors[$i][$j]}'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <div class="black-bg">
        <h2>2. Червоні квадрати на чорному тлі</h2>
        
        <?php
        for($i = 0; $i < 10; $i++) {
            $size = mt_rand(30, 150);
            $top = mt_rand(50, 600);
            $left = mt_rand(0, 1200);
            
            echo "<div style='
                position: absolute;
                width: {$size}px;
                height: {$size}px;
                background-color: red;
                top: {$top}px;
                left: {$left}px;
            '></div>";
        }
        ?>
    </div>
</body>
</html>