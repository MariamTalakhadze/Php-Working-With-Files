<?php  
    class Task1Lesson2{
        public function task1($path, $method){   
            $fn = fopen($path,$method);  
            if(file_exists($path)){
                $i=0;
                $result;
                $array=[];
                while(! feof($fn))  {
                    $result = fgets($fn);
                    $array[$i]= $result;
                    echo $array[$i]. "</br>";            
                    $i++;
                }
                var_dump($array);
                fclose($fn);
            }
            
        }
        public function task2(){
            $rand1= rand(1,30);
            echo $rand1;
            $array=[];
            $rand2;
            $even=0;
            for($i=0; $i<$rand1; $i++){
                // echo "   " .$i  ;
                $rand2=rand(1,100);
                $array[$i]=$rand2;         
                echo "   ". $array[$i];
                if($rand2%2==0){
                    echo " i am even number </br>";
                    $even+=$rand2;                
                }
            }
            echo "</br>"."result: {$even}";
            // var_dump($array);
        }    
    }
  
    

?>