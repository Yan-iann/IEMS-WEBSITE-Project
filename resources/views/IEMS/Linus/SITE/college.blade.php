@extends('layouts.IEMS_Layout')
@section('content')
    <section class="mbr-section article"
        style="background-color: #1DA2d8; padding-top: 180px;
padding-bottom: 180px; height:75vh">

        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 text-left ">
                    <h1 class=" text-white display-2 subheader">The Institution</h1>
                    <h1 class="lead">The Vision and Mission of what makes IEMS an identity</h1>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="image-stack">
                        <div class="image-stack__item image-stack__item--top3">
                            <img src="{{ URL::asset('img/College_header1.jpg') }}" alt="Fish">
                        </div>

                        <div class="image-stack__item image-stack__item--bottom3">
                            <img src="{{ URL::asset('img/College_header2.jpg') }}" alt="Divers" style="width:60%">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <section class="mbr-section article"
        style="background-color: #FBFBFB; padding-top: 120px; padding-bottom:120px; object-fit:cover;">
        <div class="container">
            <div class="row d-flex justify-content-center">

                {{-- Heading --}}
                <div class="col-12 text-center" style="margin-bottom: 100px">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        THE COLLEGE
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: #1DA2D8">
                        History
                    </h1>

                </div>


                <div class="col-12" style="margin-bottom: 50px">
                    <div class="row d-flex justify-content-center align-items-center ">

                        <div class="col-12 col-md-6 col-lg-6 mb-5 d-flex justify-content-end order-sm-1">
                            <img src="{{ URL::asset('img/college_desc1.jpg') }}" alt="Divers">
                        </div>



                        <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-start align-items-center order-sm-2">
                            <p  class="lead">
                                Silliman University Marine Laboratory (SUML) was established as a research facility of the
                                University in 1974,
                                with materials recycled from a torn Science Building in the main campus. Facilities have
                                improved considerably
                                since then, from a one-building unit to four buildings. Today it boasts of a two-storey
                                facility constructed
                                with support from the United States Agency for International Development under its Coastal
                                Resource Management program.
                            </p>
                        </div>

                        <div class="mx-auto">
                        </div>
                    </div>
                </div>


                <div class="col-12" style="margin-bottom: 50px">
                    <div class="row d-flex justify-content-center align-items-center ">

                        <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-start align-items-center order-sm-2 order-lg-1 order-md-1">
                            <p  class="lead">
                                The new building houses four laboratories: marine botany, biochemistry, and genetics, invertebrate
                                and vertebrate. It has a modest library, herbarium and zoological museum, conference room, visiting
                                 scientists’ and administrative offices. There is also a dive shop, flowing seawater/freshwater
                                 systems, stand-by generator, experimental ponds and tanks, culture facilities and mangrove garden.
                                  IEMS is also equipped with wireless networks available for scientists and students.
                            </p>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-5 d-flex justify-content-end order-sm-1 order-lg-2 order-md-2">
                            <img src="{{ URL::asset('img/college_desc2.jpg') }}" alt="Divers">
                        </div>

                        <div class="mx-auto">
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row d-flex justify-content-center align-items-center ">

                        <div class="col-6 mb-5 d-flex justify-content-end order-sm-1" style="padding:20px">
                            <img src="{{ URL::asset('img/college_desc3.jpg') }}" alt="Divers" style="width: 100%">
                        </div>



                        <div class="col-6 d-flex justify-content-start align-items-center order-sm-2" style="padding:20px">
                            <p class="lead">
                                On August 25, 2009, the buildings and grounds of SUML were renamed Dr. Angel C. Alcala Environment
                                and Marine Science Laboratories. It was in recognition of Dr. Alcala who together with Prof. Rodolfo
                                Gonzales and other faculty of the biology department, established the marine laboratory in 1974.
                            </p>
                        </div>

                        <div class="mx-auto">
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>


    <section class="mbr-section article"
    style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom:120px; object-fit:cover;">
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

                <div class="col-12" style="margin-bottom:30vh">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-md-6 col-lg-6 p-5">
                            <h1 class=" text-black display-3 subheader">Vision</h1>
                            <p class="lead">To become a global leader in environmental and marine research
                                and education, producing competent and responsible graduates trained within the
                                Christian framework of stewardship
                            </p>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{ URL::asset('img/College_vision.jpg') }}" alt="Fish">
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6 text-left m-5 d-flex justify-content-end">
                        <h1 class=" text-black display-4 subheader">Mission</h1>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 m-5">
                        <ul class="lead" style="list-style-type: square">
                            <li>
                                Provide quality education in marine biology, natural resource management,
                                specifically ICRM and environmental science
                            </li>
                            <li>
                                Produce graduates with competency in marine science and environmental
                                science, coastal resource management and environmental policy
                            </li>
                            <li>
                                Undertake basic research in coastal, marine and environmental sciences with
                                emphasis on the shallow coastal ecosystems, such as coral reefs, seagrass beds,
                                mangrove forests, and soft-bottom communities
                            </li>
                            <li>
                                Provide laboratory facilities for biological courses of the University
                            </li>
                            <li>
                                Promote local and international exchange of scientists and students in marine and environmental science
                            </li>
                            <li>
                                Assist public and private agencies in coastal management training, resource and ecological assessment,
                                 marine parks, aquaculture, and pollution studies
                            </li>
                            <li>
                                Link marine science and humanity
                            </li>
                            <li>
                                Promote environmental stewardship
                            </li>
                            <li>
                                Conduct resource and ecological assessments as well as environmental impact studies on proposed
                                and on-going industries
                            </li>
                            <li>
                                Provide a marine interpretive facility with nature trails and exhibits
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>


    </section>

    {{-- Contact Us Block  --}}
    @include('IEMS\Linus.SITE.contact_block')
@endsection
