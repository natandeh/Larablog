<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>F&J advisory</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid d-flex justify-content-center w-100">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('img/logosite-01.png') }}" alt="logowebsite" height="70">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/service1">Accompagnement de projet et investissement</a>
                                <a class="dropdown-item" href="/service2">Amélioration des performances opérationnelle</a>
                                <a class="dropdown-item" href="/service3">Conseil Financier</a>
                                <a class="dropdown-item" href="/service4">Formation en gestion</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/formations">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>


        <!-- Bootstrap Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Premier élément -->
                    <div class="carousel-item active">
                        <img src="{{ asset('img/workplace-team-cooperation-businesswoman-laptop-office-01.png') }}" class="d-block w-100" style="height: 600px;" alt="...">
                        <div class="carousel-caption d-flex align-items-center justify-content-center">
                            <div>
                                <h1>F&J ADVISORY</h1>
                                <p style="font-size: 20px">
                                    Cabinet panafricain de conseils en management,<br>
                                    de conseils financier et de formations en gestion.
                                </p>
                                <p>
                                    <a href="" class="btn btn-lg btn-primary">En savoir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Deuxième élément -->
                    <div class="carousel-item">
                        <img src="{{ asset('img/18516.jpg') }}" class="d-block w-100" style="height: 600px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Notre mission</h1>
                            <p>Équiper les PME et entrepreneurs africains des meilleurs outils pratiques de gestion moderne en offrant des services de conseil et de formation adaptés.</p>
                        </div>
                    </div>

                    <!-- Troisième élément -->
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/1500x500" class="d-block w-100" style="height: 600px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>

                </div>

                <!-- Contrôles -->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>

            </div>



            <div class="expertise">
                <div class="titre-expertise">
                    <h1>NOS DOMAINES D'EXPERTISE</h1>
                </div>
                <div class="categorie">
                    <div class="cat-text1">
                        <p>Accompagnement <br>
                            de projet et <br>
                            investissement </p>
                        <a href="/service1"><button>Consulter</button></a>
                    </div>
                    <div class="cat-text2">
                        <p>Amélioration des <br>
                            performances <br>
                            opérationnelle </p>
                        <a href="/service2"><button>Consulter</button></a></a>
                    </div>
                    <div class="cat-text3">
                        <p>
                            <br> Conseil <br> Financier <br>
                        </p>
                        <a href="/service3"><button>Consulter</button></a>
                    </div>
                    <div class="cat-text4">
                        <p> <br>
                            Formation <br>
                            en gestion <br>
                        </p>
                        <a href="/service4"><button>Consulter</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="formations">
                <div class="titre-formations">
                    <h1>NOS FORMATIONS</h1>
                </div>
                <div class="block">
                    <div class="contenu-formations">
                        <div class="titreh2">
                            <h2>PROFITEZ DE NOS FORMATIONS EN GESTION</h2>
                        </div>
                        <div class="paragraf">
                            <p>
                                Découvrez comment notre <br>
                                expertise en management et <br>
                                finance peut vous aider à atteindre <br>
                                vos objectifs
                            </p>
                        </div>
                        <button><a href="/formations" class="formationlink">Accéder aux formations</a></button>
                    </div>
                    <div class="image">
                        <img src="{{ asset('img/img4-01.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="secteur">
                <div class="titre-secteur">
                    <h1>NOS SECTEURS D’ACTIVITÉS</h1>
                </div>
                <div class="classe">
                    <div class="classe1">
                        <div class="secteur1">
                            <img src="{{ asset('img/Banque.png')}}" alt="">
                            <p>Banques et <br> Micro-finance</p>
                        </div>
                        <div class="secteur2">
                            <img src="{{ asset('img/Distributions.png')}}" alt="">
                            <p>Distribution et <br> Consumer Business</p>
                        </div>
                        <div class="secteur3">
                            <img src="{{ asset('img/Agriculture.png')}}" alt="">
                            <p>Agriculture <br> et Elevage</p>
                        </div>
                    </div>

                    <div class="classe2">
                        <div class="secteur1">
                            <img src="{{ asset('img/Mines.png')}}" alt="">
                            <p>Mines, <br> Distribution <br> pétrolière</p>
                        </div>
                        <div class="secteur2">
                            <img src="{{ asset('img/ong.png')}}" alt="">
                            <p>Organisations Non <br> Gouvernementales</p>
                        </div>
                        <div class="secteur3">
                            <img src="{{ asset('img/Agroalimentaire.png') }}" alt="">
                            <p>Agro- <br> alimentaire</p>
                        </div>
                    </div>

                    <div class="classe3">
                        <div class="secteur1">
                            <img src="{{ asset('img/secteur-03.png') }}" alt="">
                            <p>Média et <br> Télécom</p>
                        </div>
                        <div class="secteur2">
                            <img src="{{ asset('img/EauEnergie.png')}}" alt="">
                            <p>Eau et <br> Energie</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="conteneur">
            <div class="conteneur1">
                <div class="logo">
                    <img src="{{ asset('img/logosite-01.png')}}" alt="">
                </div>
                <div class="text-footer">
                    <p>Recevez des conseils financiers et en management <br> directement dans votre boîte de réception en <br> vous abonnant à notre newsletter dès maintenant !</p>
                </div>
                <div class="newsletters">
                    <form action="mailto:natandeh2022@gmail.com" method="post" enctype="text/plain">
                        <input type="email" name="email" placeholder="Entrez votre adresse e-mail" required>
                        <button type="submit">S'abonner</button>
                    </form>
                </div>
            </div>

            <div class="conteneur2">
                <h4>Liens utiles</h4>
                <div class="liste">
                    <ul>
                        <li><a href="/service4">Formation</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="contact.html">Contacts</a></li>
                    </ul>
                </div>
            </div>

            <div class="conteneur3">
                <h4>Nos services</h4>
                <div class="liste">
                    <ul>
                        <li><a href="/service1">Accompagnement de projet et investissements</a></li>
                        <li><a href="/service2">Amélioration des performances <br> opérationnelle</a></li>
                        <li><a href="/service3">Conseil financier</a></li>
                        <li><a href="/service4">Formations en gestion</a></li>
                    </ul>
                </div>
            </div>

            <div class="conteneur4">
                <h4>Réseaux socio</h4>
                <div class="liste">
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
