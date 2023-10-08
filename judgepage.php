<?php
session_start();
include('php/config.php');
if (empty($_SESSION['unid'])) {
    header('Location:index.php');
    exit; // Add an exit to stop execution after the redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judge Panel</title>
    <link rel="stylesheet" href="judge.css">
</head>
<body>
    <h1>Welcome to Judge Page</h1>
    <div class="panelname">
    <h1>Cases Panel</h1>
    </div>
    <div class="container">
       
        <table>
            <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>     
                </tr>
            </thead>
            <tbody>
            <?php
                        $query = "SELECT caseid,type,status FROM hearing_data";
                        $query_run = mysqli_query($con, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) { 
                                ?>
                                <tr>
                                    <td><?= $row['caseid'] ?></td>
                                    <td><?= $row['type'] ?></td>
                                    <td><?= $row['status'] ?></td>
                                    <td><a href="details.php?case_id=<?= $row['caseid'] ?>">View Details</a></td>
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
    <script src="js/script.js"></script>
</body>
</html>
