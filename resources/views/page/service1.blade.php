@extends('layout')
@section('title','Service1')
@section('body')

<header>
    <nav>
        <div class="logo">
            <a href="/">
                <img src="{{ asset('img/logosite-01.png') }}" alt="logowebsite">
            </a>
        </div>
        <ul>
            <li> <a href="/"> Accueil </a></li>
            <li class="sous-menu">
                <a href="#">Services</a>
                <ul class="sous-service">
                    <li><a href="/service1">Accompagnement de projet et investissement</a></li>
                    <li><a href="/service2">Amélioration des performances opérationnelle</a></li>
                    <li><a href="/service3">Conseil Financier</a></li>
                    <li><a href="/service4">Formation en gestion</a></li>
                </ul>
            </li>
            <li> <a href="/formations"> Formations </a></li>
            <li> <a href="/blog"> Blog </a></li>
            <li> <a href="/contact"> Contacts</a></li>
        </ul>
    </nav>
</header>
<main>

<section>

    <div class="content-page">
        <div class="titre-page">
            <h1>Accompagnement de projet et investissement</h1>
        </div>
        <div class="texte-page">

            <div class="paragraphe1">
                <p id="t1">Analyses sectorielles</p>
                <p>Afin d’accompagner les investisseurs dans leur stratégie de développement en Côte d’Ivoire,
                    nous leur fournissons des analyses approfondies leur permettant de confirmer leur intérêt
                    sur des secteurs d’activité donnés. Nos analyses incluent la taille et les principales tendances
                    du marché, l’identification des acteurs majeurs ainsi que leurs indicateurs de performance clés.
                </p>
            </div>

            <div class="paragraphe2">
                <p id="t2">Lancement de projet</p>
                <p>Dans le cadre de la mise en œuvre de leurs projets greenfield ou de leur projet d’expansion, nous apportons aux investisseurs une assistance sur mesure pouvant inclure :
                    - La réalisation d’étude de marché et de business plan <br>
                    - Des séances de travail avec les autorités de régulation su secteur <br>
                    - L’obtention de l’agrément à l’investissement auprès du CEPICI <br>
                    - L’obtention d’un terrain industriel auprès de l’AGEDI <br>
                    - L’identification et le recrutement du management local et du personnel clé ...
                </p>
            </div>

    </div>

</section>

</main>

<footer>

<div class="conteneur">

    <div class="conteneur1">

        <div class="logo">
            <img src="{{ asset('img/logosite-01.png') }}" alt="">
        </div>

        <div class="text-footer">
            <p>Recevez des conseils financiers et en management <br>
                directement dans votre boîte de réception en <br>
                vous abonnant à notre newsletter dès maintenant !</p>
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
                <li> <a href="/service4">Formation</a> </li>
                <li> <a href="/blog">Blog</a></li>
                <li> <a href="/contact">Contacts</a></li>
            </ul>
        </div>

    </div>

    <div class="conteneur3">
        <h4>Nos services</h4>
        <div class="liste">
            <ul>
                <li> <a href="/service1">Accompagnement de projet et investissements</a> </li>
                <li> <a href="/service2">Amélioration des performances <br> opérationnelle</a> </li>
                <li> <a href="/service3">Conseil financier</a> </li>
                <li> <a href="/service4">Formations en gestion</a> </li>
            </ul>
        </div>
    </div>

    <div class="conteneur4">
        <h4>Réseaux socio</h4>
        <div class="liste">
            <ul>
                <li> <a href="#">Facebook</a> </li>
                <li> <a href="#">Linkedin</a> </li>
                <li> <a href="#">Twitter</a> </li>
                <li> <a href="#">Instagram</a></li>
            </ul>
        </div>
    </div>

</div>

</footer>

@endsection
