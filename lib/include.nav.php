<?php
  if ($_SERVER['HTTP_HOST'] == 'www.ztwalsh.com' || $_SERVER['HTTP_HOST'] == 'ztwalsh.com') {
    $root = 'http://www.ztwalsh.com';
  } else {
    $root = 'http://localhost:8000/ztwalsh.com/';
  }
?>

<section class="menu">
  <div id="nav-icon">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</section>
<nav>
  <img height="" src="images/zachwalsh.jpg" width="" />
  <a href="<?php echo $root; ?>"<?php if($page == 'home') { echo ' class="on"';} ?>>Home</a>
  <a href="<?php echo $root; ?>powerreviews.php"<?php if($page == 'powerreviews') { echo ' class="on"';} ?>>PowerReviews</a>
  <a href="<?php echo $root; ?>orbitz.php"<?php if($page == 'orbitz') { echo ' class="on"';} ?>>Orbitz</a>
  <a href="<?php echo $root; ?>shakoolie.php"<?php if($page == 'shakoolie') { echo ' class="on"';} ?>>Shakoolie</a>
</nav>
