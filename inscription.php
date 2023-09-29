<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" re="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Inscription</title>
</head>
<body>
<?php include("config.php"); ?>
<?php include("nav.php"); ?>

    <div class="login-form">
    <?php
        if(isset($_GET['reg_err']))
        {
            $err = htmlspecialchars($_GET['reg_err']);

            switch($err)
            {
                case 'succes':
                    ?>
                    <div class="alert alert-succes">
                        <strong>Succès</strong>inscription réussie !
                    </div>
                    <?php
                    break;

                    case 'password':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> mot de passe différent
                        </div>
                        <?php
                        break;

                        case 'email':
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                            <?php
                            break;

                            case 'email_length':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email trop long
                                </div>
                                <?php
                                break;

                                case 'pseudo_length':
                                    ?>
                                    <div class="alert alert-danger">
                                        <strong>Erreur</strong> pseudo trop long
                                    </div>
                                    <?php
                                    break;

            }
        }
                    ?>
        <form action="inscription_traitement.php" method="post">
            <h2 class="text-center">Inscription</h2>
            <div class="form-group">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" autocomplete="off">

            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email"  autocomplete="off">

            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe"  autocomplete="off">

            </div>
            <div class="form-group">
                <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" autocomplete="off">

            </div>
            <div class="form-group">
            <p class="text-center"><a href="index.php">Se connecté</a></p>
                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
               </div>
        </form>

    </div>
    <style>
        
    </style>
</body>
</html>