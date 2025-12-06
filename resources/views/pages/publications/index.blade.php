@php
    $title_page = $category->name ?? 'Recherche : '.$search;
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

                            @endforeach

                        @else
                                @if (isset($search))
                                    <p class="text-center">  Aucun article trouvé. </p>
                                @else
                                    <p class="text-center">  Aucun article disponible pour le moment. </p>
                                @endif

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
                            <form class="search-form" action="{{ route('publications.search') }}">
                                <input type="text" name="search" value="{{ isset($search) ? $search : '' }}" placeholder="Recherche..." required>
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                @foreach ($categories as $currentCategory)
                                    <li>
                                        <a href="{{ route('publications.index' ,$currentCategory->slug ) }}"
                                            class=" {{ isset($currentCategory) && isset($category) && $category->id ==  $currentCategory->id ? 'bg-secondary' : '' }}">
                                            {{ $currentCategory->name }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Publications récentes</h3>
                            @if ($recent_articles->isEmpty())
                                <p>Aucune publication récente disponible.</p>
                            @else
                                @foreach ($recent_articles as $article)
                                    <div class="recent-post-wrap">
                                        <div class="recent-post">
                                            <div class="media-img">
                                                <a href="{{ route('publications.show' , [$article->id , $article->slug]) }}">
                                                    <img src="{{ $article->getFirstMediaUrl('Picture') ? $article->getFirstMediaUrl('Picture') : '../default/no_image.jpg' }}" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="post-title">
                                                    <a class="text-inherit" href="{{ route('publications.show' , [$article->id , $article->slug]) }}">{{ $article->title }}</a>
                                                </h4>
                                                <div class="recent-post-meta">
                                                    <a href="blog.html"><i class="fal fa-calendar"></i>{{ $article->created_at->diffForHumans() }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
