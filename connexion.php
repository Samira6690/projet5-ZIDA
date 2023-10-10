<?php 
session_start();
include("config1.php");
if (isset($_POST['email']) && isset($_POST['password']))
{
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $check = $bdd->prepare('SELECT pseudo, email, role, password FROM utilisateur WHERE email = ?');
        $check ->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash('sha256', $password);
                if($data['password'] === $password AND $data['role'] == 'utilisateur')
                {
                    $_SESSION['user'] = $data['pseudo'];
                    header('Location:accueil.php');    
                   }else if($data['password'] === $password AND $data['role'] == 'admin')
                      { 
                        $_SESSION['user'] = $data['pseudo'];
                        header('Location:admin.php');    
                        }
                     else{
                        header('Location:connexion.php?login_err=password');
                            }
            }else header('Location:connexion.php?login_err=email');
        }else header('Location:connexion.php?login_err=already');
}else header('Location:connexion.php');
