@extends('layouts.F_Layout')
@section('content')
<body>
<div class="home-section" style="height: 100%">
  <div class="home-content">
    <span class="text">Journal Articles</span>
  </div>
</div>  
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="{{ route('searchJournal') }}">
            <td></td>
            <td><a data-bs-toggle="modal" data-bs-target="#ModalSearch"><i class='bx bx-filter-alt'></i></a></td>
            <td><input type="search" name="searchJournal" class="form-control mr-sm2" placeholder="Search Journal Title"></td>
            <td><button class="btn btn-info btn-sm" type="submit">Search</button></td>
          </form>
        </tr>
      </thead>
    </table>
  </div> <!--Search Bar-->
    <div class="container-fluid">
      <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
        @foreach($journal as $item)
            <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch" data-bs-toggle="modal" data-bs-target="#ModalJournal{{$item->info_ID}}">
                <div class="card border-dark" style="width: 18rem;">
                      <div class="card-body bg-light ">
                        <p class="text-muted fst-italic">{{$item->date_published }}</p>
                        <h4 class="card-title">{{$item->journal_title}}</h4>
                        <br>
                        <p class="card-subtitle mb-2 text-muted">{{$item->journal_author}}</p>
                      </div>
                    <div class="card-footer border-0"></div>
                    @include('IEMS.Linus.FACULTY.editJournal')  
                </div>
            </div>
          @include('IEMS.Linus.FACULTY.displayJournal')
        @endforeach  
      </div>
    </div>   

<!-- Delete journal Modal-->
@foreach($journal as $item)
<form action="{{ route('deleteJournal',$item->info_ID) }}" method="get" enctype="multipart/form-data">
  <div class="modal fade" id="ModalDeleteJournal{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    {!! csrf_field() !!}
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 text-center">
              <h5 class="modal-title  text-center">Confirmation</h5>
              <button type="button" class="btn-close bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
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
<!--advance search-->
<form action="{{ route('advanceSearchJournal') }}" method="GET" enctype="multipart/form-data">
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
                  <label class="focus-label">Journal Reference:</label>
                    <select class="select floating" id="" name="journal_reference">
                      <option></option>
                      @foreach($journal as $item)
                      <option value="{{ $item->journal_reference }}">{{$item->journal_reference}}</option>
                      @endforeach
                    </select>
                  </div> 

                  <div class="col-12">
                  <label class="focus-label">Date Published:</label>
                    <select class="select floating" id="" name="date_published">
                      <option></option>
                      @foreach($journal as $item)
                      <option value="{{ $item->date_published }}">{{$item->date_published}}</option>
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



  
