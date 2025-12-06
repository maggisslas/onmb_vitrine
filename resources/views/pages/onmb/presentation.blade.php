@php
    $title_page = 'Présentation'
@endphp

@extends('layouts.master')

@section('title')
    {{ $title_page }}
@endsection

@section('style')

@endsection

@section('content')

    @include('componnents.banner' , [
        'title' => $title_page,
        'paths' => [
            [$title_page]
        ]
    ])


    {{-- A propos --}}
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="assets/img/onmb/about.png" alt="About">
                        </div>
                        <div class="about-info">
                            <h3 class="box-title">ONMB</h3>
                            <p class="box-text">
                                Ordre National des Médécins du Bénin.
                            </p>
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <a href="tel:+16356478965" class="box-link"><i class="fa-solid fa-phone"></i> +229 94 96 81 81</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-2 text-center text-xl-start">
                        <div class="title-area mb-32">
                            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">A propos de l'ONMB</span>
                            <h2 class="sec-title">Qui sommes nous ?</h2>
                            <p class="sec-text">
                                L’ONMB veille au maintien des principes de moralité, probité et de
                                dévouement indispensables à l’exercice de la médecine, à l’observation par
                                tous ses membres des devoirs professionnels ainsi que des règles édictées
                                par le code de déontologie médicale. Découvrez dans la suite notre :
                            </p>
                        </div>
                        <div class="mb-30 mt-n1">
                            <div class="checklist style2 list-two-column">
                                <ul>
                                    <li><i class="fas fa-heart-pulse"></i> Présentation</li>
                                    <li><i class="fas fa-heart-pulse"></i> Inscription</li>
                                    <li><i class="fas fa-heart-pulse"></i> Organes statutaires</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
        </div>
    </div>

    {{-- NOUS --}}
    <section class="bg-smoke space">
        <div class="shape-mockup jump d-none d-md-block" data-top="10%" data-right="10%"><img src="assets/img/shape/kit_1.png" alt="shape"></div>
        <div class="shape-mockup moving" data-bottom="10%" data-left="6%"><img src="assets/img/shape/kit_2.png" alt="shape"></div>
        <div class="shape-mockup jump-reverse" data-bottom="10%" data-right="4%"><img src="assets/img/shape/kit_3.png" alt="shape"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title4 icon-white"><img src="assets/img/theme-img/title_icon.svg" alt="shape">Nous</span>
                <h2 class="sec-title">
                    Ordre National des Médecins du Bénin
                </h2>
            </div>
            <div class="nav service-block-tab" id="service-block-tab" role="tablist">
                <button class="tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">
                    <div class="box-icon">
                        <img src="assets/img/icon/service_block_1.svg" alt="icon">
                    </div>
                    Présentation
                </button>
                <button class="tab-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">
                    <div class="box-icon">
                        <img src="assets/img/icon/service_block_2.svg" alt="icon">
                    </div>
                    Inscription
                </button>
                <button class="tab-btn" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">
                    <div class="box-icon">
                        <img src="assets/img/icon/service_block_3.svg" alt="icon">
                    </div>
                    Organes statutaires
                </button>
            </div>
            <div class="tab-content">
                <!-- Single item -->
                <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                    <div class="service-block" data-bg-src="assets/img/bg/service_block_bg.png">
                        <div class="box-img">
                            <img src="assets/img/banner/home.png" alt="Image">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="service-details.html">Présentation</a></h3>
                            <p class="box-text">
                                Institué par ordonnance N° 73-38 du 21 avril 1973 portant création et
                                organisation des ordres nationaux des médecins, pharmaciens, des chirurgiens -dentistes
                                et des sages-femmes, l'Ordre National des Médecins Bénin (ONMB) est l'institution
                                réglementaire et disciplinaire de la profession médicale.
                            </p>
                            <p class="box-text">
                                L'ONMB veille au maintien des principes de moralité, de probité et de dévouement
                                indispensables à l'exercice de la médecine. II veille aussi à l'observation par
                                tous ses membres des devoirs professionnels ainsi que des règles édictées par le
                                code de déontologie médicale, assurant aussi la défense de l'honneur et de l'indépendance
                                de la profession médicale. Il est dirigé par un Conseil National de 9 membres dont 4 membres
                                du bureau et dispose des conseillers départementaux.
                            </p>
                            <p class="box-text">
                                L'ORDRE NATIONAL DES MEDECINS DU BENIN regroupe obligatoirement tous les médecins habiletés
                                à pratiquer leur art au Bénin
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                    <div class="service-block align-items-start" data-bg-src="assets/img/bg/service_block_bg.png">
                        <div class="box-img">
                            <img src="assets/img/banner/home.png" alt="Image">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="service-details.html"> Inscription </a></h3>
                            <ul>
                                <li> Pour qui : tout médecin béninois voulant exercer sur le territoire béninois, aussi bien dans le secteur privé que dans le secteur public, </li>
                                <li> Délai pour s'inscrire : le plus tôt possible dès l'obtention de son diplôme de médecine,</li>
                                <li> Délai pour obtenir son numéro d'ordre : réglementairement de 2 mois. Mais en pratique, votre inscription est définitive (numéro d'ordre) au bout de 2 à 3 semaines (en fonction de la masse d'activités de la période). PS:</li>
                                <li> Exercer sans être inscrit au tableau d'ordre est illégal et passible d'une peine d'emprisonnement (article 3 et 17 de l'Ordonnance portant création et organisation de l'ONMB);</li>
                                <li> Tout médecin qui n'est pas à jour de sa cotisation ordinale annuelle est passible de sanctions par le conseil national de l'Ordre (article 52 de l'ordonnance portant création et organisation de l'ONMB).</li>
                            </ul>
                            <strong>
                                PIECES A FOURNIR POUR L'INSCRIPTION AU TABLEAU DE L'ORDRE NATIONAL DES MEDECINS DU BENIN
                            </strong>
                            <ol>
                                <li>Un bulletin d'inscription (Télécharger ici)</li>
                                <li>Une demande manuscrite (adressée au Président de l'Ordre)</li>
                                <li>Un curriculum vitae</li>
                                <li>Des photocopies légalisées des diplômes et titres (équivalences des diplômes de l'extérieur : voir page 26)</li>
                                <li>Un acte de naissance (légalisé)</li>
                                <li>Un casier judiciaire datant de moins de trois (03) mois</li>
                                <li>Un certificat de nationalité (légalisé)</li>
                                <li>Deux (02) photos d'identité couleur (costume pour les hommes)</li>
                                <li>Frais d'inscription unique : 25.000 FCFA</li>
                            </ol>

                            <ul>
                                <li>Cotisation de l'année en cours : 24.000 FCFA</li>
                                <li>
                                    <em>Pour les médecins préalablement inscrits à un autre ordre des médecins: attestation de radiation dudit ordre.</em>
                                </li>
                            </ul>

                            <strong>
                                NB
                            </strong>

                            <ul>
                                <li>
                                    Les frais d'inscription doivent être versés à la banque ORABANK dans le compte de l'ONMB (N° 01000-00101380139-79) ou par Mobile money.
                                </li>
                                <li>
                                    Le jour de l'inscription vous devez payer 49.000 FCFA (25.000 F de frais d'inscription + 24.000 F frais de cotisation de l'année en cours) et apporter la preuve de paiement au secrétariat pour la finalisation de votre inscription.
                                </li>
                            </ul>

                            <strong>
                                Téléchargez la liste des pièces :
                            </strong>
                            <a href="assets/documents/PIECES-A-FOURNIR-POUR-LINSCRIPTION.pdf" target="_blank">
                                <img src="assets/img/onmb/pdf.png" alt="PDF" width="50">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                    <div class="service-block" data-bg-src="assets/img/bg/service_block_bg.png">
                        {{-- <div class="box-img">
                            <img src="assets/img/service/service_block_3.jpg" alt="Image">
                        </div> --}}
                        <div class="box-content">
                            <h3 class="box-title"><a href="service-details.html">Organes statutaires</a></h3>
                            <p class="box-text">
                                Le fonctionnement des organes statutaires de l'ONMB respecte les dispositions de l'ordonnance
                                N° 73-38 du 21 avril 1973. Ces organes sont l'Assemblée Générale, le Conseil National,
                                le Bureau du Conseil National, les Conseils Départementaux, les Commissions, la Chambre
                                Disciplinaire.
                            </p>
                            <div class="checklist">
                                <img src="assets/img/icon/check_1.svg" alt="icon"> <strong>L'Assemblée Générale</strong>
                            </div>
                                <p>
                                    L'Assemblée Générale appelée à élire, tous les quatre ans, le conseil national de l'ordre
                                    des médecins ou à procéder au remplacement des membres du conseil dont le mandat vient à
                                    expiration, est convoquée par les soins du président du conseil de l'ordre.
                                </p>

                            <div class="checklist">
                                <img src="assets/img/icon/check_1.svg" alt="icon"> <strong>Le Conseil National</strong>
                            </div>
                                <p>
                                    Les membres du conseil de l'ordre sont élus pour quatre ans. Ils sont rééligibles une fois.
                                </p>
                                <p>
                                    Le conseil national de l'ordre élit son bureau en son propre sein. Le conseil national de
                                    l'ordre est renouvelable tous les 4 ans dans sa totalité. Les membres du conseil national
                                    de l'ordre sont élus en assemblée générale des praticiens à la majorité simple. Seuls sont
                                    éligibles les membres âgés de 30 ans révolus et inscrits au tableau de l'ordre depuis au
                                    moins trois ans.
                                </p>
                                <p>
                                    Le conseil national de l'ordre des médecins est composé de 9 membres élus au scrutin secret
                                    par les praticiens inscrits au tableau de l'ordre.
                                </p>
                                <p>
                                    Quatre membres sont élus parmi les médecins du secteur privé, quatre membres parmi les
                                    médecins fonctionnaires, un membre de la faculté désigné par ses pairs.
                                </p>

                                <div class="checklist">
                                    <img src="assets/img/icon/check_1.svg" alt="icon"> <strong>Le Bureau du Conseil National</strong>
                                </div>
                                <p>
                                    Le bureau se compose d'un :
                                </p>
                                <ul>
                                    <li>Président</li>
                                    <li>Vice-président</li>
                                    <li>Sécrétaire Général</li>
                                    <li>Trésorier Général</li>
                                </ul>
                                <p>
                                    Le président représente l'ordre dans tous les actes de la vie civile et peut déléguer
                                    tout ou partie de ses attributions au vice-président ou secrétaire général en cas
                                    d'indisponibilité.
                                </p>

                                <div class="checklist">
                                    <img src="assets/img/icon/check_1.svg" alt="icon"> <strong> Les Conseils Départementaux </strong>
                                </div>
                                <p>
                                    Aucun texte ne fixe actuellement les modalités de création de fonctionnement des conseils
                                    départementaux en dehors de l'article 70 de l'ordonnance N°73-14 du 08 Février 1973. Cet
                                    article stipule: « dès que le nombre de médecins privés membres de l'ordre national des
                                    médecins du Bénin sera de nature à le justifier, il pourra être créé des conseils
                                    départementaux ». Le règlement intérieur précise les conditions d'élection des conseils
                                    départementaux.
                                </p>

                                <div class="checklist">
                                    <img src="assets/img/icon/check_1.svg" alt="icon"> <strong> Les commissions </strong>
                                </div>
                                <p>
                                    Hormis les organes de l'Ordre National prévus aux articles 34, 47, 55 et 70 de l'Ordonnance
                                    N° 73-38 du 21 Avril 1973, il est créé au sein du Conseil National onze commissions
                                </p>
                                <ul>
                                    <li>a commission administrative</li>
                                    <li>la commission juridique et du contentieux</li>
                                    <li>la commission scientifique, du développement professionnel continu (DPC) et de la Bioéthique.</li>
                                    <li>la commission de qualification et de spécialisation</li>
                                    <li>la commission de la promotion du partenariat avec la médecine traditionnelle et du partenariat secteur public-secteur privé.</li>
                                    <li>la commission des assurances sociales</li>
                                    <li>la commission sociale et culturelle</li>
                                    <li>la commission des assurances</li>
                                </ul>

                                <p>
                                    Les travaux des commissions sont obligatoirement soumis à l'approbation du Conseil.
                                </p>
                                <p>
                                    Chaque commission est chargée de l'étude dans un délai de quinze jours, des dossiers
                                    qui lui sont soumis par le bureau. Elle désigne en son sein un Président et un Rapporteur.
                                    Un cahier de charges est élaboré par le bureau à l'intention de chaque commission et soumis
                                    à l'approbation du Conseil.
                                </p>
                                <p>
                                    En plus de ces sept commissions, l'ONMB a mis en place d'autres commissions dans le but de répondre aux défis et nombreuses mutations de notre profession à savoir :
                                </p>
                                <ul>
                                    <li>
                                        la Commission « Lutte contre l'exercice illégal de la médecine »
                                    </li>
                                    <li>
                                        la Commission «Jeunes Médecins »
                                    </li>
                                </ul>


                                <div class="checklist">
                                    <img src="assets/img/icon/check_1.svg" alt="icon"> <strong> La Chambre Disciplinaire </strong>
                                </div>
                                <p>
                                    Le conseil national a un pouvoir disciplinaire sur les membres de l'ordre. Il exerce au
                                    sein de l'ordre la compétence disciplinaire en première instance.
                                </p>
                                <p>
                                    Le conseil national est assisté à cet effet par un magistrat de l'ordre judiciaire nommé
                                    en même temps qu'un magistrat suppléant par arrêté du ministre de la justice avec voix
                                    délibérative. A sa première réunion qui suit chaque renouvellement, le conseil national
                                    élit en son sein huit membres qui constituent avec le magistrat du siège désigné
                                    conformément à l'aliéna ci-dessus et sous sa présidence, une section disciplinaire ou
                                    chambre disciplinaire. Les membres sortants sont rééligibles.
                                </p>
                                <p>
                                    Le conseil national de l'ordre peut être saisi d'une plainte adressée au président de
                                    l'ordre, plainte émanant :
                                </p>
                                <ol>
                                    <li>
                                        soit de tout membre de l'ordre inscrit au tableau;
                                    </li>
                                    <li>
                                        soit du syndicat des médecins agissant de sa propre initiative
                                    </li>
                                    <li>
                                        soit du Ministre de la Santé, du Directeur National de la Santé Publique, du Procureur de la République.
                                    </li>
                                </ol>

                                <p>
                                    Les praticiens fonctionnaires civils ou militaires ne peuvent être déférés devant la chambre disciplinaire du conseil de l'ordre à l'occasion des actes commis dans l'exercice de leur fonction publique que sur demande du ministre de la santé ou du ministre de la justice
                                </p>
                                <p>
                                    Toutefois, si l'infraction reprochée est en rapport avec une violation du code de déontologie médicale, le ou les praticiens impliqués seront traduits directement devant ladite chambre disciplinaire du conseil national de l'ordre.
                                </p>
                                <p>
                                    Les décisions de l'ordre ont un caractère d'actes administratifs et ne sont susceptibles de recours que devant la chambre administrative de la Cour Suprême, juge de droit commun.
                                </p>
                                <p>
                                    les peines disciplinaires sont les suivantes
                                </p>

                                <ol>
                                    <li>l'avertissement,</li>
                                    <li>le blâme,</li>
                                    <li>l'interdiction temporaire d'exercer,</li>
                                    <li>l'interdiction permanente par radiation du tableau de l'ordre d'exercer une partie ou totalité des fonctions médicales conférées ou rétribuées par l'Etat, les départements, les communes, les établissements publics ou établissements reconnus d'utilité publique ou des fonctions médico-sociales. Cette interdiction temporaire ne peut excéder trois ans.</li>
                                </ol>

                                <strong>AUTRES RÔLES DU CNONMB</strong>
                                <ol>
                                    <li>Gestion des conflits entre médecins</li>
                                    <li>Avis sur tout contrat notarié</li>
                                    <li>L'ordre peut jouer l'intermédiation en cas de conflit entre médecins</li>
                                    <li>L'ordre doit donner son avis sur tout contrat signé entre un médecin et une structure privée.</li>
                                </ol>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistiques --}}
    <div class="z-index-common" data-pos-for="#team-sec" data-sec-pos="bottom-half">
        <div class="container">
            <div class="counter-card-wrap" style="background: #790000">
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number text-white">4000</span></span><span class="plus">+</span>
                    </h2>
                    <p class="box-text text-white">Membres</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number text-white">1</span></span>
                    </h2>
                    <p class="box-text text-white">Président</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number text-white">1</span></span>
                    </h2>
                    <p class="box-text text-white">Vice-président</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number text-white">1</span></span>
                    </h2>
                    <p class="box-text text-white">Secrétaire Général</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number text-white">1</span></span>
                    </h2>
                    <p class="box-text text-white">Trésorier Général</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Vision --}}
    <section class="bg-top-center space-top" id="vision" data-bg-src="assets/img/bg/team_bg_1.jpg">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon"> L'ONMB </span>
                <h2 class="sec-title">
                    Sa vision
                </h2>
            </div>
                <div class="col-xl-12 align-self-center">

                    <div class="accordion-1 accordion py-3" id="faqAccordion">
                        <div class="accordion-card">
                            <div class="accordion-header active" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    Notre vision
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        La vision définie dans le plan stratégique 2022-2026 était la suivante : « A l’horizon 2026, l’Ordre National des Médecins du Bénin est fort, visible, respecté et pro-actif ».
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </div>
    </section>

    {{-- Localisation --}}
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box6">
                        <div class="img1">
                            <img src="assets/img/onmb/localisation.jpeg" alt="About">
                        </div>
                        {{-- <div class="img2" data-mask-src="assets/img/normal/about_mask.png">
                            <img data-mask-src="assets/img/normal/about_mask.png" src="assets/img/normal/about_3_2.jpg" alt="About">
                        </div> --}}
                        {{-- <div class="project-counter" style="padding: 77px 20px !important;">

                            <h4 class="box-title">Situation géographique de l'ONMB</h4>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="title-area mb-4">
                        <span class="sub-title3">Localisation</span>
                        <h2 class="sec-title">Siège de l'Ordre</h2>
                        <p class="sec-text">
                            Depuis le 5 novembre 2018, le siège de l'Ordre est situé dans Quartier Akpakpa Ayélawadjė.
                        </p>
                        <ul>
                            <li>
                                Sur le tronçon carrefour sacré-cœur - carrefour ciné concorde. Prenez la 2ème Rue à droite (en venant du carrefour Sacré-coœur)
                            </li>
                        </ul>
                        <p>
                            Une fois dans la rue, vous verrez GREEN HORSE HOTEL à votre gauche
                        </p>
                        <ul>
                            <li>
                                Le siège de l'ordre se situe dans l'immeuble qui suit GREEN HORSE HOTEL (du même côté que l'Hôtel); Portail noir.
                            </li>
                        </ul>
                        <strong>
                            L'ordre siège au 1er étage dudit immeuble.
                        </strong>
                    </div>
                    {{-- <div class="feature-and-counter">
                        <div class="about-feature-wrap">
                            <div class="about-feature">
                                <div class="box-icon">
                                    <img src="assets/img/icon/about_feature_1.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Qualified Aye Specialist</h3>
                                    <p class="box-text">A Qualified Aye Specialist is someone highly skilled in evaluating.</p>
                                </div>
                            </div>
                            <div class="about-feature">
                                <div class="box-icon">
                                    <img src="assets/img/icon/about_feature_2.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Emergency Help</h3>
                                    <p class="box-text">They are trained to handle urgent situations and can provide.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-counter">
                            <h3 class="box-number">
                                <span class="counter-number">25</span>+
                            </h3>
                            <h4 class="box-title">Years Of <br> Experienced</h4>
                        </div>
                    </div>
                    <div>
                        <a href="about.html" class="th-btn style4">About More</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- MAPS --}}
    <div style="margin-bottom: -7px !important;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.6472005143242!2d2.448721310375587!3d6.371057145630186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023557895d766cd%3A0x4bbfec9d04f68b55!2sOrdre%20National%20des%20M%C3%A9decins%20du%20B%C3%A9nin!5e0!3m2!1sfr!2sbj!4v1763901557431!5m2!1sfr!2sbj"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
