<?php
include('../../path.php');
include(ROOT_PATH . '/database/conn.php');
include(ROOT_PATH . '/app/controllers/posts.php');

// check for a submit
if(isset($_POST['add-post'])) {

  // get form data 
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $image = mysqli_real_escape_string($conn, $_POST['image']);
  // $authors_image = mysqli_real_escape_string($conn, $_POST['authors_image']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);
  $quote = mysqli_real_escape_string($conn, $_POST['quote']);

  $query = "INSERT INTO posts(title, image, author, body, quote) 
            VALUES('$title', '$image', '$author', '$body', '$quote')";


      if(mysqli_query($conn, $query)) {
        header("location: " . 'manage-posts.php');
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
    <title>Tangul - Create Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>


<nav class="navbar bg-dark p-4">
    <a href="../dashboard.php" class="navbar-brand text-warning">DASHBOARD</a>
    <a href="index.php" class="nav-item text-light">Create Post</a>
    <a href="manage-posts.php" class="nav-item text-light">Manage Posts</a>
    <a href="#0" class="nav-item btn btn-danger">Logout</a>
</nav>

<div class="container p-5" id="dashboard-main">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype='multipart/form-data'>

    <div class="form-group">
      <label for="inputEmail4"><h5>Title <span class="text-warning">*</span></h5></label>
      <input type="text" class="form-control" name="title" placeholder="post title">
    </div>

    <div class="form-group">
      <label for="inputEmail4"><h5>Author <span class="text-warning">*</span></h5></label>
      <input type="text" class="form-control" name="author" placeholder="author's name">
    </div>
    
    <div class="form-group">
      <label for="inputCity"><h5>Author's Image <span class="text-warning">*</span></h5></label>
      <input type="file" class="form-control" name="authors_image">
    </div>


    <div class="form-group">
      <label for="inputEmail4"><h5>Body <span class="text-warning">*</span></h5></label>
       <textarea id="editor" name="body" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
      <label for="inputEmail4"><h5 class="font-weight-bold"><i>Quote</i></h5></label>
      <input type="text" class="form-control" name="quote" placeholder="quote">
    </div>

    <div class="form-group">
      <label for="inputCity"><h5>Post Image <span class="text-warning">*</span></h5></label>
      <input type="file" class="form-control" name="image">
    </div>


  <button type="submit" class="btn btn-success" name="add-post">Submit</button>
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