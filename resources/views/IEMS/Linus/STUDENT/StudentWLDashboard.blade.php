@extends('layouts.S_Layout')
@section('content')
<body>
<div class="home-section">
<div class="home-content">
    <span class="text">Wildlifes</span>
</div>
</div>

    <div class="table-responsive">
                        <table class="table">
                             <thead>
                                <tr>
                                  <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="{{ route('searchWildlife') }}">
                                    <td></td>
                                    <td><a data-bs-toggle="modal" data-bs-target="#ModalSearch"><i class='bx bx-filter-alt'></i></a></td>
                                    <td><input type="search" name="searchWildlife" class="form-control mr-sm2" placeholder="Search Wildlife Name"></td>
                                    <td><button class="btn btn-info btn-sm" type="submit" style="color: white">Search</button></td>
                                  </form>
                                </tr>
                              </thead>
                       </table><!--end of table-->
    </div> <!--end of table-->
      <div class="container-fluid">
        <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
          @foreach($studentDashboard as $item)
          <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
            <div class="card border-dark" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#ModalWildlife{{$item->info_ID}}">
              <img class="card-img-top "src="{{ asset($item->wildlife_pic) }}" alt="Card image cap">
                <div class="card-body bg-light text-primary">
                  <h5 class="card-title text-center fst-italic">({{$item->wildlife_scientific_name}})</h5>
                  <p class="card-text text-center">{{$item->wildlife_name}}</p>
                </div>
            </div>
           
          </div>
          @include('IEMS.Linus.STUDENT.displayWildlife')
          @endforeach
        </div><!--end of catalog-->
        <!-- Add Button -->
        
      </div><!--end of class container fluid-->

<!--advance search-->
<form action="{{ route('advanceSearchWildlife') }}" method="GET" enctype="multipart/form-data">
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
                  <label class="focus-label">Critter Class:</label>
                    <select class="select floating" id="" name="wildlife_class">
                      <option></option>
                      @foreach($wildlifes as $item)
                      <option value="{{ $item->wildlife_class }}">{{$item->wildlife_class}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-12">
                  <label class="focus-label">Critter Specie:</label>
                    <select class="select floating" id="" name="wildlife_species">
                      <option></option>
                      @foreach($wildlifes as $item)
                      <option value="{{ $item->wildlife_species }}">{{$item->wildlife_species}}</option>
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
</body>
@endsection

  
