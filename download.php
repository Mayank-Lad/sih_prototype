<?php
require_once('php/config.php');

if (isset($_GET['Unique_ID'])) {
    $id = intval($_GET['Unique_ID']); // Ensure $id is an integer

    if ($id > 0) { // Validate $id to ensure it's a positive integer
        $sql = "SELECT Certificate FROM info WHERE Unique_ID = $id";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $imagePath = $row['Certificate'];
            $file = $imagePath;

            if (file_exists($file)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($imagePath)); // Use the original file name
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($file));
                readfile($file);
                exit;
            } else {
                echo "File not found.";
            }
        } else {
            echo "No matching record found.";
        }
    } else {
        echo "Invalid ID.";
    }
} else {
    echo "Missing ID parameter.";
}
?>
