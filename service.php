<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.js">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.1/css/all.min.css">
</head>
<body>
<?php include("nav.php"); ?>
<section class="container3">
</section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><b><br>

<!-- <section class="main" id="produi">
  <div class="content">
    <div class="card border-0">
      <div class="left">
        <h1>Nos valeurs</h1>
        <p>Manger sainement mais délicieusement.Nos clients sont rois, nos clients sont patrons.</p>
      </div>
      <div class="right">
        <img src="aa4.jpg" alt="">
      </div>
    </div>
    <div class="card border-0">
      <div class="left">
        <h1>Nos recettes</h1>
        <p>Nous mettons à vote dispositions les recettes les plus délicieux</p>
      </div>
      <div class="right">
        <img src="aa5.jpg" alt="">
      </div>
    </div>
  </div>

</section> -->
<section class="service">
  <h1 class="title">Services</h1>
  <h5 class="EST text-center">Nous mettons à votre disposition nos services pour que vous passez un bon séjour dans notre ville.</h5>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php 
  $reponse = $bdd->query('SELECT * FROM service');
  while($donnees = $reponse->fetch()){
    ?>
  <div class="col-lg-4">
    <div class="card">
      <img src="<?php echo $donnees['image']; ?>" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title"><?php echo $donnees['titre']; ?></h5>
        <p class="card-text"><?php echo $donnees['contenu']; ?></p>
      </div>
    </div>
  </div>
  <?php 
}
?> 
  <!-- <div class="col-lg-4">
    <div class="card">
      <img src="r2.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">HEBERGEMENT</h5>
        
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in
          This content is a little bit longer. to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <img src="s2.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">RESTAURATION</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
</div> -->
</div> 
</section><br><b><br><br><br>
<h1 class="title">RESTAURATION</h1>
<section class="row special">
  <div class="container text-center mt-5">
    <h5 class="text-primary">Dites-nous comment vous aimez voyager et nous trouverons la vôtre. De super offres sur tous les lieux de villégiature populaires.
    </h5>
    <div class="row mt-4">
      <?php 
      $reponse = $bdd->query('SELECT * FROM service WHERE id=4');
      while($donnees = $reponse->fetch()){
        ?>
        <div class="col-6 col-lg-3 mb-4">
            <img src="<?php echo $donnees['image']; ?>" alt="" class="img-fluid">
        </div>
        <!-- <div class="col-6 col-lg-3 mb-4">
            <img src="aa5.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-lg-3 mb-4">
            <img style="height:200px" src="foo1.jpeg" alt="" class="img-fluid">
        </div>
        <div class="col-6 col-lg-3 mb-4">
            <img style="height:200px" src="aa5.jpg" alt="" class="img-fluid">
        </div> -->
        <?php 
      }
      ?> 
    </div>
  </div>
  
</section> 
<h1 class="title">HEBERGEMENT</h1>
<div class="container text-center mt-5">
  <h3>Les destinations préférées de nos clients</h3>
  <h5 class="text-primary">Dites-nous comment vous aimez voyager et nous trouverons la vôtre. De super offres sur tous les lieux de villégiature populaires.
  </h5>
  <div class="row mt-4">
    <?php 
    $reponse = $bdd->query('SELECT * FROM service WHERE id=8');
    while($donnees = $reponse->fetch()){
      ?>
      <div class="col-6 col-lg-3 mb-4">
          <img src="<?php echo $donnees['image']; ?>" alt="" class="img-fluid">
      </div>
      <!-- <div class="col-6 col-lg-3 mb-4">
          <img src="h3.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-6 col-lg-3 mb-4">
          <img style="height:200px" src="h5.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-6 col-lg-3 mb-4">
          <img style="height:200px" src="h6.jpg" alt="" class="img-fluid">
      </div> -->
      <?php 
    }
    ?> 
  </div>
</div>
</section>
</section>
<?php include("footer.php"); ?>
</body>
</html>