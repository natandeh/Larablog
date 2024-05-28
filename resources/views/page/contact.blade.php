@extends('layout')
@section('title','Contact')
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
            <li> <a href="/service4"> Formations </a></li>
            <li> <a href="/blog"> Blog </a></li>
            <li> <a href="/contact"> Contacts</a></li>
        </ul>
    </nav>
</header>

<section>
    <div class="contactus">
        <div class="title">
            <h1>Contactez-nous</h1>
        </div>
        <div class="box">

            <div class="contact forms" >
                <h3>Laissez-nous un message</h3>
                <form action="">
                    <div class="formbox">

                         <div class="row50">
                            <div class="inputbox">
                                <span>Nom</span>
                                <input type="text" placeholder="Entrez votre nom">
                            </div>
                            <div class="inputbox">
                                <span>Prénoms</span>
                                <input type="text" placeholder="Entrez vos prénoms">
                            </div>
                         </div>

                         <div class="row50">
                            <div class="inputbox">
                                <span>Email</span>
                                <input type="text" placeholder="Entrez votre email">
                            </div>
                            <div class="inputbox">
                                <span>Numéro de téléphone</span>
                                <input type="text" placeholder="+225">
                            </div>
                         </div>

                         <div class="row100">
                            <div class="inputbox">
                                <span>Ecrivez-nous</span>
                                <textarea placeholder="message..."></textarea>
                            </div>
                         </div>

                         <div class="row100">
                            <div class="inputbox">
                                <input type="submit" value="Envoyer">
                            </div>
                         </div>

                    </div>
                </form>
            </div>

            <div class="contact info" >

                <h3>Nos adresses</h3>
                <div class="infobox">

                    <div>
                        <span><ion-icon name="location-outline"></ion-icon></span>
                        <p>Abidjan, Cocody Angré 22ème <br> arrondissement</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail-outline"></ion-icon></span>
                        <a href="mailto:">loremipsum@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <a href="tel:+2250707070707">+225 07-07-07-07-07</a>
                    </div>

                    <ul class="sci">
                        <li><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href=""><ion-icon name="logo-linkedin"></ion-icon></a></li>
                        <li><a href=""><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
                    </ul>

                </div>
            </div>
            <div class="contact map" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1407791576125!2d-3.994563724973785!3d5.395509735242589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb9c01f090bf%3A0xa723a30450af9179!2sF%26J%20Advisory!5e0!3m2!1sfr!2sci!4v1713866918970!5m2!1sfr!2sci"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

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

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

@endsection
