<!-- Page Sidebar Start-->
<header class="main-nav">

    <div class="sidebar-user text-center">
        {{-- <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a> --}}
        <img class="img-90 rounded-circle" src="images/logo/logo_onmb.png" alt="ONMB">
        <div class="badge-bottom">
            <span class="badge badge-primary">
                {{ Auth::user()->role->label }}
            </span>
        </div>

        <h6 class="mt-3 f-14 f-w-600">
            {{ Auth::user()->firstname .' '. Auth::user()->lastname }}
            <a href="{{ route('admin.users.edit' , Auth::id()) }}"
                style="font-size: 20px;"
                class="ps-2"
                title="Modifier votre profil">
                <i class="fa fa-edit"></i>
            </a>
        </h6>

            <ul>
                <li>
                    <span class="counter">
                        {{ \App\Models\Article::count() }}
                    </span>
                    <p>Articles</p>
                </li>
                {{-- <li>
                    <span class="counter">
                        {{ \App\Models\Immobilier::count() }}
                    </span>
                    <p>Biens</p>
                </li>
                <li>
                    <span class="counter">
                        {{ \App\Models\Temoignage::count() }}
                    </span>
                    <p> Témoignages </p>
                </li> --}}
            </ul>

    </div>

    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end">
                            <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6> Menu </h6>
                        </div>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav"
                            href="{{ route('admin.dashboard') }}">
                            <i data-feather="grid"></i>
                            <span>Tableau de bord</span>
                        </a>
                    </li>

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Accueil</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li>
                                <a href="{{ route('admin.customer.page.get.list.accordeon' , ['type' => 'faq']) }}">
                                    FAQ
                                </a>
                            </li>
                        </ul>
                    </li> --}}

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="file"></i>
                            <span>Actes & Autorisations</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li>
                                <a href="{{ route('admin.categories.index' , ['page' => 'actes_autorisation']) }}">
                                    Catégories
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.actes.index') }}">
                                    Actes
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="speaker"></i>
                            <span>Betos Laverie</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li>
                                <a href="{{ route('admin.customer.page.discover.service' , ['type' => 'laverie']) }}">
                                    Personnalisation de la page
                                </a>
                            </li>
                        </ul>
                    </li> --}}

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="truck"></i>
                            <span>Betos Express</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li>
                                <a href="{{ route('admin.customer.page.discover.service' , ['type' => 'express']) }}">
                                    Personnalisation de la page
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.customer.page.discover.service' , ['type' => 'express-rapide']) }}">
                                    Personnalisation de la page Express rapide
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.customer.page.get.express.tarifs' , ['type' => 1]) }}">
                                    Personnalisation des tarifs express
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.customer.page.get.express.tarifs' , ['type' => 2]) }}">
                                    Personnalisation des tarifs express déménagement
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.customer.page.get.list.accordeon' , ['type' => 'domaines express']) }}">
                                    Domaines d'interventions
                                </a>
                            </li>

                        </ul>
                    </li> --}}

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="tag"></i>
                            <span>Betos Clean</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li>
                                <a href="{{ route('admin.customer.page.discover.service' , ['type' => 'clean']) }}">
                                    Personnalisation de la page
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.customer.page.get.list.accordeon' , ['type' => 'domaines clean']) }}">
                                    Domaines d'interventions
                                </a>
                            </li>

                        </ul>
                    </li> --}}

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="list"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li>
                                <a href="{{ route('admin.categories.index' , ['page' => 'blog']) }}">
                                    Catégories
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.articles.index') }}">
                                    Articles
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{ route('admin.temoignages.index') }}">
                            <i data-feather="user-plus"></i>
                            <span>Témoignages</span>
                        </a>
                    </li> --}}

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{ route('admin.temoignages.index') }}">
                            <i data-feather="bell"></i>
                            <span>Newsletter</span>
                        </a>
                    </li> --}}

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{ route('admin.users.index') }}">
                            <i data-feather="users"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>



                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>

</header>
<!-- Page Sidebar Ends-->
