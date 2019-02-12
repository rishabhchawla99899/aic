
<header class="header header-transparent-dark header-sticky" style="" id="headermain">
  <!-- Static navbar -->
  <nav class="navbar navbar-expand-lg ">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $siteurl;?>/">
        <div class="sitelogo">
          <img class="aic" alt="AIC" />
          <img class="muj" alt="MUJ" />
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span> </span>
        <span> </span>
        <span> </span>
      </button>
      <!-- Nav Items -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($currentPage =='home'){echo 'active';}?>">
            <a class="nav-link" href="<?php echo $siteurl;?>/">Home</a>
          </li>
          <li class="nav-item dropdown <?php if($currentPage =='about'){echo 'active';}?>">
            <a class="nav-link dropdown-toggle" href="$" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item <?php if($currentSubPage =='aic'){echo 'active';}?>" href="<?php echo $siteurl;?>/about/aic/">About Atal Incubation Centre</a>
              </li>
              <li>
                <a class="dropdown-item <?php if($currentSubPage =='muj'){echo 'active';}?>" href="<?php echo $siteurl;?>/about/muj/">About Manipal University Jaipur</a>
              </li>
              <li>
                <a class="dropdown-item <?php if($currentSubPage =='board-team-mentors'){echo 'active';}?>" href="<?php echo $siteurl;?>/about/board-team-mentors/">Board, Team, Mentors</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://www.niti.gov.in/" target="_blank">About Niti Aayog</a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php if($currentPage =='events'){echo 'active';}?>">
            <a class="nav-link" href="<?php echo $siteurl;?>/events/">Events</a>
          </li>
          <li class="nav-item <?php if($currentPage =='inside-aic'){echo 'active';}?>">
            <a class="nav-link" href="<?php echo $siteurl;?>/inside-aic/">INSIDE MUJ- AIC</a>
          </li>
          <li class="nav-item dropdown <?php if($currentPage =='collaborators'){echo 'active';}?>">
            <a class="nav-link dropdown-toggle" href="$" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Collaborators
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="<?php echo $siteurl;?>/collaborators/#industries">Industries</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo $siteurl;?>/collaborators/#companies">Companies</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo $siteurl;?>/collaborators/#partners">Partner Universities</a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php if($currentPage =='success'){echo 'active';}?>">
            <a class="nav-link" href="<?php echo $siteurl;?>/success/">Success Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.ecellmuj.in/" target="_blank">E-Cell</a>
          </li>
          <li class="nav-item <?php if($currentPage =='contact'){echo 'active';}?>">
            <a class="nav-link" href="<?php echo $siteurl;?>/contact/">Contact</a>
          </li>
        </ul>
      </div>
      <!-- End Nav Items -->
    </div>
  </nav>
</header>
