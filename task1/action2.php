<?php 
include("action.php");
 class action2 extends Task1Lesson2{
    function task3($method){
        $name=$_GET['name'];
        $surname=$_GET['surname'];
        $age=$_GET['age'];
        $option=$_GET['gender'];
        echo $name . $surname . $age . $option;
        $method="w";
        $path=$name.".txt";        
        if(($option==1 && $age<20)||($option==0 && $age<18)){
            echo "ასაკის შეუსაბამობის გამო თქვენი მონაცემები არ შეინახა";
            echo "</br> <a href='index.php'> დაბრუნდი 1 გვერდზე </a>";
        }
        else{
            $fn = fopen($path,"$method");
            $txt= $name . "  " . $surname . "  " . $age . "  " . $option ;
            fwrite($fn, $txt);
            fclose($fn);
            header("location:index.php");
        }
    }  
 }
$taskprint= new action2;
echo $taskprint->task3("w");     

?>