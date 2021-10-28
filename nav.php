<?php session_start(); ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <span class="h1 text-warning">
      Priyanshu
    </span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto h3">


      <?php

      if (empty($_SESSION['Email'])) { ?>

        <li class="nav-item active">
          <a class="nav-link" href="login.php">Login</a>
        </li>

      <?php } ?>

      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>

      <?php

      if (!empty($_SESSION['Email'])) { ?>

        <li class="nav-item active">
          <a class="nav-link text-warning" href="logout.php">Logout</a>
        </li>
      <?php } ?>

     
      
      <?php

if (empty($_SESSION['Email'])) { ?>

  <li class="nav-item active">
    <a class="nav-link" href="register.php">Register</a>
  </li>

<?php } ?>



    </ul>
  </div>
</nav>