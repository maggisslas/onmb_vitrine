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

                        @for ($i = 0; $i < 2 ; $i++)
                                            
                            <div class="col-xl-6 col-md-6 th-blog">
                                <div class="blog-box">
                                    <div class="blog-img">
                                        <img src="assets/img/blog/blog_2_5.jpg" alt="blog image">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                            <a href="blog.html"><i class="fal fa-calendar"></i>15 March, 2024</a>
                                        </div>
                                        <h3 class="box-title"><a href="blog-details.html">Exploring Trends in Medical Cosmetic Procedures</a></h3>
                                        <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>

                        @endfor

                    </div>


                    <div class="th-pagination text-center">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
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
                                <li>
                                    <a href="blog.html">Cardiology</a>
                                </li>
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
