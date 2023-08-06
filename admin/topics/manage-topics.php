<?php
include('../../path.php');
include(ROOT_PATH . '/database/conn.php');

$table = 'topics';
// create query
$query = "SELECT * FROM $table";
// get result 
$result = mysqli_query($conn, $query);
// fetch data 
$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <title>Tangul - Manage Topics</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/bootstrap.min.css' ?>">
</head>
<body>

<nav class="navbar bg-dark p-4">
    <a href="../dashboard.php" class="navbar-brand text-warning">DASHBOARD</a>
    <a href="index.php" class="nav-item text-light">Create Topic</a>
    <a href="manage-posts.php" class="nav-item text-light">Manage Topics</a>
    <a href="#0" class="nav-item btn btn-danger">Logout</a>
</nav>


<div class="container table-responsive p-5 mt-5">
            <table class="table table-hover shadow">
             <thead>
               <tr>
                  <th scope="col" class="text-secondary">SERIAL NUMBER</th>
                  <th scope="col" class="text-secondary">NAME</th>
                  <th scope="col" class="text-secondary">ACTION</th>
               </tr>
              </thead>
              <tbody>

              <?php foreach ($topics as $key => $topic): ?> 
               <tr>
                  <th scope="row" class="text-danger"><?php echo $key + 1; ?></th>
                  <td><?php echo $topic['topic_name']; ?></td>
                  <td><p href="#0" class="text-success">Published</p></td>
               </tr>
             <?php endforeach; ?>
              </tbody>
            </table>
          </div>



          <script src="../../js/jquery.min.js"></script>  
<script src="../../js/bootstrap.bundle.min.js"></script>  
<script src="../../js/smooth-scroll.js"></script>  
<script src="../../js/ckeditor.js"></script>  
</body>
</html>