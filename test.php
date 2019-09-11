<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Les films de Plein Air </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- integration affichage mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- integration CSS bootstrap -->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- integration CSS style perso -->
  <link href="bootstrap/css/style.css" rel="stylesheet">
  <!--integration font -->
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <!--integration webfont -->
  <link href="bootstrap/css/all.css" rel="stylesheet">
  <link href="bootstrap/css/brands.css" rel="stylesheet">
  <link href="bootstrap/css/fontawesome.css" rel="stylesheet">
  <link href="bootstrap/css/regular.css" rel="stylesheet">
  <link href="bootstrap/css/solid.css" rel="stylesheet">
  <link href="bootstrap/css/svg-with-js.css" rel="stylesheet">
  <link href="bootstrap/css/v4-shims.css" rel="stylesheet">
  <script defer src="bootstrap/js/all.js"></script>

  
</head>

<body>



  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logocinema.png" width="40px" height="40px" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#films">Les Films</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#actu">Actualités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reservation">Réserver</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="header contenu" id="accueil">
    <div class="container ">
      <div>
        <div class="col-xl-12">
          <div>
            <h1 class="display-1">Les Films de Plein Air</h1>
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- A propos -->
  <section id="apropos" class="py-3">
    <div class="container py-3 jumbotron">
      <div class="row">
        <div class="col-lg-6 banniere">
        </div>
        <div class="col-lg-6 text-justify">
          <h2 class="section-heading text-center">Qui sommes-nous ?</h2>
          <h5 class="section-subheading text-muted text-center"><em>L'association "Les Films de Plein Air"</em></h5>
          <div class="text"  id="festival">
            <p>Créée en janvier 2019, l'association Films de Plein Air regroupe des passionnés de films d'auteur.<br>
              Nous avons pour but de faire découvrir l'univers du cinéma d'auteur. C'est par ce biais que nous avons noué un partenariat avec la Mairie du 8ème arrondissement à Paris, qui nous met à disposition le parc Monceau à l'occasion du festival "Films de Plein Air" que nous développons.<br>
              Depuis de nombreuses années, nous organisons des événements autour du cinéma d'auteur.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Festival -->
  <section>
    <div class="container py-3 jumbotron">
      <div class="row">
        <div class="col-lg-6 text-justify">
          <h2 class="section-heading text-center">Le festival</h2>
          <h5 class="section-subheading text-muted  text-center"><em>Edition 2019 : du 5 au 8 août 2019</em></h5>
          <div class="text">
            <p><strong>Bienvenue au festival des films de plein air !</strong><br>
              Pour cette <strong>première édition</strong> du festival, nous vous proposons de découvrir des <strong>films d'auteur grand public</strong> ! Vous pourrez assister au sein du <strong>Parc Monceau</strong>, en plein air, à la projection de films français ou américains, qui vous plongeront dans l'univers de chaque réalisateur.<br>
              C'est pourquoi nous vous proposons du <strong>5 au 8 août 2019</strong> des projections sur un écran de 10 mètres de hauteur en plein cœur du parc Monceau, à Paris. Toutes les projections de films commencent à 18 h, et durent jusqu'à minuit, entrecoupées de pauses repas grâce aux stands qui seront mis à votre disposition.<br>
              Merci de vous pré-inscrire pour que nous puissions jauger le nombre de participants !<br></p>
              <strong>À très bientôt !</strong>
            </div>
          </div>
          <div class="col-lg-6 banniere2">
          </div>
        </div>
      </div>  
    </section>


    <!-- Films -->
    <section id="films">
      <div class="container py-5">
        <div class="row jumbotron">
          <div class="col-md-12 text-center">
            <h2 class="section-heading">Les Films</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <!-- Nav pills -->
            <nav class="nav nav-pills center-pills date" id="myTab">
              <a class="nav-item nav-link active show" href="#p1" data-toggle="pill" id="5aout-tab">5 août 2019</a>
              <a class="nav-item nav-link" href="#p2" data-toggle="pill" id="6aout-tab">6 août 2019</a>
              <a class="nav-item nav-link" href="#p3" data-toggle="pill" id="7aout-tab">7 août 2019</a>
              <a class="nav-item nav-link" href="#p4" data-toggle="pill" id="8aout-tab">8 août 2019</a>
            </nav>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active show fade" id="p1">
                <!---------- Affichage des films du 5 août 2019 ---------->
                <div class="row">
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 1 LA FAVORITE -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal1">
                      <img class="img-fluid" src="images/favorite.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>La Favorite</h4>
                      <p class="text-muted">De : Yorgos Lanthimos<br>Durée : 1h 59min<br><span class="badge badge-pill badge-primary">Comédie dramatique</span> <span class="badge badge-pill badge-primary">Romance</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 18h00</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 2 DOULEUR ET GLOIRE -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal2">
                      <img class="img-fluid" src="images/douleuretgloire.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>Douleur et gloire</h4>
                      <p class="text-muted">De : Pedro Almodóvar<br>Durée : 1h 52min<br><span class="badge badge-pill badge-primary">Comédie dramatique</span> <span class="badge badge-pill badge-primary">Dramatique</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 20h00</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 3 LES OISEAUX DE PASSAGE -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal3">
                      <img class="img-fluid" src="images/oiseaux.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>Les Oiseaux de passage</h4>
                      <p class="text-muted">De : Ciro Guerra<br>Durée : 2h 05min<br><span class="badge badge-pill badge-primary">Drame</span> <span class="badge badge-pill badge-primary">Policier</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 22h00</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="p2">
                <!---------- Affichage des films du 6 août 2019 ---------->
                <div class="row">
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 4 LES ETERNELS -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal4">
                      <img class="img-fluid" src="images/eternels.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>Les Eternels</h4>
                      <p class="text-muted">De : Jia Zhangke<br>Durée : 2h 15min<br><span class="badge badge-pill badge-primary">Drame</span> <span class="badge badge-pill badge-primary">Biopic</span> <span class="badge badge-pill badge-primary">Policier</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 18h00</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 5 AN ELEPHANY SITTING STILL -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal5">
                      <img class="img-fluid" src="images/elephant.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>An Elephant sitting still</h4>
                      <p class="text-muted">De : Hu Bo<br>Durée : 3h 50min<br><span class="badge badge-pill badge-primary">Dramatique</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 20h00</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 6 SIBYL -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal6">
                      <img class="img-fluid" src="images/sibyl.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>Sibyl</h4>
                      <p class="text-muted">De : Justine Triet<br>Durée : 1h 40min<br><span class="badge badge-pill badge-primary">Dramatique</span> <span class="badge badge-pill badge-primary">Drame</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 22h00</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="p3">
                <!---------- Affichage des films du 7 août 2019 ---------->
                <div class="row">
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 7 TEL AVIV ON FIRE -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal7">
                      <img class="img-fluid" src="images/telaviv.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>Tel Aviv On Fire</h4>
                      <p class="text-muted">De : Sameh Zoabie<br>Durée : 1h 40min<br><span class="badge badge-pill badge-primary">Comédie musicale</span> <span class="badge badge-pill badge-primary">Comique</span> <span class="badge badge-pill badge-primary">Drame</span> <span class="badge badge-pill badge-primary">Musical</span> <span class="badge badge-pill badge-primary">Fantastique</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 18h00</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 8 L'ANGE -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal8">
                      <img class="img-fluid" src="images/ange.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>L'Ange</h4>
                      <p class="text-muted">De : Luis Ortega<br>Durée : 1h59min<br><span class="badge badge-pill badge-primary">Policier</span> <span class="badge badge-pill badge-primary">Aventure</span> <span class="badge badge-pill badge-primary">Action</span> <span class="badge badge-pill badge-primary">Fantastique</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 20h00</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 9 SIBEL -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal9">
                      <img class="img-fluid" src="images/sibel.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>Sibel</h4>
                      <p class="text-muted">De : Caola Zencirci<br>Durée : 1h 35min<br><span class="badge badge-pill badge-primary">Dramatique</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 22h00</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="p4">
                <!---------- Affichage des films du 8 août 2019 ---------->
                <div class="row">
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 10 ZOMBI CHILD -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal10">
                      <img class="img-fluid" src="images/zombi.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>Zombi Child</h4>
                      <p class="text-muted">De : Bertrand Bonello<br>Durée : 1h 43min<br><span class="badge badge-pill badge-primary">Fantastique</span> <span class="badge badge-pill badge-primary">Dramatique</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 18h00</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 11 LES ETENDUES IMAGINAIRES -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal11">
                      <img class="img-fluid" src="images/etendues.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>Les Étendues imaginaires</h4>
                      <p class="text-muted">De : Yeo Siew Hua<br>Durée : 1h 35min<br><span class="badge badge-pill badge-primary">Policier</span> <span class="badge badge-pill badge-primary">Dramatique</span><br>
                        <span class="badge badge-seance badge-primary">Projection à 20h00</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 12 IN MY ROOM -->
                    <a class="films-link text-center" data-toggle="modal" href="#filmsModal12">
                      <img class="img-fluid" src="images/room.jpg" alt="">
                    </a>
                    <div class="films-caption">
                      <h4>In My Room</h4>
                      <p class="text-muted">De : Ulrich Kohler<br>Durée : 2h <br><span class="badge badge-pill badge-primary">Fantastique</span> <span class="badge badge-pill badge-primary">Dramatique</span><br>
                        <span class="badge badge-primary">Projection à 22h00</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Actu  -->
    <section id="actu">
      <div class="container py-5">
        <div class="row jumbotron">
          <div class="col-md-12 text-center">
            <h2 class="section-heading">Actualités</h2>
          </div>
        </div>
        <div class="row">

          <div class="col-md-12">
            <div class="flexitem">
              <div class="flexitem__image">
                <div class="imageactu" style="background-image: url('images/real.jpg');">
                </div>
              </div>
              <div class="flexitem__date">
                <span>27 Juillet 2019</span>
              </div>
              <div class="flexitem__desc">
                <h5 class="actuheading">- Rencontre Avec un réalisateur</h5>
                <p>Venez découvrir les plus jeunes talent du cinema d'auteur.</p>
              </div>
            </div>
            <div class="flexitem">
              <div class="flexitem__image">
                <div class="imageactu" style="background-image: url('images/projection.jpg');">
                </div>
              </div>
              <div class="flexitem__date">
                <span>24 Juillet 2019</span>
              </div>
              <div class="flexitem__desc">
                <h5 class="actuheading">- Découvrez les projections</h5>
                <p>La liste des films est maintenant disponible, plus d'informations dans la section "Films".</p>
              </div>
            </div>
            <div class="flexitem">
              <div class="flexitem__image">
                <div class="imageactu" style="background-image: url('images/banniere2.jpg');">
                </div>
              </div>
              <div class="flexitem__date">
                <span>22 Juillet 2019</span>
              </div>
              <div class="flexitem__desc">
                <h5 class="actuheading">- Du cinéma en plein air au Parc Monceau</h5>
                <p>Notre premier festival se déroulera au parc Monseau.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Reservation -->
    <section id="reservation">
      <div class="container py-5 jumbotron">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center ">
            <h2 class="section-heading">Reservation</h2>
            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Adresse email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Votre adresse e-mail *">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Nombre de personnes</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                </select>
              </div>
              <div class="form-group">
                <label for="seance">Séances</label>
                <select class="form-control" required="" name="seance" id="seance">
                  <option value="" selected="" disabled="">Ma Séance</option>
                  <optgroup label="05/08/19">
                    <option value="18h30">18h30 - La Favorite</option>
                    <option value="20h30">20h30 - Douleur et Gloire</option>
                    <option value="22h30">22h30 - Les Oiseaux de passage</option>
                  </optgroup>
                  <optgroup label="06/08/19">
                    <option value="18h30">18h30 - Les Eternels</option>
                    <option value="20h30">20h30 - An Elephant sitting still</option>
                    <option value="22h30">22h30 - Sibyl</option>
                  </optgroup>
                  <optgroup label="07/08/19">
                    <option value="18h30">18h30 - Tel Aviv On Fire</option>
                    <option value="20h30">20h30 - L'Ange</option>
                    <option value="22h30">22h30 - Sibel</option>
                  </optgroup>
                  <optgroup label="08/08/19">
                    <option value="18h30">18h30 - Zombi Child</option>
                    <option value="20h30">20h30 - Les Étendues imaginaires</option>
                    <option value="22h30">22h30 - In My Room</option>
                  </optgroup>
                </select>
                <div class="invalid-tooltip">
                  Merci de choisir votre séance.
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Informations complémentaire</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message *"></textarea>
              </div>
              <button type="submit" class="btn btn-custom btn-primary">Je réserve !</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- contact -->
    <section id="contact">
      <div class="container py-5 jumbotron">
        <div class="row ">
          <div class="col-md-12 text-center">
            <h2 class="section-heading">Contactez-nous</h2>
            <h5 class="section-subheading text-muted">Pour tous renseignements complémentaires</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="nomcontact" type="text" placeholder="Votre nom *" required="required" data-validation-required-message="Veuillez renseigner un nom." aria-describedby="nomcontact">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="emailcontact" type="email" placeholder="Votre adresse e-mail *" required="required" data-validation-required-message="Veuillez renseigner une adresse email." aria-describedby="emailcontact">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="telephonecontact" type="tel" placeholder="Votre numéro de Téléphone *" required="required" data-validation-required-message="Veuillez renseigner un numéro de téléphone." aria-describedby="telephonecontact">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="messagecontact" placeholder="Votre message *" required="required" data-validation-required-message="Veuillez renseigner un message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>






    <!-- Film modal -->
    <div class="films-modal modal fade" id="filmsModal1" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">La Favorite</h2>
                  <p class="item-intro text-muted">Synopsis et détails</p>
                  <img class="img-fluid d-block mx-auto" src="images/favorite.jpg" alt="">
                  <p class="text-justify py-3">Réalisé par Yorgos Lanthimos (Mise à mort du cerf sacré, The lobster), La Favorite est un film historique entre comédie très noire et film d'auteur. Lauréat du Lion d'argent à la Mostra de Venise, il a permis à l'actrice Olivia Colman de remporter le Golden Globe 2019 de la meilleure actrice, et la Coupe Volpi à Venise également. Elle incarne ici la Reine Anne, dans la campagne britannique du XVIIIe siècle, alors que rivalités, décadence et catastrophes burlesques se succèdent autour d'elle. Classé par beaucoup parmi les meilleurs films 2019, le film met aussi en vedette Rachel Weisz (Désobéissance) et Emma Stone (La La Land).</p>
                  <ul class="list-inline films-caption">
                    <li class="text-muted">De : Yorgos Lanthimos</li>
                    <li class="text-muted">Durée : 1h 59min</li>
                    <li><span class="badge badge-pill badge-primary">Comédie</span> <span class="badge badge-pill badge-primary">Romance</span></li>
                  </ul>
                </div>
                <div class="row">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mention légale modal -->
    <div class="modal fade" id="mentions" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Mentions Légales</h2>
                  <div class="pf-content"><p style="text-align: justify;">Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : <a href="http://www.festivalpleinair.org" target="_blank" rel="noopener">www.festivalpleinair.orgg</a> les informations suivantes :</p>
                    <p style="text-align: justify;"><strong>1. Informations légales :</strong></p>
                    <p style="text-align: justify;">Statut du propriétaire : <strong>particulier</strong><br>
                      Le Propriétaire est : <strong>Nicolas Dupriez</strong><br>
                      Adresse postale du propriétaire : <strong>46 avenue Émilie de Villeneuve 81100 Castres</strong></p>
                      <p>Le Créateur du site est : <strong>Nicolas Dupriez</strong><br>
                        Le Responsable de la publication est : <strong>Nicolas Dupriez</strong><br>
                        Contacter le responsable de la publication : <strong>nicolas@free.fr</strong><br>
                        Le responsable de la publication est une<strong> personne physique</strong></p>
                        <p>Le Webmaster est : <strong>Nicolas Dupriez</strong><br>
                          Contacter le Webmaster : <strong><a href="mailto:nicolas@free.fr?subject=Contact a partir des mentions légales via le site www.festivalpleinair.org">nicolas@free.fr</a></strong><br>
                          L’hebergeur du site est : <strong>O2switch 222-224 Boulevard Gustave Flaubert 63000 Clermont-Ferrand</strong><br>
                          <strong><u>CREDIT :</u> </strong> Les mentions légales ont été générées par<strong> <a href="https://www.generer-mentions-legales.com/generateur-mentions-legales.html" target="_blank" rel="noopener">générateur de mentions legales</a></strong></p>
                          <p style="text-align: justify;"><strong>2. Présentation et principe :</strong></p>
                          <p style="text-align: justify;">Est désigné ci-après : <strong>Utilisateur</strong>, tout internaute se connectant et utilisant le site susnommé : <a href="http://www.festivalpleinair.org" target="_blank" rel="noopener">www.festivalpleinair.org</a>.<br>
                            Le site <strong>www.festivalpleinair.org</strong> regroupe un ensemble de services, dans l’état, mis à la disposition des utilisateurs. Il est ici précisé que ces derniers doivent rester courtois et faire preuve de bonne foi tant envers les autres utilisateurs qu’envers le webmaster du site www.festivalpleinair.org. Le site www.festivalpleinair.org est mis à jour régulièrement par Nicolas Dupriez.<br>
                          Nicolas Dupriez s’efforce de fournir sur le site www.festivalpleinair.org des informations les plus précises possibles (sous réserve de modifications apportées depuis leur mise en ligne), mais ne saurait garantir l’exactitude, la complétude et l’actualité des informations diffusées sur son site, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. En conséquence, l’utilisateur reconnaît utiliser ces informations données (à titre indicatif, non exhaustives et susceptibles d’évoluer) sous sa responsabilité exclusive.</p>
                          <p style="text-align: justify;"><strong>3. Accessibilité :</strong></p>
                          <p>Le site www.festivalpleinair.org est par principe accessible aux utilisateurs 24/24h, 7/7j, sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d’impossibilité d’accès au service, www.festivalpleinair.org s’engage à faire son maximum afin de rétablir l’accès au service et s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention. N’étant soumis qu’à une obligation de moyen, www.festivalpleinair.org ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant d’une indisponibilité du service.</p>
                          <p style="text-align: justify;"><strong>4. Propriété intellectuelle :</strong></p>
                          <p style="text-align: justify;">Nicolas Dupriez est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels…<br>
                          Toute reproduction totale ou partielle du site www.festivalpleinair.orgg, représentation, modification, publication, adaptation totale ou partielle de l’un quelconque de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Nicolas Dupriez, propriétaire du site à l’email : nicolas@free.fr, à défaut elle sera considérée comme constitutive d’une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
                          <p style="text-align: justify;"><strong>5. Liens hypertextes et cookies :</strong></p>
                          <p>Le site www.festivalpleinair.org contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de Nicolas Dupriez. Cependant, Nicolas Dupriez n’a pas la possibilité de vérifier l’ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.<br>
                            L’utilisateur est informé que lors de ses visites sur le site www.festivalpleinair.org, un ou des cookies sont susceptibles de s’installer automatiquement sur son ordinateur par l’intermédiaire de son logiciel de navigation. Un cookie est un bloc de données qui ne permet pas d’identifier l’utilisateur, mais qui enregistre des informations relatives à la navigation de celui-ci sur le site.<br>
                            Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l’adresse suivante : <a href="http://www.cnil.fr">www.cnil.fr</a>. L’utilisateur peut toutefois configurer le navigateur de son ordinateur pour refuser l’installation des cookies, sachant que le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. Pour tout bloquage des cookies, tapez dans votre moteur de recherche : bloquage des cookies sous IE ou firefox et suivez les instructions en fonction de votre version.</p>
                            <p style="text-align: justify;"><strong>6. Protection des biens et des personnes – gestion des données personnelles :</strong></p>
                            <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
                            <p style="text-align: justify;">Sur le site www.festivalpleinair.org, Nicolas Dupriez ne collecte des informations personnelles ( suivant l’article 4 loi n°78-17 du 06 janvier 1978) relatives à l’utilisateur que pour le besoin de certains services proposés par le site www.festivalpleinair.org. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site www.festivalpleinair.orgg l’obligation ou non de fournir ces informations.<br>
                              Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à www.festivalpleinair.org par email : <strong><a href="mailto:nicolas@free.fr?subject=Contact ï¿½ partir des mentions lï¿½gales via le site www.festivalpleinair.org">nicolas@free.fr</a></strong> ou par écrit dûment signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
                              <p style="text-align: justify;">Aucune information personnelle de l’utilisateur du site www.festivalpleinair.org n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat du site www.festivalpleinair.org et de ses droits autorise Nicolas Dupriez à transmettre les dites informations à l’éventuel acquéreur qui serait à son tour tenu à la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site www.festivalpleinair.org.<br>
                                Le site www.festivalpleinair.org est en conformité avec le RGPD, voir <a href="https://laravel.sillo.org/politique-de-confidentialite/">notre politique RGPD</a>.</p>
                                <p style="text-align: justify;">Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <footer class="container-fluid footer">
                  <div class="container py-3">
                    <div class="row">  
                      <div class="col-md-12">
                       <div class="socialicons py-3">
                        <a href="#" class="social"><i class="fab fa-facebook-f" style="font-size:36px"></i></a>
                        <a href="#" class="social"><i class="fab fa-twitter" style="font-size:36px"></i></a>
                        <a href="#" class="social"><i class="fab fa-instagram" style="font-size:36px"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mentions">
                    <a data-toggle="modal" href="mentions" data-target="#mentions" style="color:white">Mentions légales</a>
                  </div>
                </div> 
              </div>
            </footer>



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
          </body>
          </html>