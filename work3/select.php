<?php 
require('conn.php');
class CrudSelect extends DBC{
    public function selectdata(){
        $tmt= $this->connect()->prepare("SELECT id, satauri, agwera, misamarti, isactive FROM posts where isactive=0");   
        $tmt->execute();    
        $result=$tmt->setFetchMode(PDO::FETCH_ASSOC);
        $data= $tmt->fetchall();  
        echo "<h3>დამატებული ველების რაოდენობაა: ".count($data)."</h3>";          
        echo "<table>";
            echo "<tdead>";
                echo "<tr>";
                    echo "<th>  N  </th>";
                    echo "<th>  სათაური  </th>";
                    echo "<th>  აღწერა  </th>";
                    echo "<th>  სურათი  </th>";
                    echo "<th>  წაშლა  </th>";
                    echo "<th>  რედაქტირება  </th>";
                    //echo "<th> <div value=". $data[$i]['id'] . "> სათაური  </div> </th>";
            echo "</thead>";
            echo "<tbody>";
            $n=0;
                for($i=0;$i<count($data); $i++ ){
                    // echo $data[$i]['satauri'] . " " .$data[$i]['agwera'] . "<img src=". $data[$i]['misamarti'] .">" ;
                    // echo "</br>";
                    $n+=1;
                    echo "<tr>" ;   
                        echo "<td>" .$n . "</td>" ;
                        echo "<td> <div name='satauri' value=". $data[$i]['id'] . "> ". $data[$i]['satauri'] .  " </div> </td>" ;
                        echo "<td> <div name='agwera' value=". $data[$i]['id'] . "> ". $data[$i]['agwera'] .  " </div> </td>" ;
                        echo "<td> <div name='misamarti' value=". $data[$i]['id'] . "> ". "<img src=". $data[$i]['misamarti'] .  " </div> </td>" ;
                        echo "<td><a href=trash.php?id=".$data[$i]['id'] ."><button >წაშლა</button></td>" ;
                        echo "<td><a href=update.php?id=".$data[$i]['id'] ."><button >რედაქტირება</button></td>" ;
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table>";   
        echo "<a href=trasheditems.php> ნაგავსაყრელი </a> </br>" ;
        echo "<a href=damateba.php> დამატება </a> </br>" ;                   
    }
}
$s= new CrudSelect();
echo $s->selectdata();
?>