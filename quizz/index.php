<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
        <?php  
            session_start();
            if(isset($_SESSION['qula'])) {
                echo "Your session is running ";
            }else{
            $questionsarray= ["2+4=","20+15=","40+20=","30+10=","4+14="];
            $answersarray=[6,35,60,40,18];
            // var_dump($questionsarray);
            // var_dump($answersarray);
            $count=count($questionsarray);
            $rand1;
            $rand2;
            for($i=0; $i<$count; $i++){
                // echo $i;
                // ითვლის მერამდენე ადგილას მოათავსოს სწორი პასუხი
                $rand1=rand(0,3);
                // echo " ". $rand1 ." - " .  $rand2;
                echo $questionsarray[$i];
                echo "</br>";
                // echo $rand1;
                // echo "</br>";
                for($k=0; $k<4; $k++){
                    // აგენერირებს შემთხვევით პასუხებს
                    $rand2= rand(1,100);
                    // echo '<input type="radio" value="1">'. $rand2  ;
                if($k==$rand1){
                    echo "<input type='radio' value='1' name='question[{$i}]' >". $answersarray[$i]  ;            
                }
                else{
                    echo "<input type='radio' value='0' name='question[{$i}]' >". $rand2 ;
                }

                }
                echo "</br>";        
            }
            }
            
                
                
            
        ?>
        <input type="submit" name ="submit" value="click me!" >
    </form>
    <form action="action2.php" method="post">
         <input type="submit" name ="rest" >
    </form>

</body>
</html>
