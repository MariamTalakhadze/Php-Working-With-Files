<?php
require("conn.php");
class finallydone extends DBC{
    public function idontbelieve(){
        $stri=$_GET['satauriupd'];
        $agwer=$_GET['agweraupd'];
        if(isset($_GET['submit'])){
            $sqli = "UPDATE posts SET satauri = '$stri', agwera='$agwer' WHERE id=".$_GET['hiddenid'];
            $stmtm = $this->connect()->prepare($sqli);
            $stmtm->execute();
            echo "dbeif";
        }else{
            echo "i hate my life";
        }
    }
}
$f= new finallydone();
echo $f->idontbelieve();
    

?>