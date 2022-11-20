@extends('layouts.IEMS_Layout')
@section('content')
    <section class="mbr-section article" style="background-color: #1DA2d8; padding-top: 180px; padding-bottom: 180px;"
        data-scroll-section>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 text-center ">
                    <h1 class=" text-white display-2 subheader">Courses and Enrollment</h1>
                    <h1 class="lead">Details regarding the courses offered by the college and instructions to enrolling
                    </h1>
                </div>
            </div>
        </div>

    </section>


    {{-- Undergraduate Section Table --}}
    <section class="mbr-section article"
        style="background-color: #FBFBFB; padding-top: 120px; padding-bottom:120px; object-fit:cover;" data-scroll-section>
        <div class="container">
            <div class="row d-flex justify-content-center">

                {{-- Heading --}}
                <div class="col-12 text-center" style="margin-bottom: 150px">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        COLLEGE
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: #1DA2D8">
                        Undergaduate Programs
                    </h1>
                </div>


                {{-- Undergraduate programs --}}
                <div class="col-12 d-flex justify-content-center" style="margin-bottom:10vh">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 col-md-5 col-lg-5 m-5 ">
                                <h1 class=" display-5 subheader text-black">Courses Offered</h1>
                            </div>

                            {{-- Courses --}}
                            <div class="col-12 col-md-5 col-lg-5 m-5">
                                <div class="row ">
                                    <ul class="lead" style="list-style-type: square">

                                        {{-- Course Item --}}
                                        <li style="margin-bottom: 60px">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Bachelor of Science in Environmental Science
                                            </h2>

                                            {{-- Description --}}
                                            <p class="lead">Environmental Studies</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/certificate-in-coastal-resource-management/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 2</p>
                                        </li>
                                        {{-- End Course Item --}}


                                        {{-- Course Item --}}
                                        <li class="lh-2">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Bachelor of Science in Marine Biology
                                            </h2>

                                            {{-- Course Description --}}
                                            <p class="lead">Seeks to understand the unique characteristics of the marine
                                                environment and the adaptations of its
                                                organisms to life in the sea.</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/bachelor-of-science-in-marine-biology/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 4</p>
                                        </li>
                                        {{-- End Course Item --}}



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Enrollment Insturctions --}}
                <div class="col-12 d-flex justify-content-center" style="margin-bottom:10vh">
                    <div class="row">

                        {{-- Header --}}
                        <div class="col-12 d-flex justify-content-center " style="margin-bottom: 30px">
                            <h1 class="display-5 subheader text-black"> Enrollment Process </h1>
                        </div>

                        {{-- Letter --}}
                        <div class="col-12" style="padding-left: 60px; padding-right:60px">
                            <p class="lead text-left">
                                Greetings from the Institute of Environmental and Marine Sciences! <br> <br>

                                Incoming freshmen have to be accepted formally
                                into the host unit of the degree (in this case, the Institute of
                                Environmental and Marine Sciences, IEMS) before going to the Office
                                of Admissions of the University Registrar. <br> <br>

                                Please see attached the admission requirements and IEMS application form.
                                In the word file of application form, the applicant can directly type the
                                requested information, paste an e-signature, save as a PDF file and sent
                                to <a href="mailto: iems@su.edu.ph" target="_blank">iems@su.edu.ph</a>. <br>
                                Alternately, the PDF form can be printed,
                                then manually filled and signed, then sent by courier. It can also be
                                scanned and sent back to our through email. <br> <br>

                                Please attach a copy of the final grades for Grade 12 to the submitted form. <br> <br>

                                If you have further queries, please do not hesitate to send us at <a
                                    href="mailto: iems@su.edu.ph" target="_blank">iems@su.edu.ph</a>.

                            </p>
                        </div>

                        {{-- File Links Section --}}
                        <div class="col-12 ">
                            <div class="row d-flex justify-content-center">

                                {{-- Requirements File --}}
                                <div class="col-12 col-md-2 col-lg-2 " style="margin:30px">
                                    <div class="row d-grid justify-content-center" style="padding: 30px;">

                                        {{-- Label --}}
                                        <h2 class="subheader text-center"> Application Requirements </h2>
                                        <p class="text-muted text-center">(Prerequistes for enrollment)</p>

                                        {{-- File Link --}}
                                        <a href="{{ asset('documents/UG Application Requirements 2022.pdf') }}"
                                            target="_blank">
                                            <div class="d-grid gap-2 align-content-end">
                                                <button class="btn d-grid btn-lg btn-floating btn-info" type="button"
                                                    style="margin-top:20px">
                                                    <i class="bx bx-download"></i>
                                                </button>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                {{-- Requirements File --}}
                                <div class="col-12 col-md-2 col-lg-2 " style="margin:30px">
                                    <div class="row d-grid justify-content-center" style="padding: 30px;">

                                        {{-- Label --}}
                                        <h2 class="subheader text-center"> Application Form </h2>
                                        <p class="text-muted text-center">(For incoming freshmen)</p>

                                        {{-- File Link --}}
                                        <a href="{{ asset('documents/UG Application Form 2022.pdf') }}" target="_blank">
                                            <div class="d-grid gap-2">
                                                <button class="btn d-grid btn-lg btn-floating btn-info align-content-end"
                                                    type="button" style="margin-top:20px">
                                                    <i class="bx bx-download"></i>
                                                </button>
                                            </div>
                                        </a>

                                    </div>
                                </div>


                                {{-- Requirements File --}}
                                <div class="col-12 col-md-2 col-lg-2 " style="margin:30px;">
                                    <div class="row d-grid justify-content-center" style="padding: 30px;">

                                        {{-- Label --}}
                                        <h2 class="subheader text-center"> Application Form </h2>
                                        <p class="text-muted text-center">(For transferees and shiftees)</p>

                                        {{-- File Link --}}
                                        <a href="{{ asset('documents/UG Application Form Sup 2022_trans-shiftees.pdf') }}"
                                            target="_blank">
                                            <div class="d-grid gap-2">
                                                <button class="btn d-grid btn-lg btn-floating btn-info" type="button"
                                                    style="margin-top:20px">
                                                    <i class="bx bx-download"></i>
                                                </button>
                                            </div>
                                        </a>

                                    </div>
                                </div>


                                {{-- Requirements File --}}
                                <div class="col-12 col-md-2 col-lg-2 " style="margin:30px; max-height:220px">
                                    <div class="row d-grid justify-content-center" style="padding: 30px;">

                                        {{-- Label --}}
                                        <h2 class="subheader text-center"> Reference Form </h2>
                                        <p class="text-muted text-center">(Referal for student profile)</p>

                                        {{-- File Link --}}
                                        <a href="{{ asset('documents/UG Reference Form_2022.pdf') }}" target="_blank">
                                            <div class="d-grid gap-2">
                                                <button class="btn d-grid btn-lg btn-floating btn-info align-content-end"
                                                    type="button" style="margin-top:20px">
                                                    <i class="bx bx-download"></i>
                                                </button>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div> {{-- End Files SEction --}}






                    </div>
                </div> {{-- End Enrollment --}}

            </div>
        </div>
    </section>




    {{-- Graduate Section Table --}}
    <section class="mbr-section article"
        style="background-color: rgb(247,247,247); padding-top: 120px; padding-bottom:120px; object-fit:cover;"
        data-scroll-section>
        <div class="container">
            <div class="row d-flex justify-content-center">

                {{-- Heading --}}
                <div class="col-12 text-center" style="margin-bottom: 150px">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        COLLEGE
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: #1DA2D8">
                        Graduate Programs
                    </h1>
                </div>


                {{-- Graduate programs --}}
                <div class="col-12 d-flex justify-content-center" style="margin-bottom:10vh">
                    <div class="container">
                        <div class="row ">

                            <div class="col-12 col-md-5 col-lg-5 m-5 ">
                                <h1 class=" display-5 subheader text-black">Courses Offered</h1>
                            </div>

                            {{-- Courses --}}
                            <div class="col-12 col-md-5 col-lg-5 m-5">
                                <div class="row ">
                                    <ul class="lead" style="list-style-type: square">

                                        {{-- Course Item --}}
                                        <li style="margin-bottom: 60px">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Certificate in Coastal Resource Management
                                            </h2>

                                            {{-- Description --}}
                                            <p class="lead">Certification program for managing coastal resources</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/certificate-in-coastal-resource-management/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 2</p>
                                        </li>
                                        {{-- End Course Item --}}


                                        {{-- Course Item --}}
                                        <li class="lh-2">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Diploma in Coastal Resource Management
                                            </h2>

                                            {{-- Course Description --}}
                                            <p class="lead">Diplomatic program for managing costal resources</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a
                                                    href="https://su.edu.ph/academic-offering/diploma-in-coastal-resource-management/
                                                                                            target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: n/a</p>
                                        </li>
                                        {{-- End Course Item --}}


                                        {{-- Course Item --}}
                                        <li class="lh-2">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Master of Research in Marine Ecosystems and Governance and Tropical
                                                Biological
                                                Oceanography (Double Degree Program)
                                            </h2>

                                            {{-- Course Description --}}
                                            <p class="lead">Masteral program for Marine Governance and Ecostystems as
                                                well as
                                                Tropical Biological Oceanography
                                            </p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/master-of-research-in-marine-ecosystems-and-governance-and-tropical-biological-oceanography-double-degree-program/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 2</p>
                                        </li>
                                        {{-- End Course Item --}}


                                        {{-- Course Item --}}
                                        <li class="lh-2">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Master of Science in Coastal Resource Management
                                            </h2>

                                            {{-- Course Description --}}
                                            <p class="lead">Masteral program for managing costal resources</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/master-of-science-in-coastal-resource-management/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 2</p>
                                        </li>
                                        {{-- End Course Item --}}


                                        {{-- Course Item --}}
                                        <li class="lh-2">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Master of Science in Environmental Policy
                                            </h2>

                                            {{-- Course Description --}}
                                            <p class="lead">Masteral program dedicated to creating and managing policies
                                                regarding the environment</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/master-of-science-in-environmental-policy/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 2</p>
                                        </li>
                                        {{-- End Course Item --}}


                                        {{-- Course Item --}}
                                        <li class="lh-2">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Master of Science in Environmental Science
                                            </h2>

                                            {{-- Course Description --}}
                                            <p class="lead">A masteral program for graduates of Environmental Science</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/master-of-science-in-environmental-science/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 2</p>
                                        </li>
                                        {{-- End Course Item --}}


                                        {{-- Course Item --}}
                                        <li class="lh-2">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Master of Science in Marine Biology
                                            </h2>

                                            {{-- Course Description --}}
                                            <p class="lead">A masteral program for graduates of Marine Biology</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/master-of-science-in-marine-biology/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 2</p>
                                        </li>
                                        {{-- End Course Item --}}


                                        {{-- Course Item --}}
                                        <li class="lh-2">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Diploma in Coastal Resource Management
                                            </h2>

                                            {{-- Course Description --}}
                                            <p class="lead">Diplomatic program for managing costal resources</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a
                                                    href="https://su.edu.ph/academic-offering/diploma-in-coastal-resource-management/
                                                                                            target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: n/a</p>
                                        </li>
                                        {{-- End Course Item --}}


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- end programs --}}

            </div>
        </div>
    </section>



    {{-- Post-Graduate Section Table --}}
    <section class="mbr-section article"
        style="background-color: #FBFBFB; padding-top: 120px; padding-bottom:120px; object-fit:cover;" data-scroll-section>
        <div class="container">
            <div class="row d-flex justify-content-center">

                {{-- Heading --}}
                <div class="col-12 text-center" style="margin-bottom: 150px">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        COLLEGE
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: #1DA2D8">
                        Post-Graduate Programs
                    </h1>
                </div>


                {{-- Post-Graduate programs --}}
                <div class="col-12 d-flex justify-content-center" style="margin-bottom:10vh">
                    <div class="container">
                        <div class="row ">

                            <div class="col-12 col-md-5 col-lg-5 m-5 ">
                                <h1 class=" display-5 subheader text-black">Courses Offered</h1>
                            </div>

                            {{-- Courses --}}
                            <div class="col-12 col-md-5 col-lg-5 m-5">
                                <div class="row ">
                                    <ul class="lead" style="list-style-type: square">

                                        {{-- Course Item --}}
                                        <li style="margin-bottom: 60px">

                                            {{-- Course Name --}}
                                            <h2 class="subheader">
                                                Ph.D. in Marine Biology
                                            </h2>

                                            {{-- Description --}}
                                            <p class="lead">A doctoral program for Marine Biology</p>

                                            {{-- Link to Course Outline --}}
                                            <p class="lead">See course outline
                                                <a href="https://su.edu.ph/academic-offering/phd-in-marine-biology/"
                                                    target="_blank">
                                                    here
                                                </a>
                                            </p>

                                            {{-- Duration of Course --}}
                                            <p class="text-muted">Years of Study: 4</p>
                                        </li>
                                        {{-- End Course Item --}}


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- end programs --}}

            </div>
        </div>
    </section>

    {{-- Contact Info BLock --}}
    @include('IEMS.Linus.SITE.contact_block')
@endsection
