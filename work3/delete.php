<?php
require('conn.php');
class delete extends DBC{
    public function delete(){
        $sql = "DELETE FROM posts WHERE id=".$_GET['id'];
        $this->connect()->exec($sql);
        header('location:trasheditems.php');
    }
}
$d= new delete();
$d->delete();


?>