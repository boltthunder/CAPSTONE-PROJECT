<div class="sticky-lg-top">


<nav class="navbar navbar-expand-lg navbar-dark py-3" id="headerNav" style="background-color:#2c2c43 !important">
      <div class="container p-0">
        <a class="navbar-brand d-block d-lg-none" href="site.php">
             <span class="text-center">(Domain Name)</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ">

            
                    <li class="nav-item ">
                    <a class="nav-link mx-3 <?php if($_SESSION['title']=="ORGANIZATION LIST"){echo"navbar-active";}?>" href="list-org.php">LIST OF ORGANIZATION</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link mx-3 <?php if($_SESSION['title']=="EVENTS"){echo"navbar-active";}?>" href="events.php">EVENTS</a>
                    </li>
            

            <li class="nav-item d-none d-lg-block px-5 ">
              <a class="nav-link mx-3 img-holder" href="index.php">
                    <span><img class="img-logo" src="../img/chmsu-icon.png" alt=""></span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-3 <?php if($_SESSION['title']=="ELECTION"){echo"navbar-active";}?>" href="election.php">ELECTION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3 <?php if($_SESSION['title']=="SERVICES"){echo"navbar-active";}?>" href="services.php">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3" href="#" data-bs-target="#profile" data-bs-toggle="modal">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>