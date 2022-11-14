@extends('layouts.IEMS_Layout')
@section('content')
    <section class="mbr-section article" style="background-color: #1DA2d8; padding-top: 180px; padding-bottom: 180px;">

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 text-center ">
                    <h1 class=" text-white display-2 subheader">Faculty and Staff</h1>
                    <h1 class="lead">The brains behind shaping the future of our students</h1>
                </div>
            </div>
        </div>


    </section>


    <section class="mbr-section article"
        style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom:120px; object-fit:cover; g">
        <div class="container-fluid">
            <div class="row  d-flex justify-content-center">

                {{-- Heading --}}
                <div class="col-12 text-center mb-5">
                    <p class=" fw-bold mb-0" style="color: #252525">
                        OUR PEOPLE
                    </p>

                    <h1 class="subheader fst-italic fw-light m-0" style="color: #1DA2D8">
                        Faculty and Staff
                    </h1>
                </div>

                {{-- Card --}}
                @foreach ($user as $item)
                <div class="col-6 col-md-2 col-lg-2" style="margin: 20px">
                    <div class="card bg-transparent" style="width: 18rem; border:none; cursor:default">
                        <img src="{{-- Photo --}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5> {{--Name Of Faculty--}}
                            <p class="card-text">{{ $item->rank }}</p>     {{--Rank Of Faculty--}}
                            <button type="button" data-bs-toggle="modal" data-bs-target="#viewfacultydetails{{ $item->id }}"
                                class="btn btn-info">View Details</button>
                        </div>
                    </div>
                    {{-- View Faculty Details Modal --}}
                        <div class="modal fade" id="viewfacultydetails{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                            aria-hidden="true" style="height: 80vh; padding:0px">
                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="row no-gutters">

                                        {{-- Faculty Photo Section --}}
                                        <div class="col-md-6 d-flex p-0">
                                            <div class="modal-body  img d-flex img text-center d-flex align-items-center"
                                                style="background-image: url('img/Home_Banner.png');  {{-- Photo --}}
                                                background-size:cover;background-repeat: no-repeat; background-blend-mode: multiply; background-position: center">
                                            </div>
                                        </div> {{-- End of Faculty Photo Section --}}

                                        {{-- Faculty Details Section --}}
                                        <div class="col-md-6 d-flex p-0">
                                            <div class="modal-body  align-items-center" style="background-color:rgb(242, 242, 242)">

                                                {{-- Exit Modal --}}
                                                <div class="modal-header p-0" style="border:none">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                {{-- Faculty Details --}}
                                                <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l ">

                                                    {{-- Name Of Faculty --}}
                                                    <div class="col-12">
                                                        <label class="form-label">Name</label>
                                                        <h3>{{ $item->name }}</h3>
                                                    </div>

                                                    {{-- Rank --}}
                                                    <div class="col-12   col-lg-6">
                                                        <label class="form-label">Rank</label>
                                                        <h3>{{ $item->rank }}</h5>
                                                    </div>

                                                    {{-- Specialty --}}
                                                    <div class="col-12 col-lg-6">
                                                        <label class="form-label"></label>
                                                        <h3>{{ $item->specialty }}</h3>
                                                    </div>

                                                    {{-- Educational Attainment --}}
                                                    <div class="col-12">
                                                        <label class="form-label">Educational Attainment</label>
                                                        {{-- insert foreach here para sa educational attainment alone --}}
                                                        {{--
                                                            <ul style:"list-style-type: square">
                                                                foreach //educational attainment//
                                                                <li> increment sa educational attainment </li>
                                                                endforeach
                                                            --}}
                                                        <h5>{{ $item->educational }}</h5>
                                                    </div>

                                                    {{-- Contact Details --}}
                                                    <div class=" col-12 d-flex justify-content-between">

                                                        <div class="col-12 col-lg-4">
                                                            <p class="text-muted">{{ $item->email }}</p> {{-- Email --}}
                                                        </div>

                                                        <div class="col-12 col-lg-4">
                                                            <p class="text-muted">{{ $item->phone_no }}</p> {{-- Contact Number --}}
                                                        </div>
                                                    </div>

                                                </div> {{-- end of Faculty Details --}}


                                                {{-- Close Modal Button --}}
                                                <div class="modal-footer" style="border: none">
                                                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                                                </div>


                                            </div>


                                        </div> {{-- End of Faculty Details Section --}}
                                    </div>
                                </div>
                            </div>
                        </div> {{-- End of Modal --}}
                </div>
                @endforeach
                



            </div>
        </div>
    </section>

    {{-- Contact Us Block --}}
    @include('IEMS\Linus.SITE.contact_block')
@endsection
