@extends('layout')
@section('title','Service3')
@section('body')

<header>
    <nav>
        <div class="logo">
            <a href="index.html">
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
        <div class="titre-page2">
            <h1>Formation en Gestion</h1>
        </div>
        <div class="texte-page">

            <div class="paragraphe1">
                <p>
                    Chez F&J, nous pensons qu’une culture financière est un droit et surtout un devoir pour toute partie prenante
                    au développement de l’entreprise : chefs d’entreprise, administrateurs, conseils juridiques, employés,
                    actionnaires en bourse... <br> <br>
                    Dans un monde idéal, tous devraient avoir une bonne culture financière sous-tendant
                    leurs analyses et prises de décision. Une compréhension partagée des enjeux financiers permet un meilleur
                    développement de l’entreprise. Les administrateurs, dirigeants et conseils prennent ainsi de meilleures décisions
                    stratégiques et les managers de meilleures décisions opérationnelles. Quant aux employés qui comprennent mieux
                    l’impact de leurs actions sur la santé financière de l’entreprise, ils se sentent plus impliqués au quotidien et
                    acceptent mieux les décisions du management. <br> <br>
                    Afin de vous donner une idée objective de votre aisance ou de celle de vos collaborateurs avec les finances,
                    F&J vous offre d’évaluer gratuitement votre QI financier ou celui de vos collaborateurs grâce à notre test anonyme
                    en ligne, dont les résultats seront communiqués individuellement, puis agrégés pour le compte du management. <br> <br>
                    En nous fondant sur ces résultats, nous vous proposerons un accompagnement sur-mesure pour développer la culture
                    financière au sein de votre entreprise. Cette assistance prendra en compte le contexte particulier de votre organisation,
                    ainsi que son vocabulaire financier. Elle inclura des formations appropriées au niveau de responsabilité des participants,
                    qui seront mises en œuvre grâce à notre méthode inédite de formation qui allie sens logique, outils de visualisation
                    ludiques et pratique de cas réels.
                    Nous vous accompagnerons également dans la mise en œuvre d’une stratégie de dissémination de l’information financière au
                    sein de votre entreprise, notamment à l’occasion d’évènements internes majeurs ou d’arrêtés comptables intermédiaires. <br> <br>
                    F&J ADVISORY est habilité comme cabinet privé de formation par le Fonds de Développement de la Formation Professionnelle (FDFP).
                    Ces entités nous ont fait confiance en matière de formation : EUROCHAM, CIMAF, CIPREL, SERVAIR, COFINA, FIDRA, AERIA, SODEXAM,
                    BIA, INCLUSIVE GUARANTEE, IECD
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
