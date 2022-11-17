@extends('layouts.G_Layout')
@section('content')
<div class="container-fluid">

        {{-- Page Name, and Burger Icon. AND Search Bar --}}
        <div class="col-12">

            <div class="row d-flex justify-content-around">
                <div class="home-content">
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                        <i class='bx bx-menu'></i>
                        <span class="text">Thesis Papers</span>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action=""> {{-- uhm di pani sure ?? --}}
                            <div class="input-group">
                                <input type="search" name="searchThesis" class="form-control mr-sm2"
                                    placeholder="Search Thesis Paper">
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

    @foreach($thesis as $item)
        <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch" data-bs-toggle="modal" data-bs-target="#ModalThesis{{$item->info_ID}}">
            <div class="card " style="width: 18rem;">
                  <div class="card-body bg-light ">
                    <p class="text-muted fst-italic">{{$item->date_published }}</p>
                    <h4 class="card-title">{{$item->thesis_title}}</h4>
                    <br>
                    <p class="card-subtitle mb-2 text-muted">{{$item->thesis_author}}</p>
                  </div>
                <div class="card-footer border-0"></div>

            </div>
        </div>
        @include('IEMS.Linus.GUEST.displayThesis')
    @endforeach

        </div>
    </div>
        </section>
</div>
@endsection
