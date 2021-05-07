<!-- page d'accueil de la plateforme -->


<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="accueil">
    <header>
      <img src="img/logo.png" alt="GBAF" class="gbaf">
      <h1>Groupement Banque-Assurance Français</h1>
    </header>
    <main>
      <section>
        <p class="intro">Le GBAF regroupe six des plus importants acteurs du secteur de la banque et de l'assurance en France :</p>
        <ul class=listeActeurs>
          <li>BNP Paribas</li>
          <li>BPCE</li>
          <li>Le Crédit Agricole</li>
          <li>Le Crédit Mutuel / CIC</li>
          <li>La Société Générale</li>
          <li>La Banque Postale</li>
        </ul>
        <p>
          Le GBAF est le représentant de la profession bancaire et des assureurs sur tousles axes de la réglementation financière française. 
          Sa mission est de promouvoirl'activité bancaire à l’échelle nationale. 
          C’est aussi un interlocuteur privilégié des pouvoirs publics pour représenter ce secteur d'activité.
        </p>
      </section>
      
        <?php 
            include("database.php");
            include("listePartenaires.php");
        ?>
      
      <section>
        <h1 class="nosPart">Les partenaires du GBAF</h1>
        <div class="logo">
          <img src="img/formation_co.png">
        </div>
        <div class="text-block"> 
          <p>
            Formation & Co est une association française présente sur tout le territoire.
            Son but est de permettre à des personnes issues de tout milieu de devenir entrepreneur 
            grâce à un crédit et un accompagnement professionnel et personnalisé.
          </p>
        </div>
        <a>Cliquez ici pour en savoir plus</a>
        <div class="logo">
          <img src="img/protectpeople.png">
        </div>
        <div class="text-block"> 
          <p>
            En appliquant le principe édifié par la Sécurité Sociale française en 1945,
            Protect People finance la solidarité nationale
            pour permettre à chacun de bénéficier d’une protection sociale.<br>
          </p>
        </div>
        <a>Cliquez ici pour en savoir plus</a>  
        <div class="logo">
          <img src="img/Dsa_france.png">
        </div>
        <div class="text-block"> 
          <p>
            DSA-France accélère la croissance du territoire 
            et s’engage avec les collectivités territoriales pour
            accompagner les entreprises dans les étapes clés de leur évolution.
          </p>
        </div>
        <a>Cliquez ici pour en savoir plus</a>
        <div class="logo">
          <a href="acteurs.php?acteurs=4"><img src="img/CDE.png"></a>
        </div>
        <div class="text-block"> 
          <p>
            La Chambre Des Entrepreneurs (CDE) accompagne les entreprises
            dans leurs démarches de formations<br />
          </p>
        </div>
        <a>Cliquez ici pour en savoir plus</a>
        <div class="push"></div>
      </section>
    </main>
    <footer>
      <ul>
        <li><a href="legal.html">Mentions légales</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </footer>
  </body>
</html>
