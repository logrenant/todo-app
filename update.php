<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Update</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<?php 
    $id = $_GET['ID'];
    include("config.php");
    $Rdata = mysqli_query($con, "SELECT * FROM tbltodo WHERE Id = $id");
    $data = mysqli_fetch_array($Rdata);
?>

<body class="bg-info">
<form action="update1.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">   
                    <h3 class="text-center text-primary">Update</h3>
                <div class="col-8">
                    <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary">Update</button>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>
            </div>
         <div/>
    </form>

    
</body>
</html>
