@extends('layouts.IEMS_Layout')
@section('content')
    <section class="mbr-section article" style="background-color: #1DA2d8; padding-top: 180px; padding-bottom: 180px;"
        data-scroll-section>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 text-center ">
                    <h1 class=" text-white display-2 subheader">Facilities</h1>
                    <h1 class="lead">Various spaces of the college that allows students and
                        researchers to learn and experience first hand
                    </h1>
                </div>
            </div>
        </div>

    </section>

    {{-- Facilities Section --}}
    <section class="mbr-section article"
        style="background-color: #FBFBFB; padding-top: 120px; padding-bottom:120px; object-fit:cover;" data-scroll-section>
        <div class="container">
            <div class="row d-flex justify-content-center">

                {{-- Heading --}}
                <div class="col-12 text-center" style="margin-bottom: 150px">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        IEMS
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: #1DA2D8">
                        Facilities
                    </h1>
                </div>


                {{-- Facility 1 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_algaecultureroom.jpg') }}" alt="Algae Culture Room">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Algae Culture Room</h1>
                            <p class="lead">Room dedicated to culturing algae
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Facility 2 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">

                            <div class="col-12 col-md-6 ">
                                <div class="image-stack">
                                    <div class="image-stack__item image-stack__item--bottom3">
                                        <img src="{{ URL::asset('img/Facilities_geneticslab1.jpg') }}" alt="Genetics Lab"
                                            data-scroll data-scroll-speed="-3">
                                    </div>

                                    <div class="image-stack__item image-stack__item--top2">
                                        <img src="{{ URL::asset('img/Facilities_geneticslab2.jpg') }}" alt="Genetics Lab"
                                            style="width:80%" data-scroll data-scroll-speed="2">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 text-left ">
                                <h1 class=" display-4 subheader">Genetics Lab</h1>
                                <p class="lead">Lab to experiment on genetics</p>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Facility 3 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_botanylab.jpg') }}" alt="Botany Lab">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Botany Lab</h1>
                            <p class="lead">Laboratory dedicated to studying botany life
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Facility 4 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_invertebratelab.jpg') }}" alt="Invertebrate Lab">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Invertebrate Lab</h1>
                            <p class="lead">Laboratory dedicated to studying all sorts of invertebrates
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Facility 5 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_shellcollection.jpg') }}" alt="Shell Collection">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Shell Collection</h1>
                            <p class="lead">A Seashell Showcase located right in the IEMS lobby for everyone to see
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Facility 6 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">

                            <div class="col-12 col-md-6 ">
                                <div class="image-stack">
                                    <div class="image-stack__item image-stack__item--bottom3">
                                        <img src="{{ URL::asset('img/Facilities_referencecollection.jpg') }}"
                                            alt="Reference Collection" data-scroll data-scroll-speed="-1">
                                    </div>

                                    <div class="image-stack__item image-stack__item--top">
                                        <img src="{{ URL::asset('img/Facilities_referencecollection2.jpg') }}"
                                            alt="Reference Collection" style="width:80%" data-scroll data-scroll-speed="2">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 text-left ">
                                <h1 class=" display-4 subheader">Reference Collection</h1>
                                <p class="lead">A collection of critter carcassas for referencing</p>
                            </div>
                        </div>
                    </div>
                </div>




                {{-- Facility 7 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_boatshedpumpreservoir.jpg') }}"
                                alt="Shed and Pump and Reservoir">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Boat Shed, Pump, and Reservoir</h1>
                            <p class="lead">An in-campus reservoir along with dive equipments ready for rent
                            </p>
                            <p class="lead">To learn more about rental rates for our equipments, <a href="/rates">click
                                    here</a>
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Facility 8 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_circulartanksandraceways.jpg') }}"
                                alt="Circular Tanks and Raceways">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Circular Tanks and Raceways</h1>
                            <p class="lead">Tanks used as artificial ponds for culturing, and nursing
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Facility 9 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_experimentaltanks.jpg') }}" alt="Experimental Tanks">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Experimental Tanks</h1>
                            <p class="lead">Tanks used as for practicing and experimenting marine biodiversity
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Facility 10 --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_crocodilepens.jpg') }}" alt="Crocodile Pens">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Crocodile Pens</h1>
                            <p class="lead">A habitual area for crocodiles residing within the college grounds
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Facility 11 --}}
                <div class="col-12">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/Facilities_mangroveforest.jpg') }}" alt="Mangrove Forest">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" display-4 subheader">Mangrove Forest</h1>
                            <p class="lead">A Mangrove Mangal sitauted inside the institution used for nursing and field
                                studies
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    {{-- Contact Block --}}
    @include('IEMS\Linus.SITE.contact_block')
@endsection
