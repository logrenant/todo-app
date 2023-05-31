<?php
if (isset($_POST['list'])) {
    $list = $_POST['list'];

    include "config.php";

    $query = "INSERT INTO `tbltodo`(`list`) VALUES ('$list')";
    if (mysqli_query($con, $query)) {
        header("location: index.php");
        exit;
    } else {
        echo "Veritabanına ekleme işlemi sırasında bir hata oluştu: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
