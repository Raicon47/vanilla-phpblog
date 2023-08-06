<?php
include(ROOT_PATH . '/database/conn.php');
$topics = 'topics';

$query1 = "SELECT * FROM $topics";

$result1 = mysqli_query($conn, $query1);

$topics = mysqli_fetch_all($result1, MYSQLI_ASSOC);

mysqli_free_result($result1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/slick.css" rel="stylesheet">
    <link href="./assets/all.min.css" rel="stylesheet">
    <link href="./assets/style.css" rel="stylesheet">
</head>
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#e9ecef; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=282045356268823&autoLogAppEvents=1" nonce="tGwTe21X"></script>

<script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v7.0'
      });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat"
    attribution=setup_tool
    page_id="102502744699103">
  </div>


<div class="rounded text-center nav-container">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand font-weight-bold" href="index.php">
<img src="<?php echo BASE_URL . "/assets/images/tangul.png" ?>" height="100" style="border-radius:50%;" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="index.php">Home</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Podcasts</a>
                          </li>
                          <li class="nav-item">
                          <button class="pill-btn btn-warning btn" onclick="makePayment()">Suport Tangul</button> 
                          </li>  
                      </ul>
                        <span class="navbar-text">
                            <input type="text">
                            <a href="#" class="btn text-light" id="custom-btn">Search</a>
                            </span>
                     </div>
                    </div>
                  </nav>
                </div>


<div class="container mt-3">
<nav class="breadcrumb bg-dark">
<?php foreach ($topics as $topic): ?>
  <a href="" class="breadcrumb-item text-light"><?php echo $topic['name']; ?></a>
  <?php endforeach; ?>
</nav>
</div>
