<?php
include('../../path.php');
include(ROOT_PATH . '/database/conn.php');

if(isset($_POST['submit-topic-btn'])) {
  // get form data 
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

  $query = "INSERT INTO topics(topic_name, descript) 
  VALUES('$name', '$description')";

if(mysqli_query($conn, $query)) {
header("location: " . 'manage-topics.php');
} else {
echo "error " . mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangul - Create Topics</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/bootstrap.min.css' ?>">
</head>
<body>


<nav class="navbar bg-dark p-4">
    <a href="../dashboard.php" class="navbar-brand text-warning">DASHBOARD</a>
    <a href="index.php" class="nav-item text-light">Create Topic</a>
    <a href="manage-topics.php" class="nav-item text-light">Manage Topics</a>
    <a href="#0" class="nav-item btn btn-danger">Logout</a>
</nav>

<div class="container p-5" id="dashboard-main">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

    <div class="form-group">
      <label for="inputEmail4"><h5>Name <span class="text-warning">*</span></h5></label>
      <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="topic's name" required>
    </div>
    
    <div class="form-group">
      <label for="inputEmail4"><h5>Description <span class="text-warning">*</span></h5></label>
       <textarea id="editor" name="description" cols="30" rows="10"></textarea>
    </div>

  <button type="submit" class="btn btn-success" name="submit-topic-btn">Submit</button>
</form>
</div>



<script src="<?php echo BASE_URL . '/assets/js/ckeditor.js' ?>"></script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>