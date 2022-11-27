@extends('layouts.IEMS_Layout')
@section('content')
    <section class="mbr-section article" style="background-color: #1DA2d8; padding-top: 180px; padding-bottom: 180px;"
        data-scroll-section>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6  text-center">
                    <h1 class=" text-white display-2 subheader">Vision & Mission</h1>
                    <h1 class="lead">The goals of the college and how we plan to achieve them
                    </h1>
                </div>
            </div>
        </div>

    </section>



    <section class="mbr-section article"
        style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom:120px; object-fit:cover;"
        data-scroll-section>
        <div class="container">
            <div class="row d-flex justify-content-center">

                {{-- Heading --}}
                <div class="col-12 text-center" style="margin-bottom: 100px">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        THE COLLEGE
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: #1DA2D8">
                        Vision & Mission
                    </h1>

                </div>

                {{-- Vision --}}
                <div class="col-12" style="margin-bottom:20vh; margin-top:20vh">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" text-black display-4 subheader">Vision</h1>
                            <p class="lead">To become a global leader in environmental and marine research
                                and education, producing competent and responsible graduates trained within the
                                Christian framework of stewardship.
                            </p>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                            <img src="{{ URL::asset('img/College_vision.jpg') }}" alt="survey" style="width:80%">
                        </div>
                    </div>
                </div>

                {{-- Mission --}}
                <div class="col-12">
                    <div class="row d-flex align-items-start justify-content-around">

                        {{-- Heading Mission  --}}
                        <div class="col-12 p-3 d-flex justify-content-center">
                            <h1 class=" text-black display-4 subheader">Mission</h1>
                        </div>

                        {{-- Mission Content --}}
                        <div class="col-12">
                            <div class="row">

                                {{-- Mission Block 1 --}}
                                <div class="col-12" style="margin-bottom:1vh;">
                                    <div class="row d-flex align-items-center">

                                        {{-- Photo --}}
                                        <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                                            <img src="{{ URL::asset('img/College_mission1.jpg') }}" alt="survey"
                                                style="width:80%">
                                        </div>

                                        {{-- Mission --}}
                                        {{-- Box --}}
                                        <div class="col-12 col-md-6 col-lg-6 p-5">
                                            {{-- Rows --}}
                                            <div class="row">

                                                {{-- Mission --}}
                                                <div class="col-12">
                                                    <div class="row">

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        01
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        Provide quality education in marine biology, natural
                                                                        resource management,
                                                                        specifically ICRM and environmental science.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        02
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        Produce graduates with competency in marine science
                                                                        and environmental science, coastal
                                                                        resource management and environmental policy.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        03
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        Undertake basic research in coastal, marine and
                                                                        environmental sciences with emphasis on
                                                                        the shallow coastal ecosystems, such as coral reefs,
                                                                        seagrass beds, mangrove forests, and soft-bottom
                                                                        communities.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        04
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        Provide laboratory facilities for biological courses
                                                                        of the University.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        05
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        Promote local and international exchange of
                                                                        scientists and students in marine and environmental
                                                                        science.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                {{-- Mission Block 2 --}}
                                <div class="col-12" style="margin-bottom:5vh;">
                                    <div class="row d-flex align-items-center">

                                        {{-- Mission --}}
                                        {{-- Box --}}
                                        <div class="col-12 col-md-6 col-lg-6 p-5 order-sm-2 order-md-1 order-lg-1">
                                            {{-- Rows --}}
                                            <div class="row">

                                                {{-- Mission --}}
                                                <div class="col-12">
                                                    <div class="row">

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        06
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        Assist public and private agencies in coastal
                                                                        management training, resource and ecological
                                                                        assessment, marine parks, aquaculture, and pollution
                                                                        studies.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        07
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        <br>
                                                                        Link marine science and humanity.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        08
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        <br>
                                                                        Promote environmental stewardship.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        09
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        Conduct resource and ecological assessments as well
                                                                        as environmental
                                                                        impact studies on proposed and on-going industries.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Mission Item --}}
                                                        <div class="col-12 " style="margin-bottom:15px">
                                                            <div class="row g-2">
                                                                <div class="col-1 col-md-12 col-lg-1 align-items-center">
                                                                    <h1 class="text-black subheader">
                                                                        10
                                                                        </h2>
                                                                </div>
                                                                <div class="col-11 align-items-center">
                                                                    <p>
                                                                        Provide a marine interpretive facility with nature
                                                                        trails and exhibits.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        {{-- Photo --}}
                                        <div
                                            class="col-12 col-md-6 col-lg-6 d-flex justify-content-center order-sm-1 order-md-2 order-lg-2">
                                            <img src="{{ URL::asset('img/College_mission2.jpg') }}" alt="survey"
                                                style="width:80%">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>


    </section>

    {{-- Contact Us Block  --}}
    @include('IEMS.Linus.SITE.contact_block')
@endsection
