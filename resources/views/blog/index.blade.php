@extends('layout')

@section('title', 'Monblog')

@section('body')

<header>
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logosite-01.png') }}" alt="logowebsite">
            </a>
        </div>
        <ul>
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="sous-menu">
                <a href="#">Services</a>
                <ul class="sous-service">
                    <li><a href="/service1">Accompagnement de projet et investissement</a></li>
                    <li><a href="/service2">Amélioration des performances opérationnelle</a></li>
                    <li><a href="/service3">Conseil Financier</a></li>
                    <li><a href="/service4">Formation en gestion</a></li>
                </ul>
            </li>
            <li><a href="/formations">Formations</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="{{ url('contact') }}">Contacts</a></li>

            @auth
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: none; color: inherit; padding: 0; cursor: pointer;">Déconnexion</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="{{ route('login') }}">Connexion</a></li>
                <li><a href="{{ route('register') }}">Inscription</a></li>
            @endguest
        </ul>
    </nav>
</header>

<section>
    <div class="accueil">
        <div class="but-text">
            <div class="texte">
                <p>
                    Bienvenue sur notre blog, Découvrez un monde <br> d'inspiration,
                    d'informations passionnantes et <br>
                    de conseils utiles pour enrichir votre quotidien
                </p>
            </div>
            @guest
                <div class="auth">
                    <button><a href="{{ url('inscription') }}">Inscrivez-vous</a></button>
                    <p>Déjà inscrit ? <a href="{{ url('connexion') }}">Connectez-vous</a></p>
                </div>
            @endguest
        </div>
    </div>
</section>

<section class="articles">
    <div class="article">
        <div class="left">
            <img src="{{ asset('img/1.jpg') }}" alt="">
        </div>
        <div class="right">
            <p class="date">24 Février 2025</p>
            <h1>Titre article</h1>
            <p class="paragraphe">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eum ipsa corporis dolore suscipit aliquid laboriosam laborum quo aliquam voluptatum nisi, iste a nemo, odit vel blanditiis cumque! Aperiam, quia!</p>
            <button>Parcourir</button>
        </div>
    </div>
</section>

@endsection
