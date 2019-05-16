<?php
use Mockery\Exception;
require('conn.php');
class upload extends DBC{
    public function uploadFiles(){


        $title= $_POST['satauri'];
        $description= $_POST['agwera'];
        $active=0;
        $filedest="";


        $file = $_FILES['file'];
        $filename=$file['name'];
        $filetype=$file['type'];
        $filetmpname=$file['tmp_name'];
        $fileerror=$file['error'];
        $filesize=$file['size']; 
        
        $filex= explode('.', $filename);
        $fileex= strtolower(end($filex)) ;
        $allowed= ['jpg','jpeg', 'png', 'pdf'];

        try{
            if(!empty($filename)){
                if(in_array($fileex , $allowed)){
                    if($fileerror==0){
                        if($filesize<3000000){
                            $newfilename= uniqid('', true)."." . $fileex;
                            $filedest= 'uploads/'.$newfilename;
                            move_uploaded_file($filetmpname, $filedest);
                            $message="added";
                            ?>
                            <script type="text/javascript">
                                alert("added");
                                window.location.href = "damateba.php";
                            </script>
                            <?php
                            // echo "<script type='text/javascript'> setTimeout(function() { alert('$message'); }, 1000);</script>";
                            // header('location:damateba.php');
                            
                        }else{
                            echo "file is too big";
                        }
                    }else{
                        echo "error while uploading files";
                    }
                }else{
                    echo "you cant upload such files";
                }
            }
            
        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
        //insert
        $this->insertstmt($title, $description, $active, $filedest);
        header("location:damateba.php");
        
    }
    public function insertstmt($title, $description, $active, $filedest){
        $sql= "INSERT INTO posts (satauri, agwera, isactive, misamarti) 
                VALUES (:titlevalue, :descvalue , :active , :filelocation)";
        $stmt = $this->connect()->prepare($sql);
        if($stmt){
            $stmt->bindParam(':titlevalue', $title);
            $stmt->bindParam(':descvalue', $description);
            $stmt->bindParam(':active', $active);
            $stmt->bindParam(':filelocation', $filedest);
            $stmt->execute();
        }
        else{
            echo "error";
        }
    }

 }
  

if(isset($_POST['submit']) && !empty($_POST['satauri']) && !empty($_POST['agwera'])){
    $up= new upload();
    echo $up->uploadFiles();
    
}else{
    echo "empty";
}
?>