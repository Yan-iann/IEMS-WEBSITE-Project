@extends('layouts.IEMS_Layout')
@section('content')
    <section class="mbr-section article" style="background-color: #1DA2d8; padding-top: 180px; padding-bottom: 180px;"
        data-scroll-section>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6  text-center">
                    <h1 class=" text-white display-2 subheader">Rates</h1>
                    <h1 class="lead">Collaboration and Fees
                    </h1>
                </div>
            </div>
        </div>

    </section>

    {{-- Fees Table --}}
    <section class="mbr-section article"
        style="background-color: #FBFBFB; padding-top: 120px; padding-bottom:120px; object-fit:cover;" data-scroll-section>
        <div class="container">
            <div class="row d-flex justify-content-center">

                {{-- Heading
                <div class="col-12 text-center" style="margin-bottom: 150px">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        Equipment
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: #1DA2D8">
                        Rates and Fees
                    </h1>
                </div> --}}

                {{-- Bench fee Table --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center ">

                        <div class="col-12 mt-3">
                            <div class="row">
                                <h1 class=" display-5 subheader">Bench Fees</h1>
                                <p class="lead">The usage of the bench fees is as follows
                                </p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row d-flex align-items-center">

                                <table style="width: 95%">
                                    <thead>
                                        <tr>
                                            <th rowspan=2>&nbsp;</th>
                                            <th colspan=2>LOCAL</th>
                                            <th colspan=2>FOREIGN</th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th rowspan=2>&nbsp;</th>
                                            <th colspan=2>OJT & OTHERS</th>
                                            <th>Scientist</th>
                                            <th>Students</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th>Daily (8hr)</th>
                                            <td colspan=2>Php 250.00</td>
                                            <td>Php 450.00</td>
                                            <td>Php 350.00</td>
                                        </tr>
                                        <tr>
                                            <th>Weekly</th>
                                            <td colspan=2>Php 1,250.00</td>
                                            <td>Php 2,000</td>
                                            <td>Php 1,500</td>
                                        </tr>
                                        <tr>
                                            <th>Monthly</th>
                                            <td colspan=2>Php 5,000.00</td>
                                            <td>Php 8,000.00</td>
                                            <td>Php 6,000.00</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>


                {{-- Diving Equipment --}}
                <div class="col-12" style="margin-bottom:50vh">
                    <div class="row d-flex align-items-center ">

                        <div class="col-12 mt-3">
                            <div class="row">
                                <h1 class=" display-5 subheader">Diving Equipment Rental Fees</h1>
                                <p class="lead">The usage of the diving equipment rates (daily) is as follows
                                </p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row d-flex align-items-center">

                                <table style="width: 95%; ">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>IEMS Students*</th>
                                            <th>Project-Based</th>
                                            <th>Foreign**</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th>Mask and Snorkel</th>
                                            <td>Php 75.00</td>
                                            <td>Php 150.00</td>
                                            <td>Php 150.00</td>
                                        </tr>
                                        <tr>
                                            <th>Fins</th>
                                            <td>Php 80.00</td>
                                            <td>Php 100.00</td>
                                            <td>Php 100.00</td>
                                        </tr>
                                        <tr>
                                            <th>Booties</th>
                                            <td>Php 80.00</td>
                                            <td>Php 100.00</td>
                                            <td>Php 100.00</td>
                                        </tr>
                                        <tr>
                                            <th>Regulators</th>
                                            <td>Php 100.00</td>
                                            <td>Php 200.00</td>
                                            <td>Php 200.00</td>
                                        </tr>
                                        <tr>
                                            <th>BCD</th>
                                            <td>Php 100.00</td>
                                            <td>Php 200.00</td>
                                            <td>Php 200.00</td>
                                        </tr>
                                        <tr>
                                            <th>Tank</th>
                                            <td>Php 100.00</td>
                                            <td>Php 200.00</td>
                                            <td>Php 200.00</td>
                                        </tr>
                                        <tr>
                                            <th>Weight (per unit)</th>
                                            <td>Php 5.00</td>
                                            <td>Php 10.00</td>
                                            <td>Php 10.00</td>
                                        </tr>
                                        <tr>
                                            <th>Weight Belt</th>
                                            <td>Php 25.00</td>
                                            <td>Php 50.00</td>
                                            <td>Php 50.00</td>
                                        </tr>


                                    </tbody>
                                </table>
                                <small class="form-text text-black">
                                    *50% discount for IEMS students for class-related field activities
                                </small>
                                <small class="form-text text-black">
                                    **Subject to availability
                                </small>

                            </div>
                        </div>

                    </div>
                </div>


                {{-- Others --}}
                <div class="col-12" style="margin-bottom:10vh">
                    <div class="row d-flex align-items-center ">

                        <div class="col-12 mt-3">
                            <div class="row">
                                <h1 class=" display-5 subheader">Other Equipment Rental Fees</h1>
                                <p class="lead">List of other equipment that's available for rental
                                </p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row d-flex align-items-center">

                                <table style="width: 95%;">

                                    <tbody>

                                        <tr>
                                            <th>Multicab</th>
                                            <td>Php 1,500.00/day*</td>
                                        </tr>
                                        <tr>
                                            <th>Rubber Boat</th>
                                            <td>Php 1,500.00/day*</td>
                                        </tr>
                                        <tr>
                                            <th>LCD</th>
                                            <td>Php 250.00/day</td>
                                        </tr>
                                        <tr>
                                            <th>Conference Room</th>
                                            <td>Php 1,000.00 for first 3hr, Php 250/hr for succeeding hours</td>
                                        </tr>


                                    </tbody>
                                </table>
                                <small class="form-text text-black">
                                    (a) Does not include payment for driver outside office hours and fuel
                                </small>
                                <small class="form-text text-black">
                                    (b) Does not include boat operator and fuel; Also subject to availability
                                </small>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


    {{-- Notes --}}
    <section class="mbr-section article"
        style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom:120px; object-fit:cover;"
        data-scroll-section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 d-flex align-items-center" style="padding:10px">
                    <div class="container d-flex justify-content-center">
                        <div class="row ">
                            <h2 class="col-12">Notes</h2>
                            <ul class="col-12" type="A">
                                <li class="lead">Supervisors of foreign students are requested to coordinate
                                    with the Laboratory Manager with regard to billing fees
                                </li>
                                <li class="lead">
                                    IEMS students are requested to settle their rental bills after
                                    each activity
                                </li>
                                <li class="lead">
                                    Project-based: Research assistants are expected to file necessary
                                    documents with the Business and Finance and expedite payment to IEMS account
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Contact Block --}}
    @include('IEMS.Linus.SITE.contact_block')
@endsection
