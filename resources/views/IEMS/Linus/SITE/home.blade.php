@extends('layouts.IEMS_Layout')

@section('content')
    {{-- Hero Section --}}

    <div data-scroll-section class="home-banner w-100 vh-100 d-flex justify-content-center align-items-center"
        style="background-image: url('img/Home_Banner.png'); background-size:cover;
        background-repeat: no-repeat; background-blend-mode: multiply; background-position: center">
        <div class="content text-center ">

            <h1 class="display-3 text-white text-wrap lh-1 fst-italic" style="font-family: 'Playfair Display', serif" data-scroll
                data-scroll-speed="-1.5" data-scroll-direction="horizontal">
                the institute   of</h1>

            <h1 class="display-3 text-white text-wrap lh-1 fst-italic" style="font-family: 'Playfair Display', serif" data-scroll
            data-scroll-speed="1.5" data-scroll-direction="horizontal">

            <span class="text-decoration-underline" style="font-family: 'Playfair Display', serif">environmental</span>
            and
        </h1>

            <h1 class="display-3 text-white text-wrap lh-1 fst-italic" style="font-family: 'Playfair Display', serif" data-scroll
                data-scroll-speed="-1.5" data-scroll-direction="horizontal">

                <span class="text-decoration-underline" style="font-family: 'Playfair Display', serif">marine</span>
                <span class="fst-italic " style="font-family: 'Playfair Display', serif">sciences</span>
            </h1>



            <h2 class="lead text-white fst-italic mt-4">“Excellentiam, Scientia, et Mares”</h2>
        </div>

    </div>




    <section data-scroll-section class="mbr-section article"
        style="background-color: #1da2d8; padding-top: 120px; padding-bottom:120px; object-fit:cover ">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 text-center mb-5 ">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        WHAT YOU CAN FIND HERE
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: white">
                        What We Offer
                    </h1>
                </div>

                <div class="col-md-12 col-lg-4 mb-5 mt-5 order-lg-2">
                    <div class="image-stack">
                        <div class="image-stack__item image-stack__item--bottom" data-scroll data-scroll-speed="0.5">
                            <img src="{{ URL::asset('img/Home_Info1.jpg') }}" alt="Fish">
                        </div>

                        <div class="image-stack__item image-stack__item--top" data-scroll data-scroll-speed="2.5">
                            <img src="{{ URL::asset('img/Home_Info2.jpg') }}" alt="Divers">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4 order-lg-3 text-md-left text-leftorder-lg-3 word-wrap"
                    style="margin-top: 50px; padding-left:50px;padding-right: 50px" data-scroll data-scroll-speed="0.4">
                    <p class="lead mb-5 fw-bold" style="color: white">Pioneering research in community-based
                        biodiversity conservation,
                        coastal research management, and marine protected areas.
                    </p>

                    <p class="lead">Silliman University Marine Laboratory (SUML) was established as a research facility of
                        the University
                        in 1974, with materials recycled from a torn Science Building in the main campus. Facilities
                        have improved considerably since then, from a one-building unit to four buildings. Today it
                        boasts of a two-storey facility constructed with support from the United States Agency for
                        International Development under its Coastal Resource Management program.
                    </p>
                </div>


                <div class="col-12 col-md-12 col-xl-4 order-lg-1 d-none d-lg-block" style="margin-top: 300px">
                    <div class="row d-flex justify-content-center align-items-end">
                        <div class="col-12 m-15" style="padding-bottom: 50px" data-aos="fade-up" data-aos-delay="0">
                            <div class="text text-center" style="padding-left: 40px;padding-right:40px">
                                <div class="row justify-content-center">
                                    <h4 class="col-12 subheader fst-italic fw-light" style="color: white">High-End
                                        <br>Facilities
                                    </h4>
                                    <p class=" col-9 lead text-break justify-content-between" style="word-wrap: break-word">
                                        boasts multiple ammenities that allow students to venture
                                        and explore for their research</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 m-15" style="padding-bottom: 50px; transform:translateX(10%)" data-aos="fade-up"
                            data-aos-delay="0">
                            <div class="text text-center" style="padding-left: 40px;padding-right:40px">
                                <div class="row justify-content-center">
                                    <h4 class="col-12 subheader fst-italic fw-light" style="color: white">Learning <br>
                                        Resources</h4>
                                    <p class=" col-9 lead text-break" style="word-wrap: break-word">A library of wildlife
                                        research collected and compiled over the
                                        course of more than 30 years</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 m-15" style="padding-bottom: 50px; transform:translateX(20%)" data-aos="fade-up"
                            data-aos-delay="0">
                            <div class="text text-center" style="padding-left: 40px;padding-right:40px">
                                <div class="row justify-content-center">
                                    <h4 class="col-12 subheader fst-italic fw-light" style="color: white">World-Class <br>
                                        Education</h4>
                                    <p class=" col-9 lead text-break" style="word-wrap: break-word">Top of line resources
                                        for learning to culture and grow the
                                        capabilites of students and researchers</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>



                <div class="col-12 col-md-12 col-xl-4  d-sm-block d-md-block d-lg-none" style="margin-top: 60px">
                    <div class="row d-flex justify-content-center align-items-end">
                        <div class="col-12 m-15" style="padding-bottom: 50px" data-aos="fade-up" data-aos-delay="0">
                            <div class="text text-center" style="padding-left: 40px;padding-right:40px">
                                <div class="row justify-content-center">
                                    <h4 class="col-12 subheader fst-italic fw-light" style="color: white">High-End
                                        <br>Facilities
                                    </h4>
                                    <p class=" col-9 lead text-break" style="word-wrap: break-word">boasts multiple
                                        ammenities that allow students to venture
                                        and explore for their research</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 m-15" style="padding-bottom: 50px" data-aos="fade-up" data-aos-delay="0">
                            <div class="text text-center" style="padding-left: 40px;padding-right:40px">
                                <div class="row justify-content-center">
                                    <h4 class="col-12 subheader fst-italic fw-light" style="color: white">Learning <br>
                                        Resources</h4>
                                    <p class=" col-9 lead text-break" style="word-wrap: break-word">A library of wildlife
                                        research collected and compiled over the
                                        course of more than 30 years</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 m-15" style="padding-bottom: 50px" data-aos="fade-up" data-aos-delay="0">
                            <div class="text text-center" style="padding-left: 40px;padding-right:40px">
                                <div class="row justify-content-center">
                                    <h4 class="col-12 subheader fst-italic fw-light" style="color: white">World-Class <br>
                                        Education</h4>
                                    <p class=" col-9 lead text-break" style="word-wrap: break-word">Top of the line
                                        resources
                                        for learning to culture and grow the
                                        capabilites of students and researchers</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>





    {{-- Announcement Section --}}


    <section data-scroll-section class="mbr-section article"
        style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">
        <div class="container-fluid g-10">
            <div class="row d-flex justify-content-center align-items-center text-align-left g-10">
                <div class="item col-lg-4 m-20 text-md-center text-lg-center text-sm-center lh-1"
                    style="padding-bottom: 50px">
                    <p class="lead m-0 fw-bold" style="padding-bottom: 20px">Announcements</p>
                    <h1 class="display-2 subheader fst-italic lh-1"
                        style="color:#1da2d8; font-family: 'Playfair Display', serif; padding-bottom: 20px">See What's
                        Happening</h1>
                    <p class="lead">Check out the different events thats is going around the college today </p>
                </div>
                <br>

                <div class="col-12 col-md-6 col-lg-6">

                    <div class="wrapper">
                        @foreach ($announcement as $item)
                            {{-- Insert For Loop Here (start with last to first) --}}

                            <div class="item col-md-1 col-lg-1 order-lg-2 my-10 m-0">

                                <div class="card bg-dark text-white  align-text-bottom"
                                    style="width:36rem; height: 90vh; object-fit:cover;cursor:default">

                                    <img src="{{ asset($item->anno_pic) }}" class="card-img-top"
                                        style="width:36rem; height: 90vh; object-fit:cover" alt="Announcement">
                                    {{-- Photo --}}

                                    <div class="card-img-overlay d-flex flex-column justify-content-end">

                                        <h3 class="card-text fst-italic">{{ $item->anno_date }}</h3>

                                        <h2 class="display-3 card-title" style=" font-family: 'Playfair Display', serif;">
                                            {{ $item->anno_title }}
                                        </h2>

                                        <p class="lead card-text"> {{ $item->anno_author }}</p> {{-- Author et.al --}}

                                        <div class="col-12">
                                            <p style="color: transparent"> Filler Text </p>
                                        </div>

                                        <p><a class="btn btn-lg btn-light"
                                                href="{{ route('accessAnnouncementDisplay', $item->anno_ID) }}">Read
                                                Announcement</a>
                                        </p> {{-- Display Announcement Page --}}
                                    </div>
                                </div>

                            </div>
                            {{-- end Announcement Card Loop --}}
                        @endforeach
                        {{-- View Announcements Card --}}
                        <div class="item col-md-1 col-lg-1 order-lg-2 my-10 m-0">
                            <div class="card align-text-bottom border-dark"
                                style="background:#e5e5e5; width:36rem; height: 90vh; object-fit:cover;cursor:default">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h2 class="display-3 card-title" style=" font-family: 'Playfair Display', serif;">Keep
                                        looking?</h5>
                                        <p class="lead card-text">Do you want to see more? Click on the button below to
                                            view all announcements by the college</p>
                                        <div class="col-12">
                                            <p style="color: transparent"> Filler Text </p>
                                        </div>
                                        <p><a class="btn btn-lg btn-dark"
                                                href="/announcement">View All
                                                Announcements</a>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div> {{-- end wrapper --}}
                </div> {{-- end div col group}}

            </div> {{-- end row --}}
            </div> {{-- end container --}}
    </section>






    {{-- Carousel Section --}}
    <section data-scroll-section class="mbr-section article" style="background-color: rgb(242, 242, 242);">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            {{-- Indicators --}}
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>

            {{-- Carousel-Inner Container --}}
            <div class="carousel-inner">

                {{-- Carousel Item 1 --}}
                <div class="carousel-item  active "
                    style="background-image: linear-gradient(0deg, #00000022,  #00000058),url('img/Carousel_IEMS.jpg');
                    background-size:cover;background-repeat: no-repeat; background-blend-mode: multiply; background-position:right 50% bottom 50%;">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="subheader  text-white fst-italic fw-light">The College</h1>
                            <p>History, Vision, & Mission</p>
                            <p><a class="btn btn-lg btn-light" href="/college">Learn more</a></p>
                        </div>
                    </div>
                </div>

                {{-- Carousel Item 2 --}}
                <div class="carousel-item"
                    style="background-image: linear-gradient(0deg, #00000022,  #00000022),url('img/Carousel_Facilities.jpg'); background-size:cover;background-repeat: no-repeat; background-blend-mode: multiply;">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="subheader  text-white fst-italic fw-light">Facilities</h1>
                            <p>Activities to culture education and experiments</p>
                            <p><a class="btn btn-lg btn-light" href="/facilities">Learn more</a></p>
                        </div>
                    </div>
                </div>

                {{-- Carousel Item 3 --}}
                <div class="carousel-item"
                    style="background-image: linear-gradient(0deg, #00000034,  #00000034),url('img/Carousel_Faculty.jpg'); background-size:cover;background-repeat: no-repeat; background-blend-mode: multiply; background-position:center; ">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="subheader  text-white fst-italic fw-light">Faculty and Staff</h1>
                            <p>The educators and facilitators of the Institution</p>
                            <p><a class="btn btn-lg btn-light" href="/facultystaff">Learn more</a></p>
                        </div>
                    </div>
                </div>

                {{-- Carousel Item 4 --}}
                <div class="carousel-item"
                    style="background-image: url('img/Carousel_Linus.jpg'); background-size:cover;background-repeat: no-repeat; background-blend-mode: multiply; background-position:center; ">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="subheader  text-white fst-italic fw-light">Exhibit</h1>
                            <p>An information library of critters and museum exhibits</p>
                            <p><a class="btn btn-lg btn-light" href="/exhibit">Learn more</a></p>
                        </div>
                    </div>
                </div>

                {{-- Carousel Item 5 --}}
                <div class="carousel-item"
                    style="background-image: linear-gradient(0deg, #00000034,  #00000034),url('img/Carousel_Rates.jpg'); background-size:cover;background-repeat: no-repeat; background-blend-mode: multiply; background-position:center;">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="subheader  text-white fst-italic fw-light">Rates</h1>
                            <p>Collaboration and Bench Fees</p>
                            <p><a class="btn btn-lg btn-light" href="/rates">Learn more</a></p>
                        </div>
                    </div>
                </div>

                {{-- Carousel Item 6 --}}
                <div class="carousel-item"
                    style="background-image: linear-gradient(0deg, #00000034,  #00000034),url('img/Carousel_Enrollment.jpg'); background-size:cover;background-repeat: no-repeat; background-blend-mode: multiply; background-position:center; ">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="subheader  text-white fst-italic fw-light">Courses and Enrollment</h1>
                            <p>Process in enrolling at IEMS</p>
                            <p><a class="btn btn-lg btn-light" href="/enrollment">Learn more</a></p>
                        </div>
                    </div>
                </div>

            </div> {{-- End Carousel-Inner Container --}}

            {{-- Slider Buttons --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> {{-- end carousel slide --}}

    </section>
    {{-- End of Carousel Section --}}




    {{-- FAQ Section --}}
    <section data-scroll-section class="mbr-section article"
        style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">

        <div class="container ">
            <div class="row justify-content-around">
                <div class="col-lg-4 mb-lg-0">

                    <h1 class="mb-4 subheader " data-scroll data-scroll-speed="1.5">Frequently Asked Questions</h1>
                    <div class="line my-3"></div>
                    <p data-scroll data-scroll-speed="1.9">
                        Here are some common queries that are usually asked by everyone.
                    </p>



                </div>

                {{-- Accordion Items --}}
                <div class="col-lg-7" data-scroll data-scroll-speed="1">
                    <div class="custom-accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <p id="panelsStayOpen-headingOne">
                                <button class="btn-link" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Accordion Item #1
                                </button>
                            </p>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    Answers to accordion heading 1
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p id="panelsStayOpen-headingTwo">
                                <button class="btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </p>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    Answers to accordion heading 1
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p id="panelsStayOpen-headingThree">
                                <button class="btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                </button>
                            </p>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    Answers to accordion heading 1
                                </div>
                            </div>
                        </div>
                    </div>

    </section>
    {{-- end of FAQ section --}}




    {{-- Call to Action Section --}}
    <section data-scroll-section class="mbr-section article  justify-content-center align-items-center text-center"
        style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px; min-height:80vh">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 d-none d-lg-block">
                    <div class="image-stack">
                        <div class="image-stack__item image-stack__item--bottom" data-scroll data-scroll-speed="0.9">
                            <img src="{{ URL::asset('img/CTA_upperleft.jpg') }}" alt="Outreach">
                        </div>

                        <div class="image-stack__item image-stack__item--top">
                            <img src="{{ URL::asset('img/CTA_lowerleft.jpg') }}" alt="Divers" style="width:500px"
                                data-scroll data-scroll-speed="3.9">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 " style="z-index: 1">
                    <h1 class="col-12 display-2 subheader" style="font-family: 'Playfair Display', serif;">
                        Become a student today
                    </h1>

                    <p class=" col-12 lead">
                        Learn more about enrollment details and courses offered by the college.
                    </p>
                    <div class="col-12">
                        <a href="/enrollment">
                            <button type="button" class="btn btn-info btn-lg">View Details</button>
                        </a>
                    </div>
                </div>
                <div class="col-3 d-none d-lg-block">
                    <div class="image-stack">
                        <div class="image-stack__item image-stack__item--bottom2" style="transform: translateY(-3rem)"
                            data-scroll data-scroll-speed="-4.0">
                            <img src="{{ URL::asset('img/CTA_upperright.jpg') }}" alt="Crocodile Pen">
                        </div>

                        <div class="image-stack__item image-stack__item--top2" style="transform: translateY(10rem)"
                            data-scroll data-scroll-speed="1.5">
                            <img src="{{ URL::asset('img/CTA_Lowerright.jpg') }}" alt="Coral">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- End of COS --}}

    {{-- Contact Us Block --}}
    @include('IEMS.Linus.SITE.contact_block')
@endsection
