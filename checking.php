<?php
session_start();
include('php/config.php');
if (empty($_SESSION['Emailid'])) {
    header('Location:landing_page.php');
    exit; // Add an exit to stop execution after the redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="main3.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>E-Portal Case Management</title>
    <link rel="website icon" type="png" href="images/daily-jobs-now-high-resolution-logo-white-on-transparent-background.png" >
</head>
<body>
    <div class="uppercontainer">
        <div class="logocontainer"> <img src="images/logo-black.png" class="logo"></div>
        <div class="namecontainer"> <h3>Checking Page</h3></div>
        <br><br>
        <div class="maincontainer">
            <div class="userslist">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Image</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Registration Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $email=$_SESSION['Emailid'];
                        $query = "SELECT certificate, Unique_ID, name, number, Emailid, status FROM info WHERE Emailid='$email' ";
                        $query_run = mysqli_query($con, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) { 
                                ?>
                                <tr>
                                    <td><?= $row['Emailid'] ?></td>
                                    <td><?= $row['Unique_ID'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['number'] ?></td>
                                    <td><?= $row['status'] ?></td>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4">No record found</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
    <a href="index.php"><button style="border-radius: 20%;">Go back</button></a>
</body>
</html>
