<?php


function contact(){
if(isset($_POST['email'])){
    include 'asset.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $des=$_POST['description'];

    $sql=mysqli_query($conn_max,"INSERT INTO `contacts`(`Name`, `Email`, `Subject`, `Des`) VALUES ('$name','$email','$subject','$des')");

    if($sql){
        echo "<script>alert('Thank You For Submitting')</script>";
        echo "<script>
        window.location.href = '../contact.php'

        </script>";
    }else{
        echo "<script>alert('Server Error')</script>";
        echo "<script>
        window.location.href = '../contact.php'

        </script>";
    }

}

}

function quote(){
    if(isset($_POST['email'])){
        include 'asset.php';
        $name=$_POST['name'];
        $email=$_POST['email'];
        $service=$_POST['service'];
        $des=$_POST['description'];
    
        $sql=mysqli_query($conn_max,"INSERT INTO `quote`(`Name`, `Email`, `Service`, `Des`) VALUES ('$name','$email','$service','$des')");
    
        if($sql){
            echo "<script>alert('Thank You For Submitting')</script>";
            echo "<script>
            window.location.href = '../quote.php'
    
            </script>";
        }else{
            echo "<script>alert('Server Error')</script>";
            echo "<script>
            window.location.href = '../quote.php'
    
            </script>";
        }
    
    }
}

function subs(){
    if(isset($_POST['email'])){
        include 'asset.php';
     
        $email=$_POST['email'];
    
    
        $sql=mysqli_query($conn_max,"INSERT INTO `subscribers`( `Email`) VALUES ('$email')");
    
        if($sql){
            echo "<script>alert('Thank You For Submitting')</script>";
            echo "<script>
            window.location.href = '../index.php'
    
            </script>";
        }else{
            echo "<script>alert('Server Error')</script>";
            echo "<script>
            window.location.href = '../index.php'
    
            </script>";
        }
    
    }
}





if (isset($_POST['career'])) {
    // Check if all required fields are filled
    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_FILES['resume']) && $_FILES['resume']['error'] !== UPLOAD_ERR_NO_FILE) {
  
        // Define upload directory and error handling
        $uploadDirectory = '../uploads/';
        if (!is_dir($uploadDirectory) || !is_writable($uploadDirectory)) {
            echo "Error: Upload directory does not exist or is not writable.";
            exit;
        }
  
        // Check for upload errors (optional)
        if ($_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
            echo "Error uploading resume: " . $_FILES['resume']['error'];
            exit;
        }
  
        // Get the file name and path
        $resumeFileName = $_FILES['resume']['name'];
        $resumeFilePath = $uploadDirectory . basename($resumeFileName);
  
        // Get the MIME type of the uploaded file (with null check)
        $fileMimeType = mime_content_type($_FILES['resume']['tmp_name']);
  
        // Check if the file MIME type is one of the accepted types (adjust as needed)
        if (in_array($fileMimeType, ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])) {
  
            // Move the file to the upload directory with error handling
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $resumeFilePath)) {
  
                // Insert data into database or perform other actions here
                
                // Success message
                echo "Application submitted successfully";
  
            } else {
                echo "Error uploading resume: Unable to move file";
            }
  
        } else {
            echo "Invalid resume file type";
        }
  
    } else {
        echo "Please fill in all required fields and select a resume file";
    }
  
} else {
    // Form not submitted, do nothing or redirect to a different page
}










// Function Call Here ~1
if(isset($_POST['contact'])){
    contact();
}
if(isset($_POST['quote'])){
    quote();
}
if(isset($_POST['subs'])){
    subs();
}



?>