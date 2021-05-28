<?php
    session_start();
    // modifier les paramètres du compte de l'utilisateur connecté
    require "database.php";
    if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['question']) && isset($_POST['reponse'])) {
        $id = $_POST['id'];
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $email = htmlspecialchars($_POST['email']);
        $question = htmlspecialchars($_POST['questionS']);
        $reponse = htmlspecialchars($_POST['reponse']);
        $req = $bdd->prepare('SELECT password FROM user WHERE id = :id');
        $req->execute(array(
            'id' => $id
        ));
        $resultat = $req->fetch();
        if ($password == $resultat['password']) {
            $password_hash = $password;
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
        }
        $req = $bdd->prepare('UPDATE user SET username = :username, password = :password, email = :email, question = :question, reponse = :reponse WHERE id = :id');
        $req->execute(array(
            'id' => $id,
            'username' => $username,
            'password' => $password_hash,
            'email' => $email,
            'question' => $question,
            'reponse' => $reponse
        ));
        $req->closeCursor();
        session_start();
        $_SESSION['username'] = $username;
        header('Location: parametres.php?update=0');         // redirige vers la page des paramètres mis à jour
        } else {
        header('Location: parametres.php');
    }
?>
//if password = result
verifier mdp en 2 fois
et non vide
en 1 fichier pour in