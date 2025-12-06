@php
    $title_page = $article->title
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
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ $article->getFirstMediaUrl('Picture') ? $article->getFirstMediaUrl('Picture') : '../default/no_image.jpg' }}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                {{-- <a class="author" href="blog.html"><i class="fal fa-user"></i>By Mediax</a> --}}
                                <a href="blog.html"><i class="fal fa-calendar"></i>{{ $article->created_at->diffForHumans() }}</a>
                                <a href="{{ route('publications.index' , $article->category->slug) }}">{{ $article->category->name }}</a>
                            </div>
                            <h2 class="blog-title">
                                {{ $article->title }}
                            </h2>
                            <p>
                                {!! $article->post !!}
                            </p>

                            @if ($article->getMedia('PictureSup')->count() > 0)
                                <h3 class="h5 mt-1">
                                    Images supplémentaires
                                </h3>
                                <div class="row pt-2 mt-5">

                                        @foreach ($article->getMedia('PictureSup') as $media)
                                            <div class="col-md-6 mb-4">
                                                <img class="w-100 rounded-20" src="{{ $media->getUrl() }}" alt="Blog Image">
                                            </div>
                                        @endforeach

                                </div>
                            @endif

                        </div>
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
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('publications.index' , $article->category->slug) }}"  class=" {{ $category->id ==  $article->category->id ? 'bg-secondary' : '' }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="widget">
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
