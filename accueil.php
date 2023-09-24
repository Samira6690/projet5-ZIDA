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
<h1>Bienvenue au Burkina Faso:<span class="auto-typing"></span></h1>
<h4>Le pays des hommes intègres, <br>
La destination à ne pas manquer</h4>
</section>

<!-- <a href="#">Visitez</a> <a href="#" class="cv">contactez-nous</a> -->
<div class="find_trip">
        <form action="">
                 <div>
                <label>Ville</label>
                <input type="text" placeholder="Entrez une ville">
            </div>
            <div>
                <label>Site</label>
                <input type="text" placeholder="Entrez un site">
            </div>
<input type="submit" value="conatactez-nous">
        </form>
    </div>
</section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- <section class="possibility"> -->
 


<!-- <div class="wrapper">
    <article class="possibility-1">
        <div class="overlay">
            <h4>la belle cité de sya
</h4>
            <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi totam, nihil fugit</small></p>
            <a href="bobo.php" class="button">Plus d'info</a>
        </div>
    </article>
    <article class="possibility-2">
        <div class="overlay">
            <h4>Banfora</h4>
            <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi totam, nihil fugit</small></p>
            <a href="banfora.php" class="button">Plus d'info</a>
        </div>
    </article><br><br><br>
    <article class="possibility-3">
        <div class="overlay">
            <h4>gorom-gorom</h4>
            <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi totam, nihil fugit</small></p>
            <a href="gorom.php" class="button">Plus d'info</a>
        </div>
    </article>
    <div class="clear"></div>
</div>
</section><br><br> -->
<h1 class="title">Destinations</h1>
<section  class="doux">

    <?php 
    $reponse = $bdd->query('SELECT * FROM ville');
    while($donnees = $reponse->fetch()){
      ?>
<section class="serre">
    <div class="wrap">
        <img src="<?php echo $donnees['image']; ?>" class="image1">
            </div>
        <div class="wrap1">
        <a href="bobo.php" class="button"><?php echo $donnees['nom']; ?></a>
        <p><?php echo $donnees['content']; ?></p>
       
    </div>
    <!-- <div class="wrap">
        <img src="i2.jpg" class="image1" alt="">
            </div>
        <div class="wrap1">
        <h1>bobo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis harum ducimus</p>
    </div> -->
   
    </section>
    <?php 
}
?> 
    </section>
    <!-- <section class="serre">
    <div class="wrap">
        <img height="200px" src="<?php echo $donnees['image']; ?>" class="image2">
            </div>
        <div class="wrap1">
            <a href="gorom.php" class="button"><?php echo $donnees['nom']; ?></a>
        <p><?php echo $donnees['content']; ?></p>

    </div>
    </section> -->
    <!-- </section> -->
    <!-- <section class="doux1">
    <section class="serre1">
        <div class="wrap2">
            <img src="<?php echo $donnees['image']; ?>" class="image3">
                </div>
            <div class="wrap3">
                <a href="gorom.php" class="button"><?php echo $donnees['nom']; ?></a>

            <p><?php echo $donnees['image']; ?></p>
        </div>
        </section>
        <section class="serre1">
            <div class="wrap2">
                <img src="<?php echo $donnees['image']; ?>" class="image4">
                    </div>
                <div class="wrap3">
                    <a href="gorom.php" class="button"><?php echo $donnees['nom']; ?></a>
                <p><?php echo $donnees['content']; ?></p>

            </div>
            </section>
            </section> -->
        <!-- </section> -->
    <!-- <div class="wrap2">
        <img src="i2.jpg" alt="">
            </div>
        <div class="wrap3">
        <h1>bobo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis harum ducimus</p>
    </div> -->

<section class="cut">
    <h1 class="title">Culture</h1>
    <h1 class="text-center">Quelques évenements culturels au Burkina Faso</h1>

<section class="culture ">
    <div class="cult col-lg-4">
        <img src="w1.jpg" alt="">
        <img src="t3.jpg" alt="">
        <img src="f1.jpg" alt="">
        <img src="m1.jpg" alt="">
        <img src="t8.jpg" alt="">
        <img src="t9.jpg" alt="">
        <img src="s3.jpg" alt="">
        <img src="m2.jpg" alt="">
        <img src="t8.jpg" alt="">
        
    </div>
    <div class="culty col-lg-4">
        <h5>. SNC</h5>
        <h5>. FESPACO</h5>
        <h5>. NAK</h5>
        <h5>. SIAO</h5>
        <h5>. KUNDE</h5>
        <h5>. Danse des masques</h5>
        <h5>. Fitini Show</h5>
        <h5>. Bambino Show</h5>
    </div>
    <div class="v col-lg-4">
        <img height="100px" src="m1.jpg" alt="">
        <img height="100px" src="t1.jpg" alt="">
        <img height="100px" src="i2.jpg" alt=""><br>
    </div><br>
</section>
</section>
 <section class="steps">
    <div class="wrapper">
        <ul>   
            <li id="steps-1"><br><br><br>
            <h4>Planifiez</h4>
            <p>Confiez-nous vos reves de visiter les sites touristiques du Burkina.</p>
            </li>
            <li  id="steps-2"><br><br><br>
                <h4>Organiser</h4>
                <p>Bénéficiez de l'expertise de nos spécialistes, <br> de chaque destination, ils vous accompagne dans la réalisation de vos visistes.</p>
            </li>
            <li  id="steps-3"><br><br><br>
                <h4>Visiter</h4>
                <p>Nous nous chargeons d'assurer votre sécurité <br> et de veiller à votre pleine sérénité tout <br> au long de la visite.</p>
            </li>
            <div class="clear"></div>   
        </ul>
    </div>
</section><br><br><br><br><br><br><br><br><br><br><br> 
<?php include("footer.php"); ?>
<script src="bootstrap.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    let typed = new Typed('.auto-typing', {
        strings:['Bobo dioulasso', 'Banfora', 'Gorom-gorom'],
        typedSpeed:100,
        backSpeed:100,
        loop: true,
        fadeOut: true,
        fadeOutClass: 'typed-fade-out',
        fadeOutDelay: 500
        shuffle: true,

    });
</script> -->
</body>
</html>