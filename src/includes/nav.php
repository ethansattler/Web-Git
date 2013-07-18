    <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="<?php echo nav_active("Home"); ?>"><a href="index.php">Home</a></li>
              <li class="<?php echo nav_active("About"); ?>"><a href="about.php">About</a></li>
              <li class="<?php echo nav_active("Contact"); ?>"><a href="contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

   
