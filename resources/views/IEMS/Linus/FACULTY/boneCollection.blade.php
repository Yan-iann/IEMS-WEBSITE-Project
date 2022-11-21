@extends('layouts.F_Layout')
@section('content')

    <div class="container-fluid">

        <div class="row d-flex justify-content-between">
        {{-- Page Name, and Burger Icon. AND Search Bar --}}
                             @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail')}}
                                    </div>
                             @endif
                             @if(Session::get('sucess'))
                                    <div class="alert alert-success">
                                      {{ Session::get('sucess')}}
                                    </div>
                                @endif
            <div class="col-12 col-md-6 col-lg-6 order-sm-2 order-md-1">
                <div class="home-content">
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                        <i class='bx bx-menu'></i>
                        <span class="text">Whale Bone Collection</span>
                    </div>
                </div>
            </div>

                    <div class="col-12 col-md-6 col-lg-6 order-sm-1 order-md-2">
                        <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="{{ route('searchBone') }}">
                            <div class="input-group">
                                <input type="search" name="searchBone" class="form-control mr-sm2"
                                    placeholder="Search Bone Collection">
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
        {{-- informationcards --}}
        <section class="col-12">
        <div class="container-fluid">
            <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
                @foreach ($wildlifes as $item)
                    <div class="col-12 col-md-4 col-lg-3 d-flex align-items-stretch">
                        <div class="card" style="width: 18rem;" data-bs-toggle="modal"
                            data-bs-target="#ModalWildlife{{ $item->info_ID }}">
                            <img class="card-img-top "src="{{ asset($item->wildlife_pic) }}" alt="Card image cap">
                            <div class="card-body bg-light text-primary">
                                <h5 class="card-title text-center">{{ $item->wildlife_name }}</h5>
                                <p class="card-text text-center">({{ $item->wildlife_scientific_name }})</p>
                            </div>
                        </div>
                        @include('IEMS.Linus.FACULTY.editBoneCollection')
                    </div>
                    @include('IEMS.Linus.FACULTY.displayBoneCollection')
                @endforeach
            </div>
            <!--end of catalog-->
            <!-- Add Button -->
            <a class="float" data-bs-toggle="modal" data-bs-target="#ModalAddWl">
                <i class="bx bx-plus my-float"></i>
            </a>
        </div>
        <!--end of class container fluid-->
        </section>

        <!-- Delete Wildlife Modal-->
        @foreach ($wildlifes as $item)
            <form action="{{ route('deleteBone', $item->info_ID) }}" method="get" enctype="multipart/form-data">
                <div class="modal fade" id="ModalDeleteWl{{ $item->info_ID }}" tabindex="-1" aria-labelledby="ModalLabel"
                    aria-hidden="true">
                    {!! csrf_field() !!}
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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

        <!-- Add Bone Collection Modal-->
        <form action="{{ route('storeDataBone') }}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="modal fade" id="ModalAddWl" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content  bg-light">

                        <div class="modal-header border-0 text-center">
                            <h5 class="modal-title  text-center">Add Whale Bone Information</h5>
                            <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
                                    <div class="col-12">
                                        <label for="wildlife_pic">Bone Picture:</label>
                                        <input type="file" id="wildlife_pic" class="form-control"
                                            placeholder="Wildlife Picture" name="wildlife_pic" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="formGroupExampleInput" class="form-label">Bone Name</label>
                                        <input type="input" class="form-control" placeholder="Enter Wildlife Name"
                                            name="wildlife_name" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="formGroupExampleInput" class="form-label">Bone Scientific Name</label>
                                        <input type="input" class="form-control"
                                            placeholder="Enter Wildlife Scientific Name" name="wildlife_scientific_name" required>
                                    </div>

                                    <div class="-12 col-md-4">
                                        <label for="formGroupExampleInput2" class="form-label">Bone Genus</label>
                                        <input type="input" class="form-control" placeholder="Enter Wildlife Genus"
                                            name="wildlife_genus" name="wildlife_genus" required>
                                    </div>

                                    <div class="-12 col-md-4">
                                        <label for="formGroupExampleInput2" class="form-label">Date Added</label>
                                        <input type="date" class="form-control" placeholder="Enter Date"  name="date_added"  name="date_added" required>
                                    </div>
                                    <!--Hidden Inputs-->
                                    <input type="hidden" class="form-control" name="info_type" value="wildlife">
                                    <input type="hidden" class="form-control" name="wildlife_type" value="Bone">
                                    <input type="hidden" class="form-control"  name="wildlife_status" value="Approved">

                                    <div class="col-12">
                                        <label for="exampleFormControlinputarea1" class="form-label">Description</label>
                                        <textarea class="form-control" name="wildlife_desc" rows="3" placeholder="Enter Wildlife Description" required></textarea>
                                    </div>
                  <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-info text-white">Submit</button>
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
            </div>
</div>
</div>
</div>
</div>
        </form> <!--end of form-->

<!--advance search-->
<form action="{{ route('advanceSearchBone') }}" method="GET" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="modal fade" id="ModalSearch" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content  bg-light">

            <div class="modal-header border-0 text-center">
              <h5 class="modal-title  text-center">Advance Search</h5>
              <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <div class="container-fluid">
                <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

                  <div class="col-12">
                  <label class="focus-label">Bone Genus:</label>
                    <select class="select floating" id="" name="wildlife_genus">
                      <option></option>
                      @foreach($searchGenus as $item)
                      <option value="{{ $item->wildlife_genus }}">{{$item->wildlife_genus}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-12">
                  <label class="focus-label">Bone Added Date:</label>
                    <select class="select floating" id="" name="date_added">
                      <option></option>
                      @foreach($searchDate as $item)
                      <option value="{{ $item->date_added }}">{{$item->date_added}}</option>
                      @endforeach
                    </select>
                  </div>


                  <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-info text-white">Search</button>
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</form><!--end of form-->
@endsection
