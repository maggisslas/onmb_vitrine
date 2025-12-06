@extends('layouts.master')

@section('title')
    Accueil
@endsection

@section('style')
    <style>
        .testi-box-img::after{
            content:"Dr Abou ADEGBINDIN\A Président de l'Ordre National des Médecins du Bénin.";
            white-space: pre;
            text-align:center;
            color: white;
            mix-blend-mode: normal;
        }

        @media(max-width: 1200px) {
            #faq-img{
                order: 2 !important;
            }
            #faq-quiz{
                order: 1 !important;
            }
        }
    </style>
@endsection

@section('content')


    {{-- Banner --}}
    <div class="th-hero-wrapper hero-5" id="hero">
        <div class="swiper th-slider" id="heroSlide5" data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">

                        <div class="container pt-5">
                            <div class="hero-style5">
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup" data-ani-delay="0.3s">
                                        L'Ordre National  <br> des Médécins du Bénin
                                    </span>
                                </h1>
                            </div>
                        </div>
                        <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                            <img src="assets/img/banner/home.png" alt="Image">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- Mot du président --}}
    <section class="py-5" style='background-image: url("assets/img/shape/pattern_shape_4.png"); background-repeat: no-repeat !important;'>
        <div class="container ">
            <div class="row g-0">
                <div class="col-lg-5 order-2 order-lg-0">
                    <div class="testi-box-img">
                        <div class="swiper th-slider testi-box-thumb" id="testiSlideImg" data-slider-options='{"effect":"fade","spaceBetween":0}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/img/team/new-president-ONMB.jpg" alt="Image">
                                </div>
                                {{-- <div class="swiper-slide">
                                    <img src="assets/img/testimonial/testi_2_2.jpg" alt="Image">
                                </div> --}}
                            </div>
                        </div>
                        {{-- <button data-slider-prev="#testiSlide2" class="slider-arrow default"><i class="far fa-arrow-left"></i></button> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-area text-center">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Edito du Président</span>
                        {{-- <h2 class="sec-title">What Our Present Says?</h2> --}}
                    </div>
                    <div class="testi-box-slide py-2">
                        <div class="swiper th-slider" id="testiSlide2" data-slider-options='{"effect":"slide","thumbs":{"swiper":".testi-box-thumb"}}'>
                            <div class="swiper-wrapper align-items-center" style="align-items:center !important;">
                                <div class="swiper-slide" >
                                    <div class="testi-box">
                                        <p class="">
                                            Chers collègues, chers visiteurs,
                                            En ma qualité du Président en exercice de l'Ordre National des Médecins du Bénin, je suis ravi de vous accueillir sur notre plateforme numérique, conçue pour moderniser et faciliter l'accès aux services de notre maison commune qu'est l'Ordre National des Médecins du Bénin (ONMB).
                                            Nous avons entrepris d'importantes actions pour numériser nos procédures, dans le but de simplifier et d'améliorer nos interactions avec vous.
                                            Désormais, vous pouvez accéder facilement à des informations essentielles, vous inscrire en ligne, télécharger des actes et autorisations, et même régler votre cotisation directement sur notre site ou vous renseigner sur le nombre d'années de cotisations dues.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <p class="">
                                            Ces changements reflètent notre engagement à rendre nos services plus accessibles et à soutenir nos membres avec des outils modernes et efficaces. Nous croyons fermement que cette transition numérique contribuera à renforcer la collaboration entre les professionnels de santé et à améliorer la qualité des soins offerts à notre population.
                                            Nous vous invitons à explorer notre site et à profiter largement des fonctionnalités qu'il propose. Ensemble, continuons à œuvrer pour l'excellence et l'innovation dans notre profession.
                                            Avec mes salutations distinguées,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-box-quote">
                            <img src="assets/img/icon/quote_2.svg" alt="Image">
                        </div>
                        <button data-slider-next="#testiSlide2" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- A propos --}}
    <div class="space" id="about-sec" style='background-image: url("assets/img/shape/pattern_shape_4.png"); background-repeat: no-repeat !important; background-position:right bottom !important;'>
        <div class="shape-mockup jump" data-bottom="10%" data-right="3%"><img src="assets/img/logo_onmb.png" alt="shape"></div>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-2 text-center text-xl-start">
                        <div class="title-area mb-32">
                            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">A propos de l'ONMB</span>
                            <h2 class="sec-title">Qui sommes nous ?</h2>
                            <p class="sec-text">
                                Institution de droit privé chargée d’une mission de service public, l’Ordre
                                assure la régulation déontologique de la profession médicale. Présent sur
                                tout le territoire l’Ordre agit au plus près des médecins dans leur exercice.
                                Il leur apporte un éclairage déontologique, des conseils juridiques, accompagne
                                leur installation, les guide dans leurs démarches administratives, les soutient
                                en cas de difficultés. L’Ordre veille également à préserver l’intérêt des patients
                                et la relation médecin-patient est au cœur de ses préoccupations. Il dispose à cet
                                égard d’instances disciplinaires.
                            </p>
                        </div>
                        <div class="mb-30 mt-n1">
                            <div class="checklist style2 list-two-column">
                                <ul>
                                    <li><i class="fas fa-heart-pulse"></i> Maintien des principes de moralité</li>
                                    <li><i class="fas fa-heart-pulse"></i> Gestion des conflits entre médecins</li>
                                    <li><i class="fas fa-heart-pulse"></i> Code de déontologie</li>
                                    <li><i class="fas fa-heart-pulse"></i> Le conseil national</li>
                                    <li><i class="fas fa-heart-pulse"></i> Devoirs professionnels</li>
                                    <li><i class="fas fa-heart-pulse"></i> Avis sur tout contrat notarié</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <a href="about.html" class="th-btn btn-p btn-shadow">Apprendre d'avantage</a>
                        </div>
                    </div>
                </div>

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


            </div>
        </div>
    </div>

    {{-- Slide --}}
    <section class="space" id="service-sec" data-bg-src="assets/img/bg/service_bg_3.jpg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <h2 class="sec-title text-center">A l'ordre</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="box-shape">
                                    <img src="assets/img/bg/service_grid_shape.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <p class="box-doctor">1</p>
                                    <h3 class="box-title"><a href="service-details.html">Code de déontologie</a></h3>
                                    <a href="service-details.html" class="th-btn btn-sm style2 btn-w">En savoir plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="box-shape">
                                    <img src="assets/img/bg/service_grid_shape.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <p class="box-doctor">2</p>
                                    <h3 class="box-title"><a href="service-details.html">Actes et autorisations</a></h3>
                                    <a href="service-details.html" class="th-btn btn-sm style2 btn-w">En savoir plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="box-shape">
                                    <img src="assets/img/bg/service_grid_shape.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <p class="box-doctor">3</p>
                                    <h3 class="box-title"><a href="service-details.html">Comment s'inscrire à l'ONMB</a></h3>
                                    <a href="service-details.html" class="th-btn btn-sm style2 btn-w">En savoir plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-grid">
                                <div class="box-shape">
                                    <img src="assets/img/bg/service_grid_shape.png" alt="image">
                                </div>
                                <div class="box-content">
                                    <p class="box-doctor">4</p>
                                    <h3 class="box-title"><a href="service-details.html">Payer ma cotisation</a></h3>
                                    <a href="service-details.html" class="th-btn btn-sm style2 btn-w">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#serviceSlider3" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#serviceSlider3" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    {{-- Cotisation --}}
    <section class="overflow-hidden cta-sec4" data-bg-src="assets/img/bg/cta_bg_4.jpg">
        <div class="container z-index-common">
            <div class="row align-items-end justify-content-center text-center text-xl-start">

                <div class="col-xl-5">
                    <div class="img-box2">
                        <img src="assets/img/onmb/nos_cotisations.png" alt="Cotisations">
                    </div>
                </div>

                <div class="col-xl-7 col-lg-9 space-extra">
                    <div class="title-area mb-32">
                        <h2 class="sec-title text-white">Nos cotisations</h2>
                        <p class="sec-text text-white">
                            Contribuez à notre développement en réglant vos cotisations aujourd'hui,
                            et ensemble, renforçons notre impact positif.
                        </p>
                    </div>
                    <div class="btn-group justify-content-center">
                        <a href="contact.html" class="th-btn btn-w">Payer ma cotisation</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- L'ONMB --}}
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="pe-xxl-5 mb-40 mb-xl-0">
                        <div class="title-area mb-32">
                            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">L'ONMB</span>
                        </div>
                        <div class="choose-feature-wrap">

                            <div class="choose-feature">
                                <div class="box-number">01</div>
                                <div class="media-body">
                                    <h3 class="box-title">Quelle est l'importance de l'autorisation d'exercice en clientèle privée (AECP) ?</h3>
                                    <p class="box-text">
                                        Il s'agit du document qui vous autorise à exercer dans un établissement
                                        sanitaire privé (cabinet médical ou clinique médicale, laboratoire
                                        d'analyses bio-médicales, centre d'imagerie, ...etc.). Le diplôme
                                        de docteur en médecine et l'inscription au tableau de l'ONMB ne
                                        suffisent donc pas pour exercer dans une structure privée.
                                    </p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-number">02</div>
                                <div class="media-body">
                                    <h3 class="box-title">Comment obtenir l'autorisation d'exercice en clientèle privée?</h3>
                                    <p class="box-text">
                                        Vous devez constituer un dossier de demande d'autorisation d'exercice en
                                        clientèle privée que vous déposerez au secrétariat de l'ONMB. Cette
                                        autorisation est délivrée par le Ministre de la Santé après étude de la
                                        conformité des pièces par le CNONMB.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="img-box3">
                        <img src="assets/img/onmb/apprendre_sur_lonmb.jpg" alt="Apprendre sur l'ONMB">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Statistiques et membres nationnaux --}}
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

    <section class="bg-top-center space-top" id="team-sec" data-bg-src="assets/img/bg/team_bg_1.jpg">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon"> Organisation </span>
                <h2 class="sec-title">
                    Découvrez l'hiérarchie première de l'ordre
                </h2>
            </div>
            <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/Pr-ONMB.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr Abou ADEGBINDIN</a></h3>
                            <span class="team-desig">Président</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/vp-ONMB.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr Josiane Houansou</a></h3>
                            <span class="team-desig">Vice-Président</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/SG-ONMB.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr Iguémal ADJAHOTO</a></h3>
                            <span class="team-desig">Secrétaire Général</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/TG-ONMB.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr Solange KANMADOZO</a></h3>
                            <span class="team-desig">Trésorière Générale</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Nos rencontres --}}
    <div class="overflow-hidden space">
        <div class="container">
            <div class="appointment-row">
                <div class="schedule-box">
                    <div class="shape"></div>
                    <h3 class="box-title">Nos séances clées dans une année</h3>
                    <p class="box-text">Pour chaque année des séances se tiennent au sein de l'ordre.</p>
                    <p class="box-timing">Tous les 1er Mercredi du mois <span>Réunion du bureau</span></p>
                    <p class="box-timing">Tous les 2ème Mercredi de tous les 2 Mois <span>Réunion du conseil </span></p>
                    <p class="box-timing">En Août <span> Assemblée départementale</span></p>
                    <p class="box-timing">En Septembre <span> Assemblée nationnale </span></p>
                </div>
                <div class="form-wrap">
                    <div class="img-box4">
                        <div class="img1">
                            <img src="assets/img/onmb/nos-seances-1.jpg" alt="Image">
                        </div>
                        <div class="img2">
                            <img src="assets/img/onmb/nos-seances-2.jpg" alt="Image">
                        </div>
                    </div>
                    <form action="mail.php" method="POST" class="appointment-form">
                        <h4 class="form-title">Nous contactez</h4>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="name">Votre nom</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group col-12">
                                <label for="name">Votre email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group col-12">
                                <label for="name">Votre sujet</label>
                                <input type="text" class="form-control" name="subject" id="date-pick">
                            </div>
                            <div class="form-group col-12">
                                <label for="name">Votre message</label>
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn btn-fw btn-p">Soumettre</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Dernières actualités --}}
    <section class="space" id="blog-sec" data-bg-src="assets/img/bg/blog_bg_1.jpg">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">Nos publications</span>
                        <h2 class="sec-title">Nos dernières nouvelles</h2>
                    </div>
                </div>
                <div class="col-lg-auto d-none d-lg-block">
                    <div class="sec-btn">
                        <a href="{{ route('publications.index' , $category->slug) }}" class="th-btn style4 btn-p">Voir tous</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">


                         @if ($articles->isNotEmpty())

                            @foreach ($articles as $article)

                                {{-- <div class="col-xl-6 col-md-6 th-blog"> --}}
                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="{{ $article->getFirstMediaUrl('Picture') ? $article->getFirstMediaUrl('Picture') : '../default/no_image.jpg' }}"
                                                        alt="{{ $article->title }}" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta has-bg">
                                                <a href="javascript:void(0);">
                                                    {{ $article->category->name }}
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <i class="fal fa-calendar"></i>{{ $article->created_at->diffForHumans() }}
                                                </a>
                                            </div>
                                            <h3 class="box-title">
                                                <a href="{{ route('publications.show', [$article->id , $article->slug]) }}">
                                                    {{ mb_strimwidth($article->title, 0, 75, "...") }}
                                                </a>
                                            </h3>
                                            <a href="{{ route('publications.show', [$article->id , $article->slug]) }}" class="th-btn btn-sm btn-s">
                                                Lire plus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}

                            @endforeach

                        @else
                                @if (isset($search))
                                    <p class="text-center">  Aucun article trouvé. </p>
                                @else
                                    <p class="text-center">  Aucun article disponible pour le moment. </p>
                                @endif

                        @endif

                        {{-- <p class="text-center"> Aucune publication pour le moment </p> --}}

                    </div>
                </div>
                <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    {{-- Avant footer --}}
    <section class="overflow-hidden space py-0" data-bg-src="assets/img/bg/faq_bg_2.jpg">
        <div class="testi-element-area">
            <div class="row flex-row-reverse">

                <div class="col-xl-5 mt-40 mt-xl-0" id="faq-img">
                    <div class="rounded-20">
                        <img src="assets/img/onmb/faq_1.png" alt="image" class="w-100">
                    </div>
                </div>

                <div class="col-xl-7 align-self-center" id="faq-quiz">
                    <div class="title-area text-center text-xl-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">FAQs</span>
                        <h2 class="sec-title text-white">Foire Aux Questions</h2>
                    </div>

                    <div class="accordion-1 accordion py-3" id="faqAccordion1">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    01. Est-ce l'ONMB qui délivre l'autorisation ?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion1">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Non c'est le Ministre de la Santé. L'ordre se charge de vérifier la conformité du
                                        dossier et de transmettre le dossier à la commission technique sise à la Direction
                                        Nationale de la Santé Publique (DNSP) au sein du ministère de la santé publique.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-2 accordion py-3" id="faqAccordion2">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                    02. Un médecin du public peut-il avoir une autorisation d'exercice en clientèle privée ?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Non. Tout médecin qui a un contrat avec un hôpital public et qui émarge au
                                        budget national (Agent Permanent de l'Etat, Agent Contractuel de l'Etat) ne
                                        peut exercer dans le secteur privé. Toutefois la loi N° 97-020 précitée dispose
                                        que: "Pour les fonctionnaires de l'Etat, tout exercice en clientèle privée est
                                        subordonné à une autorisation préalable du ministre de la santé, après avis du
                                        conseil de l'Ordre".
                                    </p>
                                    <p class="faq-text">
                                        Par exemple une dérogation a été accordée aux médecins anesthésistes-réanimateurs
                                        du secteur public pour qu'une autorisation d'exercice en clientèle privée leur soit
                                        délivrée.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-3 accordion py-3" id="faqAccordion3">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                    03. Au bout de quel délai, l'autorisation vous sera-t-elle accordée ?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion3">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Après avoir déposé votre dossier au secrétariat de l'ONMB, l'ordre des médecins
                                        a légalement 2 mois pour donner son avis et transmettre le dossier à la commission
                                        technique pour l'exercice en clientèle privée. En pratique, ce délai est largement
                                        inférieur à ces 2 mois.
                                    </p>
                                    <p class="faq-text">
                                        La commission technique a 4 mois (à partir de la réception) voire 6 mois
                                        (en cas de complément de dossiers à fournir) pour statuer sur la demande. En cas
                                        d'avis favorable, le Ministre de la Santé vous délivrera votre autorisation. Au total,
                                        vous devriez légalement attendre 4 à 8 mois au maximum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
