@php
    $title_page = 'Fonctionnement'
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


    <section class="py-0">
        <div class="container">
            <div class="row">

                {{-- Chapitre 1 --}}
                <div class="title-area text-center pt-5">
                    <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">Règlement intérieur de l'ordre</span>
                    <h4 class="sec-title">CHAPITRE I : DES DISPOSITIONS GENERALES</h4>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion1">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    01. Article
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion1">
                                <div class="accordion-body">
                                    <p class="">
                                        Les dispositions ci-après fixent les règles d'organisation et de fonctionnement du Conseil National de l'Ordre des Médecins du Bénin, conformément à l'ordonnance 73-38 du 21 avril 1973.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion2">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                    02. Article
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    <p class="">
                                        Le Conseil National de l'Ordre des Médecins du Bénin a son siège à Cotonou. Le siège de l'ordre peut être modifié sur décision du conseil national de l'ordre.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion3">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                    03. Article
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion3">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            Les Médecins privés ou libéraux, exerçant en clientèle privée. Ils se répartissent en :
                                        </li>
                                        <ul>
                                            <li>
                                                non-salariés : ceux-ci exercent pour leur propre compte et reçoivent directement les honoraires;
                                            </li>
                                            <li>
                                                salariés : ceux-ci exercent dans les établissements de santé privés, les centres de santé à vocation humanitaire, confessionnelle ou associative et qui reçoivent un salaire en fin de mois.
                                            </li>
                                        </ul>
                                        <li>
                                            Les Médecins fonctionnaires civils ou militaires contractuels ou agents permanents de l'état, les agents conventionnés et ceux ayant signé un contrat à durée indéterminée avec une formation sanitaire publique.
                                        </li>
                                        <li>
                                            Les praticiens hospitalo-universitaires.
                                        </li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion4">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                    04. Article
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion4">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil National édite un bulletin périodique semestriel d'informations. Y sont insérées, toutes les informations susceptibles d'intéresser les Médecins inscrits au tableau de l'Ordre: publications des décisions du Conseil, nouvelles scientifiques, nécrologie, carnet rose, etc. Il est gratuitement offert aux médecins inscrits au tableau de l'Ordre et à jour de leurs cotisations.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="accordion-1 accordion py-3" id="faqAccordion5">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                    05. Article
                                </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion5">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil National de l'Ordre des Médecins du Bénin crée et administre un site Web d'information et d'échanges. Il en est de même des autres médias (WhatsApp, Facebook ...
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Chapitre 2 --}}
                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE II : COMPOSITION DU CONSEIL NATIONAL DE L'ORDRE
                    </h4>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion6">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                                    06. Article
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion6">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil National de l'Ordre est composé de Neuf (09) membres élus par les médecins inscrits au tableau et régulièrement à jour de leurs cotisations en Assemblées distinctes des trois catégories citées à l'article 3.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion7">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-7">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="true" aria-controls="collapse-7">
                                    07. Article
                                </button>
                            </div>
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion7">
                                <div class="accordion-body">

                                    <p class="">
                                        Est adjoint au Conseil National de l'Ordre des Médecins du Bénin, avec voix consultative, le Directeur National en charge de la Santé publique.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion8">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-8">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="true" aria-controls="collapse-8">
                                    08. Article
                                </button>
                            </div>
                            <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="collapse-item-8" data-bs-parent="#faqAccordion8">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil National de l'Ordre des Médecins du Bénin est assisté par un magistrat de l'Ordre judiciaire nommé par arrêté du garde des sceaux, ministre de la justice, avec voix délibérative.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion9">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-9">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="true" aria-controls="collapse-9">
                                    09. Article
                                </button>
                            </div>
                            <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="collapse-item-9" data-bs-parent="#faqAccordion9">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil National de l'Ordre des Médecins du Bénin peut se faire assister lors de ses travaux par un avocat inscrit au barreau béninois.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Chapitre 3 --}}

                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE III : ELECTION DES MEMBRES DU CONSEIL
                    </h4>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion10">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-10">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                                    10. Article
                                </button>
                            </div>
                            <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="collapse-item-10" data-bs-parent="#faqAccordion10">
                                <div class="accordion-body">

                                    <p class="">
                                        Pour chaque catégorie le vote se fera le même jour sur toute l'étendue du territoire.
                                    </p>
                                    <p class="">
                                        Chaque votant ne peut porter qu'une et une seule procuration venant obligatoirement d'un confrère appartenant à sa catégorie. Les formulaires de vote par procuration sont nominatifs, numérotés et délivrés par le bureau de l'ordre des médecins.
                                    </p>
                                    <p class="">
                                        Une commission électorale sera mise sur pied pour définir les modalités de vote.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion11">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-11">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11" aria-expanded="true" aria-controls="collapse-11">
                                    11. Article
                                </button>
                            </div>
                            <div id="collapse-11" class="accordion-collapse collapse" aria-labelledby="collapse-item-11" data-bs-parent="#faqAccordion11">
                                <div class="accordion-body">

                                    <p class="">
                                        A défaut du quorum défini au précédent article, le Président du Conseil convoque dans un délai d'un mois, une autre assemblée générale, qui procède à l'élection dans ladite catégorie des membres du Conseil, et ce quel que soit l'effectif présent.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion12">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-12">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12" aria-expanded="true" aria-controls="collapse-12">
                                    12. Article
                                </button>
                            </div>
                            <div id="collapse-12" class="accordion-collapse collapse" aria-labelledby="collapse-item-12" data-bs-parent="#faqAccordion12">
                                <div class="accordion-body">

                                    <p class="">
                                        L'élection se fait au bulletin secret sous la supervision des membres non candidats du conseil national et/ou du bureau du conseil départemental du département où se déroulent les élections. Les conseillers départementaux qui sont candidats sont remplacés par leurs homologues du département voisin. Trois scrutateurs non candidats sont désignés pour assurer le déroulement de l'élection.
                                    </p>
                                    <p class="">
                                        Le vote se fait par siège à pourvoir. Les membres du Conseil National de l'Ordre sont élus en assemblée élective des praticiens de chaque catégorie à la majorité simple. La Majorité simple ou dite relative est le nombre de voix le plus élevé obtenu par un candidat.
                                    </p>
                                    <p class="">
                                        En cas d'égalité, un ou plusieurs autres tours peuvent s'avérer nécessaires. Le vote se fait dans les mêmes conditions.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion13">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-13">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-13" aria-expanded="true" aria-controls="collapse-13">
                                    13. Article
                                </button>
                            </div>
                            <div id="collapse-13" class="accordion-collapse collapse" aria-labelledby="collapse-item-13" data-bs-parent="#faqAccordion13">
                                <div class="accordion-body">

                                    <p class="">
                                        Seuls sont éligibles les membres inscrits au tableau de l'ordre depuis au moins 10 ans et à jour de leurs cotisations.
                                    </p>
                                    <p class="">
                                        A la tenue de chaque Assemblée élective, il est établi une liste des candidats élus dans l'ordre où ils l'ont été et comme suit :
                                    </p>
                                    <ul>
                                        <li>
                                            Médecins privés
                                        </li>
                                        <ul>
                                            <li>4 candidats</li>
                                            <li>4 suppléants</li>
                                        </ul>
                                        <li>Membres des facultés et écoles de médecine</li>
                                        <ul>
                                            <li>1 candidat</li>
                                            <li>1 suppléant</li>
                                        </ul>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion14">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-14">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-14" aria-expanded="true" aria-controls="collapse-14">
                                    14. Article
                                </button>
                            </div>
                            <div id="collapse-14" class="accordion-collapse collapse" aria-labelledby="collapse-item-14" data-bs-parent="#faqAccordion14">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Secrétaire du bureau sortant établira un procès-verbal desdites élections, contresigné par le Président sortant.
                                    </p>
                                    <p class="">
                                        La liste des Médecins élus dans chaque catégorie est communiquée au Ministre de la Santé.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion15">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-15">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-15" aria-expanded="true" aria-controls="collapse-15">
                                    15. Article
                                </button>
                            </div>
                            <div id="collapse-15" class="accordion-collapse collapse" aria-labelledby="collapse-item-15" data-bs-parent="#faqAccordion15">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil élu conformément aux articles 6, 7, 8, 9 et 10 du présent Règlement Intérieur, est dirigé par un bureau de 4 membres, élu en son sein et composé comme suit:
                                    </p>
                                    <ul>
                                        <li>un Président</li>
                                        <li>un Vice-président</li>
                                        <li>un Secrétaire Général</li>
                                        <li>un Trésorier</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion16">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-16">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-16" aria-expanded="true" aria-controls="collapse-16">
                                    16. Article
                                </button>
                            </div>
                            <div id="collapse-16" class="accordion-collapse collapse" aria-labelledby="collapse-item-16" data-bs-parent="#faqAccordion16">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil élu a un mandat de quatre ans.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion17">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-17">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-17" aria-expanded="true" aria-controls="collapse-17">
                                    17. Article
                                </button>
                            </div>
                            <div id="collapse-17" class="accordion-collapse collapse" aria-labelledby="collapse-item-17" data-bs-parent="#faqAccordion17">
                                <div class="accordion-body">

                                    <p class="">
                                        En cas d'impossibilité pour le Conseil de l'Ordre National de fonctionner, et tel que prévu à l'article 45 de l'ordonnance 73-38 du 21 Avril 1973 portant institution des Ordres Nationaux des Médecins, Chirurgiens­ dentistes, et Sages-femmes en République du Bénin, une délégation de cinq membres est chargée d'assurer les affaires courantes. Elle est composée des cinq membres suppléants décrits à l'article 10 du présent règlement, ou de cinq médecins inscrits au tableau de l'Ordre National comme suit:
                                    </p>
                                    <ul>
                                        <li>Médecins privés : 2</li>
                                        <li>Médecins fonctionnaires : 2</li>
                                        <li>Membres des établissements de formation: 1</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Chapitre 4 --}}

                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE IV : ATTRIBUTIONS ET FONCTIONS DES MEMBRES DU BUREAU DU CONSEIL NATIONAL
                    </h4>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion18">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-18">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-18" aria-expanded="true" aria-controls="collapse-18">
                                    18. Article
                                </button>
                            </div>
                            <div id="collapse-18" class="accordion-collapse collapse" aria-labelledby="collapse-item-18" data-bs-parent="#faqAccordion18">
                                <div class="accordion-body">

                                    <p class="">
                                        En application de l'article 50 de l'ordonnance N° 73-38 du 21 Avril 1973, le Président représente le Conseil National de l'Ordre partout où besoin est.
                                    </p>
                                    <p class="">
                                        Toutefois, le Président ne peut ester en justice que sur autorisation écrite du Conseil National.
                                    </p>
                                    <p class="">
                                        Il conduit le Bureau du Conseil National dans les démarches extérieures Il veille sur la discipline générale, sur les conduites morales, sociales et juridiques de tous les médecins inscrits au tableau de l'Ordre National. Il veille particulièrement sur les relations de confraternité et de solidarité. Il est saisi de toutes questions relatives à la profession médicale et à l'Ordre National des Médecins.
                                    </p>
                                    <p class="">
                                        Il assure la régularité du Fonctionnement du Conseil de l'Ordre National et de son bureau, en dirige les débats et signe les communications faites en son nom, aux collectivités publiques ou privées.
                                    </p>
                                    <p class="">
                                        Il est chargé de poursuivre l'exécution des décisions prises par le Conseil National de l'Ordre.
                                    </p>
                                    <p class="">
                                        Avec l'assentiment du Conseil National, il a la faculté de convoquer pour information, les Présidents, Secrétaires Généraux, ou membres des Conseils Départementaux.
                                    </p>
                                    <p class="">
                                        Il est l'ordonnateur du budget du Conseil National.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion19">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-19">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-19" aria-expanded="true" aria-controls="collapse-19">
                                    19. Article
                                </button>
                            </div>
                            <div id="collapse-19" class="accordion-collapse collapse" aria-labelledby="collapse-item-19" data-bs-parent="#faqAccordion19">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Vice-président assiste le Président dans ses fonctions. Lorsqu'il a été chargé, par délégation du Président, de missions à l'intérieur ou à l'extérieur du territoire national, il doit en rendre compte au Président.
                                    </p>
                                    <p class="">
                                        Toutefois tout membre du Conseil National peut, sous la même obligation et dans les mêmes formes, être chargé de certaines fonctions au sein du Conseil National, ou de missions dans les conditions décrites à l'alinéa 2 du présent article.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion20">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-20">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-20" aria-expanded="true" aria-controls="collapse-20">
                                    20. Article
                                </button>
                            </div>
                            <div id="collapse-20" class="accordion-collapse collapse" aria-labelledby="collapse-item-20" data-bs-parent="#faqAccordion20">
                                <div class="accordion-body">

                                    <p class="">
                                        Sous l'autorité du Président, le Secrétaire Général :
                                    </p>
                                    <ul>
                                        <li>dirige le Secrétariat</li>
                                        <li>prépare et coordonne les travaux du Conseil National</li>
                                        <li>reçoit et rédige les correspondances, les convocations, les procès­ verbaux de séances.</li>
                                        <li>Veille à l'exécution matérielle des décisions du Conseil National (Convocation d' Assemblées Générales, de Conférences d'Informations, de séminaires, de fêtes ... etc.</li>
                                        <li>Veille à l'évaluation à mi-parcours en juillet et à l'élaboration du plan de travail annuel en septembre (PTA) </li>
                                        <li>Est responsable de l'archivage et de toute la documentation liée à l'activité du Conseil. </li>
                                        <li>coordonne la rédaction et la parution du Bulletin de l'Ordre National.</li>
                                    </ul>

                                    <p class="">
                                        Il est assisté d'un personnel administratif composé de:
                                    </p>
                                    <ul>
                                        <li>un secrétaire permanent</li>
                                        <li>Un agent de liaison</li>
                                    </ul>
                                    <p class="">
                                        Après avis du Conseil National, ce personnel administratif est recruté et peut être révoqué par le Président du Conseil National. Le Conseil National de l'Ordre fixe ses émoluments. Les dispositions du Code de travail lui sont applicables.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion21">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-21">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-21" aria-expanded="true" aria-controls="collapse-21">
                                    21. Article
                                </button>
                            </div>
                            <div id="collapse-21" class="accordion-collapse collapse" aria-labelledby="collapse-item-21" data-bs-parent="#faqAccordion21">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Trésorier est chargé de la gestion des finances, de la comptabilité et de tous les actes qui s'y rattachent sous le contrôle permanent du Président du Conseil National.
                                    </p>
                                    <p class="">
                                        Un aide comptable ou un comptable est recruté pour assister le Trésorier dans sa charge.
                                    </p>
                                    <p class="">
                                        En accord avec le Président du Conseil National, il arrête les comptes de l'exercice, et prépare le budget de l'exercice.
                                    </p>
                                    <p class="">
                                        Il encaisse: les cotisations; les subventions, les produits des dons et legs; toute somme devant revenir à l'Ordre National.
                                    </p>
                                    <p class="">
                                        Il solde les dépenses, effectue tous les paiements, versements et retraits au nom du Conseil National à toute Banque ou Administration avec le contreseing du Président.
                                    </p>
                                    <p class="">
                                        Il procède dans les mêmes formes, à tous les engagements de fonds approuvés par le Conseil National (achats ou ventes de valeurs mobilières ou immobilières, dépôts ou retraits de titres).
                                    </p>
                                    <p class="">
                                        Il présente tous les six (06) mois au Conseil National un compte rendu sur la situation financière faisant ressortir:
                                    </p>
                                    <ul>
                                        <li>Les rentrées de cotisations</li>
                                        <li>Les points des dépenses engagées</li>
                                    </ul>
                                    <p class="">
                                        Il ne peut détenir dans sa caisse de menues dépenses, qu'une somme de cent mille (100.000) FCFA renouvelable.
                                    </p>
                                    <p class="">
                                        Il procède à l'ouverture de comptes bancaires, où seront domiciliés tousles fonds acquis par le Conseil.
                                    </p>
                                    <p class="">
                                        Chaque année en fin d'exercice au plus tard fin février, il fait approuver les comptes de l'exercice clos.
                                    </p>
                                    <p class="">
                                        Chaque année, dès le mois d'octobre, il soumet au Conseil National de l'ordre un projet de budget à l'appréciation du conseil.
                                    </p>
                                    <p class="">
                                        La passation de service d'un trésorier à son successeur, se fait par la présentation et la remise des livres arrêtés à la date de cette passation de service, avec toutes les pièces comptables annexées.
                                    </p>
                                    <p class="">
                                        Après vérification matérielle et constatation de l'exactitude des soldes des comptes, le bilan et les livres sont signés par le Trésorier et le Président sortants.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion22">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-22">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-22" aria-expanded="true" aria-controls="collapse-22">
                                    22. Article
                                </button>
                            </div>
                            <div id="collapse-22" class="accordion-collapse collapse" aria-labelledby="collapse-item-22" data-bs-parent="#faqAccordion22">
                                <div class="accordion-body">

                                    <p class="">
                                        Le conseil recourt à toute compétence utile à la réalisation de sa mission.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion23">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-23">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-23" aria-expanded="true" aria-controls="collapse-23">
                                    23. Article
                                </button>
                            </div>
                            <div id="collapse-23" class="accordion-collapse collapse" aria-labelledby="collapse-item-23" data-bs-parent="#faqAccordion23">
                                <div class="accordion-body">

                                    <p class="">
                                        En plus des organes de l'Ordre National prévus aux articles 34, 47 et 55 de !'Ordonnance 73-38 du 21 Avril 1973, il est créé au sein du Conseil National huit commissions permanentes:
                                    </p>

                                    <ol>
                                        <li>Commission juridique</li>
                                        <li>Commission formations médicales continues</li>
                                        <li>Commission assurances</li>
                                        <li>Commission sociale et culturelle</li>
                                        <li>Commission lutte contre l'exercice illégale de la médecine</li>
                                        <li>Commission écoute, conseils et règlement des contentieux</li>
                                        <li>Commission accompagnement à l'entreprenariat médical.</li>
                                    </ol>

                                    <p class="">
                                        Les travaux des commissions sont obligatoirement soumis à l'approbation du Conseil National.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion24">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-24">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-24" aria-expanded="true" aria-controls="collapse-24">
                                    24. Article
                                </button>
                            </div>
                            <div id="collapse-24" class="accordion-collapse collapse" aria-labelledby="collapse-item-24" data-bs-parent="#faqAccordion24">
                                <div class="accordion-body">

                                    <p class="">
                                        Le conseil peut créer des commissions ad hoc destinées à répondre à des besoins ponctuels.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Chapitre 5 --}}

                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE V : DE L'ORGANISATION DES COMMISSIONS
                    </h4>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion25">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-25">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-25" aria-expanded="true" aria-controls="collapse-25">
                                    25. Article
                                </button>
                            </div>
                            <div id="collapse-25" class="accordion-collapse collapse" aria-labelledby="collapse-item-25" data-bs-parent="#faqAccordion25">
                                <div class="accordion-body">

                                    <p class="">
                                        Outre ses attributions règlementaires, chaque commission est chargée de l'étude dans le délai fixé par le bureau, des dossiers qui lui sont soumis.
                                    </p>
                                    <p class="">
                                        Elle désigne en son sein un Président et un Rapporteur.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion26">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-26">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-26" aria-expanded="true" aria-controls="collapse-26">
                                    26. Article
                                </button>
                            </div>
                            <div id="collapse-26" class="accordion-collapse collapse" aria-labelledby="collapse-item-26" data-bs-parent="#faqAccordion26">
                                <div class="accordion-body">

                                    <p class="">
                                        Un cahier de charges est élaboré par le bureau à l'intention de chaque commission et soumis à l'approbation du Conseil.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Chapitre 6 --}}

                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE VI : ORGANISATION DES REUNIONS DU BUREAU ET DU CONSEIL NATIONAL
                    </h4>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion27">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-27">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-27" aria-expanded="true" aria-controls="collapse-27">
                                    27. Article
                                </button>
                            </div>
                            <div id="collapse-27" class="accordion-collapse collapse" aria-labelledby="collapse-item-27" data-bs-parent="#faqAccordion27">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil National se réunit en séance ordinaire tous les deux mois, le deuxième mercredi des mois impairs, à son siège sur invitation du Bureau. Le Conseil National ne peut délibérer que lorsque la majorité absolue de ses membres est réunie, y compris les procurations.
                                    </p>
                                    <p class="">
                                        A cet effet une convocation précisant l'ordre du jour est adressée aux conseillers une semaine avant.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion28">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-28">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-28" aria-expanded="true" aria-controls="collapse-28">
                                    28. Article
                                </button>
                            </div>
                            <div id="collapse-28" class="accordion-collapse collapse" aria-labelledby="collapse-item-28" data-bs-parent="#faqAccordion28">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Bureau se réunit en séance ordinaire le premier mercredi du mois ; à cet effet une convocation précisant l'ordre du jour est adressée une semaine avant le jour par le SG après avis du Président.
                                    </p>
                                    <p class="">
                                        Le compte-rendu de chaque réunion du bureau doit être envoyé aux conseillers nationaux et archivé.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion29">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-29">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-29" aria-expanded="true" aria-controls="collapse-29">
                                    29. Article
                                </button>
                            </div>
                            <div id="collapse-29" class="accordion-collapse collapse" aria-labelledby="collapse-item-29" data-bs-parent="#faqAccordion29">
                                <div class="accordion-body">

                                    <p class="">
                                        Le Conseil National ou le Bureau peut se réunir en séance extraordinaire à l'invitation du Président ou à la demande de la majorité absolue des membres, avec un ordre du jour précis.
                                    </p>
                                    <p class="">
                                        Tout document à étudier par le Conseil National doit être adressé par le Bureau à chacun des membres du Conseil quinze jours avant.
                                    </p>
                                    <p class="">
                                        Les décisions sont prises par consensus ou à défaut, par vote du bureau et/ ou du Conseil Nation.
                                    </p>
                                    <p class="">
                                        Le compte-rendu de chaque réunion du CN doit être envoyé aux conseillers nationaux pour validation avant d'être archivé.
                                    </p>
                                    <p class="">
                                        Une séance d'information si nécessaire est tenue avec les CD une semaine après.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion30">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-30">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-30" aria-expanded="true" aria-controls="collapse-30">
                                    30. Article
                                </button>
                            </div>
                            <div id="collapse-30" class="accordion-collapse collapse" aria-labelledby="collapse-item-30" data-bs-parent="#faqAccordion30">
                                <div class="accordion-body">

                                    <p class="">
                                        La présence aux réunions est obligatoire. Tout membre empêché doit se faire représenter par un autre membre du Conseil (par procuration écrite).
                                    </p>
                                    <p class="">
                                        Le Vice-président ou à défaut tout autre membre du Bureau du Conseil National, remplace de droit, le Président empêché ou absent à une réunion.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="accordion-1 accordion py-3" id="faqAccordion31">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-31">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-31" aria-expanded="true" aria-controls="collapse-31">
                                    31. Article
                                </button>
                            </div>
                            <div id="collapse-31" class="accordion-collapse collapse" aria-labelledby="collapse-item-31" data-bs-parent="#faqAccordion31">
                                <div class="accordion-body">

                                    <p class="">
                                        Un compte -rendu de la participation d'un membre du conseil à une invitation pour le compte de l'ordre doit être fait selon de la fiche de rapportage validé.
                                    </p>
                                    <p class="">
                                        La représentation du CN dans certaines institutions doit être discutée au conseil.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Chapitre 7 --}}

                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE VII : DE LA TRESORERIE DU CONSEIL NATIONAL DE L'ORDRE
                    </h4>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion32">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-32">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-32" aria-expanded="true" aria-controls="collapse-32">
                                    32. Article
                                </button>
                            </div>
                            <div id="collapse-32" class="accordion-collapse collapse" aria-labelledby="collapse-item-32" data-bs-parent="#faqAccordion32">
                                <div class="accordion-body">

                                    <p class="">
                                        La trésorerie du Conseil National de l'Ordre National comporte deux rebriques :
                                    </p>
                                    <ul>
                                        <li>les recettes, les subventions et dons ;</li>
                                        <li>les dépense.</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion33">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-33">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-33" aria-expanded="true" aria-controls="collapse-33">
                                    33. Article
                                </button>
                            </div>
                            <div id="collapse-33" class="accordion-collapse collapse" aria-labelledby="collapse-item-33" data-bs-parent="#faqAccordion33">
                                <div class="accordion-body">

                                    <p class="">
                                        Les recettes comprennent: les droits d'inscription, les cotisations, les frais de participation aux sessions de formation, les revenus d'œuvres produites par le conseil, les dons et legs, les souscriptions éventuelles etc.
                                    </p>
                                    <ol>
                                        <li>
                                            Le droit d'inscription unique, obligatoire, est payable en une seule fois au moment de la demande d'inscription au tableau de l'Ordre National. Il est fixé par le Conseil National de l'Ordre National à Vingt-cinq mille francs (25.000) CFA. Il donne droit à une carte professionnelle et au caducée de l'Ordre.
                                        </li>
                                        <li>
                                            La cotisation est fixée à Vingt-quatre mille francs (24.000) CF A par an et par Médecin. Elle est payable chaque année à compter de la date d'obtention du diplôme de médecin. Elle est exigible pour l'année en cours. Le montant de la cotisation annuelle peut subir une modification décidée en assemblée générale. Le paiement de celle-ci est une obligation professionnelle. Le non-paiement de la cotisation dans le délai prescrit entraîne le retrait du tableau et l'incapacité d'exercer la profession médicale. Les cotisations doivent garantir le fonctionnement normal du Conseil National. Elles doivent aider à couvrir la rémunération du personnel administratif, les frais de fonctionnement et autres dépenses autorisées par le Conseil National. Les paiements s'effectuent avant le 31 mars de l'année en cours, par paiement électronique,, virement ou chèque déposé directement dans les comptes du Conseil National de l'Ordre National des Médecins du Bénin. La quittance sera remise en échange du bordereau de versement déposé au secrétariat de l'ordre des médecins.
                                        </li>
                                        <li>
                                            les frais de participation aux sessions de formation: le conseil organise des sessions de formation continue à l'endroit des médecins et des étudiants en médecine. Ces sessions peuvent être gratuites ou payantes.
                                        </li>
                                        <li>
                                            Les revenus d'cuvres produites par le conseil : le conseil édite des documents d'information ou de formation qu'il met à la disposition des médecins, des étudiants en médecine et du public à des prix forfaitaires
                                        </li>
                                        <li>Les dons et legs proviennent :</li>
                                        <ul>
                                            <li>soit de la succession de confrères décédés</li>
                                            <li>soit des œuvres de bienfaisance ou de l'assistance sociale</li>
                                            <li>soit de subventions publiques, privées ou d'organismes nationaux ou internationaux</li>
                                        </ul>
                                        <li>Les souscriptions organisées à titre exceptionnel, pour couvrir des dépenses imprévues.</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion34">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-34">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-34" aria-expanded="true" aria-controls="collapse-34">
                                    34. Article
                                </button>
                            </div>
                            <div id="collapse-34" class="accordion-collapse collapse" aria-labelledby="collapse-item-34" data-bs-parent="#faqAccordion34">
                                <div class="accordion-body">

                                    <p class="">
                                        Les dépenses comprennent :
                                    </p>
                                    <ul>
                                        <li>Les dépenses d'investissement et d'équipement</li>
                                        <li>Les dépenses de fonctionnement: gestion administrative de I'Ordre</li>
                                    </ul>

                                    <p class="">
                                        National (local, personnel, courrier, bulletin de l'Ordre National et autres publications, indemnités, site Web, etc.)
                                    </p>
                                    <ul>
                                        <li>Les dépenses ponctuelles: frais de mission, secours, etc.</li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion35">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-35">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-35" aria-expanded="true" aria-controls="collapse-35">
                                    35. Article
                                </button>
                            </div>
                            <div id="collapse-35" class="accordion-collapse collapse" aria-labelledby="collapse-item-35" data-bs-parent="#faqAccordion35">
                                <div class="accordion-body">

                                    <p class="">
                                        Les fonctions de membres du Conseil National sont gratuites. Toutefois, les dépenses engagées pour les démarches d'enquêtes, les communications, les déplacements ou missions diverses, ainsi que pour les frais de séjour et de correspondances, par un ou plusieurs membres du Conseil National donnent droit à des indemnités que le Conseil National détermine, dans les limites de son budget.
                                    </p>
                                    <p class="">
                                        Des frais de déplacement sont prévus au profit des conseillers.
                                    </p>
                                    <ul>
                                        <li>Frais de déplacement pour les réunions statutaires des conseillers nationaux à définir suivant le lieu de résidence : Sud : 15000 FCFA; Nord: 40000 FCFA; Centre: 20.000 FCFA. Rien pour la participation en ligne.</li>
                                        <li>Les indemnités de téléphone :</li>
                                        <p class="">
                                            Par mois :
                                        </p>
                                        <ul>
                                            <li>Président : 15000 FCFA;</li>
                                            <li>Autres Membres du bureau: 10000 FCFA;</li>
                                            <li>Autres membres du conseil: 5000 FCFA.</li>
                                        </ul>
                                        <li>
                                            Indemnités de sujétion:
                                        </li>
                                        <ul>
                                            <li>Président : 50000 FCFA</li>
                                            <li>Autres Membres du bureau: 35000 FCFA</li>
                                            <li>Autres membres du conseil: 30000 FCFA</li>
                                        </ul>
                                        <p class="">
                                            Pour le fonctionnement des conseils départementaux il est prévu :
                                        </p>
                                        <li>Indemnité de téléphone</li>
                                        <ul>
                                            <li>Président : 15000 FCFA.</li>
                                        </ul>
                                    </ul>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="accordion-1 accordion py-3" id="faqAccordion36">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-36">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-36" aria-expanded="true" aria-controls="collapse-36">
                                    36. Article
                                </button>
                            </div>
                            <div id="collapse-36" class="accordion-collapse collapse" aria-labelledby="collapse-item-36" data-bs-parent="#faqAccordion36">
                                <div class="accordion-body">

                                    <p class="">
                                        Des frais de mission sont accordés aux conseillers départementaux ou à toute personne ressource sollicitée pour une activité dans les limites du budget.
                                    </p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Chapitre 8 --}}

                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE VIII: HONORARIAT
                    </h4>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion37">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-37">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-37" aria-expanded="true" aria-controls="collapse-37">
                                    37. Article
                                </button>
                            </div>
                            <div id="collapse-37" class="accordion-collapse collapse" aria-labelledby="collapse-item-37" data-bs-parent="#faqAccordion37">
                                <div class="accordion-body">

                                    <p class="">
                                        Le titre de « Membre Honoraire» de l'Ordre National des Médecins peut être conféré par le Conseil National aux Médecins qui ont honoré l'ordre et ont cessé l'exercice de leur profession :
                                    </p>
                                    <ul>
                                        <li>soit pour invalidité;</li>
                                        <li>soit par leur mise en retraite effective et notifiée par écrit au conseil.</li>
                                    </ul>
                                    <p class="">
                                        Les « Membres honoraires» de l'Ordre National des Médecins restent soumis à la juridiction de la Chambre Disciplinaire.
                                    </p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="accordion-1 accordion py-3" id="faqAccordion38">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-38">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-38" aria-expanded="true" aria-controls="collapse-38">
                                    38. Article
                                </button>
                            </div>
                            <div id="collapse-38" class="accordion-collapse collapse" aria-labelledby="collapse-item-38" data-bs-parent="#faqAccordion38">
                                <div class="accordion-body">

                                    <p class="">
                                        Les Membres Honoraires ne sont astreints à aucune cotisation.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Chapitre 9 --}}

                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE IX : DE L'ADOPTION DU REGLEMENT INTERIEUR
                    </h4>
                </div>

                <div class="col-xl-12">
                    <div class="accordion-1 accordion py-3" id="faqAccordion39">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-39">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-39" aria-expanded="true" aria-controls="collapse-39">
                                    39. Article
                                </button>
                            </div>
                            <div id="collapse-39" class="accordion-collapse collapse" aria-labelledby="collapse-item-39" data-bs-parent="#faqAccordion39">
                                <div class="accordion-body">

                                    <p class="">
                                        Le présent règlement Intérieur est adopté par le Conseil National de l'Ordre des Médecins du Bénin.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Chapitre 10 --}}

                <div class="title-area text-center py-5 mb-0">
                    <h4 class="sec-title">
                        CHAPITRE X : MODIFICATION DU REGLEMENT INTERIEUR
                    </h4>
                </div>

                <div class="col-xl-12">
                    <div class="accordion-1 accordion py-3" id="faqAccordion40">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-40">
                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-40" aria-expanded="true" aria-controls="collapse-40">
                                    40. Article
                                </button>
                            </div>
                            <div id="collapse-40" class="accordion-collapse collapse" aria-labelledby="collapse-item-40" data-bs-parent="#faqAccordion40">
                                <div class="accordion-body">

                                    <p class="">
                                        Le présent Règlement Intérieur ne peut être modifié que sur proposition du Bureau du Conseil National ou d'au moins six membres du Conseil National de l'Ordre des Médecins du Bénin.
                                    </p>
                                    <p class="">
                                        Adopté par le Conseil National de l'Ordre National des Médecins du Bénin.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="title-area text-center py-5 mb-0">
                    <strong class="sec-title text-danger">
                        Le 15 février 2024 <br>
                        Par Le président du Conseil, Dr Abou ADEGBINDIN
                    </strong>
                </div>






            </div>
        </div>
    </section>


@endsection
