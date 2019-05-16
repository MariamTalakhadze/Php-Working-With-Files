<?php 
require('conn.php');
class updated extends DBC{
    public function update(){
        $tmt= $this->connect()->prepare("SELECT id, satauri, agwera, misamarti FROM posts where id=".$_GET['id']);   
        $tmt->execute();
        $row=$tmt->fetch();
        ?>
        <form action="action2.php" method="GET">
            <input type="hidden" id="custId" name="hiddenid" value="<?php echo $row['id'];?>" >
            <input type="text" name= "satauriupd" placeholder="<?php echo $row['satauri']; ?>">
            <input type="text" name="agweraupd" placeholder="<?php echo $row['agwera']; ?>">
            <?php echo "<img src=". $row['misamarti']. ">" ?>
            <input type="file" >
            <input type="submit" name="submit">
        </form>
        <?php    
    }
}
$u= new updated();
 echo $u->update();
?>