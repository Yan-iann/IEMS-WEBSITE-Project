@extends('layouts.F_Layout')
@section('content')
<div class="container-fluid">
     {{-- Page Name, and Burger Icon. AND Search Bar --}}
     <div class="col-12">

        <div class="row d-flex justify-content-around">
            <div class="home-content">
                <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                    <i class='bx bx-menu'></i>
                    <span class="text">Thesis Paper Search Results</span>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get"
                        action="{{ route('searchThesis') }}">
                        <div class="input-group">
                            <input type="search" name="searchThesis" class="form-control mr-sm2"
                                placeholder="Search Title Title">
                            <div class="input-group-btn">
                                <div class="btn-group" role="group">
                                    <div class="dropdown dropdown-lg">
                                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#ModalSearch"><i class='bx bx-filter-alt'></i></button>
                                    </div>
                                    <button class="btn btn-info " type="submit">Search</button>
                                </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>

    <section class="col-12">
        <div class="container-fluid">
            <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
                @foreach ($thesis as $item)
                    <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                        <div class="card border-dark" style="width: 18rem;" data-bs-toggle="modal"
                            data-bs-target="#ModalThesis{{ $item->info_ID }}">
                            <div class="card-body bg-light ">
                                <p class="text-muted fst-italic">{{ $item->date_published }}</p>
                                <h4 class="card-title">{{ $item->thesis_title }}</h4>
                                <br>
                                <p class="card-subtitle mb-2 text-muted">{{ $item->thesis_author }}</p>
                            </div>
                            <div class="card-footer border-0"></div>
                        </div>
                        @include('IEMS.Linus.FACULTY.editThesis')
                    </div>
                    @include('IEMS.Linus.FACULTY.displayThesis')
                @endforeach
            </div>

        </div>

        <a class="float" data-bs-toggle="modal" data-bs-target="#ModalAddThesis">
            <i class="bx bx-plus my-float"></i>
        </a>

        @foreach ($thesis as $item)
            <!-- Delete Thesis Modal-->
            <form action="{{ route('deleteThesis', $item->info_ID) }}" method="get" enctype="multipart/form-data">
                <div class="modal fade" id="ModalDeleteThesis{{ $item->info_ID }}" tabindex="-1"
                    aria-labelledby="ModalLabel" aria-hidden="true">
                    {!! csrf_field() !!}
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content  bg-light">
                            <div class="modal-header border-0 text-center">
                                <h5 class="modal-title  text-center">Confirmation</h5>
                                <button type="button" class="btn-close bg-info" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body border-0">
                                <p>Are you sure you want to delete this information card?</p>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach

<!-- Add Thesis Modal-->
<form action="{{ route('storeThesis') }}" method="POST" enctype="multipart/form-data">

  <div class="modal fade" id="ModalAddThesis" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    {!! csrf_field() !!}
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0 text-center">
            <h5 class="modal-title  text-center">Add Thesis Paper Information</h5>
            <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
                <div class="col-8">
                  <div class="row">
                    <div class="col-12">
                      <label for="formGroupExampleInput" class="form-label">Thesis Title</label>
                      <input type="input" class="form-control" placeholder="Enter Thesis Title" name="thesis_title">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><br>
                    <label for="formGroupExampleInput" class="form-label">Thesis Author</label>
                    <input type="input" class="form-control" placeholder="Enter Thesis Author" name="thesis_author">
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <label for="formGroupExampleInput2" class="form-label">Thesis Reference</label>
                  <input type="input" class="form-control" placeholder="Enter Thesis Reference" name="thesis_reference" >
                </div>
                <div class="col-4">
                  <label for="formGroupExampleInput2" class="form-label">Thesis Type</label>
                  <input type="input" class="form-control" placeholder="Enter Thesis Type" name="thesis_type" >
                </div>
                <div class="col-4">
                  <label for="formGroupExampleInput2" class="form-label">Date Published</label>
                  <input type="date" class="form-control" placeholder="Enter Date Published" name="date_published" >
                </div>

                <div class="col-4">
                  <label for="formGroupExampleInput2" class="form-label">Date Added</label>
                  <input type="date" class="form-control" placeholder="Enter Date Published" name="date_added" >
                </div>

                <input type="hidden" class="form-control" name="thesis_status" value="approved">
                <input type="hidden" class="form-control" name="info_type" value="thesis_paper">
                <div class="modal-footer border-0">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
</div>
</div>
</div>
</div>
</div>
</form>

<!--advance search-->
<form action="{{ route('advanceSearchThesis') }}" method="GET" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="modal fade" id="ModalSearch" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content  bg-light">

                        <div class="modal-header border-0 text-center">
                            <h5 class="modal-title  text-center">Advance Search</h5>
                            <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

                  <div class="col-12">
                  <label class="focus-label">Thesis Author:</label>
                    <select class="select floating" id="" name="thesis_author">
                      <option></option>
                      @foreach($searchAuthor as $item)
                      <option value="{{ $item->thesis_author }}">{{$item->thesis_author}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-12">
                  <label class="focus-label">Thesis Reference:</label>
                    <select class="select floating" id="" name="thesis_reference">
                      <option></option>
                      @foreach($searchRef as $item)
                      <option value="{{ $item->thesis_reference }}">{{$item->thesis_reference}}</option>
                      @endforeach
                    </select>
                  </div>

                                    <div class="modal-footer border-0">
                                        <button type="submit" class="btn btn-info text-white">Search</button>
                                        <button type="button" class="btn btn-outline-info"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end of form-->
        </div>
    @endsection
