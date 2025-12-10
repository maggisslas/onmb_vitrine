<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="{{ route('publications.search') }}">
        <input type="text" name="search" value="{{ isset($search) ? $search : '' }}" placeholder="Que recherchez-vous ?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>

</div>

{{-- Mobile Menu --}}
<div class="th-menu-wrapper menu">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}">
                <img src="assets/img/logo_onmb_mobile.png" alt="ONMB">
            </a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                        Accueil
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#"
                        class="{{ request()->is('*ordre*') ? 'active' : '' }}" >
                        L'ONMB
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('ordre.presentation') }}" class="{{ Route::currentRouteName() == 'ordre.presentation' ? 'active' : '' }}">Présentation</a></li>
                        <li><a href="{{ route('ordre.fonctionnement') }}" class="{{ Route::currentRouteName() == 'ordre.fonctionnement' ? 'active' : '' }}">Fonctionnement</a></li>
                        <li><a href="{{ route('ordre.conseil_national') }}" class="{{ Route::currentRouteName() == 'ordre.conseil_national' ? 'active' : '' }}">Le conseil nationnal</a></li>
                        <li><a href="{{ route('ordre.conseil_departemental') }}" class="{{ Route::currentRouteName() == 'ordre.conseil_departemental' ? 'active' : '' }}">Le conseil départemental</a></li>
                        <li><a href="{{ route('ordre.code_deontologie') }}" class="{{ Route::currentRouteName() == 'ordre.code_deontologie' ? 'active' : '' }}">Le code de déontologie</a></li>
                        <li><a href="{{ route('ordre.actes_autorisations') }}" class="{{ Route::currentRouteName() == 'ordre.actes_autorisations' ? 'active' : '' }}">Actes & Autorisations</a></li>
                        <li><a href="{{ route('ordre.historique') }}" class="{{ Route::currentRouteName() == 'ordre.historique' ? 'active' : '' }}">Historique</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#"
                        class="{{ request()->is('*medecins*') ? 'active' : '' }}">Médécins</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('medecins.liste_medecins') }}" class="{{ Route::currentRouteName() == 'medecins.liste_medecins' && !request()->has('type') ? 'active' : '' }}">Tableau des médécins</a></li>
                        <li><a href="{{ route('medecins.liste_medecins' , ['type' => true]) }}" class="{{ Route::currentRouteName() == 'medecins.liste_medecins' && request()->get('type') === "1" ? 'active' : '' }}">Tableau des médécins</a></li>

                        <li><a href="{{ route('medecins.cotisation_ordinale') }}" class="{{ Route::currentRouteName() == 'medecins.cotisation_ordinale' ? 'active' : '' }}">Cotisation ordinale</a></li>
                        <li><a href="{{ route('medecins.offres_emploie') }}" class="{{ Route::currentRouteName() == 'medecins.offres_emploie' ? 'active' : '' }}">Offre d'emploi</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#" class="{{ request()->is('*publications*') ? 'active' : '' }}">Publication</a>
                    <ul class="sub-menu">

                        @foreach (\App\Models\Category::where('type' , 'blog')->get() as $category)
                            <li>
                                <a href="{{ route('publications.index' , $category->slug) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a>
                </li>

                <li>
                    <a href="https://monespace.ordremedecinsbenin.bj/" class='btn-mon-espace' target="_blank">Mon espace</a>
                </li>

            </ul>
        </div>
    </div>
</div>

{{-- Desktop Menu --}}
<header class="th-header header-layout1 header-layout5 menu">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img src="assets/img/logo_onmb.png" alt="ONMB">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-inline-block">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                                        Accueil
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#"
                                        class="{{ request()->is('*ordre*') ? 'active' : '' }}" >
                                        L'ONMB
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('ordre.presentation') }}" class="{{ Route::currentRouteName() == 'ordre.presentation' ? 'active' : '' }}">Présentation</a></li>
                                        <li><a href="{{ route('ordre.fonctionnement') }}" class="{{ Route::currentRouteName() == 'ordre.fonctionnement' ? 'active' : '' }}">Fonctionnement</a></li>
                                        <li><a href="{{ route('ordre.conseil_national') }}" class="{{ Route::currentRouteName() == 'ordre.conseil_national' ? 'active' : '' }}">Le conseil nationnal</a></li>
                                        <li><a href="{{ route('ordre.conseil_departemental') }}" class="{{ Route::currentRouteName() == 'ordre.conseil_departemental' ? 'active' : '' }}">Le conseil départemental</a></li>
                                        <li><a href="{{ route('ordre.code_deontologie') }}" class="{{ Route::currentRouteName() == 'ordre.code_deontologie' ? 'active' : '' }}">Le code de déontologie</a></li>
                                        <li><a href="{{ route('ordre.actes_autorisations') }}" class="{{ Route::currentRouteName() == 'ordre.actes_autorisations' ? 'active' : '' }}">Actes & Autorisations</a></li>
                                        <li><a href="{{ route('ordre.historique') }}" class="{{ Route::currentRouteName() == 'ordre.historique' ? 'active' : '' }}">Historique</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#"
                                        class="{{ request()->is('*medecins*') ? 'active' : '' }}">Médécins</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('medecins.liste_medecins') }}" class="{{ Route::currentRouteName() == 'medecins.liste_medecins' && (isset($type) && $type == '0') ? 'active' : '' }}">Tableau des médécins</a></li>
                                        <li><a href="{{ route('medecins.liste_medecins' , ['type' => true]) }}" class="{{ Route::currentRouteName() == 'medecins.liste_medecins' && (isset($type) && $type == '1') ? 'active' : '' }}">Tableau des médécins à jours</a></li>
                                        {{-- @dd(isset($type)) --}}
                                        <li><a href="{{ route('medecins.cotisation_ordinale') }}" class="{{ Route::currentRouteName() == 'medecins.cotisation_ordinale' ? 'active' : '' }}">Cotisation ordinale</a></li>
                                        <li><a href="{{ route('medecins.offres_emploie') }}" class="{{ Route::currentRouteName() == 'medecins.offres_emploie' ? 'active' : '' }}">Offre d'emploi</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" class="{{ request()->is('*publications*') ? 'active' : '' }}">Publication</a>
                                    <ul class="sub-menu">

                                        @foreach (\App\Models\Category::where('type' , 'blog')->get() as $category)
                                            <li>
                                                <a href="{{ route('publications.index' , $category->slug) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a>
                                </li>

                                <li>
                                    <a href="https://monespace.ordremedecinsbenin.bj/" class='btn-mon-espace' target="_blank">Mon espace</a>
                                </li>

                            </ul>
                        </nav>
                    </div>



                    <div class="col-auto">
                        <div class="header-button">
                            <button type="button" class="icon-btn searchBoxToggler d-none d-xl-inline-block"><i class="far fa-search"></i></button>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</header>
