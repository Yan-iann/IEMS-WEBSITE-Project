@extends('layouts.IEMS_Layout')
@section('content')
    <div class="custom-hero text-wrap subheader blog-post" style=" background-color: rgb(242, 242, 242)">
        <div class="container "style="padding-top: 30px">
            <div class="row justify-content-center">

                <div class="col-12">
                    <h3 style="color:#252525">Announcement</h3>
                </div>

                {{-- Announcement Headers --}}
                <div class="col-12">
                    <h1 class="hero-heading text-wrap">Title</h1> <!-- Title -->
                    <p class="lead text-black">
                        By Joefrey Mahusay
                        <!-- Author -->
                        <span class="mx-3">&bullet;</span>
                        on Jun 13, 2021
                    </p> <!-- Date Published -->

                    <img src="{{ URL::asset('img/Home_Banner.png') }}" alt="featured image"
                        style="height:300px; object-fit:cover; margin-bottom: 40px">

                </div>
            </div>
        </div>
    </div>


    {{-- Announcement Content --}}
    <section class="mbr-section article" style="background-color: rgb(242, 242, 242)">
        <div class="container article" style="padding-bottom:0">
            <div class="row justify-content-center align-items-stretch">


                <article class="col-lg-8 order-lg-2 px-lg-5">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.</p>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    <h3>Even the all-powerful...</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                        life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
                        far World of Grammar.</p>

                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                        Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                        put her initial into the belt and made herself on the way.</p>

                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                        her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                        Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

                    <h3>On her way she met a copy</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p>And if she hasn’t been rewritten, then they are still using her.
                        On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would
                        have been rewritten a thousand times and everything that was left from its origin would be the word
                        "and" and the Little Blind Text should turn around and return to its own, safe country. </p>

                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy
                        Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where
                        they abused her for their.</p>

                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.A
                        small river named Duden flows by their place and supplies it with the necessary regelialia.And if
                        she hasn’t been rewritten, then they are still using her.</p>



                    <div class="pt-5 categories_tags ">

                        <p>Tags:
                            {{-- For loop paras tags here --}}
                            <span class="lead" style="color: #1DA2D8">html, </span>
                        </p>

                        {{-- Related Values --}}
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Other Posts</h2>
                            <div class="row d-flex justify-content-evenly ">
                            {{-- For Loop Other Posts up to 2 or 3--}}
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <a href="#"><h5 class="post-title">Front becomes an official Instagram</h5></a> <!-- Related Post Title -->
                                </div>
                            </div>
                        </section>
                    </div>



                </article>

                <div class="col-md-12 col-lg-1 order-lg-1">
                    <div class="share sticky-top">
                        <h3>Share</h3>
                        <ul class="list-unstyled share-article">
                            <li><a href="#"><i class='bx bxl-facebook-circle' style="font-size: 40px; "></i></a></li>
                            <li><a href="#"><i class='bx bxl-instagram' style="font-size: 40px; "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endsection
