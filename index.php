<?php
include_once("connection.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="card text-center h-100">
        <div class="card-header">
            <h1 class="text-center">Simple CRUD Website - Tugas PSAIT</h1>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">Add</a>
                </li>
            </ul>
        </div>
        <div class="card-body h-100">
        <div class="container">
            <div class="d-flex flex-column my-3 h-100">
                <table class="table table-bordered">
                    <tr class="table-dark">
                        <th>Name</th> <th>Email</th> <th>Action</th>
                    </tr>
                    <?php  
                    while($user_data = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$user_data['name']."</td>";
                        echo "<td>".$user_data['email']."</td>";    
                        echo "<td>
                                        <a href='edit.php?id=$user_data[id]' class='btn btn-warning'>Edit</a>
                                        <a href='delete.php?id=$user_data[id]' class='btn btn-danger'>Delete</a>
                                        </td></tr>";
                    }
                    ?>
                </table>
                <p class="mt-auto">Test</p>
            </div>
        </div>
    </div>
</body>
</html>