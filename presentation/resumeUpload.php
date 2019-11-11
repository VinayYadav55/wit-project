<?php
class resumeUpload{
    public $response;
    public function __construct(){



    // Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    
    $count=0;
    //$target = 'C:\xampp\htdocs\sanjeev\images\upload\ ';

    $imageDirectory =  getcwd().'/images/resume/ ';

        $imageDir='images/resume';
        $imageDir = trim($imageDir);
        $imageDirectory = trim($imageDirectory);
        $fulldir = $imageDirectory.$imageDirectory;
        //var_dump($imageDirectory);
    
    foreach ($_FILES['myfile']['name'] as $file) {
            $userId = $_SESSION['userDetails']['id'];
                $temp=$imageDirectory;
                //var_dump($temp);
                $tmp=$_FILES['myfile']['tmp_name'][$count];
                
                $count=$count + 1;
                $temp=$temp.basename($file);
                $filename = $imageDir.'/'.basename($file);
                if(move_uploaded_file($tmp,$temp)){
                     $uploadResume = catalogOperations::uploadResume($filename,$userId);
                    if ($uploadResume) {
                        $this->response =  "File uploaded successfully";
                        $temp='';
                        $tmp='';
                    }else {
                        $this->response ="Failed to upload file";
                                
                    }
                }  
    }

    
    
    // destination of the file on the server
   /* $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }*/
}

    }


}

?>