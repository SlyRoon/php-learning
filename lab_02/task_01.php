<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 1.1 - Заміна символів</title>
</head>
<style> 
    .border { 
        padding-top: 40px;
    }
</style>
<body>
    <div>
<h2>Заміна символів у рядку task_1</h2>

    <?php
  $result = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
        $text = $_POST['text'];           
        $find = $_POST['find'];       
        $replace = $_POST['replace'];    

        $result = str_replace($find, $replace, $text);
    }
    ?>   
    <form method="POST" action="">
        <label>Текст:</label><br>
        <input type="text" name="text" size="50" 
               value="<?php echo isset($_POST['text']) ? $_POST['text'] : ''; ?>"><br><br>
        
        <label>Знайти:</label><br>
        <input type="text" name="find" 
               value="<?php echo isset($_POST['find']) ? $_POST['find'] : ''; ?>"><br><br>
        
        <label>Замінити:</label><br>
        <input type="text" name="replace" 
               value="<?php echo isset($_POST['replace']) ? $_POST['replace'] : ''; ?>"><br><br>
        
        <button type="submit">Замінити</button><br><br>
        
        <label>Результат:</label><br>
        <input type="text" name="result" size="50" 
               value="<?php echo $result; ?>" readonly 
               style="background-color: #f0f0f0;">
    </form>
    </div>
    <div class="border">
        <h2>Заміна символів у рядку task_2</h2>
        <?php 
        $result = ""

         ?>

         <form action="POST">
            <input type="text">
         </form>
    </div>

</body>
</html>