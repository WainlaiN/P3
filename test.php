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
    <!--<link href="bootstrap/css/tuto.css" rel="stylesheet"> -->
    
  </head>

  <body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/logo.svg" width="374px" height="50px" alt="Logo">
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
              <a class="nav-link" href="#festival">Le Festival</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Réserver vos places !</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contactez-nous</a>
            </li>
          </ul>
          
        </div>
        </div>
    </nav>

     <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="contenu">
              <h1 class="main-title">Les Films de Plein Air</h1>
              <a href="" class="btn btn-success btn-lg">Les Films</a>
            </div>
          </div>
        </div>
      </div>
    </header>

     <!-- A propos -->
    <section id="apropos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading text-uppercase">Qui sommes-nous ?</h2>
                        <h3 class="section-subheading text-muted">L'association "Les Films de Plein Air"</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 text-justify">
                        <p>Créée en janvier 2019, l'association Films de Plein Air regroupe des passionnés de films d'auteur.<br>
                        Nous avons pour but de faire découvrir l'univers du cinéma d'auteur. C'est par ce biais que nous avons noué un partenariat avec la Mairie du 8ème arrondissement à Paris, qui nous met à disposition le parc Monceau à l'occasion du festival "Films de Plein Air" que nous développons.<br>
                        Depuis de nombreuses années, nous organisons des événements autour du cinéma d'auteur.
                        </p>
                    </div>
                    <div class="col-md-5 my-auto">
                        <img src="images/logo_asso_ok.PNG" class="img-fluid rounded" alt="Responsive image">
                    </div>
                </div>
            </div>
        </section>

     <!-- Festival -->
    <section class="bg-light" id="festival">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading text-uppercase">Le festival</h2>
                        <h3 class="section-subheading text-muted">Edition 2019 : du 5 au 8 août 2018</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 my-auto">
                        <img src="images/section_festival.jpg" class="img-fluid rounded" alt="Responsive image">
                    </div>
                    <div class="col-md-7 text-justify">
                        <p><strong>Bienvenue au festival des films de plein air !</strong><br>
                        Pour cette <strong>première édition</strong> du festival, nous vous proposons de découvrir des <strong>films d'auteur grand public</strong> ! Vous pourrez assister au sein du <strong>Parc Monceau</strong>, en plein air, à la projection de films français ou américains, qui vous plongeront dans l'univers de chaque réalisateur.<br>
                        C'est pourquoi nous vous proposons du <strong>5 au 8 août 2018</strong> des projections sur un écran gonflable de 10 mètres de hauteur en plein cœur du parc Monceau, à Paris. Vous pourrez donc nous y rejoindre seul, entre amis, en famille, pour des séances à la tombée de la nuit, confortablement installés sur un transat ou allongé dans l'herbe.<br>
                        Toutes les projections de films commencent à 18 h, et durent jusqu'à minuit, entrecoupées de pauses repas grâce aux stands qui seront mis à votre disposition.<br>
                        Merci de vous pré-inscrire pour que nous puissions jauger le nombre de participants !<br>
                        <strong>À très bientôt !</strong>
                        </p>
                    </div>
                </div>  
            </div>
        </section>


    <!-- Films -->
    <section class="bg-light" id="films">
            <!------------------------------------------------------------------------------ PRESENTATION DES FILMS VERSION 1 : SIMPLE ------------------------------------------------------------------------------------>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading text-uppercase">Les films</h2>
                        <h3 class="section-subheading text-muted">Les films sélectionnés &amp; les séances</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Nav pills -->
                        <nav class="nav nav-pills center-pills" id="myTab">
                            <a class="nav-item nav-link active show" href="#p1" data-toggle="pill" id="5aout-tab">5 août 2019</a>
                            <a class="nav-item nav-link" href="#p2" data-toggle="pill" id="6aout-tab">6 août 2019</a>
                            <a class="nav-item nav-link" href="#p3" data-toggle="pill" id="7aout-tab">7 août 2019</a>
                            <a class="nav-item nav-link" href="#p4" data-toggle="pill" id="8aout-tab">8 août 2019</a>
                        </nav>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active show" id="p1">
                                <!---------- Affichage des films du 5 août 2019 ---------->
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 1 LA FAVORITE -->
                                        <a class="films-link" data-toggle="modal" href="#filmsModal1">
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
                                        <a class="films-link" data-toggle="modal" href="#filmsModal2">
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
                                        <a class="films-link" data-toggle="modal" href="#filmsModal3">
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
                            <div class="tab-pane" id="p2">
                                <!---------- Affichage des films du 6 août 2019 ---------->
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 4 LES ETERNELS -->
                                        <a class="films-link" data-toggle="modal" href="#filmsModal4">
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
                                        <a class="films-link" data-toggle="modal" href="#filmsModal5">
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
                                        <a class="films-link" data-toggle="modal" href="#filmsModal6">
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
                            <div class="tab-pane" id="p3">
                                <!---------- Affichage des films du 7 août 2019 ---------->
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 7 TEL AVIV ON FIRE -->
                                        <a class="films-link" data-toggle="modal" href="#filmsModal7">
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
                                        <a class="films-link" data-toggle="modal" href="#filmsModal8">
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
                                        <a class="films-link" data-toggle="modal" href="#filmsModal9">
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
                            <div class="tab-pane" id="p4">
                                <!---------- Affichage des films du 8 août 2019 ---------->
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 films-item">       <!-- FILM 10 ZOMBI CHILD -->
                                        <a class="films-link" data-toggle="modal" href="#filmsModal10">
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
                                        <a class="films-link" data-toggle="modal" href="#filmsModal11">
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
                                        <a class="films-link" data-toggle="modal" href="#filmsModal12">
                                            <img class="img-fluid" src="images/room.jpg" alt="">
                                        </a>
                                        <div class="films-caption">
                                            <h4>In My Room</h4>
                                            <p class="text-muted">De : Ulrich Kohler<br>Durée : 2h <br><span class="badge badge-pill badge-primary">Fantastique</span> <span class="badge badge-pill badge-primary">Dramatique</span><br>
                                                <span class="badge badge-seance badge-primary">Projection à 22h00</span>
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



     <!-- Actu -->
    <section id="actu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Actualités</h2>
                        <h3 class="section-subheading text-muted">Les dernières nouvelles</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image">
                                    <h4>30<br>juillet<br>2018</h4>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Nous avons reçu l'écran gonflable</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <h4>7<br>juin<br>2018</h4>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Inscrivez-vous dès maintenant</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <h4>14<br>mai<br>2018</h4>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Découvrez les projections</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <h4>26<br>avril<br>2018</h4>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Du cinéma en plein air au Parc Monceau</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <h4>Début<br>de<br>l'aventure !</h4>
                                </div>
                            </li>
                        </ul>
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
                            <div class="col-md-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase">Minuit à Paris</h2>
                                    <p class="item-intro text-muted">Synopsis et détails</p>
                                    <img class="img-fluid d-block mx-auto" src="images/affiche_minuit_a_paris.jpg" alt="">
                                    <p class="text-justify">Un jeune couple d’américains dont le mariage est prévu à l’automne se rend pour quelques jours à Paris. La magie de la capitale ne tarde pas à opérer, tout particulièrement sur le jeune homme amoureux de la Ville-lumière et qui aspire à une autre vie que la sienne.</p>
                                    <ul class="list-inline films-caption">
                                        <li class="text-muted">De : Woody Allen</li>
                                        <li class="text-muted">Durée : 1h 34min</li>
                                        <li><span class="badge badge-pill badge-primary">Comédie</span> <span class="badge badge-pill badge-primary">Romance</span></li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" data-prefix="fa" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fa fa-times"></i> --> Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
      
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
  </body>
</html>