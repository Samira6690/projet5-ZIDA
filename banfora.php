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
<section class="container5">
  <h1>Bienvenue dans la ville Banfora</h1>
  </section><br>
<section class="destination">
    <h1 class="title">Gallery</h1>
    <div class="content">
      <!---box -->
      <?php 
      $reponse = $bdd->query('SELECT * FROM sites_touristiques WHERE idville=2');
      while($donnees = $reponse->fetch()){
        ?>
      <div class="box">
        <img src="<?php echo $donnees['photo']; ?>" alt="">
        <div class="content">
          <div>
            <h1><?php echo $donnees['titre']; ?></h1>
            <p><?php echo $donnees['content']; ?></p>
            <a href="#">Lire plus</a>
          </div>
        </div>
      </div>
      <?php 
    }
    ?> 
      <!-- <div class="box">
        <img src="d2.jpg" alt="">
        <div class="content">
          <div>
            <h1>le pic de sindou</h1>
            <p></p>
            <a href="#">Lire plus</a>
          </div>
        </div>
      </div>
      <div class="box">
        <img src="d3.jpg" alt="">
        <div class="content">
          <div>
            <h1>le  lac de Tingrela</h1>
            <p></p>
            <a href="#">Lire plus</a>
          </div>
        </div>
      </div>
      <div class="box">
        <img src="d4.jpg" alt="">
        <div class="content">
          <div>
            <h1>le pic de sindou</h1>
            <p></p>
            <a href="#">Lire plus</a>
          </div>
        </div>
      </div>
      <div class="box">
        <img src="d5.jpg" alt="">
        <div class="content">
          <div>
            <h1>Cascades</h1>
            <p></p>
            <a href="#">Lire plus</a>
          </div>
        </div>
      </div>
      <div class="box">
        <img src="d6.jpg" alt="">
        <div class="content">
          <div>
            <h1>cascades</h1>
            <p></p>
            <a href="#">Lire plus</a>
          </div>
        </div>
      </div> -->
    <!---/box -->
    </div>
    </section><br><br><br>
    <h1 class="title">à propos</h1>
    <section class="pop_row">
      <?php 
      $reponse = $bdd->query('SELECT * FROM sites_touristiques WHERE id=15');
      while($donnees = $reponse->fetch()){
        ?>
        <div class="ima card border-0 col-lg-6">
            <!-- <img  src="d8.webp" class="i1"> -->
           <img src="<?php echo $donnees['photo']; ?>" class="12"> 
            <!-- <img  src="c3.webp" class="i3"> -->
            </div>
        <div class="rar col-lg-6">
          <h3 style="color: blue;"><?php echo $donnees['titre']; ?></h3>
          <p><?php echo $donnees['content']; ?></p>       
          <button style="background-color: blue;">revoir gallery</button>       
          <button style="background-color: rgb(234, 255, 0);">En savoir plus</button>
        </div>
    <?php 
  }
  ?> 
    </section><br><br>

<?php include("footer.php"); ?>
</body>
</html>