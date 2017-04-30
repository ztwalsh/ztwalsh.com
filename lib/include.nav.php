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
      <img src="images/pwr-logo.svg" /><br />
      PowerReviews
    </a>
    <a href="<?php echo $root; ?>orbitz.php"<?php if($page == 'orbitz') { echo ' class="on"';} ?>>
      <img src="images/orbitz-logo.svg" /><br />
      Orbitz
    </a>
    <a href="<?php echo $root; ?>shakoolie.php"<?php if($page == 'shakoolie') { echo ' class="on"';} ?>>
      <img src="images/shakoolie-logo.svg" /><br />
      Shakoolie
    </a>
  </div>
  <div class="other">
    <a href="<?php echo $root; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
    <a href="<?php echo $root; ?>contact.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Get in Touch</a>
  </div>
</nav>
