<?php
  if ($_SERVER['HTTP_HOST'] == 'www.ztwalsh.com' || $_SERVER['HTTP_HOST'] == 'ztwalsh.com') {
    $root = 'http://www.ztwalsh.com/';
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
  <div class="featured cf">
    <h2 class="heading-2">Featured Work</h2>
    <a href="<?php echo $root; ?>powerreviews.php"<?php if($page == 'powerreviews') { echo ' class="on"';} ?>>
      PowerReviews
    </a>
    <a href="<?php echo $root; ?>orbitz.php"<?php if($page == 'orbitz') { echo ' class="on"';} ?>>
      Orbitz
    </a>
    <a href="<?php echo $root; ?>shakoolie.php"<?php if($page == 'shakoolie') { echo ' class="on"';} ?>>
      Shakoolie
    </a>
  </div>
  <div class="other">
    <a class="secondary" href="<?php echo $root; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
    <a class="secondary dribbble" href="https://dribbble.com/zachwalsh" target="_blank"><i class="fa fa-dribbble"></i> Dribbble</a>
    <a class="secondary twitter" href="https://twitter.com/ztwalsh" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
    <a class="secondary" href="<?php echo $root; ?>contact.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Get in Touch</a>
  </div>
</nav>
