<?php
require_once '../inc/connect.php';

require_once '../inc/header.php';    



$token = sha1(uniqid().rand());


try{
    if(isset($_POST['email'])){
        if(!empty($_POST['email'])){
            $destinataire = $_POST['email'];
            $objet="R&eacute;initialisation de votre mot de passe";
            $msg = 'Bonjour, <br />
            Vous recevez cet e-mail car vous avez fait une demande pour réinitialiser votre mot de passe.<br />
            Pour continuer, cliquez sur le lien ci-dessous.  http://localhost/projet_restaurant%20sauvegarde%205/wf3_restaurant/admin/resetpwd.php?entity='.$token.'&email=$_POST["email"] <br />
            <br />
            Cordialement,<br />
            <br />
            Le webmaster.';
            
           $entete="From: mon@email.com <br />";
            
           mail($destinataire, $objet, $msg, $entete);

           $alert = 'Un message vous a été envoy&eacute;, veuillez vérifier votre boite mail. <a href="index.php">Retour à l\'accueil</a>';
        }
    $req = $bdd->prepare('SELECT * FROM users WHERE email = :login LIMIT 1');
        $req->bindValue(':login', $_POST['email']);
        if($req->execute()){
            $user = $req->fetch();
    
   $sql = $bdd -> prepare("UPDATE users SET token=:token WHERE email=:email");
        
   $sql->bindValue(':token', $token);
    $sql->bindValue(':email', $user['email']);
        
   if($sql -> execute()){
        echo 'un email a été envoyé';
        
   }
        else {
            // Erreur de développement
            var_dump($sql->errorInfo());
            die; // alias de exit(); => die('Hello world');
        }
    }
    }
    else {
        $alert = 'Veuillez entrer une adresse e-mail';
    }
}
 catch (PDOException $e) {
      print $e->getMessage ();
}


?>

<div class="main">
    <h3>Mot de passe oublié ?</h3>
    <p>Entrez votre adresse e-mail. Un lien vous permettant de recréer un mot de passe va vous être envoyé.</p>
    <form name="setemail" action="" method="POST">
        <label for="email">Adresse e-mail : </label><input type="email" name="email" placeholder="ex : pseudo@domaine.fr" required/>
        <input type="submit" value="envoyer"/>
    </form>
    <?php echo $alert; ?>
</div>

</body>
</html>