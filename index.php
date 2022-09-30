<?php

include 'includes/header.php';

require 'controllers/costumerReviewCtrl.php';


?>

<main>
  <!-- section ACCUEIL -->
  <section class="container-fluid" id="accueil">
    <div class="shadow p-3 mb-5 bg-body rounded"></div>
    <div>
      <h1>Bienvenue<br> Chez Kanto Location</h1>
    </div>
    <a href=" #bungalows" class="btn btn-lg ml-5 mb-2 text-light">Réserver</a>
  </section>

  <!-- section BUNGALOWS -->
  <section class="container-fluid" id="bungalows">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <h1 class="tittle">Nos bungalows</h1>
      <p>Les bungalows de kantolocation sont des logements très agréables et confortables.
        Semblables à de véritables maisonnettes, les bungalows sont généralement situés au cœur de la forêt.
        Ces bungalows peuvent accueillir entre 2 et 6 personnes. Tous disposent d’un coin séjour, d’un coin cuisine,
        d’une terrasse et d’une salle d’eau. Le coin cuisine est tout équipé.
        On peut y trouver un réfrigérateur et une plaque de cuisson avec deux ou quatre feux.
        Dans le salon des bungalows 4/6 personnes, il y a une banquette-lit, une salle d’eau (où se trouvent une
        douche et un lavabo) et un WC indépendant. Tout est prévu pour faciliter vos vacances. Il y a de nombreux
        rangements et tiroirs pour ranger vos affaires et vous sentir comme chez vous.
      </p>
    </div>
    <div class="card-deck">
      <div class="card">
        <img class="card-img" src="./asset/img/bungalow.jpg" alt="photo bungalow N°1">
        <div class="card-body">
          <h2 class="card-title"><a href="fitiavana.php">FITIAVANA</a></h2>
          <p>2/3 personnes</p>

        </div>
        <div class="card-footer">
          <a href="fitiavana.php" onclick="return false;" class="btn-discover tk-KohinoorTelugu-Regular">
            En savoir plus
          </a>
        </div>
      </div>
      <div class="card">
        <img class="card-img" src="./asset/img/bungalow1.jpg" alt="photo bungalow N°2">
        <div class="card-body">
          <h2 class="card-title"><a href="fihobiana.php">FIHOBIANA</a></h2>
          <p>4/6 personnes</p>

        </div>
        <div class="card-footer">
          <a href="fihobiana.php" onclick="return false;" class="btn-discover tk-KohinoorTelugu-Regular">
            En savoir plus
          </a>
        </div>
      </div>
      <div class="card">
        <img class="card-img" src="./asset/img/bungalow4.jpg" alt="photo bungalow N°3">
        <div class="card-body">
          <h2 class="card-title"><a href="firavoana.php">FIRAVOANA</a></h2>
          <p>6 personnes</p>

        </div>
        <div class="card-footer">
          <a href="firavoana.php" onclick="return false;" class="btn-discover tk-KohinoorTelugu-Regular">
            En savoir plus
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- section SERVICES -->
  <section class="container-fluid" id="services">
    <div class="shadow p-2 mb-2 bg-body rounded">
      <h1 class="tittle">Nos services</h1>
      <p class="service-text">Tous nos services sont inclus dans les tarifs de location affichés sauf le restaurant. Votre satisfation est notre priorité.</p>
    </div>

    <div class="container">
      <p>Resto</p>
      <img src="./asset/img/mangue-crevettes.jpg" class="img-fluid" alt="image d'une salade de mangue et crevettes">
      <div class="overlay">
        <div class="text">Miam! Nos plats sont cuisinés avec des produits frais. Le goût est au RVD!!</div>
      </div>
    </div>

    <div class="container">
      <p>Wifi gratuit</p>
      <img src="./asset/img_chevrons/wifi.jpg" class="img-fluid" alt="image d'une femme avec son ordinateur'">
      <div class="overlay">
        <div class="text">Vous profiterez d'une connexion internet gratuite!!</div>
      </div>
    </div>

    <div class="container">
      <p>Piscine</p>
      <img src="./asset/img/petit-dej.jpg" class="img-fluid" alt="image d'une piscinne">
      <div class="overlay">
        <div class="text">Une piscine pour vous rafraîchir et vous détendre!!</div>
      </div>
    </div>

    <div class="container">
      <p>Voiture</p>
      <img src="./asset/img_chevrons/voiture.jpg" class="img-fluid" alt="image d'une voiture">
      <div class="overlay">
        <div class="text">Vous aurez une voiture avec chauffeur pour vos promenades!!</div>
      </div>
    </div>

    <div class="container">
      <p>Vélos</p>
      <img src="./asset/img_chevrons/velos.jpg" class="img-fluid" alt="image des vélos">
      <div class="overlay">
        <div class="text">Des vélos à votre dispositon pour une balade en couple ou en famille!!</div>
      </div>
    </div>
    <a href=" #bungalows" class="btn btn-lg ml-5 mb-2 text-light">Réserver</a>
  </section>

  <!-- section ACTIVITE -->
  <section class="container-fluid" id="activity">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <h1 class="tittle">Activités Parc d'Isalo</h1>
      <p>C'est le parc national le plus visité par les touristes internationaux, à Madagascar. Un magnifique et immense Parc National. Les couleurs et les paysages sont à tomber et plusieurs randonnées sont possibles, accompagné d'un guide. Une pause repas est organisée au cours du parcours, et si vous avez de la chance, dans la partie forêt, vous apercevrez des lémuriens.
        Un savoureux mélange de crêtes, de bassins, de canyons, ne pas rater le coucher du soleil (entre 17h45 et 18h)</p>
    </div>
    <div id="carousel-image" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-image" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-image" data-slide-to="1"></li>
        <li data-target="#carousel-image" data-slide-to="2"></li>
        <li data-target="#carousel-image" data-slide-to="3"></li>
        <li data-target="#carousel-image" data-slide-to="4"></li>
        <li data-target="#carousel-image" data-slide-to="5"></li>
        <li data-target="#carousel-image" data-slide-to="6"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block" src="./asset/img/pisine-naturelle.jpg" alt="photo de la piscine naturelle de l'Isalo">
          <div class="carousel-caption d-none d-md-block">
            <h2>la piscine naturelle de l'Isalo</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="./asset/img/maki4.jpg" alt="photo de maki d'Isalo">
          <div class="carousel-caption d-none d-md-block">
            <h2>la faune de l'Isalo</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="./asset/img/flore.jpg" alt="photo plante d'Isalo">
          <div class="carousel-caption d-none d-md-block">
            <h2>la flore de l'Isalo</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="./asset/img/fenetre-de-l-Isalo.jpg" alt="photo de la fenêtre del'Isalo">
          <div class="carousel-caption d-none d-md-block">
            <h2>la fenêtre de l’Isalo</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="./asset/img/reine-de-l-Isalo.jpg" alt="photo de la reine de l'Isalo">
          <div class="carousel-caption d-none d-md-block">
            <h2>la reine de l'Isalo</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="./asset/img/paysage4.jpg" alt="photo de la grotte des Portugais d'Isalo">
          <div class="carousel-caption d-none d-md-block">
            <h2>la grotte des Portugais</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="./asset/img/tombeau-de-bara.jpg" alt="image du tombeau de bara d'Isalo">
          <div class="carousel-caption d-none d-md-block">
            <h2>Les tombeaux Bara</h2>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-image" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-image" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <a href=" #bungalows" class="btn btn-lg ml-5 mb-2 text-light">Réserver</a>

  </section>

  <!-- section RESERVATIONS -->
  <?php include './includes/ajout-reservation.php'; ?>

  <!-- Section CONTACT -->
  <section class="container-fluid" id="contact">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <h1 class="tittle">Contact</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="coordinates col-sm">
          <p>
            KANTO LOCATION<br>Quartier Nord De Ranohira-Isalo, <br> Ranohira 313,<br> Madagascar
          </p>
          <p>Mobile: +261 32 05 210 50</p>
          <p>Téléphone: +261 34 07 205 53</p>
          <p>Fax: +261 34 07 205 00</p>
          <p id="email-adress">
            <a href="mailto:info@kantolocation.com">info@kantolocation.com</a>
            <br>
            <a href="mailto:commerciale@kantolocation.com">commerciale@kantolocation.com</a>
            <br>
          </p>
        </div>
        <div class="col-sm">
        <img class="coordinates" src="./asset/img/baobab.jpg" alt="image de baobab de Madagascar">
        <p class="baobab">BAOBAB AMOUREUX</p>
        </div>
        <div class="col-sm">
        <img class="coordinates" src="./asset/img/carte_madagascar_isalo.jpg" alt="carte de Madagascar">
        </div>
      </div>
    </div>
    <p class="a-bientot">A bientôt pour votre séjour chez "Kantolocation" à Madagascar</p>
    
  </section>

  <!-- section COMMENTAIRES -->
  <section class="container-fluid" id='commentaires'>
    <div class="shadow p-3 mb-5 bg-body rounded">
      <h1 class="tittle text-center">Commentaires</h1>
      
      <form class="form-commentaires col-6" method="POST">
         <!-- Div pour les notes -->
         <div class="star py-2">
          <a href="#"><i class="bi bi-star text-info" title="Bad"></i></a>
          <a href="#"><i class="bi bi-star text-info" title="Poor"></i></a>
          <a href="#"><i class="bi bi-star text-info" title="Ok"></i></a>
          <a href="#"><i class="bi bi-star text-info" title="Goog"></i></a>
          <a href="#"><i class="bi bi-star text-info" title="Excellent"></i></a>
        </div>
        <!-- Name input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="nom">Votre nom</label>
          <input type="text" class="form-control text-center" name="lastname" id="nom" value="<?= $lastname ?>" placeholder="votre nom">
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="email">Votre adresse mail</label>
          <input type="text" class="form-control text-center" name="email" id="email" value="<?= $email ?>" placeholder="votre email">
        </div>

        <!-- datePost input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="date">Date d'aujourd'hui</label>
          <input type="date" class="form-control text-center" name="datePost" id="date" value="<?= $datePost ?>" placeholder="la date d'aujourd'hui">
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="comment">Votre commentaires</label>
          <textarea class="form-control text-center" name="comment" id="comment" rows="4" value="<?= $comment ?>" placeholder="votre commentaires"></textarea>
        </div>

        <!-- Submit button -->
        <button type="submit" name="send" class="btn-commentaires btn-block text-white font-weight-bold  mb-3">
          SEND
        </button>
      </form>
      <h2 class="tittle text-center m-3">LES COMMENTAIRES</h2>
      <?php
      foreach ($commentsList as $costumerReview) { ?>
        <div class="card w-50">
          <div class="card-body">
            <h5 class="card-title"><?= $costumerReview->lastname; ?></h5>
            <p class="card-text"><?= $costumerReview->datePost; ?></p>
            <p class="card-text"><?= $costumerReview->comment; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
</main>
<?php include './includes/footer.php'; ?>