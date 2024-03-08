<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New User</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="card h-100">
        <div class="card-header text-center">
            <h1 class="text-center">Simple CRUD Website - Tugas PSAIT</h1>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="add.php">Add</a>
                </li>
            </ul>
        </div>
        <div class="card-body h-100">
            <div class="container">
                <div class="d-flex flex-column my-3 h-100">
                    <form class="row g-3" action="add.php" method="post" name="form1">
                        <div class="col-md-12">
                            <label class="form-label">Name</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <input class="btn btn-success" type="submit" name="Submit" value="Add">
                        </div>
                    </form>
                    <p class="mt-auto text-center">Test</p>
                    <?php
                    if(isset($_POST['Submit'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];

                        include_once("connection.php");
                        $result = mysqli_query($mysqli, "INSERT INTO users(name,email) VALUES('$name','$email')");
                        echo "User added successfully. <a href='index.php'>View Users</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>