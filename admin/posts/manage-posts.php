<?php
include('../../path.php');
include(ROOT_PATH . '/database/db.php');

$table = 'posts';
// create query
$query = "SELECT * FROM $table";
// get result 
$result = mysqli_query($conn, $query);
// fetch data 
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// free result 
mysqli_free_result($result);
// close connection 
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangul - Manage Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<nav class="navbar bg-dark p-4">
    <a href="../dashboard.php" class="navbar-brand text-warning">DASHBOARD</a>
    <a href="index.php" class="nav-item text-light">Create Post</a>
    <a href="manage-posts.php" class="nav-item text-light">Manage Posts</a>
    <a href="#0" class="nav-item btn btn-danger">Logout</a>
</nav>


<div class="container table-responsive p-5 mt-5">
            <table class="table table-hover shadow">
             <thead>
               <tr>
                  <th scope="col" class="text-secondary">SERIAL NUMBER</th>
                  <th scope="col" class="text-secondary">TITLE</th>
                  <th scope="col" class="text-secondary">AUTHOR</th>
                  <th scope="col" class="text-secondary">ACTION</th>
               </tr>
              </thead>
              <tbody>

             <?php foreach ($posts as $key => $post): ?> 
               <tr>
                  <th scope="row" class="text-danger"><?php echo $key + 1?></th>
                  <td><?php echo $post['title']; ?></td>
                  <td><?php echo $post['author']; ?></td>
                  <td><a href="index.php?delete_id=<?php echo $post['id']; ?>" class="delete btn btn-danger">Delete</a></td>
                  <td><p href="#0" class="text-success">Published</p></td>
               </tr>
             <?php endforeach; ?>
              </tbody>
            </table>
          </div>

