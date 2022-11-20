@extends('layouts.IEMS_Layout')
@section('content')
    <div data-scroll-section class="custom-hero text-wrap subheader blog-post" style=" background-color: rgb(242, 242, 242)">
        <div class="container "style="padding-top: 30px">
            <div class="row justify-content-center">

                <div class="col-12">
                    <h3 style="color:#252525">Announcement</h3>
                </div>

                {{-- Announcement Headers --}}
                <div class="col-12">
                    <h1 class="hero-heading text-wrap">{{ $announcement->anno_title }}</h1> <!-- Title -->
                    <p class="lead text-black">
                        By {{ $announcement->anno_author }}
                        <!-- Author -->
                        <span class="mx-3">&bullet;</span>
                        on {{ $announcement->anno_date }}
                    </p> <!-- Date Published -->

                    <img src="{{ asset($announcement->anno_pic) }}" alt="featured image"
                        style="height:300px; object-fit:cover; margin-bottom: 40px">

                </div>
            </div>
        </div>
    </div>


    {{-- Announcement Content --}}
    <section data-scroll-section class="mbr-section article" style="background-color: rgb(242, 242, 242)">
        <div class="container article" style="padding-bottom:0">
            <div class="row justify-content-center align-items-stretch">


                <article class="col-lg-8 order-lg-2 px-lg-5">
                    <p>{{ $announcement->anno_content }}</p>



                    <div class="pt-5 categories_tags ">

                        <p>Tags:
                            {{-- For loop paras tags here --}}
                            <span class="lead" style="color: #1DA2D8">html, </span>
                        </p>

                        {{-- Related Values --}}
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Other Posts</h2>
                            <div class="row d-flex justify-content-evenly ">
                                {{-- For Loop Other Posts up to 2 or 3 --}}
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <a href="#">
                                        <h5 class="post-title">Front becomes an official Instagram</h5>
                                    </a> <!-- Related Post Title -->
                                </div>
                            </div>
                        </section>
                    </div>



                </article>

                <div class="col-md-12 col-lg-1 order-lg-1">
                    <div class="share sticky-top">
                        <h3>Visit Us</h3>
                        <ul class="list-unstyled share-article">
                            <li><a href="https://www.facebook.com/iemsSTEWaRDS/"><i class='bx bxl-facebook-circle'
                                        style="font-size: 40px; "></i></a></li>
                            <li><a href="https://www.instagram.com/silliman_u/?hl=en"><i class='bx bxl-instagram'
                                        style="font-size: 40px; "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
