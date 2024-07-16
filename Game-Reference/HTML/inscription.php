<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/CSS/inscription.css">
    <link href="https://css.gg/css" rel="stylesheet" />
    <script src="/JS/inscription.js"></script>
    <title>S'inscrire</title>
</head>

<body>
    <form action="">
        <h4>Inscription</h4>
        <hr>
        <div class="name-field">
            <div>
                <label>Nom</label>
                <input type="text">
            </div>
            <div>
                <label>Prénom</label>
                <input type="text">
            </div>
        </div>
        <label>E-mail</label>
        <input type="email">
        <label>Mot de passe</label>
        <div class="mdp">
            <input type="password" id="pass" name="pass" placeholder="Mot de passe">
            <i class='bx bxs-hide' id="cache_montre" onClick="changer()"></i>
        </div>
        <?php
        $user = 'root';
        $password = 'root';
        $db = 'inventory';
        $host = 'localhost';
        $port = 3306;
        
        $link = mysqli_init();
        $success = mysqli_real_connect(
           $link, 
           $host, 
           $user, 
           $password, 
           $db,
           $port
        );
        try
        {
            $db = new PDO('mysql:host=localhost; dbname=game reference', $user, $pass);
            foreach ($db->query('SELECT * FROM compte')as $row)
            {
                print_r($row);
            }
        }
        catch (PDOException $e)
        {
            print "Erreur :" .$e->getMessage(). "<br/>";
            die;
        }
        ?>
        <input type="submit" value="S'inscrire" minlength="10">
        <p>On se connait non ?</p>
        <p><a href="/HTML/se_connecter.html">Se connecter</a></p>
    </form>
</body>

</html>