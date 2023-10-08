<?php
session_start();
include('php/config.php');
if (empty($_SESSION['unid'])) {
    header('Location:index.php');
    exit;
}

// Get the case_id parameter from the URL
if (isset($_GET['case_id'])) {
    $caseId = $_GET['case_id'];
} else {
    // Handle the case where 'case_id' is not provided in the URL
    // You can redirect or display an error message as needed
    header('Location: error_page.php');
    exit;
}

// Query the database to fetch case details based on $caseId
$query = "SELECT * FROM hearing_data WHERE caseid = '$caseId'";
$query_run = mysqli_query($con, $query);

if (mysqli_num_rows($query_run) > 0) {
    $row = mysqli_fetch_assoc($query_run);

    // Now you can display the case details
    $caseId = $row['caseid'];
    $type = $row['type'];
    $status = $row['status'];
    $Lawyer1=$row['lawyer1'];
    $Party1 = $row['party1'];
    $Party2 = $row['party2'];
    $Result = $row['result'];
    $Lawyer2=$row['lawyer2'];

    // HTML for displaying the case details
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Case Details</title>
        <link rel="stylesheet" href="judge.css">
    </head>
    <body>
        <h1>Case Details</h1>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Case ID</td>
                        <td><?= $caseId ?></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td><?= $type ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?= $status ?></td>
                    </tr>
                    <tr>
                        <td>Lawyer 1</td>
                        <td><?= $Lawyer1 ?></td>
                    </tr>
                    <tr>
                        <td>Lawyer 2</td>
                        <td><?= $Lawyer2 ?></td>
                    </tr>
                    <tr>
                        <td>Party 1</td>
                        <td><?= $Party1 ?></td>
                    </tr>
                    <tr>
                        <td>Party 2</td>
                        <td><?= $Party2 ?></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td><?= $Result ?></td>
</tr>
                </tbody>
            </table>
           
        </div>
    <a href="mumble2-master/lobby.html"> <button>Schedule the meeting</button></a>
    </body>
    </html>
    <?php
} else {
    // Handle the case where no matching case is found
    // You can redirect or display an error message as needed
    header('Location: error_page.php');
    exit;
}
?>
