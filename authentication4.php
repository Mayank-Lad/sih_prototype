<?php
session_start();
include('php/config.php');

  // Check if the user is logged in
  if (isset($_POST['Unique_ID'])&&isset($_POST['password'])) {
    // Get the username and password from the form
    $uid = filter_input(INPUT_POST, 'Unique_ID', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $db = mysqli_connect('localhost',"root",'',"judgedatabase1");
    // Check if the username and password are correct
    $sql = "SELECT * FROM final_judge WHERE Unique_ID='$uid' AND userpassword='$password'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        // The user exists
        $row = mysqli_fetch_assoc($result);
        $id=$row['Unique_ID'];
        $_SESSION['unid']=$id;
        if($id!=''){
            header('Location: judgepage.php');
exit;
        }
    else
        {   header('Location: judgepage.php');
exit;
}
        }
       else {
        // The user does not exist
        echo 'Invalid email address or password.';
    }

} else {
    // The form has not been submitted
    echo 'Please fill out the form and click the "Login" button.';
}
?>