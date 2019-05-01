<?php 
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_POST['question'])){
            $x=0;
            foreach($_POST['question'] as $option_num => $option_val){
                echo $option_num." ".$option_val."<br>";
                 if($option_val==1){
                    $x+=1;
                }
            }
            echo "tkven gaecit {$x} kitxvas pasuxi sworad";
            $_SESSION["qula"]=$x;            
        }else{
            header("location:index.php");
        }
    }else{
        echo "click->click me!!";
    }
    echo '<a href="index.php"><input type="button" value="home page"> </a>';
    
?>