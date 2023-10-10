<header class="navbar sticky-top bg-white flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Company name</a>

  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
        <svg class="bi"><use xlink:href="#search"/></svg>
      </button>
    </li>
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="bi"><use xlink:href="#list"/></svg>
      </button>
    </li>
  </ul>
  <?php
        if(isset($_SESSION['user']))
{
  ?>
       <?php echo '<h1>'.''.$_SESSION['user'].''.'</h1>' ?>
       <?php
           echo '<a href="deconnexion.php" class="btn btn-danger btn-lg">Deconnexion</a>';
          }
           else {
            ?>
        <a href="index.php"><button class="btn btn-outline-success" style="background-color: blue;" type="submit">Connexion</button></a>
         <a href="inscription.php"><button class="btn btn-outline-success" style="background-color: rgb(85, 255, 0);" type="submit">Deconnexion</button></a>
         <?php
        }
        ?>
  <div id="navbarSearch" class="navbar-search w-100 collapse">
    <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  </div>
</header>