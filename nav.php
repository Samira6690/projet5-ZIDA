
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="color: red;">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Accueil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="accueil.php">Accueil</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="service.php">services</a>
              </li>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.php">contact</a>
                  </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Sites touristiques</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sites touristiques
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Bobo</a></li>
              <li><a class="dropdown-item" href="#">Banfora</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Gorom-gorom</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Contact</a>
          </li> -->
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

        <a href="index.php"><button class="btn btn-outline-success" style="background-color: blue;" type="submit">Se connecté</button></a>
          
         <a href="inscription.php"><button class="btn btn-outline-success" style="background-color: rgb(85, 255, 0);" type="submit">Inscription</button></a>
         <?php
        }
        ?>
      </div>
    </div>
  </nav>