<?php 
    if(isset($_POST['dpsave'])){
        $file = $_FILES['dp'];
        $fileName = $_FILES['dp']['name'];
        $fileTmpName = $_FILES['dp']['tmp_name'];
        $fileSize = $_FILES['dp']['size'];
        $fileError = $_FILES['dp']['error'];
        $fileType = $_FILES['dp']['type'];

        $fileExt = explode('.', $fileName);
        $fileActExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'gif', 'webp');

        if(in_array($fileActExt, $allowed)){
            if($fileError === 0) {
                if($fileSize < 500000){
                    $fileNewName = uniqid('', true).".".$fileActExt;
                    $file_dest = "upload/".$fileNewName;
                    move_uploaded_file($fileTmpName, $file_dest);
                }else{
                    echo "Your image is too big!"
                }
            }else{
                echo "There is error uploading file!";
            }
        }else{
            echo "You cannot upload this file!";
        }
    }
?>