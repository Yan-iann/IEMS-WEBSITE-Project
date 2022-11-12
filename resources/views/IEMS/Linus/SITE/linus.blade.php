`@extends('layouts.IEMS_Layout')
@section('content')
    {{-- Header --}}
    <section class="mbr-section article"
        style="background-color: #FBFBFB; padding-top: 100px;
        padding-bottom: 180px; min-height:85vh">

        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">

                <div class="col-12 col-md-6 order-sm-1 order-md-2 order-lg-2">
                    <img src="{{ URL::asset('img/Logo_linus_blue.png') }}" alt="Linus Logo">
                </div>

                <div class="col-md-6 text-left order-sm-2 order-md-1 order-lg-1">
                    <h1 class=" display-2 subheader fst-italic">The Online Exhibit</h1>
                    <p class="lead">The Institute of Environmental and Marine Sciences offers
                        a wide range of wildlife information garnered by the department’s
                        students and faculty.
                    </p>
                    <a href="{{ route('guestDashboard') }}">
                        <button type="button" class="btn btn-info btn-lg ">View Information Library</button>
                    </a>
                </div>
            </div>
        </div>
        </div>

    </section>


    {{-- Features --}}
    <section style="background-color: rgb(242, 242, 242);
    padding-top: 100px; padding-bottom: 180px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 d-flex justify-content-center" style="margin-bottom:60px">
                    <h1>
                        Featured Catalogs
                    </h1>
                </div>

                {{-- Feature 1 --}}
                <div class="col-12 col-md-6 col-lg-3 text-center d-flex justify-content-center" style="margin:40px">
                    <div class="row">
                        <div class="col-12 wrap-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                                style="fill: rgba(29, 162, 216, 1);transform: ;msFilter:;">
                                <path
                                    d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                                </path>
                            </svg>
                        </div>
                        <div class="col-12 text">
                            <h3 class="subheader">Critter Data</h3>
                            <p>A collection of critter information collected by IEMS about the life that live nearby the
                                area</p>
                        </div>
                    </div>
                </div>

                {{-- Feature 2 --}}
                <div class="col-12 col-md-6 col-lg-3 text-center d-flex justify-content-center" style="margin:40px">
                    <div class="row">
                        <div class="col-12 wrap-icon">
                            <i class='bx bx-book' style="color: #1DA2D8; font-size:80px"></i>
                        </div>
                        <div class="col-12 text">
                            <h3 class="subheader">Thesis Papers</h3>
                            <p>Quality dissertations produced by the graduates and undergraduates of the college </p>
                        </div>
                    </div>
                </div>

                {{-- Feature 3 --}}
                <div class="col-12 col-md-6 col-lg-3 text-center d-flex justify-content-center" style="margin:40px">
                    <div class="row">
                        <div class="col-12 wrap-icon">
                            <i class='bx bx-news' style="color: #1DA2D8; font-size:80px"></i>
                        </div>
                        <div class="col-12 text">
                            <h3 class="subheader">Journal Articles</h3>
                            <p>News articles collected by the institute regarding the wildlife that live around
                                the region that's been collated throughout the years
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Feature 4 --}}
                <div class="col-12 col-md-6 col-lg-3 text-center d-flex justify-content-center" style="margin:40px">
                    <div class="row">
                        <div class="col-12 wrap-icon">
                            <i class='bx bx-bone' style='color:#1da2d8; font-size:80px'></i>
                        </div>
                        <div class="col-12 text">
                            <h3 class="subheader">Bone Collection</h3>
                            <p>Featured skeletal remains of critters that can be found in the Whalebone at IEMS</p>
                        </div>
                    </div>
                </div>

                {{-- Feature 5 --}}
                <div class="col-12 col-md-6 col-lg-3 text-center d-flex justify-content-center" style="margin:40px">
                    <div class="row">
                        <div class="col-12 wrap-icon">
                            <i class='bx bx-card' style='color:#1da2d8; font-size:80px'></i>
                        </div>
                        <div class="col-12 text">
                            <h3 class="subheader">Reference Collection</h3>
                            <p>Referential exhbits of various forms of critters</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    {{-- Call to Action --}}
    <section class="mbr-section article"
        style="background-color: #FBFBFB; padding-top: 100px;
    padding-bottom: 180px; min-height:85vh">

        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">

                <div class="col-12 col-md-6 order-sm-1 order-md-2 order-lg-2">
                    <img src="{{ URL::asset('img/Linus_feature.png') }}" alt="Linus Logo">
                </div>

                <div class="col-md-6 text-left order-sm-2 order-md-1 order-lg-1">
                    <h1 class=" display-3 subheader fst-italic"s>Information <span class="fw-bold fst-normal">At Your</span> <span class="fw-light">Doorstep</span></h1>
                    <p class="lead">All information brought to you by the students and faculty
                        of the Institute of Environmental and Marine Sciences with the help
                        of the MARILAB
                    </p>
                    <a href="/dashboard">
                        <button type="button" class="btn btn-info btn-lg ">View Information Library</button>
                    </a>
                </div>
            </div>
        </div>

    </section>

    {{-- Contact Block --}}
    @include('IEMS\Linus.SITE.contact_block')
@endsection
