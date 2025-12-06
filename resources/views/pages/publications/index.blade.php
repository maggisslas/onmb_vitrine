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

        <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">


                    <div class="row">

                        @if ($articles->isNotEmpty())

                            @foreach ($articles as $article)

                                <div class="col-xl-6 col-md-6 th-blog">
                                    <div class="blog-box">
                                        <div class="blog-img">
                                            <img src="{{ $article->getFirstMediaUrl('Picture') ? $article->getFirstMediaUrl('Picture') : '../default/no_image.jpg' }}"
                                                        alt="{{ $article->title }}" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta has-bg">
                                                <a href="blog.html">
                                                    {{ $article->category->name }}
                                                </a>
                                                <a href="blog.html">
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

                            @endforeach

                        @else
                            <p class="text-center">
                                Aucun article disponible pour le moment.
                            </p>
                        @endif

                    </div>


                    <div class="th-pagination text-center">
                        <ul>
                            {{ $articles->links() }}
                            {{-- <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            <form class="search-form">
                                <input type="text" placeholder="Faites une recherche">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li >
                                        <a href="blog.html">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Publications récentes</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">How Business Is Taking Over & What to Do About It</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar"></i>21 Jun, 2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
