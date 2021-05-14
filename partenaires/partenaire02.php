<!-- présentation individuelle des partenaires du GBAF-->

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBAF - Protect People</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ff07e057e1.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header id="header" class="border">
      <div>
        <ul class="settings desktop-only">
          <li class="black"><strong> Utilisateur </strong> </li>
          <li class="black"><a class="black" href="parametres.php"><i></i>Paramètres du compte</a></li>
          <li class="black"><a class="black" href="connexion.php"><i></i>Deconnexion</a></li>
        </ul>
      </div>
      <a href="../index.php"><img src="../img/logo.png" alt="GBAF" class="gbaf alt-gbaf"></a>
    </header>
    <main>
      <section>
        <img src="../img/business-01.jpg" class="pub">    
        <p class="partenaires">
          Protect People finance la solidarité nationale.
          Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.
          
          Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.
          Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.
          Nous garantissons un accès aux soins et une retraite.
          Chaque année, nous collectons et répartissons 300 milliards d’euros.
        <ul>
          <li class="services">Notre mission est sociale</li>
          <li class="services">Garantir la fiabilité des données</li>
          <li class="services">Apporter une contribution aux activités économiques</li>
        </ul>
        </p>
      </section>
      <section class="comment-section">
        <div class="flex-container">
          <div class="button"><i class="fas fa-comments"></i><a href="commenter.php" class="button">COMMENTER</a></div>
          <div class="button"><i class="fas fa-thumbs-up"></i></div>
          <div class="button"><i class="fas fa-thumbs-down"></i></div>
        </div>
        <h2 class="comment-title"> COMMENTAIRES </h2> 
        <?php include("database.php"); ?>
        <?php
            $req = $bdd->prepare('SELECT auteur, commentaires, DATE_FORMAT(date_com, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr  FROM commentaires WHERE id_partenaires = 2 ORDER BY date_com');
            $req->execute(array($_GET['commentaires']));
              while ($donnees = $req->fetch()){ ?>
                <p class="comment comment-info"><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
                <p class="comment"><?php echo nl2br(htmlspecialchars($donnees['commentaires'])); ?></p>
        <?php } 
          $req->closeCursor();
        ?>  
      </section>
    </main>
    <footer>
      <div class="flex-footer">
          <div class="button"></i><a href="../contact.html">Contact</a></div>
          <div class="button"></i><a href="../legal.html">Mentions légales</a></div>
        </div>
    </footer>
  </body>
</html>
