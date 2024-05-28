@extends('layout')
@section('title','formation')
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
    <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/affranchi424/30min?hide_event_type_details=1" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
@endsection
