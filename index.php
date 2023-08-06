<?php 
include("path.php");
include(ROOT_PATH . '/app/inc/header.php');

$posts = 'posts';
$topics = 'topics';
// create query
$query = "SELECT * FROM $posts";
$query1 = "SELECT * FROM $topics";
// get result 
$result = mysqli_query($conn, $query);
$result1 = mysqli_query($conn, $query1);
// fetch data 
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
$topics = mysqli_fetch_all($result1, MYSQLI_ASSOC);
// free result 
mysqli_free_result($result);
mysqli_free_result($result1);
// close connection 
mysqli_close($conn);

?>  

<title>Tangul - Home</title>


<div class="container mt-4 bg-white p-4">
        <div class="row">

            <div class="col-lg-8 col-left">
                <h2 class="font-weight-bold">LATEST POSTS</h2>
                <hr>
               <div class="body mt-4">

               <?php foreach ($posts as $post): ?>   
                <div class="jumbotron p-4" id="article">

                 <div class="container">                  
                   <h5><?php echo $post['title']; ?></h5>
                   <img src="assets/images/post-images/<?php echo $post['image'] ?>" class="img-fluid" alt="">
                      <p class="mt-1">
                    <!-- <img src="assets/images/post-images/' . $post['image'];" id="article-img" alt="" ALIGN="left" class="post-image" alt=""> -->
                      <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                    </p>
                    <small> <i><span id="quote">Quote -</span> 
                    <?php echo html_entity_decode(substr($post['quote'], 0, 50) . '...'); ?>
                    </i>
                    </small> <br>
                    <small class="text-secondary mr-3 ml-3">
                    <img src="<?php echo BASE_URL . '/assets/images/icons/user.png' ?>" height="15" alt="">  
                      <?php echo $post['author']; ?>
                    </small>
                    <small>
                     <img src="<?php echo BASE_URL . '/assets/images/icons/calendar-event.png' ?>" height="10" alt="">  
                    <?php echo date('F j, Y',$post['created_at']); ?> 
                    </small> 
                     <br>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="btn mt-1 btn-success" id="custom-btn">Read More</a>
                 </div>

                 
                  
                  </div>
              <?php endforeach; ?>

               </div>
            </div>

            <div class="col-lg-4 col-right">
             <h3 class="text-warning font-weight-bold">Most Read - <small class="text-secondary">this week</small></h3>
             <div class="body p-4">

             <?php foreach ($posts as $post): ?>
             <div class="col-right-article">
             <strong><?php echo $post['title'] ?></strong> <br>
                 <a href="single.php?id=<?php echo $post['id']; ?>" id="underline">
              <?php echo html_entity_decode(substr($post['body'], 0, 30) . '...'); ?>
            </a>
             </div>
             <?php endforeach; ?>


             <div class="topics-container"> 
               <ul>
             <h3 class="text-warning font-weight-bold">Topics</h3>
                 <hr>
          <?php foreach ($topics as $topic): ?>
            <li id="topics-item"><a href="#"><?php echo $topic['name']; ?></a></li>
            <small class="text-secondary" style="font-size:10px;"><?php echo $topic['description']; ?></small>
            <hr>
          <?php endforeach; ?>
               </ul>
             </div>

             </div>
            </div>

    </div>
</div>
  
    
<?php 
include(ROOT_PATH . '/app/inc/footer.php');
?>