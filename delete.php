<?php
include "config.php";

$id = $_GET['ID'];

$query = "DELETE FROM tbltodo WHERE Id = $id";

if (mysqli_query($con, $query)) {
    header("location: index.php");
} else {
    echo "Veritabanından silme işlemi sırasında bir hata oluştu: " . mysqli_error($con);
}

mysqli_close($con);
?>
