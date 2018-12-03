<?php
session_start();
// header("Content-Type: application/json");
include 'config/connect.php';
include "welcome.php";
$file = $_FILES["file"];

if(isset($file)){

    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempLocation = $file['tmp_name'];
    $uploadStatus = $file['error'];
    $fileSize = $file['size'];
    $username = $_SESSION["fullname"];

    $fileNameExpload = explode('.', $fileName);
    $fileExt = strtolower(end($fileNameExpload));
    $supportedFileFormat = array('jpg','java', 'jpeg', 'png', 'pdf', 'txt', 'docx', 'pptx');

    if( in_array($fileExt, $supportedFileFormat) ){
        if($uploadStatus === 0){
            if( $fileSize <= 10000000 ){
                // $newFileName = uniqid('', true).".".$fileExt;
                $uploadLocation = "uploads/".$fileName;

                if(move_uploaded_file($fileTempLocation, $uploadLocation)){
                    $_SESSION["success"] = "Your file has been successfully uploaded";
                    echo($_SESSION["success"]);
                    // exit();

                    
                    $sql = "INSERT INTO `uploads`( `studentName`, `file_name`, `file_type`, `file_size`, `file_path`, `date`) VALUES ( '$username', '$fileName', '$fileType', '$fileSize', '$uploadLocation', CURRENT_TIMESTAMP)";
                    $prep = $conn->prepare($sql);
                    $prep->execute();

                    header("Location: welcome.php?file_upload_sucessful");
                   
                }
            }else{
                $_SESSION['error'] = "The file is too large";
                // exit();
                echo($_SESSION["error"]);
            }
        }else{
            $_SESSION['error'] = "There was an error uploading your file to the database";
            echo($_SESSION["error"]);
        }
    }else{
        $_SESSION['error'] = "The file you tried uploading is not supported";
        echo($_SESSION["error"]);
    }
}

?>

