<?php

// Check if the form has been submitted
if (isset($_POST['Emailid'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    // print_r($_FILES["uploadfile"]);
        $folder="uploads/".$filename;
    move_uploaded_file($tempname,$folder);
    // echo("<img src='$folder' height='100px',width='100px'>");
    // Sanitize the form data
    $Uniqueid = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_EMAIL);
    $Emailid = filter_input(INPUT_POST, 'Emailid', FILTER_SANITIZE_EMAIL);
    $number = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
    $Name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_EMAIL);
    $userpassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    // Check if the usertype is valid
    // Connect to the database
    $db = mysqli_connect('localhost',"root",'',"judgedatabase1");
    // Insert the user data into the database
    $sql = "INSERT INTO info (Certificate,Unique_ID,Emailid, number,Name,password) VALUES ('$folder','$Uniqueid','$Emailid', '$number', '$Name', '$userpassword')";
    $db->query($sql);
    if($Emailid!=''){
    header('Location: loginsignuppage.php');
    }else{
    header('Location: loginsignuppage.php');
    }
} else {
    // The form has not been submitted
    echo 'Please fill out the form and click the "Register" button.';
}

?>
