
<?php
session_start();

if(isset($_POST['login'], $_POST['mdp'])){
    if(empty($_POST['login']) OR empty($_POST['mdp'])){
        $_SESSION['message'] = 'veulliez remplir tous les champs';
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
<?php include 'header.php'; ?>
<div class="formulaire">
    <form action="" method="post">
        <?php if(isset($_SESSION['message'])){
            echo '<div class="message">';
            echo $_SESSION['message'];
            echo '</div>';
            unset($_SESSION['message']);
        }
        ?>
        <div class="login">
            <label for="">login</label>
            <input type="text" name ="login" id ="login">  <br>
            <label for="">mot de passe</label>
            <input type="password" name ="mdp" id ="mdp"> <br>
        </div>
        <div class="bouton">
            <button type ="submit">Valider</button>
        </div>
    </form>
</div> 
<?php include 'footer.php'; ?>
</div>
</body>
</html>