<?php
include(ROOT_PATH . '/database/db.php');

$table = 'posts';

// statement to add image 
if (isset($_POST['add-post'])) {
    // admin_only();
    // $errors = validate_post($_POST);

    if (!empty($_FILES['image']['name'])) {
      $image_name = time() . '_' . $_FILES['image']['name'];
      $destination = ROOT_PATH . "/assets/images/post-images/" . $image_name;
   
      $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

      if ($result) {
        $_POST['image'] = $image_name;
      } else {
        array_push($errors, "failed to upload image");
      }
      
    } else {
      array_push($errors, "Post image required");
    }

}

// if (isset($_POST['add-post'])) {
//   // admin_only();
//   // $errors = validate_post($_POST);

//   if (!empty($_FILES['authors_image']['name'])) {
//     $image_name = time() . '_' . $_FILES['authors_image']['name'];
//     $destination = ROOT_PATH . "/assets/images/author_images/" . $image_name;
 
//     $result = move_uploaded_file($_FILES['authors_image']['tmp_name'], $destination);

//     if ($result) {
//       $_POST['authors_image'] = $image_name;
//     } else {
//       array_push($errors, "failed to upload image");
//     }
    
//   } else {
//     array_push($errors, "Post image required");
//   }

// }

if (isset($_GET['delete_id'])) {
  // admin_only();
  $count = delete($table, $_GET['delete_id']);
  $_SESSION["message"] = "post deleted successfully";
  $_SESSION["type"] = "success";
  header('location: ' . BASE_URL . '/admin/posts/manage-posts.php');
  exit();
 }