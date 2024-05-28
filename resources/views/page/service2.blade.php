@extends('layout')
@section('title','Service2')
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
                    <div class="titre-page1">
                        <h1>Amélioration des performances opérationnelles</h1>
                    </div>
                    <div class="texte-page">

                        <div class="paragraphe1">
                            <p>Chez F&J, nous croyons qu’en Afrique plus qu’ailleurs, l’adoption des « best practices » de
                                gestion des opérations et une prise de décisions motivée par l’analyse pertinente des données de gestion
                                constituent un avantage concurrentiel significatif. C’est la raison pour laquelle, dans le cadre de mandats
                                de gestion qui nous sont confiés par des fonds de capital investissement ou des entrepreneurs, nos consultants
                                mettent leur expérience opérationnelle au service d’entreprises diverses dans les domaines suivants
                            </p>
                        </div>

                        <div class="paragraphe2">
                            <p id="t1">Diagnostic intégral de gestion</p>
                            <p>Notre cabinet s’est spécialisé dans la réalisation de diagnostics intégraux d’entreprises
                                en usant de la méthodologie FUNDES. Longuement éprouvée par divers bailleurs de fonds dont
                                l’Union Européenne sur plusieurs continents, cette méthodologie permet d’identifier les zones
                                d’amélioration critiques de la gestion d’une entreprise et de déterminer dans le cadre d’un
                                processus de co-construction avec la société, les interventions prioritaires pour en augmenter
                                la performance. Nous accompagnons ensuite les entreprises diagnostiquées dans la réalisation de
                                ces interventions qui touchent aux différentes fonctions de l’entreprise : stratégie, marketing et
                                ventes, finances, opérations, ressources humaines. Nous avons dans ce cadre accompagné diverses PME
                                affiliées à la Confédération Générale des Entreprises de Côte d’Ivoire (CGECI).nce clés.
                            </p>
                        </div>

                        <div class="paragraphe2">
                            <p id="t2">Amélioration des revenus</p>
                            <p>La croissance des revenus peut être atteinte par une augmentation des volumes de ventes et/ou des prix.
                                F&J analyse votre secteur d’activité et travaille avec vous à la mise en œuvre de stratégies visant à
                                l’accroissement de vos ventes ainsi qu’à la révision appropriée de votre politique de prix et positionnement
                                marketing. Pour ce faire, nous procédons à une analyse fine des acteurs et des tendances de votre secteur d’activité
                            </p>
                        </div>

                        <div class="paragraphe3">
                            <p id="t2">Réduction de coutss</p>
                            <p>Par une analyse de la profitabilité individuelle de vos produits et services, nous vous aidons à développer et mettre
                                en œuvre un plan d’amélioration des marges. A travers un examen exhaustif de vos opérations, nous déterminons les zones
                                d’optimisation de couts, qui peuvent s’avérer très diverses : gestion des stocks et du niveau de service à la clientèle,
                                logistique, désengorgement de goulots d’étranglement, design du package salarial...et des tendances de votre secteur d’activité
                            </p>
                        </div>

                        <div class="paragraphe4">
                            <p id="t2">Réduction de couts</p>
                            <p>Par une analyse de la profitabilité individuelle de vos produits et services, nous vous aidons à développer et mettre
                                en œuvre un plan d’amélioration des marges. A travers un examen exhaustif de vos opérations, nous déterminons les zones
                                d’optimisation de couts, qui peuvent s’avérer très diverses : gestion des stocks et du niveau de service à la clientèle,
                                logistique, désengorgement de goulots d’étranglement, design du package salarial...et des tendances de votre secteur d’activité
                            </p>
                        </div>

                        <div class="paragraphe5">
                            <p id="t2">Réduction de couts</p>
                            <p>Par une analyse de la profitabilité individuelle de vos produits et services, nous vous aidons à développer et mettre
                                en œuvre un plan d’amélioration des marges. A travers un examen exhaustif de vos opérations, nous déterminons les zones
                                d’optimisation de couts, qui peuvent s’avérer très diverses : gestion des stocks et du niveau de service à la clientèle,
                                logistique, désengorgement de goulots d’étranglement, design du package salarial...et des tendances de votre secteur d’activité
                            </p>
                        </div>

                        <div class="paragraphe6">
                            <p id="t2">Gestion des risques</p>
                            <p>L’efficacité opérationnelle d’une entreprise réside dans sa capacité à mettre en place et faire appliquer des procédures
                                opérationnelles rigoureuses garantissant une bonne qualité de service à ses clients et permettant la sauvegarde de ses actifs,
                                tout en clarifiant les responsabilités de ses différents agents. Pour ce faire, nous vous assistons dans la restructuration de
                                votre organigramme ainsi que dans la rédaction et la mise en œuvre de vos manuel de procédures opérationnelles et financières,
                                avec un accent particulier mis sur les axes d’amélioration identifiés suite à notre diagnostic initial.ackage salarial...et des
                                tendances de votre secteur d’activité
                            </p>
                        </div>

                        <div class="paragraphe6">
                            <p id="t2">Gestion Financière et de la Trésorerie</p>
                            <p>En plus d’une stratégie inappropriée, l’absence de liquidités et une structure de capital inadéquate sont les raisons les plus
                                fréquentes de faillite de sociétés. La gestion du besoin en fonds de roulement est critique pour la survie d’une entreprise.
                                Malheureusement, bon nombre d’entreprises sont peu outillées pour l’élaboration de contrats clients/fournisseurs répondant à
                                leurs impératifs de trésorerie, ou pour négocier des conditions bancaires en adéquation avec leurs besoins. En partant d’une
                                revue de vos activités, nos consultants vous aident à comprendre le cycle de conversion de vos achats et ventes en liquidité,
                                à évaluer vos termes de paiement ainsi que ceux que vous accordez à vos clients, et à réduire votre niveau de stock sans
                                compromettre votre qualité de service. F&J vous assiste également à monter des dossiers de financement bancaire visant à optimiser
                                vos coûts financiers, et négocier avec vos partenaires financiers.
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
