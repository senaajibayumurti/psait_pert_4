<?php
include_once("connection.php");
 
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$email=$_POST['email'];
		
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email' WHERE id=$id");
	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
}
?>
<html>
<head>	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="card h-100">
        <div class="card-header">
            <h1 class="text-center">Simple CRUD Website - Tugas PSAIT</h1>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">Add</a>
                </li>
            </ul>
        </div>
        <div class="card-body h-100">
            <div class="container">
                <div class="d-flex flex-column my-3 h-100">
                    <form class="row g-3" action="edit.php" method="post" name="update_user">
                        <div class="col-md-12">
                            <label class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" value=<?php echo $name;?>>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="text" name="email" value=<?php echo $email;?>>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                            <input class="btn btn-success" type="submit" name="update" value="Update">
                        </div>
                    </form>
                    <p class="mt-auto text-center">Test</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>