<?php
require 'function.php';
if (isset($_POST['delete'])) {
    $chck = $_POST['checkbox'];
    foreach ($chck as $id) {
        mysqli_query($conn, 'DELETE FROM biodata WHERE id=' . $id);
    }
    header("Location: index.php");
}
mysqli_close($conn);
