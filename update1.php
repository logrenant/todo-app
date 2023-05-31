<?php 
    include "config.php";
    $list = $_POST['list']; 
    $id = $_POST['id']; 
    $query = "UPDATE `tbltodo` SET `list`='$list' WHERE id = $id";

    if (mysqli_query($con, $query)) {
        header("location: index.php");
    } else {
        echo "Veritabanında güncelleme işlemi sırasında bir hata oluştu: " . mysqli_error($con);
    }
    
    mysqli_close($con);
?>
