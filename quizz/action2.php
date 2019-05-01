<?php 
    require("index.php");
    if(isset($_POST['rest']) ){
        session_start();
        session_destroy(); 
        session_unset(); 
        header("Location:index.php");
    }
    else{
        echo "fnbiorboi4boif";
    }
?>