<nav class="navbar navbar-expand-lg navbar-light bg-custom">
  <a class="navbar-brand" id="warp-top" href="index.php">
    <img src="<?php echo $path; ?>assets/images/wineworx_icon.png" width="140" alt="wineworx brand" />
  </a>
  <!-- Hamburger Button Detector -->
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-stretch" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <!-- Home page -->
      <li class="nav-item<?php echo (isset($page) && $page=='home') ? ' active ' :'' ?>">
        <a class="nav-link"href="<?php echo $path; ?>index.php" title="">Home</a>
      </li>
      <!-- How It Worx page -->
      <li class="nav-item<?php echo (isset($page) && $page=='how it work') ? ' active ' :'' ?>">
        <a class="nav-link"href="<?php echo $path; ?>howitwork.php" title="">How It Work</a>
      </li>
      <!-- Stages of Wine Making page -->
      <li class="nav-item<?php echo (isset($page) && $page=='stages of wine making') ? ' active ' :'' ?>">
        <a class="nav-link"href="<?php echo $path; ?>stages.php" title="">Stages of Wine Making</a>
      </li>
      <!-- Monthly Calendar page -->
      <li class="nav-item<?php echo (isset($page) && $page=='monthly calendar') ? ' active ' :'' ?>">
        <a class="nav-link" href="<?php echo $path; ?>monthlycalendar.php" title="">Monthly Calendar</a>
      </li>
      <!-- Registration page -->
      <li class="nav-item<?php echo (isset($page) && $page=='registration') ? ' active ' :'' ?>">
        <a class="nav-link"href="<?php echo $path; ?>registration.php" title="">Registration</a>
      </li>
      <!-- Gift Certification page -->
      <li class="nav-item<?php echo (isset($page) && $page=='gift certification') ? ' active ' :'' ?>">
        <a class="nav-link"href="<?php echo $path; ?>giftcert.php" title="">Gift Certification</a>
      </li>
      <!-- Contact page -->
      <li class="nav-item<?php echo (isset($page) && $page=='contact') ? ' active ' :'' ?>">
        <a class="nav-link"href="<?php echo $path; ?>contact.php" title="">Contact</a>
      </li>
    </ul>
  </div>
</nav>
