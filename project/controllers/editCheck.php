<?php
    session_start();
    $dp = $_POST['dpsave'];
    
    if(isset($_FILES['dp'])){
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
                    $file_dest = "upload/".$fileName;
                    move_uploaded_file($fileTmpName, $file_dest);
                    header("Location: ../views/members/ViewProfile.php?upload_success");
                }else{
                    echo "Your image is too big!";
                }
            }else{
                echo "There is error uploading file!";
            }
        }else{
            echo "You cannot upload this file!";
        }
    }if(!$dp){
        echo "<script>alert('Photo Upload Failed!');</script>";
    }else{
        $fileName = $_FILES['dp']['name'];
        $_SESSION['user']['dp'] = $fileName;
        header("Location: ../views/members/ViewProfile.php?upload_success");
    }
?>