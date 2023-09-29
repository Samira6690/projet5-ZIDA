<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.bundle.js">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.1/css/all.min.css">
</head>
<body>
<?php include("nav.php"); ?>
<section class="cont">
</section><br><br><br><br><br><br><br><br><br><br><br><br>
<!--contact-->
<section class="contact">
    <div class="wrapper">
        <h3>Contactez-nous</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, corporis autem nesciunt, et cumque ut quia perferendis, sit deleniti impedit itaque at minus ipsum doloremque? Corrupti nobis omnis labore cum?</p>
        <form action="traitement.php" method="post">

            <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="Nom" autocomplete="off">

            </div><br>
            <div class="form-group">
                <input type="text" name="prenom" class="form-control" placeholder="Prenom"  autocomplete="off">

            </div><br>
            <div class="form-group">
                <input type="password" name="email" class="form-control" placeholder="Email"  autocomplete="off">

            </div><br>
            <div class="form-group">
                <input type="message" name="message" class="form-control" placeholder="Message" autocomplete="off">

            </div>
            </form>
        <!-- <form action="traitement.php" method="post">
            <label for="nom">nom</label>
            <input type="text" name="nom" placeholder="votre nom">
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" placeholder="votre prenom">

        
             <label for="email">email</label>
            <input type="text" name="email" placeholder="votre email">
            <label for="message">message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Envoyé" class="button1">
        </form> -->
    </div>
</section><br><br><br>
<?php include("footer.php"); ?>
</body>
</html><br>