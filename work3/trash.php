<?php 
require('conn.php');
class trash extends DBC{
    public function trasheditems(){
        $sql = "UPDATE posts SET isactive=1 WHERE id=".$_GET['id'];
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        header('location:select.php');
    }
}
$c= new trash();
echo $c->trasheditems();
?>