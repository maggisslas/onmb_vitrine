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
                    Ordonnance N°73-14 du 08 Février 1973 instituant un code de déontologie médicale.
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
                                    VU la Proclamation du 26 octobre 1972 ;
                                </p>
                                <p class="sec-text">
                                    Vu le Décret n° 72-279 du 26 octobre 1972, déterminant les services rattachés à la Présidence de la République et fixant les attributions des membres du gouvernement et le Décret n° 73-17 du 19 janvier 1973 qui l’a complété ;
                                </p>
                                <p class="sec-text">
                                    Sur proposition du Ministre de la Santé Publique et des Affaires Sociales
                                </p>
                                <strong>
                                    Le Conseil des Ministres entendu,
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
                        <h4 class="sec-title">ORDONNE</h4>
                    </div>

                    <div class="col-xl-12">
                        <div class="accordion-1 accordion py-3" id="faqAccordion1">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        01. Article
                                    </button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <p>
                                            Les dispositions de la présence ordonnance s’imposent à tout médecin inscrit au tableau de l’ordre.
                                        </p>
                                        <p>
                                            Les infractions à ses dispositions relèvent de la juridiction disciplinaire de l’ordre, sans préjudice des poursuites judiciaires qu’elles seraient susceptibles d’entrainer.
                                        </p>
                                        <p>
                                            Les médecins membres d’une société médicale ne sauraient considérer leur appartenance à la société comme les dispensant, à titre personnel de leurs obligations.
                                        </p>
                                        <p>
                                            Les médecins fonctionnaires qui exercent une activité médicale motivant leur inscription à un des tableaux de l’ordre restent soumis pour cette activité à la juridiction de l’ordre. Ils ne peuvent être traduits en chambre de discipline qu’à la demande ou avec l’accord des autorités administratives dont ils relèvent ou après que celles-ci aient été informées.
                                        </p>
                                        <strong>
                                            TITRE PREMIER : DEVOIRS GÉNÉRAUX DES MÉDECINS
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- TITRE I : DEVOIRS GÉNÉRAUX DES MÉDECINS --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">TITRE I : DEVOIRS GÉNÉRAUX DES MÉDECINS</h4>
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
                                        <p>
                                            le respect de la vie et de la personne constitue en toute circonstance le devoir primordial du médecin.
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
                                        <p>
                                            Le médecin doit soigner avec la même conscience tous ses malades quels que soient leur condition, leur nationalité, leur opinion politique, leur religion, leur réputation et les sentiments qu’ils inspirent.
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
                                        04. Article
                                    </button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion4">
                                    <div class="accordion-body">
                                        <p>
                                            En aucun cas le médecin ne doit exercer sa profession dans des conditions qui puissent compromettre la qualité des soins et des actes médicaux.
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
                                        05. Article
                                    </button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion5">
                                    <div class="accordion-body">
                                        <p>
                                            Quelle que soit sa fonction ou sa spécialité, hors le seul cas de force majeure, tout médecin doit porter secours d’extrême urgence à un malade en danger immédiat, si d’autres soins ne peuvent pas lui être assurés.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <p>
                                            Le médecin ne peut abandonner ses malades en cas de danger public sauf sur ordre formel et donné par écrit, des autorités qualifiées.
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
                                        <p>
                                            Le secret professionnel s’impose à tout médecin sauf dérogation par la loi.
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
                                        <p>
                                            Les principes ci-après énoncés s’imposent à tout médecin, sauf dans les cas où leur observation est incompatible avec une prescription législative ou réglementaire. Ces principes sont :
                                        </p>
                                        <ul>
                                            <li>Libre choix du médecin par le malade</li>
                                            <li>Liberté des prescriptions médicales</li>
                                            <li>Entente directe entre malade et médecin en matière d’honoraire</li>
                                            <li>Payement direct des honoraires par le malade au médecin</li>
                                        </ul>
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
                                        <p>
                                            Le médecin ne peut aliéner son indépendance professionnelle sous quelque forme que ce soit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <p>
                                            Tout médecin doit s’abstenir, même en dehors de l’exercice de sa profession, de tout acte de nature à déconsidérer celle-ci. Il est interdit au médecin d’exercer en même temps que la médecine une autre activité incompatible avec la dignité professionnelle.
                                        </p>
                                        <p>
                                            Le médecin ne doit favoriser, ni par ses conseils, ni par ses actes, des pratiques contraires aux bonnes mœurs.
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
                                        <p>
                                            La médecine ne doit pas être pratiquée comme un commerce. Sont spécialement interdits :
                                        </p>
                                        <ol>
                                            <li>Tous les procédés, directs ou indirects, de publicité ou de réclame</li>
                                            <li>Les manifestations spectaculaires touchant à la médecine et n’ayant pas exclusivement un but scientifique ou éducatif.</li>
                                        </ol>
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
                                        <p>
                                            Les seules indications qu’un médecin est autorisé à mentionner sur ses feuilles d’ordonnance ou dans un annuaire sont :
                                        </p>
                                        <ol>
                                            <li>Celles qui facilitent ses relations avec ses patients</li>
                                            <li>La qualification qui lui aura été reconnue dans des conditions déterminées par l’ordre national des médecins avec l’approbation du ministère de la sante publique</li>
                                            <li>Les titres et fonctions reconnus valables par le conseil national de l’ordre et le ministère de la santé publique</li>
                                            <li>Les distinctions honorifiques reconnues par la république du Dahomey</li>
                                        </ol>
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
                                        <p>
                                            Les seules indications qu’un médecin est autorisé à faire figurer à la porte de son cabinet sont : le nom, les prénoms, les titres, la qualification, les jours et les heures de consultations.
                                        </p>
                                        <p>
                                            Ces indications doivent être présentées avec mesure selon les usages des professions libérales.
                                        </p>
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
                                        <p>
                                            Tout médecin se servant de pseudonyme pour des activités se rattachant à sa profession, est tenu d’en faire la déclaration au conseil départemental de l’ordre et au directeur général de la santé publique.
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
                                        <p>
                                            Le médecin doit exercer sa profession dans des conditions lui permettant l’usage régulier d’une installation et des moyens techniques nécessaires à son art.
                                        </p>
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
                                        <p>
                                            Un médecin ne peut avoir en principe plus d’un cabinet. La création d’un cabinet secondaire ne peut être autorisée que par le conseil départemental de l’ordre et le ministre de la santé publique que si l’absence d’un médecin de même discipline est telle que l’intérêt des malades puisse en souffrir.
                                        </p>
                                        <p>
                                            L’autorisation doit être retirée lorsque l’installation d’un médecin de même discipline est de nature à satisfaire les besoins des malades.
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
                                        <p>
                                            L’exercice de la médecine foraine est interdit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <p>
                                            Sont interdits :
                                        </p>
                                        <ul>
                                            <li>Tout acte de nature à procurer à un malade un avantage matériel injustifié ou illicite</li>
                                            <li>Tout versement, acceptation ou partage clandestin d’argent entre praticiens</li>
                                            <li>Toute ristourne en argent ou en nature faite à un malade à l’exception de la remise gratuite d’échantillons pharmaceutiques</li>
                                            <li>Toute commission à quelque personne que ce soit</li>
                                            <li>L’acceptation d’une commission pour un acte médical quelconque et notamment pour examens, prescriptions de médicaments, d’appareils, envoi à une station de cure ou de maison de santé.</li>
                                        </ul>
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
                                        <p>
                                            Est interdite toute facilité accordée à quiconque se livre à l’exercice illégal de la médecine.
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
                                        <p>
                                            Tout compérage entre médecins et pharmaciens, auxiliaires médicaux ou toutes autres personnes est interdit. Le compérage est l’intelligence entre deux ou plusieurs personnes en vue d’obtenir des avantages au détriment du malade ou des tiers.
                                        </p>
                                        <p>
                                            Il est interdit à un médecin de donner des consultations dans les locaux commerciaux, où sont mis en vente des médicaments ou des appareils ainsi que dans les dépendances des dits locaux.
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
                                        <p>
                                            Il est interdit à un médecin d’exercer un autre métier ou une autre profession susceptible de lui permettre d’accroitre ses bénéfices par ses prescriptions ou ses conseils d’ordre professionnel.Article 22 : il est interdit à tout médecin qui remplit un mandat électif ou une fonction administrative d’en user à des fins professionnelles pour accroitre sa clientèle.
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
                                        <p>
                                            il est interdit à tout médecin qui remplit un mandat électif ou une fonction administrative d’en user à des fins professionnelles pour accroitre sa clientèle.
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
                                        <p>
                                            Sont interdites à un médecin toutes les supercheries propres à déconsidérer sa profession et notamment toutes les pratiques de charlatanisme.
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
                                        <p>
                                            Divulguer prématurément dans le public médical en vue d’une application immédiate, un procédé de diagnostic ou de traitement nouveau insuffisamment éprouvé, constitue de la part d’un médecin une imprudence répréhensible, s’il n’a pris le soin de mettre ses confrères en garde contre les dangers éventuels de ce procédé.
                                        </p>
                                        <p>
                                            Divulguer ce même procédé dans le grand public quand sa valeur et son innocuité ne sont pas démontrées constitue une faute grave.
                                        </p>
                                        <p>
                                            Tromper la bonne foi des praticiens ou de la clientèle en leur présentant comme salutaire un procédé insuffisamment éprouvé.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <p>
                                            L’exercice de la médecine comporte normalement l’établissement par le médecin, conformément aux constatations médicales, qu’il est en mesure de faire des certificats, attestations ou documents dont la production est prescrites par les lois, décrets et arrêtés.
                                        </p>
                                        <p>
                                            Tout certificat, attestation ou document délivré par un médecin doit comporter sa signature manuscrite.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="accordion-1 accordion py-3" id="faqAccordion26">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-26">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-26" aria-expanded="true" aria-controls="collapse-26">
                                        26. Article
                                    </button>
                                </div>
                                <div id="collapse-26" class="accordion-collapse collapse" aria-labelledby="collapse-item-26" data-bs-parent="#faqAccordion26">
                                    <div class="accordion-body">
                                        <p>
                                            La délivrance d’un rapport tendancieux ou d’un certificat de complaisance constitue une faute grave.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- TITRE II : DEVOIRS DES MÉDECINS ENVERS LES MALADES --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">TITRE II : DEVOIRS DES MÉDECINS ENVERS LES MALADES</h4>
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
                                        <p>
                                            Le médecin dès qu’il est appelé à donner de soins à un malade et qu’il a accepté de remplir cette mission, s’oblige :
                                        </p>
                                        <ol>
                                            <li>
                                                A lui assurer aussitôt tous les soins médicaux en son pouvoir et désirables en la circonstance, personnellement ou à l’aide de tierce personne
                                            </li>
                                            <li>
                                                A avoir le souci primordial de conserver la vie humaine même quand il soulage la souffrance
                                            </li>
                                            <li>
                                                A agir toujours avec correction et aménité envers le malade et à se montrer compatissant envers lui.
                                            </li>
                                        </ol>
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
                                        <p>
                                            Le médecin doit toujours élaborer son diagnostic avec la plus grande attention, sans compter avec le temps que lui coûte ce travail, et s’il y a lieu, en s’aidant ou en se faisant aider, dans toute la mesure du possible, des conseils les plus éclairés et des méthodes scientifiques les plis appropriées.
                                        </p>
                                        <p>
                                            Après avoir formulé un diagnostic et posé une indication thérapeutique, le médecin doit s’efforcer d’obtenir l’exécution du traitement, particulièrement si la vie du malade est en danger.
                                        </p>
                                        <p>
                                            En cas de refus, il peut cesser les soins dans les conditions de l’article 35 de la présente ordonnance.
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
                                        <p>
                                            Dans toute la mesure compatible avec la qualité et l’efficacité des soins et sans négliger son devoir d’assistance morale envers son malade, le médecin doit limiter au nécessaire ses prescriptions et ses actes.
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
                                        <p>
                                            Le médecin appelé à donner des soins dans une famille ou dans un milieu quelconque doit assurer la prophylaxie. Il met les malades et leur entourage en présence de leurs responsabilités vis-à-vis d’eux-mêmes et de leur voisinage. Il doit s’efforcer d’imposer, en refusant au besoin de continuer les soins, le respect des règles d’hygiène et prophylaxie.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion31">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-31">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-31" aria-expanded="true" aria-controls="collapse-31">
                                        31. Article
                                    </button>
                                </div>
                                <div id="collapse-31" class="accordion-collapse collapse" aria-labelledby="collapse-item-31" data-bs-parent="#faqAccordion31">
                                    <div class="accordion-body">
                                        <p>
                                            Appelé d’urgence auprès d’un mineur ou d’un autre incapable, et lorsqu’il est impossible de recueillir en temps utile le consentement d’un représentant légal, le médecin doit donner les soins qui s’imposent.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <p>
                                            Hors le cas prévu à l’article précédent, le médecin attaché à un établissement comportant le régime de l’internat doit en présence d’une affection grave, faire avertir les parents et accepter ou provoquer, s’il le juge utile, la consultation du médecin désigné par le malade ou sa famille.
                                        </p>
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
                                        <p>
                                            Un pronostic grave peut légitimement être dissimulé au malade. Un pronostic fatal ne peut lui être révélé qu’avec la plus grande circonspection, mais il doit l’être généralement à sa famille à moins que le malade ait préalablement interdit cette révélation, ou désigné les tiers auxquels elle doit être faite.
                                        </p>
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
                                        <p>
                                            Hors le cas d’urgence et celui où il manquerait à ses devoirs d’humanité, un médecin a toujours le droit de refuser ses soins pour des raisons professionnelles ou personnelles.
                                        </p>
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
                                        <p>
                                            Le médecin peut se dégager de sa mission à condition :
                                        </p>
                                        <ol>
                                            <li>De ne jamais nuire de ce fait à son malade</li>
                                            <li>De s’assurer de la continuité des soins et de fournir à cet effet les renseignements utiles.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion36">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-36">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-36" aria-expanded="true" aria-controls="collapse-36">
                                        36. Article
                                    </button>
                                </div>
                                <div id="collapse-36" class="accordion-collapse collapse" aria-labelledby="collapse-item-36" data-bs-parent="#faqAccordion36">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin ne doit pas s’immiscer dans les affaires de famille.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <p>
                                            Il ne peut être procédé à un avortement thérapeutique que si cette intervention est le seul moyen susceptible de sauver la vie de la mère.
                                        </p>
                                        <p>
                                            Lorsque la sauvegarde de la vie de la mère gravement menacée exige soit une intervention chirurgicale, soit l’emploi d’une thérapeutique susceptible d’entrainer l’interruption de la grossesse, le médecin traitant ou le chirurgien devront obligatoirement prendre l’avis de deux médecins consultants dont l’un pris dans la liste des experts près le tribunal civil qui, après examen et discussion, attesteront par écrit que la vie de la mère ne peut être sauvegardée qu’au moyen d’une telle intervention thérapeutique.
                                        </p>
                                        <p>
                                            Un des exemplaires du protocole de la consultation sera remis à la malade, les deux autres conservés par les deux médecins consultants.
                                        </p>
                                        <p>
                                            En outre, un protocole de la décision prise n’indiquant pas le nom du malade, doit être adressé sous pli recommandé au président du conseil départemental au tableau duquel figurent ces médecins.
                                        </p>
                                        <p>
                                            En cas d’indication d’avortement thérapeutique, le médecin doit s’incliner devant le refus éventuel de la malade dûment informée. Cette règle ne peut supporter d’exception que dans les cas d’extrême urgence et lorsque la malade est hors d’état de donner son consentement.
                                        </p>
                                        <p>
                                            Si le médecin en raison de ses convictions, estime qu’il lui est interdit de conseiller de pratiquer l’avortement il peut se retirer en assurant la continuité des soins par un confrère qualifié.
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
                                        <p>
                                            Au cours d’un accouchement dystocique ou prolongé, le médecin doit se considérer comme étant le seul juge des intérêts respectifs de la mère et de l’enfant, sans se laisser influencer par des considérations d’ordre familial.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion39">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-39">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-39" aria-expanded="true" aria-controls="collapse-39">
                                        39. Article
                                    </button>
                                </div>
                                <div id="collapse-39" class="accordion-collapse collapse" aria-labelledby="collapse-item-39" data-bs-parent="#faqAccordion39">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin doit toujours lui-même établir sa note d’honoraire ; il doit le faire avec tact et mesure. Les éléments d’appréciation sont la situation de fortune du malade, la notoriété du médecin, les circonstances particulières.
                                        </p>
                                        <p>
                                            Un médecin n’est jamais en droit de refuser à un client des explications sur sa note d’honoraires.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion40">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-40">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-40" aria-expanded="true" aria-controls="collapse-40">
                                        40. Article
                                    </button>
                                </div>
                                <div id="collapse-40" class="accordion-collapse collapse" aria-labelledby="collapse-item-40" data-bs-parent="#faqAccordion40">
                                    <div class="accordion-body">
                                        <p>
                                            Sous réserve de l’application des lois, il est interdit à tout médecin d’abaisser ses honoraires dans un intérêt de concurrence au-dessous des barèmes publiés par les organismes professionnels qualifiés.
                                        </p>
                                        <p>
                                            Il est libre de donner gratuitement les soins quand sa conscience lui demande.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion41">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-41">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-41" aria-expanded="true" aria-controls="collapse-41">
                                        41. Article
                                    </button>
                                </div>
                                <div id="collapse-41" class="accordion-collapse collapse" aria-labelledby="collapse-item-41" data-bs-parent="#faqAccordion41">
                                    <div class="accordion-body">
                                        <p>
                                            Le forfait pour la durée d’un traitement est interdit, si ce n’est pour un accouchement, une opération chirurgicale, un traitement physiothérapique, un traitement dans une situation de cure ou un établissement de soins ou dans quelques cas exceptionnels pour une série d’intervention, après accord du conseil départemental.
                                        </p>
                                        <p>
                                            Le forfait pour l’efficacité est interdit en toutes circonstances.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion42">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-42">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-42" aria-expanded="true" aria-controls="collapse-42">
                                        42. Article
                                    </button>
                                </div>
                                <div id="collapse-42" class="accordion-collapse collapse" aria-labelledby="collapse-item-42" data-bs-parent="#faqAccordion42">
                                    <div class="accordion-body">
                                        <p>
                                            La rencontre en consultation entre médecin traitant et un médecin consultant légitime pour le second des honoraires spéciaux.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion43">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-43">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-43" aria-expanded="true" aria-controls="collapse-43">
                                        43. Article
                                    </button>
                                </div>
                                <div id="collapse-43" class="accordion-collapse collapse" aria-labelledby="collapse-item-43" data-bs-parent="#faqAccordion43">
                                    <div class="accordion-body">
                                        <p>
                                            Tout partage d’honoraires entre médecin traitant d’une part, consultant, chirurgien ou spécialiste d’autre part, lors d’une consultation d’un acte opératoire, étant formellement interdit, chaque médecin doit présenter sa note personnelle.
                                        </p>
                                        <p>
                                            En aucun cas le chirurgien, spécialiste ou consultant, ne peut accepter de remettre lui-même les honoraires au médecin traitant, mais il doit préciser que ces derniers ne sont pas compris dans sa note.
                                        </p>
                                        <p>
                                            L’acceptation, la sollicitation ou l’offre d’un partage d’honoraires, même non suivis d’effet, constitue une faute professionnelle grave.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion44">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-44">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-44" aria-expanded="true" aria-controls="collapse-44">
                                        44. Article
                                    </button>
                                </div>
                                <div id="collapse-44" class="accordion-collapse collapse" aria-labelledby="collapse-item-44" data-bs-parent="#faqAccordion44">
                                    <div class="accordion-body">
                                        <p>
                                            Le chirurgien a le droit de choisir son aide ou ses aides opératoires ainsi que l’anesthésiste. Les honoraires de ceux-ci peuvent être réclamés par eux directement à l’opéré. Toutefois lorsque le chirurgien croit devoir confier les fonctions d’aide opératoire ou d’anesthésiste au médecin traitant, celui-ci doit réclamer ses honoraires directement à l’opéré.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- TITRE III : DEVOIR DES MÉDECINS EN MATIÈRE DE MÉDECINE SOCIALE --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">TITRE III : DEVOIR DES MÉDECINS EN MATIÈRE DE MÉDECINE SOCIALE</h4>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion45">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-45">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-45" aria-expanded="true" aria-controls="collapse-45">
                                        45. Article
                                    </button>
                                </div>
                                <div id="collapse-45" class="accordion-collapse collapse" aria-labelledby="collapse-item-45" data-bs-parent="#faqAccordion45">
                                    <div class="accordion-body">
                                        <p>
                                            Tout médecin doit, compte tenu de son âge, de son état de santé, de son éventuelle spécialisation, prêter concours à l’action entreprise par les autorités compétentes en vue de la protection de la santé et de l’organisation de la permanence des soins là où elle sera nécessaire et possible.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion46">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-46">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-46" aria-expanded="true" aria-controls="collapse-46">
                                        46. Article
                                    </button>
                                </div>
                                <div id="collapse-46" class="accordion-collapse collapse" aria-labelledby="collapse-item-46" data-bs-parent="#faqAccordion46">
                                    <div class="accordion-body">
                                        <p>
                                            L’existence d’un tiers garant (assurances publiques ou privées, assistance, etc.) ne doit pas amener le médecin à déroger aux prescriptions de l’article 29.
                                        </p>
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
                                        47. Article
                                    </button>
                                </div>
                                <div id="collapse-47" class="accordion-collapse collapse" aria-labelledby="collapse-item-47" data-bs-parent="#faqAccordion47">
                                    <div class="accordion-body">
                                        <p>
                                            L’exercice habituel de la médecine sous quelque forme que ce soit au service d’une entreprise, d’une collectivité ou d’une institution de droit privé, doit dans tous les cas faire l’objet d’un contrat écrit.
                                        </p>
                                        <p>
                                            Tout projet de convention ou de renouvellement de convention avec un des organismes prévus à l’alinéa précédent en vue de l’exercice de la médecine doit être préalablement communiqué au conseil départemental intéressé. Celui-ci vérifie sa conformité avec les prescriptions du présent code, ainsi que s’il existe, avec les clauses des contrats types établis, soit d’accord avec le conseil national et les collectivités ou institutions intéressées, soit conformément à des dispositions législatives ou réglementaires.
                                        </p>
                                        <p>
                                            Le médecin doit signer et remettre au conseil départemental une déclaration aux termes de laquelle il affirmera sur l’honneur qu’il n’a passé aucune contre-lettre relative au contrat soumis à l’examen du conseil.
                                        </p>
                                        <p>
                                            Les dispositions du contrat n’entrent en vigueur qu’après visa du ministère de la santé publique.
                                        </p>
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
                                        48. Article
                                    </button>
                                </div>
                                <div id="collapse-48" class="accordion-collapse collapse" aria-labelledby="collapse-item-48" data-bs-parent="#faqAccordion48">
                                    <div class="accordion-body">
                                        <p>
                                            Les médecins sont tenus de communiquer au conseil national de l’ordre, par l’intermédiaire du conseil départemental, les contrats intervenus entre eux et une administration publique ou une collectivité administrative. Les observations que le conseil national aurait à formuler sont adressées par lui au ministre de la santé publique.
                                        </p>
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
                                        49. Article
                                    </button>
                                </div>
                                <div id="collapse-49" class="accordion-collapse collapse" aria-labelledby="collapse-item-49" data-bs-parent="#faqAccordion49">
                                    <div class="accordion-body">
                                        <p>
                                            Nul ne peut être à la fois, sauf cas d’urgence, médecin contrôleur et médecin traitant d’un même malade, ni devenir ultérieurement son médecin pendant une durée d’un an à compter de l’exercice à l’égard de ce malade du dernier acte de contrôle. Cette interdiction s’étend aux membres de la famille du malade vivant avec lui et si le médecin est accrédité auprès d’une collectivité, aux membres de celle-ci.
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
                                        50. Article
                                    </button>
                                </div>
                                <div id="collapse-50" class="accordion-collapse collapse" aria-labelledby="collapse-item-50" data-bs-parent="#faqAccordion50">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin contrôleur doit faire connaitre au malade soumis à son contrôle qu’il examine en tant que médecin contrôleur.
                                        </p>
                                        <p>
                                            Il doit être circonspect dans ses propos et s’interdire toute révélation ou toute interprétation.
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
                                        51. Article
                                    </button>
                                </div>
                                <div id="collapse-51" class="accordion-collapse collapse" aria-labelledby="collapse-item-51" data-bs-parent="#faqAccordion51">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin contrôleur ne doit pas s’immiscer dans le traitement. Toutefois, si au cours d’un examen, il se trouve en accord avec son confrère, il doit le lui signaler personnellement.
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
                                        52. Article
                                    </button>
                                </div>
                                <div id="collapse-52" class="accordion-collapse collapse" aria-labelledby="collapse-item-52" data-bs-parent="#faqAccordion52">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin chargé du contrôle est tenu au secret vis-à-vis de son administration à laquelle il ne doit fournir que ses conclusions sur le plan administratif sans indiquer les raisons d’ordre médical qui les motivent.
                                        </p>
                                        <p>
                                            Les renseignements d’ordre médical contenus dans les dossiers établis par ce médecin ne peuvent être communiqués ni aux personnes étrangères au service médical, ni à une autre administration.
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
                                        53. Article
                                    </button>
                                </div>
                                <div id="collapse-53" class="accordion-collapse collapse" aria-labelledby="collapse-item-53" data-bs-parent="#faqAccordion53">
                                    <div class="accordion-body">
                                        <p>
                                            Nul ne peut être à la fois médecin expert et médecin traitant.
                                        </p>
                                        <p>
                                            Sauf accord des parties, un médecin ne doit pas accepter une mission d’expertise dans laquelle sont en jeu les intérêts d’un de ses clients, d’un de ses amis, d’un de ses proches, d’un groupement qui fait appel à ses services. Il en est de même lorsque ses propres intérêts sont en jeu.
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
                                        54. Article
                                    </button>
                                </div>
                                <div id="collapse-54" class="accordion-collapse collapse" aria-labelledby="collapse-item-54" data-bs-parent="#faqAccordion54">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin expert doit, avant d’entreprendre toute opération d’expertise, informer de sa mission la personne qu’il doit examiner.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="accordion-1 accordion py-3" id="faqAccordion55">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-55">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-55" aria-expanded="true" aria-controls="collapse-55">
                                        55. Article
                                    </button>
                                </div>
                                <div id="collapse-55" class="accordion-collapse collapse" aria-labelledby="collapse-item-55" data-bs-parent="#faqAccordion55">
                                    <div class="accordion-body">
                                        <p>
                                            Lorsqu’il est investi de sa mission, le médecin expert ne doit révéler que les éléments de nature à fournir les réponses aux questions posées dans la décision qui l’a nommé.
                                        </p>
                                        <p>
                                            Hors ces limites, le médecin expert doit taire ce qu’il a pu apprendre à l’occasion de sa mission.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TITRE IV : DEVOIRS DE CONFRATERNITE --}}
                    <div class="title-area text-center pt-5">
                        <h4 class="sec-title">TITRE IV : DEVOIRS DE CONFRATERNITE</h4>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion56">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-56">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-56" aria-expanded="true" aria-controls="collapse-56">
                                        56. Article
                                    </button>
                                </div>
                                <div id="collapse-56" class="accordion-collapse collapse" aria-labelledby="collapse-item-56" data-bs-parent="#faqAccordion56">
                                    <div class="accordion-body">
                                        <p>
                                            Les médecins doivent entretenir entre eux des rapports de bonne confraternité. Ils se doivent une assistance morale.
                                        </p>
                                        <p>
                                            Celui qui a un dissentiment professionnel avec son confrère doit d’abord tenter de se réconcilier avec lui ; s’il n’a pas réussi, il peut en aviser le président du conseil départemental de l’ordre.
                                        </p>
                                        <p>
                                            Il est interdit de calomnier un confrère, de médire de lui, ou de se faire l’écho de propos capables de lui nuire dans l’exercice de sa profession.
                                        </p>
                                        <p>
                                            Il est de bonne confraternité de prendre la défense d’un confrère injustement attaqué.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion57">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-57">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-57" aria-expanded="true" aria-controls="collapse-57">
                                        57. Article
                                    </button>
                                </div>
                                <div id="collapse-57" class="accordion-collapse collapse" aria-labelledby="collapse-item-57" data-bs-parent="#faqAccordion57">
                                    <div class="accordion-body">
                                        <p>
                                            Le détournement ou la tentative de détournement de clientèle est interdit.Ils se doivent une assistance morale.
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
                                        58. Article
                                    </button>
                                </div>
                                <div id="collapse-58" class="accordion-collapse collapse" aria-labelledby="collapse-item-58" data-bs-parent="#faqAccordion58">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin appelé auprès d’un malade que soigne un de ses confrères doit respecter les règles suivantes :
                                        </p>
                                        <ul>
                                            <li>
                                                Si le malade entend renoncer aux soins de son premier médecin, s’assurer de cette volonté expresse et prévenir le confrère
                                            </li>
                                            <li>
                                                Si le malade a simplement voulu demander un avis sans changer de médecin traitant, proposer une consultation en commun et se retirer après avoir assuré les soins d’urgence. Au cas où pour des raisons valables, la consultation paraitrait impossible ou inopportune, le médecin pourra examiner le malade mais réserverait à son confrère son avis sur le diagnostic et le traitement
                                            </li>
                                            <li>
                                                Si le malade a appelé en raison de l’absence de son médecin habituel, un autre médecin, celui-ci doit assurer les soins pendant cette absence, les cesser dès le retour de son confrère et donner à ce dernier toutes informations utiles.
                                            </li>
                                        </ul>
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
                                        59. Article
                                    </button>
                                </div>
                                <div id="collapse-59" class="accordion-collapse collapse" aria-labelledby="collapse-item-59" data-bs-parent="#faqAccordion59">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin peut dans son cabinet accueillir tous les malades quel que soit leur médecin traitant, sous les réserves indiquées à l’article suivant.
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
                                        60. Article
                                    </button>
                                </div>
                                <div id="collapse-60" class="accordion-collapse collapse" aria-labelledby="collapse-item-60" data-bs-parent="#faqAccordion60">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin consulté à son cabinet par un malade venu à l’insu de son médecin traitant doit s’efforcer de rentrer en rapport avec ce dernier afin de lui faire part des conclusions, sauf opposition du malade.
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
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-61" aria-expanded="true" aria-controls="collapse-61">
                                        61. Article
                                    </button>
                                </div>
                                <div id="collapse-61" class="accordion-collapse collapse" aria-labelledby="collapse-item-61" data-bs-parent="#faqAccordion61">
                                    <div class="accordion-body">
                                        <p>
                                            Le médecin traitant d’un malade doit proposer une consultation dès que les circonstances l’exigent.
                                        </p>
                                        <p>
                                            Il doit accepter une consultation demandée par le malade ou son entourage.
                                        </p>
                                        <p>
                                            Dans les deux cas, le médecin traitant propose le consultant qu’il juge le plus qualifié, mais doit tenir compte des désirs du malade et accepter en principe, sauf raison sérieuse, de rencontrer en consultation tout médecin inscrit au tableau de l’ordre. Il a la charge d’organiser les modalités de la consultation.
                                        </p>
                                        <p>
                                            Si le médecin ne croit pas devoir donner son agrément au choix formulé, il a la possibilité de se retirer et ne doit à personne l’explication de son refus.
                                        </p>
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
                                        62. Article
                                    </button>
                                </div>
                                <div id="collapse-62" class="accordion-collapse collapse" aria-labelledby="collapse-item-62" data-bs-parent="#faqAccordion62">
                                    <div class="accordion-body">
                                        <p>
                                            A la fin d’une consultation entre deux ou plusieurs médecins, il est de règle que leurs conclusions rédigées en commun soient formulées par écrit, signées par le médecin traitant et contresignées par le ou les médecins consultants.
                                        </p>
                                        <p>
                                            Quand il n’est pas rédigé de conclusions écrites, le consultant est censé admettre qu’il partage entièrement l’avis du médecin traitant.
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
                                        63. Article
                                    </button>
                                </div>
                                <div id="collapse-63" class="accordion-collapse collapse" aria-labelledby="collapse-item-63" data-bs-parent="#faqAccordion63">
                                    <div class="accordion-body">
                                        <p>
                                            Quand au cours d’une consultation entre médecins, les avis du consultant et du médecin traitant diffèrent essentiellement, le médecin traitant est libre de cesser les soins si l’avis du consultant prévaut.
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
                                        64. Article
                                    </button>
                                </div>
                                <div id="collapse-64" class="accordion-collapse collapse" aria-labelledby="collapse-item-64" data-bs-parent="#faqAccordion64">
                                    <div class="accordion-body">
                                        <p>
                                            Un médecin qui a été appelé en consultation ne doit pas revenir auprès du malade examiné en commun, en l’absence du médecin traitant ou son approbation, au cours de la maladie ayant motivé la consultation.
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
                                        65. Article
                                    </button>
                                </div>
                                <div id="collapse-65" class="accordion-collapse collapse" aria-labelledby="collapse-item-65" data-bs-parent="#faqAccordion65">
                                    <div class="accordion-body">
                                        <p>
                                            Un médecin ne peut se faire remplacer dans sa clientèle que temporairement par un confrère ou un étudiant remplissant les conditions prévues par la loi ; s’il s’agit d’un étudiant ou d’un médecin non inscrit au conseil de l’ordre, le conseil doit être informé obligatoirement et immédiatement apprécié si le remplaçant présente les conditions de moralité nécessaires.
                                        </p>
                                        <p>
                                            Pendant la période de remplacement, l’étudiant ou le médecin relève de la juridiction disciplinaire de l’ordre.
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
                                        66. Article
                                    </button>
                                </div>
                                <div id="collapse-66" class="accordion-collapse collapse" aria-labelledby="collapse-item-66" data-bs-parent="#faqAccordion66">
                                    <div class="accordion-body">
                                        <p>
                                            Un médecin qui, soit pendant, soit après ses études, a remplacé un de ses confrères, ne doit pas s’installer pendant un délai de deux ans dans un poste où il puisse entrer en concurrence directe avec le médecin qu’il a remplacé, à moins qu’il n’y ait entre les intéressés un accord qui doit être notifié au conseil départemental.
                                        </p>
                                        <p>
                                            Lorsque cet accord ne peut être obtenu, le cas peut être soumis au conseil départemental de l’ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion67">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-67">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-67" aria-expanded="true" aria-controls="collapse-67">
                                        67. Article
                                    </button>
                                </div>
                                <div id="collapse-67" class="accordion-collapse collapse" aria-labelledby="collapse-item-67" data-bs-parent="#faqAccordion67">
                                    <div class="accordion-body">
                                        <p>
                                            Un médecin ne doit pas s’installer dans l’immeuble habité par un confrère en exercice, sans l’agrément de celui-ci, ou à défaut sans l’autorisation du conseil départemental de l’ordre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion-1 accordion py-3" id="faqAccordion68">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-68">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-68" aria-expanded="true" aria-controls="collapse-68">
                                        68. Article
                                    </button>
                                </div>
                                <div id="collapse-68" class="accordion-collapse collapse" aria-labelledby="collapse-item-68" data-bs-parent="#faqAccordion68">
                                    <div class="accordion-body">
                                        <p>
                                            Toute association ou société entre médecins doit faire l’objet d’un contrat écrit qui respecte l’indépendance professionnelle des contrats types établis par le conseil national.
                                        </p>
                                        <p>
                                            Les dispositions du contrat n’entrent en vigueur qu’après visa du ministre de la santé.
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
                                        69. Article
                                    </button>
                                </div>
                                <div id="collapse-69" class="accordion-collapse collapse" aria-labelledby="collapse-item-69" data-bs-parent="#faqAccordion69">
                                    <div class="accordion-body">
                                        <p>
                                            En dehors des services hospitaliers, il est interdit à tout médecin de se faire assister dans l’exercice normal habituel et organisé de sa profession, sauf urgence et pour une durée maximum d’un mois, d’un médecin exerçant sous le nom du titulaire du poste.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="accordion-1 accordion py-3" id="faqAccordion70">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-70">
                                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-70" aria-expanded="true" aria-controls="collapse-70">
                                        70. Article
                                    </button>
                                </div>
                                <div id="collapse-70" class="accordion-collapse collapse" aria-labelledby="collapse-item-70" data-bs-parent="#faqAccordion70">
                                    <div class="accordion-body">
                                        <p>
                                            Dans tous les cas où ils sont interrogés en matière disciplinaire, les médecins sont, dans la mesure compatible avec le respect du secret médical, tenus de révéler tous les faits utiles à l’instruction parvenus à leur connaissance.
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
