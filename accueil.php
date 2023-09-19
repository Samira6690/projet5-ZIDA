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
<section class="container">
<h1>Bienvenue dans les villes du Burkina:<span class="auto-typing"></span></h1>
<marquee behavior="" direction="">
<h4>Le pays des hommes intègres, <br>
La destination à ne pas manquer</h4>
</marquee>
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

<section class="possibility">
<h1 class="title">Destinations</h1>
<div class="wrapper">
    <article class="possibility-1">
        <div class="overlay">
            <h4>la belle cité de sya</h4>
            <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi totam, nihil fugit</small></p>
            <a href="bobo.php" class="button">Plus d'info</a>
        </div>
    </article>
    <article class="possibility-2">
        <div class="overlay">
            <h4>cascades de banfora</h4>
            <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi totam, nihil fugit</small></p>
            <a href="#" class="button">Plus d'info</a>
        </div>
    </article><br><br><br>
    <article class="possibility-3">
        <div class="overlay">
            <h4>gorom-gorom</h4>
            <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam animi totam, nihil fugit</small></p>
            <a href="#" class="button">Plus d'info</a>
        </div>
    </article>
    <div class="clear"></div>
</div>
</section>
<!-- <section class="steps">
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
            <div class="clear"> </div>
            
        </ul>

    </div>
</section><br><br><br><br><br><br><br><br><br><br><br> -->

<section class="contact">
    <div class="wrapper">
        <h3>Contactez-nous</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, corporis autem nesciunt, et cumque ut quia perferendis, sit deleniti impedit itaque at minus ipsum doloremque? Corrupti nobis omnis labore cum?</p>
        <form action="">
            <label for="name">Nom</label>
            <input type="text" id="name" placeholder="votre nom">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="votre email">
            <input type="submit" value="Ok" class="button1">
        </form>
    </div>
    <footer>
        <div>
            <h1>Tour du Faso <span class="orange">.</span></h1>
            <div>Copyright @ Tous droits réservés. Samira ZIDA, étudiante SEG à Nazi Boni</div>
        </div>
    </footer>
</section>
<script src="bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
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

    })
</script>
</body>
</html>