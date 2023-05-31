<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TODO Uygulaması</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-primary">

    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">   
                <h3 class="text-center text-primary">TODO</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-primary">add</button>
                </div>
            </div>
        </div>
    </form>

    <?php 
    include "config.php";
    $rawData = mysqli_query($con, "SELECT * FROM tbltodo");
    ?>

    <div class="container">
        <div class="col-10 bg-white m-auto">
            <table class="table">
                <tbody>
                    <?php 
                    while ($row = mysqli_fetch_array($rawData)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['list'] ?></td>
                            <td style="width: 10%">
                                <a href="delete.php?ID=<?php echo $row['id'] ?>" class="btn btn-outline-danger">delete</a>
                            </td>
                            <td style="width: 10%">
                                <a href="update.php?ID=<?php echo $row['id'] ?>" class="btn btn-outline-success">update</a>
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>
