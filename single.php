<?php 
include("path.php");
include(ROOT_PATH . '/app/inc/header.php');

$table = 'posts';
$topics = 'topics';
// get id 
$id = mysqli_real_escape_string($conn, $_GET['id']);
// create query
$query = "SELECT * FROM $table WHERE id= " . $id;
$query1 = "SELECT * FROM $topics";
// get result 
$result = mysqli_query($conn, $query);
$result1 = mysqli_query($conn, $query1);
// fetch data 
$post = mysqli_fetch_assoc($result);
$topics = mysqli_fetch_all($result1, MYSQLI_ASSOC);
// free result 
mysqli_free_result($result);
mysqli_free_result($result1);
// close connection 
mysqli_close($conn);
?>


<title>Tangul - Blog Post</title>

<div class="container bg-white p-4 mt-4 mb-5">
<div class="row">

<div class="col-lg-6 col-md-6 col-sm-12 p-4 single-col-left">
<h2 class="text-center" id="single-title">
   <?php echo $post['title']; ?>
</h2>
<img src="assets/images/post-images/<?php echo $post['image'] ?>" class="img-fluid" alt="">
<hr>
<p>
 <?php echo $post['body']; ?>
</p>
<!-- <img src="<?php echo BASE_URL . '/assets/images/author_images/' . $post['authors_image']; ?>" alt="" class="img-fluid authors-image mt-4"> <br> -->
<small class="text-dark">
<img src="<?php echo BASE_URL . '/assets/images/icons/contract.png' ?>" height="15" alt="">
            <?php echo $post['author']; ?>
</small>
<small class="text-primary ml-3">
      <img src="<?php echo BASE_URL . '/assets/images/icons/calendar-event.png' ?>" height="15" alt="">
            <?php echo date('F j, Y', $post['created_at']); ?>
</small>

<div class="share-container">
<div class="fb-share-button" data-href="http://localhost/tangul/single.php?id=46" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Ftangul%2Fsingle.php%3Fid%3D46&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

<div class="fb-comments" data-href="http://localhost/tangul/index.php" data-numposts="5" data-width=""></div>

</div>

<div class="col-lg-6 col-md-6 col-sm-12 single-col-right">
<p> <strong id="quote">Quote - </strong>
<i class="text-secondary">"<?php echo $post['quote']; ?>"</i>
</p>
<img src="<?php echo BASE_URL . '/assets/images/post-images/' . $post['image']; ?>" alt="" class="img-fluid">  
<hr>

<div class="topics-container mt-5"> 
               <ul>
             <h3 class="text-secondary font-weight-bold">Topics</h3>
                 <hr>
          <?php foreach ($topics as $topic): ?>
            <li id="topics-item">
            <a href="#"><?php echo $topic['name']; ?></a>
              <small class="text-secondary" style="font-size:10px;"><?php echo $topic['description']; ?></small>
          </li>
            <hr>
          <?php endforeach; ?>
               </ul>
          </div>
</div>


</div>
</div>


<?php 
include(ROOT_PATH . '/app/inc/footer.php');
?>