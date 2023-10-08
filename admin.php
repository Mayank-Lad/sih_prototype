<?php
session_start();
include('php/config.php');
if (empty($_SESSION['username'])) {
    header('Location:landing_page.php');
    exit; // Add an exit to stop execution after the redirection
}
?>
<?php
require_once('php/config.php');

// Fetch user verification requests from the database
$sql = "SELECT * FROM info where status='Under Verification' ";
$result = mysqli_query($con, $sql);
?>


<?php 
include('php/config.php');
if (empty($_SESSION['username'])) {
    header('Location:landing_page.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accept'])) {
        // Accept the request: Move the tuple to the final judge database
        $id = intval($_POST['Unique_ID']);

        if ($id > 0) {
            $selectQuery = "SELECT * FROM info WHERE Unique_ID = $id";
            $result = mysqli_query($con, $selectQuery);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $insertQuery = "INSERT INTO final_judge (Unique_ID, Emailid, number, Name,userpassword,Certificate) 
                                VALUES ('{$row['Unique_ID']}', '{$row['Emailid']}', '{$row['number']}', '{$row['Name']}','{$row['password']}','{$row['Certificate']}')";
                $deleteQuery ="UPDATE info SET status = 'Accepted' WHERE Unique_ID='$id'";

                // Execute the insert and delete queries
                if (mysqli_query($con, $insertQuery) && mysqli_query($con, $deleteQuery)) {
                    // Redirect back to the admin panel
                    header('Location: admin.php');
                    exit;
                } else {
                    echo 'Failed to accept the request.';
                }
            } else {
                echo 'No matching record found.';
            }
        } else {
            echo 'Invalid ID.';
        }
    } elseif (isset($_POST['reject'])) {
        // Reject the request: Delete the tuple from the info table
        $id = intval($_POST['Unique_ID']);

        if ($id > 0) {
            $deleteQuery = "UPDATE info SET status = 'Rejected' WHERE Unique_ID='$id'";

            if (mysqli_query($con, $deleteQuery)) {
                // Redirect back to the admin panel
                header('Location: admin.php');
                exit;
            } else {
                echo 'Failed to reject the request.';
            }
        } else {
            echo 'Invalid ID.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="admin.js"></script>
    <title>E-Portal Case Management</title>
    <h2>Admin Panel</h2>
</head>
<body>
    <h1>Admin Panel</h1>
    <div class="judgereq">
    <table>
        <tr>
            <th>Image</th>
            <th>Unique_ID</th>
            <th>Email</th>
            <th>number</th>
            <th>name</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td><img src='".$row['Certificate']."' style='height:8%;width:30px;'></td>
                <td>" . $row['Unique_ID'] . "</td>
                <td>" . $row['Emailid'] . "</td>
                <td>" . $row['number'] . "</td>
                <td>" . $row['Name'] . "</td>
                <td>
                    <form method='post' action='admin.php'>
                        <input type='hidden' name='Unique_ID' value='".$row['Unique_ID']."'>
                        <input type='submit' name='accept' value='Accept'>
                        <input type='submit' name='reject' value='Reject'>
                    </form>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
    </div>
</body>
</html>
