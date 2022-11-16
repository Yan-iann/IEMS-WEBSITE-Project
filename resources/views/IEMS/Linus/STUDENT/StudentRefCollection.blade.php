@extends('layouts.S_Layout')
@section('content')
    <div class="container-fluid">
        {{-- Page Name, and Burger Icon. AND Search Bar --}}
        <div class="col-12">

            <div class="row d-flex justify-content-around">
                <div class="home-content">
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                        <i class='bx bx-menu'></i>
                        <span class="text">Reference Collection</span>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="">
                            {{-- uhm di pani sure ?? --}}
                            <div class="input-group">
                                <input type="search" name="searchWildlife" class="form-control mr-sm2"
                                    placeholder="Search Reference Collection">
                                <div class="input-group-btn">
                                    <div class="btn-group" role="group">
                                        <div class="dropdown dropdown-lg">
                                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                                data-bs-target="#ModalSearch"><i class='bx bx-filter-alt'></i></button>
                                        </div>
                                        <button class="btn btn-info " type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Information Cards --}}
        <section class="col-12">
            <div class="container-fluid">
                <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
                    @foreach ($wildlifes as $item)
                        <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                            <div class="card border-dark" style="width: 18rem;" data-bs-toggle="modal"
                                data-bs-target="#ModalWildlife{{ $item->info_ID }}">
                                <img class="card-img-top "src="{{ asset($item->wildlife_pic) }}" alt="Card image cap">
                                <div class="card-body bg-light text-primary">
                                    <h5 class="card-title text-center">({{ $item->wildlife_scientific_name }})</h5>
                                    <p class="card-text text-center">{{ $item->wildlife_name }}</p>
                                </div>
                            </div>
                        </div>
                        @include('IEMS.Linus.STUDENT.displayRefCollection')
                    @endforeach
                </div>
                <!--end of catalog-->
            </div>
            <!--end of class container fluid-->
        </section>
    </div>
@endsection
