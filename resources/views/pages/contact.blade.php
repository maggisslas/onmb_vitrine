@php
    $title_page = 'Contactez-nous'
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





    {{-- Liste des mails --}}
    <div class="space">
        <div class="container">
            <div class="row gy-4">

                <div class="col-12">
                    <div class="contact-feature">
                        <div class="media-body">
                            <h3 class="box-title">Adresses des conseillers nationaux</h3>
                            <strong>Président : </strong><a href="mailto:adegbindinabou@ordremedecinsbenin.bj">adegbindinabou@ordremedecinsbenin.bj</a>
                            <strong>Vice-Président : </strong><a href="mailto:houansoujosiane@ordremedecinsbenin.bj">houansoujosiane@ordremedecinsbenin.bj</a>
                            <strong>Secrétaire : </strong><a href="mailto:iguemal@ordremedecinsbenin.bj">iguemal@ordremedecinsbenin.bj</a>
                            <strong>Trésorier : </strong><a href="mailto:kanmadozosolange@ordremedecinsbenin.bj">kanmadozosolange@ordremedecinsbenin.bj</a>
                            <strong>Membre : </strong><a href="mailto:kikimigan@ordremedecinsbenin.bj">kikimigan@ordremedecinsbenin.bj</a>
                            <strong>Membre : </strong><a href="mailto:dagbozounkouboris@ordremedecinsbenin.bj">dagbozounkouboris@ordremedecinsbenin.bj</a>
                            <strong>Membre : </strong><a href="mailto:attinsounonangelo@ordremedecinsbenin.bj">attinsounonangelo@ordremedecinsbenin.bj</a>
                            <strong>Membre : </strong><a href="mailto:lafiakamel@ordremedecinsbenin.bj">lafiakamel@ordremedecinsbenin.bj</a>
                            <strong>Membre : </strong><a href="mailto:tchalexis@ordremedecinsbenin.bj">tchalexis@ordremedecinsbenin.bj</a>
                            <strong>Membre : </strong><a href="mailto:angeloattinsounon@ordremedecinsbenin.bj">angeloattinsounon@ordremedecinsbenin.bj</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="contact-feature">
                        <div class="media-body">
                            <h3 class="box-title">Mails Départementaux</h3>
                            <strong>Alibori : </strong><a href="mailto:cdalibori@ordremedecinsbenin.bj">cdalibori@ordremedecinsbenin.bj</a>
                            <strong>Atacora : </strong><a href="mailto:cdatacora@ordremedecinsbenin.bj">cdatacora@ordremedecinsbenin.bj</a>
                            <strong>Atlantique : </strong><a href="mailto:cdatlantique@ordremedecinsbenin.bj">cdatlantique@ordremedecinsbenin.bj</a>
                            <strong>Borgou : </strong><a href="mailto:cdborgou@ordremedecinsbenin.bj">cdborgou@ordremedecinsbenin.bj</a>
                            <strong>Colline : </strong><a href="mailto:cdcolline@ordremedecinsbenin.bj">cdcolline@ordremedecinsbenin.bj</a>
                            <strong>Couffo : </strong><a href="mailto:cdcouffou@ordremedecinsbenin.bj">cdcouffou@ordremedecinsbenin.bj</a>
                            <strong>Donga : </strong><a href="mailto:cddonga@ordremedecinsbenin.bj">cddonga@ordremedecinsbenin.bj</a>
                            <strong>Littoral : </strong><a href="mailto:cdlittoral@ordremedecinsbenin.bj">cdlittoral@ordremedecinsbenin.bj</a>
                            <strong>Mono : </strong><a href="mailto:cdmono@ordremedecinsbenin.bj">cdmono@ordremedecinsbenin.bj</a>
                            <strong>Ouémé : </strong><a href="mailto:cdoueme@ordremedecinsbenin.bj">cdoueme@ordremedecinsbenin.bj</a>
                            <strong>Plateau : </strong><a href="mailto:cdplateau@ordremedecinsbenin.bj">cdplateau@ordremedecinsbenin.bj</a>
                            <strong>Zou : </strong><a href="mailto:cdzou@ordremedecinsbenin.bj">cdzou@ordremedecinsbenin.bj</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    {{-- Formulaire --}}
    {{-- <div class="space-bottom">
        <div class="container">
            <form action="mail.php" method="POST" class="contact-form ajax-contact" data-bg-src="assets/img/bg/contact_form_bg.png">
                <div class="input-wrap">
                    <h2 class="sec-title">Get In Touch!</h2>
                    <div class="row">
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-12">
                            <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group col-12">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled selected hidden>Select Subject</option>
                                <option value="Make Appointment">Make Appointment</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Medicine Help">Medicine Help</option>
                                <option value="Consultation">Consultation</option>
                            </select>
                            <i class="fal fa-chevron-down"></i>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Type Appointment Note..."></textarea>
                            <i class="fal fa-pencil"></i>
                        </div>
                        <div class="form-btn col-12">
                            <button class="th-btn btn-fw">BOOK AN APPOINTMENT</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </div>

            </form>
        </div>
    </div> --}}

    <div class="space-to background-image" style="background-image: url(&quot;assets/img/bg/pattern_bg_5.jg&quot;);">
        <div class="container">

            @if(session('error_contact'))
                <div class="alert alert-danger">
                    {{ session('error_contact') }}
                </div>
            @endif

            @if(session('success_contact'))
                <div class="alert alert-success">
                    {{ session('success_contact') }}
                </div>
            @endif

            <div class="row">

                <div class="col-xl-5">
                    <div class="contact-img1">
                        <img src="assets/img/onmb/localisation.jpeg" alt="image">
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="pe-xxl-4">
                        <form action="{{ route('contact.send') }}" method="POST" class="faq-form2">
                            @csrf
                            <h4 class="box-title text-center">Formulaire de contact</h4>
                            <div class="row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre mail">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
                                    <i class="fal fa-link"></i>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
                                    <i class="fal fa-edit"></i>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn btn-fw btn-p">SOUMETTRE</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Maps --}}
    <div class="">
        <div style="margin-bottom: -7px !important;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.6472005143242!2d2.448721310375587!3d6.371057145630186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023557895d766cd%3A0x4bbfec9d04f68b55!2sOrdre%20National%20des%20M%C3%A9decins%20du%20B%C3%A9nin!5e0!3m2!1sfr!2sbj!4v1763901557431!5m2!1sfr!2sbj"
                            width="600"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

@endsection
