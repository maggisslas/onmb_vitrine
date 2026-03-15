@php
    $title_page = 'Code de la déontologie'
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

        <section class="container py-0">

            <div class="title-area text-center pt-5">
                <h4 class="sec-title">
                    DÉCRET N° 2025 – 395 DU 16 JUILLET 2025 portant attributions, organisation et fonctionnement de l'Ordre national des médecins du Bénin.
                </h4>
            </div>

            <div class="" id="about-sec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 mb-30 mb-xl-0">
                            <div class="img-box6">
                                <div class="img1">
                                    <img src="assets/img/onmb/deontologie.png" alt="deontologie">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 text-center text-xl-start">
                            <div class="title-area mb-4">
                                <p class="sec-text">
                                    Vu la loi n° 90-32 du 11 décembre 1990 portant Constitution de la République du Bénin, telle que modifiée par la loi n° 2019-40 du 7 novembre 2019;
                                </p>
                                <p class="sec-text">
                                    Vu la loi n° 2020-37 du 3 février 2021 portant protection de la santé des personnes en République du Bénin, telle que modifiée par la loi n° 2022-17 du 19 octobre 2022;
                                </p>
                                <p class="sec-text">
                                    Vu la décision portant proclamation, le 21 avril 2021 par la Cour constitutionnelle, des résultats définitifs de l'élection présidentielle du 11 avril 2021;
                                </p>
                                <p class="sec-text">
                                    Vu le décret n° 2025-327 du 26 juin 2025 portant composition du Gouvernement;
                                </p>
                                <p class="sec-text">
                                    Vu le décret n° 2021-401 du 28 juillet 2021 fixant la structure-type des ministères, telle que modifiée par le décret n° 2022-476 du 3 août 2022;
                                </p>
                                <p class="sec-text">
                                    Vu le décret n° 2021-571 du 3 novembre 2021 portant attributions, organisation et fonctionnement du Ministère de la Santé ;
                                </p>
                                <p class="sec-text">
                                    Vu l'avis 19-001 de la Cour constitutionnelle en date du 3 octobre 2019;
                                </p>
                                <p class="sec-text">
                                    sur proposition du Ministre de la Santé,
                                </p>
                               
                                <strong>
                                    le Conseil des Ministres entendu en sa séance du 16 juillet 2025,
                                </strong>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="testi-element-area pb-5">
                <div class="row">

                    {{-- ORDONNE --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">DÉCRÈTE</h4>
                    </div>

                    <!--<div class="col-xl-12">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion1">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-1">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">-->
                    <!--                    01. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion1">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Les dispositions de la présence ordonnance s’imposent à tout médecin inscrit au tableau de l’ordre.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Les infractions à ses dispositions relèvent de la juridiction disciplinaire de l’ordre, sans préjudice des poursuites judiciaires qu’elles seraient susceptibles d’entrainer.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Les médecins membres d’une société médicale ne sauraient considérer leur appartenance à la société comme les dispensant, à titre personnel de leurs obligations.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Les médecins fonctionnaires qui exercent une activité médicale motivant leur inscription à un des tableaux de l’ordre restent soumis pour cette activité à la juridiction de l’ordre. Ils ne peuvent être traduits en chambre de discipline qu’à la demande ou avec l’accord des autorités administratives dont ils relèvent ou après que celles-ci aient été informées.-->
                    <!--                    </p>-->
                    <!--                    <strong>-->
                    <!--                        TITRE PREMIER : DEVOIRS GÉNÉRAUX DES MÉDECINS-->
                    <!--                    </strong>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->


                    {{-- TITRE I : DEVOIRS GÉNÉRAUX DES MÉDECINS --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">CHAPITRE PREMIER : DISPOSITIONS GÉNÉRALES</h4>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion2">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                        Article premier
                                    </button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion2">
                                    <div class="accordion-body">
                                        <p>
                                            Le présent décret fixe les attributions, l'organisation et le fonctionnement de l'Ordre national des médecins du Bénin.
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
                                        Article 2
                                    </button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion3">
                                    <div class="accordion-body">
                                        <p>
                                            L'Ordre national des médecins du Bénin est un organisme corporatif doté de la personnalité juridique et de l'autonomie de gestion.
                                        </p>
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
                                        Article 3
                                    </button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion4">
                                    <div class="accordion-body">
                                        <p>
                                            L'Ordre national des médecins du Bénin regroupe tous les médecins remplissant les conditions requises et inscrits au tableau de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion5">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                        Article 4
                                    </button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion5">
                                    <div class="accordion-body">
                                        <p>
                                            Le siège de l'Ordre national des médecins du Bénin est fixé à Cotonou. Il peut être transféré en tout autre lieu du territoire national par décision du Conseil des Ministres, sur proposition de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    {{-- TITRE II : DEVOIRS DES MÉDECINS ENVERS LES MALADES --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">CHAPITRE II : MISSION ET ATTRIBUTIONS DE L'ORDRE NATIONAL DES MÉDECINS DU BÉNIN</h4>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion27">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-27">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-27" aria-expanded="true" aria-controls="collapse-27">
                                        Article 5
                                    </button>
                                </div>
                                <div id="collapse-27" class="accordion-collapse collapse" aria-labelledby="collapse-item-27" data-bs-parent="#faqAccordion27">
                                    <div class="accordion-body">
                                        <p>
                                            L'Ordre national des médecins du Bénin a pour mission de garantir l'indépendance et une pratique éthique et responsable de la profession de médecin et de veiller au maintien des principes de moralité, de probité et de dévouement indispensables à l'exercice de la médecine. À ce titre, il :
                                        </p>
                                        <ol>
                                            <li>
                                                assure la défense de l'honneur et de l'indépendance de la profession ;
                                            </li>
                                            <li>
                                                veille au respect des devoirs professionnels ;
                                            </li>
                                            <li>
                                                veille à la formation professionnelle continue et à l'évaluation des pratiques professionnelles ;
                                            </li>
                                            <li>
                                                contribue à la promotion de la santé publique ;
                                            </li>
                                            <li>
                                                contribue à l'amélioration de la réglementation sur l'exercice de la profession.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion28">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-28">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-28" aria-expanded="true" aria-controls="collapse-28">-->
                    <!--                    28. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-28" class="accordion-collapse collapse" aria-labelledby="collapse-item-28" data-bs-parent="#faqAccordion28">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Le médecin doit toujours élaborer son diagnostic avec la plus grande attention, sans compter avec le temps que lui coûte ce travail, et s’il y a lieu, en s’aidant ou en se faisant aider, dans toute la mesure du possible, des conseils les plus éclairés et des méthodes scientifiques les plis appropriées.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Après avoir formulé un diagnostic et posé une indication thérapeutique, le médecin doit s’efforcer d’obtenir l’exécution du traitement, particulièrement si la vie du malade est en danger.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        En cas de refus, il peut cesser les soins dans les conditions de l’article 35 de la présente ordonnance.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion29">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-29">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-29" aria-expanded="true" aria-controls="collapse-29">-->
                    <!--                    29. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-29" class="accordion-collapse collapse" aria-labelledby="collapse-item-29" data-bs-parent="#faqAccordion29">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Dans toute la mesure compatible avec la qualité et l’efficacité des soins et sans négliger son devoir d’assistance morale envers son malade, le médecin doit limiter au nécessaire ses prescriptions et ses actes.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion30">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-30">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-30" aria-expanded="true" aria-controls="collapse-30">-->
                    <!--                    30. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-30" class="accordion-collapse collapse" aria-labelledby="collapse-item-30" data-bs-parent="#faqAccordion30">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Le médecin appelé à donner des soins dans une famille ou dans un milieu quelconque doit assurer la prophylaxie. Il met les malades et leur entourage en présence de leurs responsabilités vis-à-vis d’eux-mêmes et de leur voisinage. Il doit s’efforcer d’imposer, en refusant au besoin de continuer les soins, le respect des règles d’hygiène et prophylaxie.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion31">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-31">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-31" aria-expanded="true" aria-controls="collapse-31">-->
                    <!--                    31. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-31" class="accordion-collapse collapse" aria-labelledby="collapse-item-31" data-bs-parent="#faqAccordion31">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Appelé d’urgence auprès d’un mineur ou d’un autre incapable, et lorsqu’il est impossible de recueillir en temps utile le consentement d’un représentant légal, le médecin doit donner les soins qui s’imposent.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion32">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-32">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-32" aria-expanded="true" aria-controls="collapse-32">-->
                    <!--                    32. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-32" class="accordion-collapse collapse" aria-labelledby="collapse-item-32" data-bs-parent="#faqAccordion32">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Hors le cas prévu à l’article précédent, le médecin attaché à un établissement comportant le régime de l’internat doit en présence d’une affection grave, faire avertir les parents et accepter ou provoquer, s’il le juge utile, la consultation du médecin désigné par le malade ou sa famille.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion33">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-33">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-33" aria-expanded="true" aria-controls="collapse-33">-->
                    <!--                    33. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-33" class="accordion-collapse collapse" aria-labelledby="collapse-item-33" data-bs-parent="#faqAccordion33">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Un pronostic grave peut légitimement être dissimulé au malade. Un pronostic fatal ne peut lui être révélé qu’avec la plus grande circonspection, mais il doit l’être généralement à sa famille à moins que le malade ait préalablement interdit cette révélation, ou désigné les tiers auxquels elle doit être faite.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion34">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-34">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-34" aria-expanded="true" aria-controls="collapse-34">-->
                    <!--                    34. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-34" class="accordion-collapse collapse" aria-labelledby="collapse-item-34" data-bs-parent="#faqAccordion34">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Hors le cas d’urgence et celui où il manquerait à ses devoirs d’humanité, un médecin a toujours le droit de refuser ses soins pour des raisons professionnelles ou personnelles.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion35">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-35">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-35" aria-expanded="true" aria-controls="collapse-35">-->
                    <!--                    35. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-35" class="accordion-collapse collapse" aria-labelledby="collapse-item-35" data-bs-parent="#faqAccordion35">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Le médecin peut se dégager de sa mission à condition :-->
                    <!--                    </p>-->
                    <!--                    <ol>-->
                    <!--                        <li>De ne jamais nuire de ce fait à son malade</li>-->
                    <!--                        <li>De s’assurer de la continuité des soins et de fournir à cet effet les renseignements utiles.</li>-->
                    <!--                    </ol>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion36">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-36">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-36" aria-expanded="true" aria-controls="collapse-36">-->
                    <!--                    36. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-36" class="accordion-collapse collapse" aria-labelledby="collapse-item-36" data-bs-parent="#faqAccordion36">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Le médecin ne doit pas s’immiscer dans les affaires de famille.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion37">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-37">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-37" aria-expanded="true" aria-controls="collapse-37">-->
                    <!--                    37. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-37" class="accordion-collapse collapse" aria-labelledby="collapse-item-37" data-bs-parent="#faqAccordion37">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Il ne peut être procédé à un avortement thérapeutique que si cette intervention est le seul moyen susceptible de sauver la vie de la mère.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Lorsque la sauvegarde de la vie de la mère gravement menacée exige soit une intervention chirurgicale, soit l’emploi d’une thérapeutique susceptible d’entrainer l’interruption de la grossesse, le médecin traitant ou le chirurgien devront obligatoirement prendre l’avis de deux médecins consultants dont l’un pris dans la liste des experts près le tribunal civil qui, après examen et discussion, attesteront par écrit que la vie de la mère ne peut être sauvegardée qu’au moyen d’une telle intervention thérapeutique.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Un des exemplaires du protocole de la consultation sera remis à la malade, les deux autres conservés par les deux médecins consultants.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        En outre, un protocole de la décision prise n’indiquant pas le nom du malade, doit être adressé sous pli recommandé au président du conseil départemental au tableau duquel figurent ces médecins.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        En cas d’indication d’avortement thérapeutique, le médecin doit s’incliner devant le refus éventuel de la malade dûment informée. Cette règle ne peut supporter d’exception que dans les cas d’extrême urgence et lorsque la malade est hors d’état de donner son consentement.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Si le médecin en raison de ses convictions, estime qu’il lui est interdit de conseiller de pratiquer l’avortement il peut se retirer en assurant la continuité des soins par un confrère qualifié.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion38">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-38">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-38" aria-expanded="true" aria-controls="collapse-38">-->
                    <!--                    38. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-38" class="accordion-collapse collapse" aria-labelledby="collapse-item-38" data-bs-parent="#faqAccordion38">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Au cours d’un accouchement dystocique ou prolongé, le médecin doit se considérer comme étant le seul juge des intérêts respectifs de la mère et de l’enfant, sans se laisser influencer par des considérations d’ordre familial.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion39">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-39">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-39" aria-expanded="true" aria-controls="collapse-39">-->
                    <!--                    39. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-39" class="accordion-collapse collapse" aria-labelledby="collapse-item-39" data-bs-parent="#faqAccordion39">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Le médecin doit toujours lui-même établir sa note d’honoraire ; il doit le faire avec tact et mesure. Les éléments d’appréciation sont la situation de fortune du malade, la notoriété du médecin, les circonstances particulières.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Un médecin n’est jamais en droit de refuser à un client des explications sur sa note d’honoraires.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion40">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-40">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-40" aria-expanded="true" aria-controls="collapse-40">-->
                    <!--                    40. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-40" class="accordion-collapse collapse" aria-labelledby="collapse-item-40" data-bs-parent="#faqAccordion40">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Sous réserve de l’application des lois, il est interdit à tout médecin d’abaisser ses honoraires dans un intérêt de concurrence au-dessous des barèmes publiés par les organismes professionnels qualifiés.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Il est libre de donner gratuitement les soins quand sa conscience lui demande.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion41">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-41">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-41" aria-expanded="true" aria-controls="collapse-41">-->
                    <!--                    41. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-41" class="accordion-collapse collapse" aria-labelledby="collapse-item-41" data-bs-parent="#faqAccordion41">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Le forfait pour la durée d’un traitement est interdit, si ce n’est pour un accouchement, une opération chirurgicale, un traitement physiothérapique, un traitement dans une situation de cure ou un établissement de soins ou dans quelques cas exceptionnels pour une série d’intervention, après accord du conseil départemental.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        Le forfait pour l’efficacité est interdit en toutes circonstances.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion42">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-42">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-42" aria-expanded="true" aria-controls="collapse-42">-->
                    <!--                    42. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-42" class="accordion-collapse collapse" aria-labelledby="collapse-item-42" data-bs-parent="#faqAccordion42">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        La rencontre en consultation entre médecin traitant et un médecin consultant légitime pour le second des honoraires spéciaux.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion43">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-43">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-43" aria-expanded="true" aria-controls="collapse-43">-->
                    <!--                    43. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-43" class="accordion-collapse collapse" aria-labelledby="collapse-item-43" data-bs-parent="#faqAccordion43">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Tout partage d’honoraires entre médecin traitant d’une part, consultant, chirurgien ou spécialiste d’autre part, lors d’une consultation d’un acte opératoire, étant formellement interdit, chaque médecin doit présenter sa note personnelle.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        En aucun cas le chirurgien, spécialiste ou consultant, ne peut accepter de remettre lui-même les honoraires au médecin traitant, mais il doit préciser que ces derniers ne sont pas compris dans sa note.-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        L’acceptation, la sollicitation ou l’offre d’un partage d’honoraires, même non suivis d’effet, constitue une faute professionnelle grave.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="col-xl-6">-->
                    <!--    <div class="accordion-1 accordion py-3" id="faqAccordion44">-->
                    <!--        <div class="accordion-card">-->
                    <!--            <div class="accordion-header" id="collapse-item-44">-->
                    <!--                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-44" aria-expanded="true" aria-controls="collapse-44">-->
                    <!--                    44. Article-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div id="collapse-44" class="accordion-collapse collapse" aria-labelledby="collapse-item-44" data-bs-parent="#faqAccordion44">-->
                    <!--                <div class="accordion-body">-->
                    <!--                    <p>-->
                    <!--                        Le chirurgien a le droit de choisir son aide ou ses aides opératoires ainsi que l’anesthésiste. Les honoraires de ceux-ci peuvent être réclamés par eux directement à l’opéré. Toutefois lorsque le chirurgien croit devoir confier les fonctions d’aide opératoire ou d’anesthésiste au médecin traitant, celui-ci doit réclamer ses honoraires directement à l’opéré.-->
                    <!--                    </p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->


                    {{-- TITRE III : DEVOIR DES MÉDECINS EN MATIÈRE DE MÉDECINE SOCIALE --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">CHAPITRE III : ORGANISATION ET FONCTIONNEMENT DE L'ORDRE NATIONAL DES MÉDECINS DU BÉNIN</h4>
                    </div>
                    

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion45">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-45">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-45" aria-expanded="true" aria-controls="collapse-45">
                                        Article 6
                                    </button>
                                </div>
                                <div id="collapse-45" class="accordion-collapse collapse" aria-labelledby="collapse-item-45" data-bs-parent="#faqAccordion45">
                                    <div class="accordion-body">
                                        <p>
                                            L'Ordre national des médecins du Bénin comprend les organes ci-après :
                                        </p>
                                        <ul>
                                            <li>
                                                le Conseil national de l'Ordre ;
                                            </li>
                                            <li>
                                                les conseils départementaux de l'Ordre.
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-area text-left pt-5">
                        <h5 class="sec-title">Section 1 : Conseil national de l'Ordre</h5>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion46">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-46">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-46" aria-expanded="true" aria-controls="collapse-46">
                                        Article 7
                                    </button>
                                </div>
                                <div id="collapse-46" class="accordion-collapse collapse" aria-labelledby="collapse-item-46" data-bs-parent="#faqAccordion46">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre dirige l'Ordre. Il veille à l'organisation, à la discipline et garantit l'indépendance de la profession ainsi que la régularité de son exercice. À ce titre, il est chargé de :
                                        </p>
                                        <ol>
                                            <li>
                                                établir, mettre à jour et publier le tableau de l'Ordre 
                                            </li>
                                            <li>
                                                surveiller l'exercice de la profession ;
                                            </li>
                                            <li>
                                                statuer sur les demandes d'inscription au tableau de l'Ordre, après étude et avis du conseil départemental de l'Ordre compétent ;
                                            </li>
                                            <li>
                                                statuer sur les questions relatives à la discipline des membres et les recours contre les décisions des conseils départementaux de l'Ordre ;
                                            </li>
                                            <li>
                                                coordonner l'action des conseils départementaux de l'Ordre et d'arbitrer, le cas échéant, les conflits entre eux ;
                                            </li>
                                            <li>
                                                contrôler la gestion des conseils départementaux de l'Ordre ;
                                            </li>
                                            <li>
                                                délibérer sur les affaires relevant de sa compétence et soumises à son examen par le ministre chargé de la Santé, les conseils départementaux de l'Ordre, toute autorité publique ou tout citoyen ;
                                            </li>
                                            <li>
                                                représenter la profession auprès des autorités publiques et de tout organisme ;
                                            </li>
                                            <li>
                                                surveiller la gestion des ressources de l'Ordre et d'approuver les comptes de l’Ordre ;
                                            </li>
                                            <li>
                                                veiller à la formation continue des membres de l'Ordre ;
                                            </li>
                                            <li>
                                                adopter le règlement intérieur de l'Ordre ;
                                            </li>
                                            <li>
                                                faire, de sa propre initiative ou sur demande, des propositions au Gouvernement sur les questions relatives à la santé des populations ou à la profession de médecin ;
                                            </li>
                                            <li>
                                                délibérer sur toute initiative d'ester en justice relativement aux faits qui créent ou sont de nature à créer un préjudice direct ou indirect à l'intérêt collectif de la profession ;
                                            </li>
                                            <li>
                                                adopter le rapport d'activité de l'Ordre.
                                            </li>
                                        </ol>
                                        <p>Le règlement intérieur de l'Ordre est approuvé par arrêté du ministre chargé de la Santé.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion47">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-47">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-47" aria-expanded="true" aria-controls="collapse-47">
                                        Article 8
                                    </button>
                                </div>
                                <div id="collapse-47" class="accordion-collapse collapse" aria-labelledby="collapse-item-47" data-bs-parent="#faqAccordion47">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre des Médecins du Bénin est composé de neuf (09) membres élus par les membres de l'Ordre inscrits sur la liste électorale, au scrutin secret, par vote en présentiel ou en ligne, comme suit :
                                        </p>
                                        <ol>
                                            <li>
                                                quatre (04) membres élus parmi les médecins du secteur privé dont trois (03) au moins en service dans des formations sanitaires et comprenant au moins une (01) personne de chaque sexe ; 
                                            </li>
                                            <li>
                                                quatre (04) membres élus parmi les médecins du secteur public dont deux (02) au moins en service dans une formation sanitaire et comprenant au moins une (01) personne de chaque sexe ; et
                                            </li>
                                            <li>
                                                un (01) membre élu parmi les hospitalo-universitaires.
                                            </li>
                                        </ol>
                                        <p>En l'absence de candidature dans l'une quelconque des catégories visées à l'alinéa 1er du présent article, les candidatures provenant des autres catégories peuvent y suppléer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion48">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-48">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-48" aria-expanded="true" aria-controls="collapse-48">
                                        Article 9
                                    </button>
                                </div>
                                <div id="collapse-48" class="accordion-collapse collapse" aria-labelledby="collapse-item-48" data-bs-parent="#faqAccordion48">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre est dirigé par un bureau exécutif de trois (03) membres élus en même temps que les autres membres du Conseil.
                                        </p>
                                        <p>
                                            Le bureau exécutif du Conseil national de l'Ordre est composé de :
                                        </p>
                                        <ol>
                                            <li>
                                                un (01) président ; 
                                            </li>
                                            <li>
                                                un (01) vice-président ;
                                            </li>
                                            <li>
                                                un (01) secrétaire général.
                                            </li>
                                        </ol>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion49">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-49">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-49" aria-expanded="true" aria-controls="collapse-49">
                                        Article 10
                                    </button>
                                </div>
                                <div id="collapse-49" class="accordion-collapse collapse" aria-labelledby="collapse-item-49" data-bs-parent="#faqAccordion49">
                                    <div class="accordion-body">
                                        <p>
                                            Le bureau exécutif du Conseil national de l'Ordre assure la gestion des ressources financières et matérielles de l'Ordre et rend compte au Conseil national de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion50">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-50">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-50" aria-expanded="true" aria-controls="collapse-50">
                                        Article 11
                                    </button>
                                </div>
                                <div id="collapse-50" class="accordion-collapse collapse" aria-labelledby="collapse-item-50" data-bs-parent="#faqAccordion50">
                                    <div class="accordion-body">
                                        <p>
                                            Les membres du Conseil national de l'Ordre sont élus pour un mandat de quatre (04) ans, renouvelable une (01) fois.

                                        </p>
                                        <p>
                                            Le président est élu de manière tournante parmi les membres provenant du secteur public, d'une part et du secteur privé, d'autre part. En l'absence de candidatures provenant du secteur concerné, celles provenant de l'autre secteur sont recevables.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion51">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-51">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-51" aria-expanded="true" aria-controls="collapse-51">
                                        Article 12
                                    </button>
                                </div>
                                <div id="collapse-51" class="accordion-collapse collapse" aria-labelledby="collapse-item-51" data-bs-parent="#faqAccordion51">
                                    <div class="accordion-body">
                                        <p>
                                            Nul ne peut être élu membre du Conseil national de l'Ordre s'il n'a totalisé deux (02) ans au moins d'exercice de la profession médicale.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion52">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-52">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-52" aria-expanded="true" aria-controls="collapse-52">
                                        Article 13
                                    </button>
                                </div>
                                <div id="collapse-52" class="accordion-collapse collapse" aria-labelledby="collapse-item-52" data-bs-parent="#faqAccordion52">
                                    <div class="accordion-body">
                                        <p>
                                            Le président du bureau exécutif représente l'Ordre national des médecins du Bénin. Il assure la défense de l'honneur et de l'indépendance de la profession et des membres inscrits au tableau de l'Ordre. Il coordonne les activités du Conseil national de l'Ordre. Il est l'ordonnateur du budget de l'Ordre.

                                        </p>
                                        <p>
                                            Le président du bureau exécutif adresse un rapport d'activités au ministre chargé de la Santé au plus tard le 31 mars de chaque année.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion53">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-53">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-53" aria-expanded="true" aria-controls="collapse-53">
                                        Article 14
                                    </button>
                                </div>
                                <div id="collapse-53" class="accordion-collapse collapse" aria-labelledby="collapse-item-53" data-bs-parent="#faqAccordion53">
                                    <div class="accordion-body">
                                        <p>
                                            Le vice-président assiste le président dans ses tâches et le supplée en cas d'absence.
                                        </p>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion54">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-54">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-54" aria-expanded="true" aria-controls="collapse-54">
                                        Article 15
                                    </button>
                                </div>
                                <div id="collapse-54" class="accordion-collapse collapse" aria-labelledby="collapse-item-54" data-bs-parent="#faqAccordion54">
                                    <div class="accordion-body">
                                        <p>
                                            Le secrétaire général est chargé de la diffusion des informations de l'Ordre aux membres, aux organes de l'Ordre et à l'opinion publique. Il assure l'organisation pratique des sessions du Conseil national de l'Ordre et en rédige les comptes rendus et procès-verbaux.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion55">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-55">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-55" aria-expanded="true" aria-controls="collapse-55">
                                        Article 16
                                    </button>
                                </div>
                                <div id="collapse-55" class="accordion-collapse collapse" aria-labelledby="collapse-item-55" data-bs-parent="#faqAccordion55">
                                    <div class="accordion-body">
                                        <p>
                                            Les attributions des membres du bureau exécutif du Conseil national de l'Ordre sont précisées dans le règlement intérieur de l'Ordre.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="accordion-1 accordion py-3" id="faqAccordion56">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-56">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-56" aria-expanded="true" aria-controls="collapse-56">
                                        Article 17
                                    </button>
                                </div>
                                <div id="collapse-56" class="accordion-collapse collapse" aria-labelledby="collapse-item-56" data-bs-parent="#faqAccordion56">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre se réunit tous les deux (02) mois en session ordinaire. Il peut se réunir en session extraordinaire, en cas de besoin, à l'initiative du président, à la demande du ministre chargé de la Santé ou d'au moins un tiers (1/3) des membres.
                                        </p>
                                        <p>
                                            Les sessions du Conseil national de l'Ordre sont convoquées par le président du Conseil
                                        </p>
                                        <p>
                                            Elles se tiennent au siège de l'Ordre, en ligne ou en tout autre lieu, en cas de nécessité justifiée. La convocation précise l'ordre du jour.
                                        </p>
                                        <p>
                                            La convocation et les dossiers correspondants sont adressés à chaque membre au moins sept (7) jours avant les sessions ordinaires et trois (3) jours avant les sessions extraordinaires. En cas d'urgence, ces délais sont réduits sans être inférieurs à vingt-quatre (24) heures.
                                        </p>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="title-area text-left pt-5">
                        <h5 class="sec-title">Section 2 : Conseils départementaux de l'Ordre</h5>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion57">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-57">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-57" aria-expanded="true" aria-controls="collapse-57">
                                        Article 18
                                    </button>
                                </div>
                                <div id="collapse-57" class="accordion-collapse collapse" aria-labelledby="collapse-item-57" data-bs-parent="#faqAccordion57">
                                    <div class="accordion-body">
                                        <p>
                                            Les conseils départementaux de l'Ordre sont les démembrements de l'Ordre au niveau des départements.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion58">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-58">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-58" aria-expanded="true" aria-controls="collapse-58">
                                        Article 19
                                    </button>
                                </div>
                                <div id="collapse-58" class="accordion-collapse collapse" aria-labelledby="collapse-item-58" data-bs-parent="#faqAccordion58">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil départemental assure la coordination de l'action de l'Ordre au niveau de son ressort territorial. Il exécute les prescriptions du Conseil national de l'Ordre ou de son bureau. À ce titre, il :
                                        </p>
                                        <ol>
                                            <li> veille au respect des règles professionnelles et des exigences déontologiques ;
                                            </li>
                                            <li>
                                                reçoit, étudie et émet un avis consultatif sur les demandes d'inscription au tableau de l’Ordre ;
                                            </li>
                                            <li>
                                                assure l'animation de la vie professionnelle des membres dans son ressort territorial ;
                                            </li>
                                            <li>
                                                émet un avis sur les affaires soumises à son examen par le Conseil national de l’Ordre ;
                                            </li>
                                            <li>
                                                statue comme organe disciplinaire du premier degré sur les manquements professionnels des membres ;
                                            </li>
                                            <li>
                                                veille au respect des droits des membres.
                                            </li>
                                        </ol>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion59">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-59">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-59" aria-expanded="true" aria-controls="collapse-59">
                                        Article 20
                                    </button>
                                </div>
                                <div id="collapse-59" class="accordion-collapse collapse" aria-labelledby="collapse-item-59" data-bs-parent="#faqAccordion59">
                                    <div class="accordion-body">
                                        <p>
                                            Le siège du conseil départemental est fixé au chef-lieu du département.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion60">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-60">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-60" aria-expanded="true" aria-controls="collapse-60">
                                        Article 21
                                    </button>
                                </div>
                                <div id="collapse-60" class="accordion-collapse collapse" aria-labelledby="collapse-item-60" data-bs-parent="#faqAccordion60">
                                    <div class="accordion-body">
                                        <p>
                                            Chaque conseil départemental de l'Ordre est composé de cinq (05) membres élus par les membres de l'Ordre inscrits sur la liste électorale, au scrutin secret, par vote en ligne ou en présentiel, parmi les membres exerçant dans le département, suivant la configuration ci-après :
                                        </p>
                                        <ol>
                                            <li>
                                                trois (03) membres élus pour le secteur privé dont deux (02) au moins en service dans une formation sanitaire ;
                                            </li>
                                            <li>
                                                deux (02) membres élus parmi les médecins du secteur public dont un (01) en service dans une formation sanitaire.
                                            </li>
                                        </ol>
                                        <p>
                                            En l'absence de candidature dans l'une quelconque des catégories visées au premier alinéa du présent article, les candidatures provenant des autres catégories peuvent y suppléer.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion61">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-61">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-55" aria-expanded="true" aria-controls="collapse-61">
                                        Article 22
                                    </button>
                                </div>
                                <div id="collapse-61" class="accordion-collapse collapse" aria-labelledby="collapse-item-61" data-bs-parent="#faqAccordion61">
                                    <div class="accordion-body">
                                        <p>
                                            Le conseil départemental de l'Ordre est dirigé par un bureau de trois (03) membres élus en même temps que les autres membres du Conseil.
                                        </p>
                                        <p>
                                            Le bureau de chaque conseil départemental de l'Ordre est composé de :
                                        </p>
                                        <ol>
                                            <li>
                                                un (01) président;
                                            </li>
                                            <li>
                                                un (01) vice-président;
                                            </li>
                                            <li>
                                                un (01) rapporteur.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion62">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-62">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-62" aria-expanded="true" aria-controls="collapse-62">
                                        Article 23
                                    </button>
                                </div>
                                <div id="collapse-62" class="accordion-collapse collapse" aria-labelledby="collapse-item-62" data-bs-parent="#faqAccordion62">
                                    <div class="accordion-body">
                                        <p>
                                            Les membres du conseil départemental sont élus pour un mandat de quatre (04) ans, renouvelable une (01) fois
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion63">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-63">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-63" aria-expanded="true" aria-controls="collapse-63">
                                        Article 24
                                    </button>
                                </div>
                                <div id="collapse-63" class="accordion-collapse collapse" aria-labelledby="collapse-item-63" data-bs-parent="#faqAccordion63">
                                    <div class="accordion-body">
                                        <p>
                                            Nul ne peut être élu membre d'un Conseil départemental s'il n'a totalisé deux (02) ans au moins d'exercice de la profession médicale.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion64">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-64">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-64" aria-expanded="true" aria-controls="collapse-64">
                                        Article 25
                                    </button>
                                </div>
                                <div id="collapse-64" class="accordion-collapse collapse" aria-labelledby="collapse-item-64" data-bs-parent="#faqAccordion64">
                                    <div class="accordion-body">
                                        <p>
                                            Sous l'autorité du président du Conseil national de l'Ordre, le président du Conseil départemental de l'Ordre représente l'Ordre national des médecins du Bénin au niveau de son ressort territorial. Il ne dispose pas de pouvoirs disciplinaires propres à l'égard des membres. Il coordonne les activités du Conseil départemental de l'Ordre.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion65">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-65">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-65" aria-expanded="true" aria-controls="collapse-65">
                                        Article 26
                                    </button>
                                </div>
                                <div id="collapse-65" class="accordion-collapse collapse" aria-labelledby="collapse-item-65" data-bs-parent="#faqAccordion65">
                                    <div class="accordion-body">
                                        <p>
                                            Le vice-président du Conseil départemental de l'Ordre assiste le président dans ses tâches et le supplée en cas d'absence.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion66">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-66">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-66" aria-expanded="true" aria-controls="collapse-66">
                                        Article 27
                                    </button>
                                </div>
                                <div id="collapse-66" class="accordion-collapse collapse" aria-labelledby="collapse-item-66" data-bs-parent="#faqAccordion66">
                                    <div class="accordion-body">
                                        <p>
                                            Le rapporteur du Conseil départemental de l'Ordre est chargé de la diffusion des informations de l'Ordre aux membres de l'Ordre au niveau départemental. Il assure l'organisation pratique des sessions et en rédige les comptes rendus et procès-verbaux.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="accordion-1 accordion py-3" id="faqAccordion67">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-67">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-67" aria-expanded="true" aria-controls="collapse-67">
                                        Article 28
                                    </button>
                                </div>
                                <div id="collapse-67" class="accordion-collapse collapse" aria-labelledby="collapse-item-67" data-bs-parent="#faqAccordion67">
                                    <div class="accordion-body">
                                        <p>
                                            Le conseil départemental se réunit mensuellement en session ordinaire. Il peut se réunir en session extraordinaire en cas de besoin, à l'initiative de son président, à la demande du président du Conseil national de l'Ordre, soit d'initiative, soit sur demande du ministre chargé de la Santé ou à la demande d'au moins un tiers (1/3) des membres.
                                        </p>
                                        <p>
                                            Les sessions du conseil départemental de l'Ordre sont convoquées par le président du conseil. Elles se tiennent au siège du conseil départemental ou en tout autre lieu, en cas de nécessité justifiée. La convocation précise l'ordre du jour.
                                        </p>
                                        <p>
                                            La convocation et les dossiers correspondants sont adressés à chaque membre au moins sept (7) jours avant les sessions ordinaires et trois (3) jours avant les sessions extraordinaires. En cas d'urgence, ces délais sont réduits sans être inférieurs à vingt-quatre (24) heures.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title-area text-left pt-5">
                        <h5 class="sec-title">Section 3 : Dispositions communes</h5>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion68">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-68">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-68" aria-expanded="true" aria-controls="collapse-68">
                                        Article 29
                                    </button>
                                </div>
                                <div id="collapse-68" class="accordion-collapse collapse" aria-labelledby="collapse-item-68" data-bs-parent="#faqAccordion68">
                                    <div class="accordion-body">
                                        <p>
                                            L'élection des membres des conseils départementaux de l'Ordre et du Conseil national de l'Ordre est organisée par le Conseil national de l'Ordre sortant qui peut solliciter l'appui de la Commission électorale nationale autonome
                                        </p>
                                        <p>
                                            Les résultats des élections sont constatés par arrêté du ministre chargé de la Santé.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion69">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-69">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-69" aria-expanded="true" aria-controls="collapse-69">
                                        Article 30
                                    </button>
                                </div>
                                <div id="collapse-69" class="accordion-collapse collapse" aria-labelledby="collapse-item-69" data-bs-parent="#faqAccordion69">
                                    <div class="accordion-body">
                                        <p>
                                            À défaut pour le Conseil national de l'Ordre d'organiser les élections en vue du renouvellement des membres des organes dans les délais prévus par le régime électoral, le ministre chargé de la Santé y supplée d'office.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion70">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-70">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-70" aria-expanded="true" aria-controls="collapse-70">
                                        Article 31
                                    </button>
                                </div>
                                <div id="collapse-70" class="accordion-collapse collapse" aria-labelledby="collapse-item-70" data-bs-parent="#faqAccordion70">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre prend fonction à la date d'expiration du mandat du conseil sortant. <br> Les membres élus des conseils départementaux sont installés dans leurs fonctions par le Conseil national de l'Ordre dans le mois qui suit la proclamation des résultats. À défaut, ils prennent d'office fonction.

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion71">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-71">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-71" aria-expanded="true" aria-controls="collapse-71">
                                        Article 32
                                    </button>
                                </div>
                                <div id="collapse-71" class="accordion-collapse collapse" aria-labelledby="collapse-item-71" data-bs-parent="#faqAccordion71">
                                    <div class="accordion-body">
                                        <p>
                                            Sauf en cas de défaut de candidature féminine, les bureaux exécutifs des organes de l'Ordre comprennent chacun, au moins une femme.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion72">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-72">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-72" aria-expanded="true" aria-controls="collapse-72">
                                        Article 33
                                    </button>
                                </div>
                                <div id="collapse-72" class="accordion-collapse collapse" aria-labelledby="collapse-item-72" data-bs-parent="#faqAccordion72">
                                    <div class="accordion-body">
                                        <p>
                                            Les conditions et les modalités relatives aux différentes élections sont précisées par un décret fixant le régime électoral.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion73">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-73">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-73" aria-expanded="true" aria-controls="collapse-73">
                                        Article 34
                                    </button>
                                </div>
                                <div id="collapse-73" class="accordion-collapse collapse" aria-labelledby="collapse-item-73" data-bs-parent="#faqAccordion73">
                                    <div class="accordion-body">
                                        <p>
                                            En cas de démission, de décès ou d'empêchement d'un membre élu d'un organe de l'Ordre, il est procédé à son remplacement, pour la durée restante du mandat en cours, si cette durée est supérieure à trois (3) mois. Pour les postes du bureau, à l'exception de celui du président, le remplaçant est élu par le conseil parmi ses membres. Pour les postes de conseiller, le remplacement est assuré par le suppléant, conformément aux dispositions du décret sur le régime électoral. À défaut de suppléant disponible, le bureau exécutif concerné désigne un autre membre de l'Ordre pour poursuivre le mandat. <br> L'exercice du mandat par un remplaçant, tel que prévu au premier alinéa du présent article, ne compte pas au titre du nombre possible de mandats pour le remplaçant concerné.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion74">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-74">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-74" aria-expanded="true" aria-controls="collapse-74">
                                        Article 35
                                    </button>
                                </div>
                                <div id="collapse-74" class="accordion-collapse collapse" aria-labelledby="collapse-item-74" data-bs-parent="#faqAccordion74">
                                    <div class="accordion-body">
                                        <p>
                                            Trois (3) absences successives non justifiées aux réunions statutaires d'un organe de l'Ordre constituent un motif d'exclusion du membre en cause. L'exclusion du membre est prononcée conformément aux dispositions du règlement intérieur. Son remplacement est assuré par le suppléant élu conformément aux dispositions du décret sur le régime électoral relatif à la vacance de poste. À défaut de suppléant disponible, le bureau exécutif de l'organe concerné désigne un membre pour poursuivre le mandat. <br> L'exercice du mandat par un remplaçant, tel que prévu au premier alinéa du présent article, ne compte pas au titre du nombre possible de mandats pour le remplaçant concerné.

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion75">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-75">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-75" aria-expanded="true" aria-controls="collapse-75">
                                        Article 36
                                    </button>
                                </div>
                                <div id="collapse-75" class="accordion-collapse collapse" aria-labelledby="collapse-item-75" data-bs-parent="#faqAccordion75">
                                    <div class="accordion-body">
                                        <p>
                                            Les fonctions de membre du Conseil national de l'Ordre et des conseils départementaux sont incompatibles avec celles de directeur ou de conseiller technique dans une administration publique. Elles sont également incompatibles avec l'exercice d'un mandat syndical ou d'une organisation professionnelle de médecin, à l'exception des sociétés savantes.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion76">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-76">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-76" aria-expanded="true" aria-controls="collapse-76">
                                        Article 37
                                    </button>
                                </div>
                                <div id="collapse-76" class="accordion-collapse collapse" aria-labelledby="collapse-item-76" data-bs-parent="#faqAccordion76">
                                    <div class="accordion-body">
                                        <p>
                                            Les conseils de l'Ordre mettent en place, en cas de nécessité, des commissions se rapportant à des questions spécifiques relevant de leurs compétences.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion77">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-77">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-77" aria-expanded="true" aria-controls="collapse-77">
                                        Article 38
                                    </button>
                                </div>
                                <div id="collapse-77" class="accordion-collapse collapse" aria-labelledby="collapse-item-77" data-bs-parent="#faqAccordion77">
                                    <div class="accordion-body">
                                        <p>
                                            Les employeurs du secteur public et du secteur privé facilitent la participation de leurs agents aux activités des différents conseils de l'Ordre et, à cet effet, leur accordent les autorisations nécessaires.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion78">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-78">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-78" aria-expanded="true" aria-controls="collapse-78">
                                        Article 39
                                    </button>
                                </div>
                                <div id="collapse-78" class="accordion-collapse collapse" aria-labelledby="collapse-item-78" data-bs-parent="#faqAccordion78">
                                    <div class="accordion-body">
                                        <p>
                                            Les organes de l'Ordre ne siègent valablement que si la moitié (1/2) au moins des membres est présente. Si ce quorum n'est pas atteint, le président de l'organe concerné procède à une nouvelle convocation des membres dans les mêmes conditions que celles prévues par les dispositions des articles 17 et 28 du présent décret. Les organes de l'Ordre siègent valablement quel que soit le nombre de membres présents à la suite de cette seconde convocation.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion79">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-79">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-79" aria-expanded="true" aria-controls="collapse-79">
                                        Article 40
                                    </button>
                                </div>
                                <div id="collapse-79" class="accordion-collapse collapse" aria-labelledby="collapse-item-79" data-bs-parent="#faqAccordion79">
                                    <div class="accordion-body">
                                        <p>
                                            Les conseils de l'Ordre délibèrent à la majorité simple des voix des membres présents et représentés. Les décisions sont constatées par procès-verbal signé par les membres présents. <br> En cas de partage des voix, celle du président de séance est prépondérante

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">CHAPITRE IV : TABLEAU DE L'ORDRE NATIONAL DES MÉDECINS DU BÉNIN</h4>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion80">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-80">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-80" aria-expanded="true" aria-controls="collapse-80">
                                        Article 41
                                    </button>
                                </div>
                                <div id="collapse-80" class="accordion-collapse collapse" aria-labelledby="collapse-item-80" data-bs-parent="#faqAccordion80">
                                    <div class="accordion-body">
                                        <p>
                                            Sous réserve de dispositions particulières, nul ne peut exercer la profession de médecin sur le territoire national s'il n'est pas inscrit au tableau de l'Ordre national des médecins du Bénin. <br> Ne sont pas astreints à l'inscription au tableau de l'Ordre pour l'exercice de leurs activités au Bénin :
                                        </p>
                                        <p>
                                            les médecins intervenant dans le cadre d'une coopération ou d'une mission spécifique quelle qu'en soit la durée qui bénéficie d'une autorisation temporaire d'exercer délivrée par le ministre chargé de la Santé ;
                                        </p>
                                        <p>
                                            les médecins de nationalité béninoise exerçant à l'étranger et autorisés à exercer au Bénin par arrêté du ministre chargé de la Santé ;
                                        </p>
                                        <p>
                                            les médecins de nationalité étrangère autorisés à exercer au Bénin par décret pris en Conseil des Ministres ;

                                        </p>
                                        <p>
                                            les étudiants ayant subi avec succès l'évaluation de passage en septième année et qui se sont inscrits à l'Ordre pour servir pendant une période de deux (02) ans maximum
                                        </p>
                                        <p>
                                            Les personnes visées au troisième alinéa du présent article figurent sur une liste spéciale tenue par le Conseil national de l'Ordre. Elles sont astreints aux obligations des médecins au Bénin et au paiement dans les conditions définies par le règlement intérieur, des cotisations exigibles aux membres de l'Ordre.
                                        </p>
                                        <p>
                                            Tout médecin diplômé de nationalité béninoise peut être autorisé sur sa demande à exercer par arrêté du ministre chargé de la Santé avant son inscription à l'Ordre. La décision du ministre intervient dans un délai de quarante-cinq (45) jours à compter de la réception de la demande.
                                        </p>
                                        <p>
                                            Le médecin autorisé à exercer dans les conditions indiquées à l'alinéa premier du présent article obtient son inscription à l'Ordre dans un délai de six (06) mois. En cas de refus de l'inscription par l'ordre, il peut exercer un recours devant la juridiction administrative competence dans les conditions de droit commun. Le rejet du recours entraîne la révocation de l'autorisation délivrée par le ministre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion81">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-81">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-81" aria-expanded="true" aria-controls="collapse-81">
                                        Article 42
                                    </button>
                                </div>
                                <div id="collapse-81" class="accordion-collapse collapse" aria-labelledby="collapse-item-81" data-bs-parent="#faqAccordion81">
                                    <div class="accordion-body">
                                        <p>
                                            Tout médecin qui désire s'inscrire au tableau de l'Ordre national des Médecins du Bénin remplit les conditions ci-après :
                                        </p>
                                        <ul>
                                            <li>
                                                être de nationalité béninoise ou ressortissant d'un État membre de l'Union économique et monétaire ouest-africaine ou d'un État dont les nationaux médecins bénéficient d'un droit d'établissement au Bénin en vertu de traités ou conventions internationales, ou être ressortissant d'un État ayant une convention de réciprocité avec le Bénin ;
                                            </li>
                                            <li>
                                                être de bonne moralité ;
                                            </li>
                                            <li>
                                                être titulaire d'un diplôme de doctorat d'État en médecine reconnu par l'État béninois ;
                                            </li>
                                            <li>
                                                justifier de l'aptitude physique et mentale compatible avec l'exercice de la profession.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion82">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-82">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-82" aria-expanded="true" aria-controls="collapse-82">
                                        Article 43
                                    </button>
                                </div>
                                <div id="collapse-82" class="accordion-collapse collapse" aria-labelledby="collapse-item-82" data-bs-parent="#faqAccordion82">
                                    <div class="accordion-body">
                                        <p>
                                            Tout dossier d'inscription au tableau de l'Ordre est adressé au président du Conseil national de l'Ordre et comprend les pièces ci-après :
                                        </p>
                                        <ol>
                                            <li>
                                                une demande indiquant le nom, prénoms, numéro de téléphone et adresse du demandeur, le cas échéant, sa spécialité ;

                                            <li> une copie de la pièce d'identité en cours de validité ou de toute autre pièce en tenant lieu ;</li>

                                            <li> un extrait du casier judiciaire datant de moins de trois (03) mois délivré par les autorités béninoises compétentes;</li>

                                            <li> un certificat de nationalité;</li>

                                            <li> une copie du diplôme requis; pour les diplômes étrangers, ils sont accompagnés de l'attestation d'équivalence du diplôme et de l'attestation d'authenticité;</li>

                                            <li> un certificat médical d'aptitude délivré par un médecin du travail ou, à défaut, un médecin désigné par le ministre chargé de la Santé;</li>

                                            <li> deux (02) photos d'identité;</li>

                                            <li> la quittance de paiement des frais d'inscription à l'Ordre fixés par le règlement intérieur de l'Ordre.</li>

                                            <p>Les dossiers d'inscription sont déposés au secrétariat du conseil départemental de l'Ordre territorialement compétent, à raison de la résidence ou du lieu d'exercice effectif ou envisagé du demandeur ou en ligne sur le site internet de l'Ordre. </p>

                                            </li>   
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion83">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-83">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-83" aria-expanded="true" aria-controls="collapse-83">
                                        Article 44
                                    </button>
                                </div>
                                <div id="collapse-83" class="accordion-collapse collapse" aria-labelledby="collapse-item-83" data-bs-parent="#faqAccordion83">
                                    <div class="accordion-body">
                                        <p>
                                            Tout dossier d'inscription émanant d'un médecin ressortissant d'un État membre de l'Union économique et monétaire ouest-africaine ou d'un État dont les nationaux médecins bénéficiaient d'un droit d'établissement au Bénin en vertu de traités ou conventions internationaux, ou ressortissant d'un État ayant une convention de réciprocité avec le Bénin, outre les pièces indiquées à l'article 43 du présent décret, comprennent :
                                        </p>
                                        <ol>
                                            <li>
                                                un extrait du casier judiciaire datant de moins de trois (03) mois délivré par les autorités du pays d'origine ou de provenance ;
                                            </li>
                                            <li>
                                                une lettre d'introduction du responsable de l'Ordre ou de la structure en tenant lieu du pays d'origine ou de provenance du demandeur enseignant sur sa situation professionnelle et disciplinaire ;
                                            </li>
                                            <li>
                                                une autorisation d'établissement délivrée par le ministre chargé de la Santé.
                                            </li>
                                        </ol>
                                        <p>
                                            Le Conseil national de l'Ordre veille à l'application effective du principe de réciprocité en ce qui concerne les ressortissants de tout État dont les nationaux médecins bénéficient d'un droit d'établissement au Bénin en vertu de traités ou conventions internationaux.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion84">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-84">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-84" aria-expanded="true" aria-controls="collapse-84">
                                        Article 45
                                    </button>
                                </div>
                                <div id="collapse-84" class="accordion-collapse collapse" aria-labelledby="collapse-item-84" data-bs-parent="#faqAccordion84">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin ressortissant d'un État membre de l'Union économique et monétaire ouest-africaine ou d'un État dont les nationaux médecins bénéficient d'un droit d'établissement au Bénin en vertu de traités ou conventions internationales, ou ressortissant d'un État ayant une convention de réciprocité avec le Bénin, une fois inscrit au tableau de l'Ordre, apporte la preuve de son retrait du tableau de son pays d'origine ou de provenance dans un délai d'un (01) mois, à compter de la date de son inscription. À défaut, il est retiré du tableau de l'Ordre des médecins du Bénin jusqu'à l'accomplissement de la formalité.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion85">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-85">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-85" aria-expanded="true" aria-controls="collapse-85">
                                        Article 46
                                    </button>
                                </div>
                                <div id="collapse-85" class="accordion-collapse collapse" aria-labelledby="collapse-item-85" data-bs-parent="#faqAccordion85">
                                    <div class="accordion-body">
                                        <p>
                                            Le président du conseil départemental de l'Ordre territorialement compétent ou le président du Conseil national de l'Ordre, pour les étrangers, fait procéder à une enquête de moralité et à toute vérification jugée nécessaire sur le demandeur. Il peut dans ce cadre requérir, par l'entremise du procureur de la République, l'unité de police la plus apte à mener ladite enquête. L'enquête de moralité est effectuée dans un délai de deux (02) mois maximum, à compter de la date de réception du dossier par l'Ordre. Il n'y a pas lieu à une enquête de moralité sur le territoire national pour le demandeur étranger qui n'a pas séjourné au moins trois (03) mois.
                                        </p>
                                        <p>
                                            Dans le cas où le dossier relève de son ressort, le Conseil départemental de l'Ordre étudie et émet un avis consultatif sur les demandes d'inscription, y compris le rapport d'enquête de moralité, dans un délai maximum d'un (01) mois, à compter de la date de réception du rapport d'enquête de moralité.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion85">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-85">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-85" aria-expanded="true" aria-controls="collapse-85">
                                        Article 47
                                    </button>
                                </div>
                                <div id="collapse-85" class="accordion-collapse collapse" aria-labelledby="collapse-item-85" data-bs-parent="#faqAccordion85">
                                    <div class="accordion-body">
                                        <p>
                                            Le président du Conseil départemental de l'Ordre transmet sans délai au président du Conseil national de l'Ordre, le dossier d'inscription accompagné de l'avis du conseil départemental.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion86">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-86">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-86" aria-expanded="true" aria-controls="collapse-86">
                                        Article 48
                                    </button>
                                </div>
                                <div id="collapse-86" class="accordion-collapse collapse" aria-labelledby="collapse-item-86" data-bs-parent="#faqAccordion86">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre dispose d'un délai d'un (01) mois, à compter de la réception du dossier transmis par le président du Conseil départemental, pour statuer. Ce délai est le même pour l'étude des dossiers des ressortissants étrangers à compter de la date de réception du rapport de l'enquête de moralité par le Conseil national de l'Ordre. Ce délai peut être prolongé d'un (01) mois maximum par le Conseil par notification motivée au demandeur. Dans le cas où le demandeur est invité à fournir des informations ou pièces requises, ce délai court à compter de la date de production desdites informations ou pièces.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion87">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-64">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-87" aria-expanded="true" aria-controls="collapse-87">
                                        Article 49
                                    </button>
                                </div>
                                <div id="collapse-87" class="accordion-collapse collapse" aria-labelledby="collapse-item-87" data-bs-parent="#faqAccordion87">
                                    <div class="accordion-body">
                                        <p>
                                            Le silence du Conseil national de l'Ordre sur une demande d'inscription au tableau de l'Ordre au-delà d'un délai de six (06) mois, à compter de la date du dépôt du dossier à l'Ordre, vaut inscription au tableau de l'Ordre. Le demandeur reçoit une attestation d'inscription délivrée d'office par le président du Conseil national de l'Ordre ou sur ordonnance rendue à pied de requête par le président du tribunal de première instance de droit commun du lieu du siège du Conseil national de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion88">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-88">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-88" aria-expanded="true" aria-controls="collapse-88">
                                        Article 50
                                    </button>
                                </div>
                                <div id="collapse-88" class="accordion-collapse collapse" aria-labelledby="collapse-item-88" data-bs-parent="#faqAccordion88">
                                    <div class="accordion-body">
                                        <p>
                                            Toute décision d'inscription ou de refus d'inscription au tableau de l'Ordre est notifiée sans délai au demandeur par le président du Conseil national de l'Ordre, par lettre remise contre décharge ou recommandée avec accusé de réception.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion89">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-89">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-89" aria-expanded="true" aria-controls="collapse-89">
                                        Article 51
                                    </button>
                                </div>
                                <div id="collapse-89" class="accordion-collapse collapse" aria-labelledby="collapse-item-89" data-bs-parent="#faqAccordion89">
                                    <div class="accordion-body">
                                        <p>
                                            La décision de refus d'inscription du Conseil national de l'Ordre est susceptible de recours pour excès de pouvoir dans les conditions de droit commun.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion90">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-90">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-90" aria-expanded="true" aria-controls="collapse-90">
                                        Article 52
                                    </button>
                                </div>
                                <div id="collapse-90" class="accordion-collapse collapse" aria-labelledby="collapse-item-90" data-bs-parent="#faqAccordion90">
                                    <div class="accordion-body">
                                        <p>
                                            Le tableau de l'Ordre ainsi que les listes visées à l'article 41 du présent décret, sont tenus à jour, chaque année et en cas de besoin, par le Conseil national de l'Ordre. La mise à jour comprend notamment l'inscription de nouveaux membres, l'actualisation des informations relatives à l'identité, aux spécialités et aux adresses des membres inscrits. A cette fin, tout membre de l'Ordre ou toute personne inscrite sur les listes visées au présent article, est tenu de notifier à l'Ordre tout changement intervenu dans sa situation et portant sur ses informations. <br> Le tableau de l'Ordre ainsi que les listes visées au présent article sont publiés sur le site internet de l'Ordre.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">CHAPITRE V : DROITS, OBLIGATIONS ET DISCIPLINE</h4>
                    </div>

                    <div class="title-area text-left pt-5">
                        <h5 class="sec-title">Section 1 : Droits et obligations</h5>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion91">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-91">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-91" aria-expanded="true" aria-controls="collapse-91">
                                        Article 53
                                    </button>
                                </div>
                                <div id="collapse-91" class="accordion-collapse collapse" aria-labelledby="collapse-item-91" data-bs-parent="#faqAccordion91">
                                    <div class="accordion-body">
                                        <p>
                                            Tout membre de l'Ordre a droit à la protection de l'Ordre lorsqu'il est l'objet d'atteinte dans l'exercice ou à l'occasion de l'exercice de sa profession.
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion92">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-92">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-92" aria-expanded="true" aria-controls="collapse-92">
                                        Article 54
                                    </button>
                                </div>
                                <div id="collapse-92" class="accordion-collapse collapse" aria-labelledby="collapse-item-92" data-bs-parent="#faqAccordion92">
                                    <div class="accordion-body">
                                        <p>
                                            Tout membre de l'Ordre a le droit d'être électeur ou éligible aux organes de l'Ordre dans les conditions fixées par le présent décret et le décret portant régime électoral.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion93">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-93">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-93" aria-expanded="true" aria-controls="collapse-93">
                                        Article 55
                                    </button>
                                </div>
                                <div id="collapse-93" class="accordion-collapse collapse" aria-labelledby="collapse-item-93" data-bs-parent="#faqAccordion93">
                                    <div class="accordion-body">
                                        <p>
                                            Tout membre de l'Ordre est autorisé à exercer en clientèle privée, sans préjudice des dispositions particulières qui lui sont applicables en raison de son activité ou de son statut.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion94">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-94">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-94" aria-expanded="true" aria-controls="collapse-94">
                                        Article 56
                                    </button>
                                </div>
                                <div id="collapse-94" class="accordion-collapse collapse" aria-labelledby="collapse-item-94" data-bs-parent="#faqAccordion94">
                                    <div class="accordion-body">
                                        <p>
                                            Tout membre de l'Ordre a droit à la communication de toute information ou pièce relative à la gestion des ressources de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion95">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-95">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-95" aria-expanded="true" aria-controls="collapse-95">
                                        Article 57
                                    </button>
                                </div>
                                <div id="collapse-95" class="accordion-collapse collapse" aria-labelledby="collapse-item-95" data-bs-parent="#faqAccordion95">
                                    <div class="accordion-body">
                                        <p>
                                            Indépendamment de toute autre formalité prévue par la réglementation en vigueur, tout membre de l'Ordre responsable d'une formation sanitaire privée informe le Conseil national de l'Ordre lorsqu'il doit s'absenter du territoire national au-delà d'un délai de huit (08) jours.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion96">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-96">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-96" aria-expanded="true" aria-controls="collapse-96">
                                        Article 58
                                    </button>
                                </div>
                                <div id="collapse-96" class="accordion-collapse collapse" aria-labelledby="collapse-item-96" data-bs-parent="#faqAccordion96">
                                    <div class="accordion-body">
                                        <p>
                                            En cas de cessation temporaire ou définitive d'activité professionnelle, tout membre de l'Ordre en fait la déclaration écrite au président du conseil départemental de l'Ordre dont il relève, au moins quinze (15) jours avant la date de cessation de son activité professionnelle. Celui-ci en informe sans délai le président du Conseil national de l'Ordre. <br> Le membre concerné est omis ou retiré, selon le cas, du tableau de l'Ordre.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion97">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-97">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-70" aria-expanded="true" aria-controls="collapse-97">
                                        Article 59
                                    </button>
                                </div>
                                <div id="collapse-97" class="accordion-collapse collapse" aria-labelledby="collapse-item-97" data-bs-parent="#faqAccordion97">
                                    <div class="accordion-body">
                                        <p>
                                            Est également omis du tableau de l'Ordre, tout membre :
                                       </p>
                                        <ol>
                                            <li>
                                                se trouvant dans un cas d'incompatibilité prévu par les textes en vigueur ;
                                            </li>
                                            <li>
                                                empêché d'exercer sa profession pour cause de perte d'aptitude physique ou mentale ;
                                            </li>
                                            <li>
                                                ayant fait l'objet d'une sanction disciplinaire emportant cessation temporaire d'activité.
                                            </li>
                                        </ol>
                                        <p>
                                            Le médecin omis est, dès la cessation de la cause de son omission, réinscrit au tableau au même rang par le Conseil national de l'Ordre, sur demande écrite adressée au président du Conseil national de l'Ordre et déposée auprès du conseil départemental de l'Ordre dont il relève.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion98">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-98">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-70" aria-expanded="true" aria-controls="collapse-98">
                                        Article 60
                                    </button>
                                </div>
                                <div id="collapse-98" class="accordion-collapse collapse" aria-labelledby="collapse-item-98" data-bs-parent="#faqAccordion98">
                                    <div class="accordion-body">
                                        <p>
                                            En cas d'information sur une infirmité ou sur un état pathologique susceptible de porter atteinte à la qualité des prestations d'un médecin inscrit au tableau de l'Ordre, le Conseil national de l'Ordre peut décider de la suspension temporaire de son droit d'exercer pour une période déterminée, renouvelable, s'il y a lieu. La suspension ne peut être ordonnée que sur un rapport motivé adressé au Conseil national de l'Ordre, établi par trois (03) médecins experts dont :
                                        </p>
                                        <ol>
                                            <li>
                                                médecins experts dont :
                                            </li>
                                            <li>
                                                l'un désigné par l'intéressé ou sa famille ;
                                            </li>
                                            <li>
                                                le deuxième, médecin du travail, désigné par le Conseil national de l'Ordre ;
                                            </li>
                                            <li>
                                                le troisième choisi par les deux premiers.
                                            </li>
                                        </ol>
                                        <p>
                                            À défaut de désignation par l'intéressé ou sa famille, la désignation du premier expert est faite à la demande du Conseil national de l'Ordre par le ministre chargé de la Santé. Il en est de même en cas de désaccord entre les deux premiers sur le choix du troisième médecin. <br> <br> La décision de suspension prise par le Conseil national de l'Ordre est susceptible de recours pour excès de pouvoir dans les conditions de droit commun.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion99">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-99">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-99" aria-expanded="true" aria-controls="collapse-99">
                                        Article 61
                                    </button>
                                </div>
                                <div id="collapse-99" class="accordion-collapse collapse" aria-labelledby="collapse-item-99" data-bs-parent="#faqAccordion99">
                                    <div class="accordion-body">
                                        <p>
                                            Tout membre de l'Ordre a droit à la communication de toute information ou pièce relative à la gestion des ressources de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion100">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-100">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-100" aria-expanded="true" aria-controls="collapse-100">
                                        Article 62
                                    </button>
                                </div>
                                <div id="collapse-100" class="accordion-collapse collapse" aria-labelledby="collapse-item-100" data-bs-parent="#faqAccordion100">
                                    <div class="accordion-body">
                                        <p>
                                            Tout médecin frappé d'une invalidité définitive ou décédé est retiré du tableau de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-area text-left pt-5">
                        <h5 class="sec-title">Section 2 : Discipline</h5>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion101">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-101">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-101" aria-expanded="true" aria-controls="collapse-101">
                                        Article 63
                                    </button>
                                </div>
                                <div id="collapse-101" class="accordion-collapse collapse" aria-labelledby="collapse-item-101" data-bs-parent="#faqAccordion101">
                                    <div class="accordion-body">
                                        <p>
                                            Tout manquement aux devoirs, à la discipline et à l'éthique de la profession constitue une faute disciplinaire.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion102">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-102">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-102" aria-expanded="true" aria-controls="collapse-102">
                                        Article 64
                                    </button>
                                </div>
                                <div id="collapse-102" class="accordion-collapse collapse" aria-labelledby="collapse-item-102" data-bs-parent="#faqAccordion102">
                                    <div class="accordion-body">
                                        <p>
                                            Les membres de l'Ordre, agents de la fonction publique, civils ou militaires, sont justiciables des juridictions disciplinaires de l'Ordre pour les faits pertinents de la pratique médicale. Pour les autres faits, ils sont justiciables des juridictions disciplinaires prévues par les statuts qui les régissent.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion103">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-103">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-103" aria-expanded="true" aria-controls="collapse-103">
                                        Article 65
                                    </button>
                                </div>
                                <div id="collapse-103" class="accordion-collapse collapse" aria-labelledby="collapse-item-103" data-bs-parent="#faqAccordion103">
                                    <div class="accordion-body">
                                        <p>
                                            Le ministre chargé de la Santé peut suspendre, à titre conservatoire, un médecin de l'exercice de la fonction en cas de faute, à défaut de la diligence requise de la part de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion104">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-104">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-104" aria-expanded="true" aria-controls="collapse-104">
                                        Article 66
                                    </button>
                                </div>
                                <div id="collapse-104" class="accordion-collapse collapse" aria-labelledby="collapse-item-104" data-bs-parent="#faqAccordion104">
                                    <div class="accordion-body">
                                        <p>
                                            Les sanctions disciplinaires qui peuvent être prononcées contre les membres de l'Ordre sont :
                                        </p>
                                        <ol>
                                            <li>
                                                l’avertissement ;
                                            </li>
                                            <li>
                                                le blâme avec inscription au dossier ;
                                            </li>
                                            <li>
                                                l'interdiction temporaire d'exercer tout ou partie des fonctions de médecin qui ne peut excéder douze mois (12) mois ;
                                            </li>
                                            <li>
                                                la radiation du tableau de l'Ordre.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion105">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-105">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-105" aria-expanded="true" aria-controls="collapse-105">
                                        Article 67
                                    </button>
                                </div>
                                <div id="collapse-105" class="accordion-collapse collapse" aria-labelledby="collapse-item-105" data-bs-parent="#faqAccordion105">
                                    <div class="accordion-body">
                                        <p>
                                            L'avertissement est une mise en garde écrite, adressée au médecin inscrit à l'Ordre pour l'inviter à respecter ses obligations vis-à-vis de l'Ordre
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion106">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-106">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-106" aria-expanded="true" aria-controls="collapse-106">
                                        Article 68
                                    </button>
                                </div>
                                <div id="collapse-106" class="accordion-collapse collapse" aria-labelledby="collapse-item-106" data-bs-parent="#faqAccordion106">
                                    <div class="accordion-body">
                                        <p>
                                            Le blâme avec inscription au dossier est un rappel à l'ordre adressé au médecin inscrit à l'Ordre pour l'inviter à s'abstenir de réitérer un ou des comportements fautifs. Mention en est faite au dossier de l'intéressé qui est tenu par l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion107">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-107">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-107" aria-expanded="true" aria-controls="collapse-107">
                                        Article 69
                                    </button>
                                </div>
                                <div id="collapse-107" class="accordion-collapse collapse" aria-labelledby="collapse-item-107" data-bs-parent="#faqAccordion107">
                                    <div class="accordion-body">
                                        <p>
                                            L'interdiction temporaire d'exercer tout ou partie des fonctions médicales emporte, pour le médecin inscrit à l'Ordre, pendant toute la durée fixée, la cessation de la pratique médicale interdite sur toute l'étendue du territoire national, y compris en privé. <br> <br> L'interdiction temporaire d'exercer emporte l'inéligibilité à un poste de membre d'un conseil de l'Ordre.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion108">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-108">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-108" aria-expanded="true" aria-controls="collapse-108">
                                        Article 70
                                    </button>
                                </div>
                                <div id="collapse-108" class="accordion-collapse collapse" aria-labelledby="collapse-item-108" data-bs-parent="#faqAccordion108">
                                    <div class="accordion-body">
                                        <p>
                                            La radiation du tableau de l'Ordre emporte perte définitive de tout droit lié à la qualité de membre de l'Ordre et notamment celui d'exercer en qualité de médecin, sur toute l'étendue du territoire national.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion109">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-109">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-109" aria-expanded="true" aria-controls="collapse-109">
                                        Article 71
                                    </button>
                                </div>
                                <div id="collapse-109" class="accordion-collapse collapse" aria-labelledby="collapse-item-109" data-bs-parent="#faqAccordion109">
                                    <div class="accordion-body">
                                        <p>
                                            La récidive de tout manquement déjà sanctionné, s'il est établi, emporte l'application de la sanction immédiatement supérieure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion110">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-110">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-110" aria-expanded="true" aria-controls="collapse-110">
                                        Article 72
                                    </button>
                                </div>
                                <div id="collapse-110" class="accordion-collapse collapse" aria-labelledby="collapse-item-110" data-bs-parent="#faqAccordion110">
                                    <div class="accordion-body">
                                        <p>
                                            Le conseil départemental exerce le pouvoir disciplinaire sur les membres de l'Ordre de son ressort de compétence. Il connaît en premier ressort des faits qui leur sont reprochés. Le Conseil départemental, siégeant comme conseil disciplinaire, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du Conseil départemental. Lorsque l'affaire est dénoncée par le ministre chargé de la Santé, un représentant du ministère en charge de la Santé est chargé d'exposer les faits, de les qualifier, d'en soutenir la discussion et de requérir la sanction appropriée. Il ne participe pas à la délibération.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion111">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-111">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-111" aria-expanded="true" aria-controls="collapse-111">
                                        Article 73
                                    </button>
                                </div>
                                <div id="collapse-111" class="accordion-collapse collapse" aria-labelledby="collapse-item-111" data-bs-parent="#faqAccordion111">
                                    <div class="accordion-body">
                                        <p>
                                            Le conseil départemental peut être saisi par toute personne physique ou morale.
                                        </p>
                                        <p>
                                            Toute autorité publique peut dénoncer au Conseil départemental tout fait disciplinaire dont elle a connaissance. Cette dénonciation ne lui donne pas la qualité de plaignant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion112">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-112">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-112" aria-expanded="true" aria-controls="collapse-112">
                                        Article 74
                                    </button>
                                </div>
                                <div id="collapse-112" class="accordion-collapse collapse" aria-labelledby="collapse-item-112" data-bs-parent="#faqAccordion112">
                                    <div class="accordion-body">
                                        <p>
                                            Le président du Conseil départemental désigne immédiatement deux (02) membres du conseil, l'un du secteur public et l'autre du secteur privé, pour instruire toute affaire dont il est saisi.
                                        </p>
                                        <p>
                                            Les deux (02) conseillers-rapporteurs désignés entendent le mis en cause, les victimes ou s, et le cas échéant, les témoins. Ils procèdent à toutes constatations jugées nécessaires et dressent rapport au conseil dans un délai d'un (01) mois, à compter de la date de notification de leur désignation. Ce délai peut être prolongé en cas de nécessité motivée et ne peut excéder en tout état de cause, trois (03) mois. Lorsque les conseillers-rapporteurs sont d'avis divergents sur les conclusions du rapport, celui-ci fait mention de leurs appréciations respectives.
                                        </p>
                                        <p>
                                            Le rapport est transmis au président du conseil départemental qui peut solliciter l'accomplissement de toute diligence complémentaire qu'il juge appropriée. Les deux (02) conseillers-rapporteurs sont tenus d'y procéder.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion113">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-113">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-113" aria-expanded="true" aria-controls="collapse-113">
                                        Article 75
                                    </button>
                                </div>
                                <div id="collapse-113" class="accordion-collapse collapse" aria-labelledby="collapse-item-113" data-bs-parent="#faqAccordion113">
                                    <div class="accordion-body">
                                        <p>
                                            Le président du Conseil national de l'Ordre met à la disposition des conseillers-rapporteurs les moyens nécessaires à la réalisation de leur mission.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion114">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-114">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-114" aria-expanded="true" aria-controls="collapse-114">
                                        Article 76
                                    </button>
                                </div>
                                <div id="collapse-114" class="accordion-collapse collapse" aria-labelledby="collapse-item-114" data-bs-parent="#faqAccordion114">
                                    <div class="accordion-body">
                                        <p>
                                            Le président du Conseil départemental dispose d'un délai d'un (01) mois, à compter de la date de réception du rapport d'instruction, pour faire délibérer et statuer le conseil sur l'affaire.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion115">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-115">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-115" aria-expanded="true" aria-controls="collapse-115">
                                        Article 77
                                    </button>
                                </div>
                                <div id="collapse-115" class="accordion-collapse collapse" aria-labelledby="collapse-item-115" data-bs-parent="#faqAccordion115">
                                    <div class="accordion-body">
                                        <p>
                                            Le rapport d'instruction est tenu, au siège du Conseil départemental, à la disposition du médecin mis en cause qui peut en prendre copie à ses frais. Le médecin appelé à comparaître devant le Conseil, peut se faire assister par un confrère ou un avocat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion116">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-116">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-116" aria-expanded="true" aria-controls="collapse-116">
                                        Article 78
                                    </button>
                                </div>
                                <div id="collapse-116" class="accordion-collapse collapse" aria-labelledby="collapse-item-116" data-bs-parent="#faqAccordion116">
                                    <div class="accordion-body">
                                        <p>
                                            Le délai entre la convocation du mis en cause et le jour de la comparution ne peut être inférieur à :
                                        </p>
                                        <ul>
                                            <li>
                                                huit (08) jours s'il demeure au lieu du siège du conseil départemental ;
                                            </li>
                                            <li>
                                                quinze (15) jours s'il demeure dans une commune limitrophe du lieu du siège du conseil ;
                                            </li>
                                            <li>
                                                un (01) mois s'il demeure dans les autres communes ;
                                            </li>
                                            <li>
                                                deux (02) mois s'il se trouve hors du territoire national 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion117">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-117">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-117" aria-expanded="true" aria-controls="collapse-117">
                                        Article 79
                                    </button>
                                </div>
                                <div id="collapse-117" class="accordion-collapse collapse" aria-labelledby="collapse-item-117" data-bs-parent="#faqAccordion117">
                                    <div class="accordion-body">
                                        <p>
                                            À l'audience disciplinaire, le conseil de discipline siège avec la présence des deux (02) conseillers-rapporteurs. Il entend les conseillers-rapporteurs, le médecin mis en cause, le cas échéant, les victimes ou plaignants et les témoins. Le défenseur du mis en cause est entendu en ses observations. Lorsque l'instruction est terminée, le conseil de discipline se retire pour délibérer sans la participation des deux (02) conseillers rapporteurs. <br> <br> La décision du conseil de discipline est prise à la majorité simple des conseillers qui participent à la délibération.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion118">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-118">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-118" aria-expanded="true" aria-controls="collapse-118">
                                        Article 80
                                    </button>
                                </div>
                                <div id="collapse-118" class="accordion-collapse collapse" aria-labelledby="collapse-item-118" data-bs-parent="#faqAccordion118">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil départemental tient un registre, qui peut être électronique, dans lequel sont consignées les déclarations et les décisions prises lors des audiences disciplinaires. Lorsqu'il est en forme papier, le registre est coté et paraphé par le président du tribunal du lieu du siège du Conseil départemental. La sécurité du registre électronique est garantie par un système d'habilitation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion119">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-119">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-119" aria-expanded="true" aria-controls="collapse-119">
                                        Article 81
                                    </button>
                                </div>
                                <div id="collapse-119" class="accordion-collapse collapse" aria-labelledby="collapse-item-119" data-bs-parent="#faqAccordion119">
                                    <div class="accordion-body">
                                        <p>
                                            Les décisions du conseil de discipline sont notifiées aux membres concernés dans un délai de huit (08) jours à compter de leur prononcé. La notification fait mention du droit de former recours contre la décision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion120">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-120">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-120" aria-expanded="true" aria-controls="collapse-120">
                                        Article 82
                                    </button>
                                </div>
                                <div id="collapse-120" class="accordion-collapse collapse" aria-labelledby="collapse-item-120" data-bs-parent="#faqAccordion120">
                                    <div class="accordion-body">
                                        <p>
                                            Les décisions du conseil de discipline peuvent faire l'objet de recours devant le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel dans le délai d'un (01) mois, à compter de la notification.
                                        </p>
                                        <p>
                                            Le recours peut être formé par le mis en cause, la partie plaignante ou par le ministre chargé de la Santé lorsqu'il est à l'origine de la dénonciation.
                                        </p>
                                        <p>
                                            Le recours est formé par écrit et notifié au président du Conseil départemental. Celui-ci transmet, dans les trois (03) jours, le dossier de l'affaire au président du Conseil national de l'Ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion122">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-122">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-122" aria-expanded="true" aria-controls="collapse-122">
                                        Article 84
                                    </button>
                                </div>
                                <div id="collapse-122" class="accordion-collapse collapse" aria-labelledby="collapse-item-122" data-bs-parent="#faqAccordion122">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre peut se saisir d'office de toute affaire disciplinaire concernant un membre de l'Ordre, soit pour, dans sa composition disciplinaire, y statuer par lui-même en premier et dernier ressort, soit pour instruire son jugement par le Conseil départemental de l'Ordre compétent.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 85
                                    </button>
                                </div>
                                <div id="collapse-123" class="accordion-collapse collapse" aria-labelledby="collapse-item-123" data-bs-parent="#faqAccordion123">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion121">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-121">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-121" aria-expanded="true" aria-controls="collapse-121">
                                        Article 83
                                    </button>
                                </div>
                                <div id="collapse-121" class="accordion-collapse collapse" aria-labelledby="collapse-item-121" data-bs-parent="#faqAccordion121">
                                    <div class="accordion-body">
                                        <p>
                                            Le Conseil national de l'Ordre siégeant comme conseil de discipline d'appel, comprend un magistrat en activité désigné par le ministre chargé de la Justice pour la durée du mandat du conseil départemental de l'Ordre.
                                        </p>
                                        <p>
                                            Le conseil de discipline d'appel connaît en dernier ressort des décisions disciplinaires rendues par les conseils de discipline. Il confirme, annule ou modifie lesdites décisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- TITRE V : DEVOIRS DES MEDECINS ENVERS LES PHARMACIENS, CHIRURGIENS-DENTISTES, SAGES-FEMMES ET LES AUXILLIAIRES MEDICAUX --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">TITRE V : DEVOIRS DES MEDECINS ENVERS LES PHARMACIENS, CHIRURGIENS-DENTISTES, SAGES-FEMMES ET LES AUXILLIAIRES MEDICAUX</h4>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion71">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-71">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-71" aria-expanded="true" aria-controls="collapse-71">
                                        71. Article
                                    </button>
                                </div>
                                <div id="collapse-71" class="accordion-collapse collapse" aria-labelledby="collapse-item-71" data-bs-parent="#faqAccordion71">
                                    <div class="accordion-body">
                                        <p>
                                            Dans leurs rapports professionnels avec les membres des professions paramédicales, notamment les pharmaciens, les chirurgiens-dentistes, les sages-femmes, les infirmiers et infirmières, les médecins doivent respecter l’indépendance de ceux-ci.
                                        </p>
                                        <p>
                                            Ils doivent éviter tout agissement injustifié tendant à leur nuire vis-à-vis de leur clientèle et de se montrer courtois à leur égard. Le médecin et le pharmacien devant vivre en bonne harmonie (et cela dans l’intérêt du public) il est indispensable que soient mis en pratique les principes fondamentaux suivants :
                                        </p>
                                        <ul>
                                            <li>
                                                Le médecin doit observer une impartialité absolue entre les divers pharmaciens de sa localité. Il doit s’abstenir de recommander telle ou telle pharmacie (exception faite pour les médecins propharmaciens). Il doit s’abstenir de prescrire les spécialités de compérage ainsi que des spécialités secrètes, seulement connues d’un seul pharmacien de sa localité
                                            </li>
                                            <li>
                                                Il ne doit porter en public ou dans les familles des jugements sur tel ou tel pharmacien. Il ne doit pas formuler des critiques sur les préparations effectuées par tel ou tel pharmacien ni sur le prix des médicaments. Si l’exécution d’une préparation lui parait suspecte, le médecin suspendra s’il le juge bon, l’emploi à son entourage. Il devra discrètement demander des éclaircissements au pharmacien responsable de la préparation. Il agira de même pour les analyses de laboratoire.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion72">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-72">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-72" aria-expanded="true" aria-controls="collapse-72">
                                        72. Article
                                    </button>
                                </div>
                                <div id="collapse-72" class="accordion-collapse collapse" aria-labelledby="collapse-item-72" data-bs-parent="#faqAccordion72">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin a le devoir de se montrer courtois et bienveillant envers les auxiliaires médicaux et s’attacher à ne pas leur nuire.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="accordion-1 accordion py-3" id="faqAccordion73">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-73">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-73" aria-expanded="true" aria-controls="collapse-73">
                                        73. Article
                                    </button>
                                </div>
                                <div id="collapse-73" class="accordion-collapse collapse" aria-labelledby="collapse-item-73" data-bs-parent="#faqAccordion73">
                                    <div class="accordion-body">
                                        <p>
                                            Tout projet de contrat d’association ou de société ayant un objet professionnel entre un ou plusieurs médecins et un ou plusieurs membres des professions visées aux deux articles précédents doit après avis du conseil départemental de l’ordre qui vérifie notamment si le projet est conforme aux lois en vigueur ainsi qu’au code de déontologie médicale, et s’il respecte la dignité professionnelle du médecin. Les dispositions du contrat n’entrent en vigueur qu’après avis du ministère de la santé.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- TITRE VI : DES SANCTIONS PÉNALES --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">TITRE VI : DES SANCTIONS PÉNALES</h4>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion74">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-74">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-74" aria-expanded="true" aria-controls="collapse-74">
                                        74. Article
                                    </button>
                                </div>
                                <div id="collapse-74" class="accordion-collapse collapse" aria-labelledby="collapse-item-74" data-bs-parent="#faqAccordion74">
                                    <div class="accordion-body">
                                        <p>
                                            Sont punis d’une peine de 15 jours à 2 mois d’emprisonnement, d’une amende de 50000 à 500000 francs ou de l’une de ces deux peines seulement, les infractions aux articles 11,12,13,14,16,17,21,22,35,40,44,46 et 50 ci-dessus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion75">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-75">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-75" aria-expanded="true" aria-controls="collapse-75">
                                        75. Article
                                    </button>
                                </div>
                                <div id="collapse-75" class="accordion-collapse collapse" aria-labelledby="collapse-item-75" data-bs-parent="#faqAccordion75">
                                    <div class="accordion-body">
                                        <p>
                                            Sont punis d’une peine de 6 mois à 2 ans d’emprisonnement et d’une amende de 200000 à 2000000 de francs ou de l’une de ces deux peines seulement, les infractions aux articles 18, 20,23, 24,26, 41, 43,47 et 54.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="accordion-1 accordion py-3" id="faqAccordion76">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-76">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-76" aria-expanded="true" aria-controls="collapse-76">
                                        76. Article
                                    </button>
                                </div>
                                <div id="collapse-76" class="accordion-collapse collapse" aria-labelledby="collapse-item-76" data-bs-parent="#faqAccordion76">
                                    <div class="accordion-body">
                                        <p>
                                            Les juridictions répressives saisies des infractions définies aux articles précédents peuvent prononcer des peines disciplinaires de l’interdiction temporaire à la radiation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TITRE VII : DISPOSITIONS DIVERSES --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">TITRE VII : DISPOSITIONS DIVERSES</h4>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion77">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-77">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-77" aria-expanded="true" aria-controls="collapse-77">
                                        77. Article
                                    </button>
                                </div>
                                <div id="collapse-77" class="accordion-collapse collapse" aria-labelledby="collapse-item-77" data-bs-parent="#faqAccordion77">
                                    <div class="accordion-body">
                                        <p>
                                            Toutes décisions disciplinaires prises par les conseils départementaux en vertu du présent code peuvent être reformées ou annulées par le conseil national, soit d’office, soit à la demande des intéressés, laquelle doit être présentée dans les deux mois de la notification de la décision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion78">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-78">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-78" aria-expanded="true" aria-controls="collapse-78">
                                        78. Article
                                    </button>
                                </div>
                                <div id="collapse-78" class="accordion-collapse collapse" aria-labelledby="collapse-item-78" data-bs-parent="#faqAccordion78">
                                    <div class="accordion-body">
                                        <p>
                                            Tout médecin, lors de son inscription au tableau, doit affirmer devant le conseil départemental de l’ordre qu’il a eu connaissance du présent code et s’engager sous serment et par écrit à le respecter.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion79">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-79">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-79" aria-expanded="true" aria-controls="collapse-79">
                                        79. Article
                                    </button>
                                </div>
                                <div id="collapse-79" class="accordion-collapse collapse" aria-labelledby="collapse-item-79" data-bs-parent="#faqAccordion79">
                                    <div class="accordion-body">
                                        <p>
                                            Tout médecin qui cesse d’exercer est tenu d’en avertir le conseil départemental. Celui-ci lui donne acte de sa décision et en informe le conseil national. Si l’intéressé le demande expressément, il n’est plus inscrit au tableau.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion80">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-80">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-80" aria-expanded="true" aria-controls="collapse-80">
                                        80. Article
                                    </button>
                                </div>
                                <div id="collapse-80" class="accordion-collapse collapse" aria-labelledby="collapse-item-80" data-bs-parent="#faqAccordion80">
                                    <div class="accordion-body">
                                        <p>
                                            la présente ordonnance sera exécutée comme loi de l’Etat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div>
                        <p>Fait à Cotonou le 8 Février 1973</p>
                        <p>Par le Président de la  République Chef de l’Etat Chef du Gouvernement, Chef de bataillon Mathieu KEREKOU</p>
                        <p>Le Garde des Sceaux, Ministre de la justice et de la Législation</p>
                        <p>Chef d’Escadron   Barthélémy OHOUENS</p>
                        <p>Le Ministre de la Santé publique et des Affaires Sociales, Capitaine Moriba DJIBRIL</p>
                    </div>


                </div>
            </div>

        </section>

@endsection
