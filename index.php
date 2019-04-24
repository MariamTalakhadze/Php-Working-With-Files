<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        include("action.php");
        $print = new Task1Lesson2;
        echo "<h1> task1 </h1>";
        echo $print->task1("./data.txt", "r");
        echo "</br> <h1> task2 </h1>";
        echo $print->task2();    
        echo "</br> <h1> task3 </h1>";
    ?>
    <form action="action2.php" method="get">
        <input type="text" name="name">
        <input type="text" name="surname">
        <input type="number"  name="age">
        <select name="gender" id="">
            <option value="1">მამრობითი</option>
            <option value="0">მდედრობითი</option>
        </select>
        <input type="submit" value="submit">
    </form>
</body>
</html>