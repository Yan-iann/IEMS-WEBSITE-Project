@extends('layouts.S_Layout')
@section('content')
    @if (Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    @if (Session::get('sucess'))
        <div class="alert alert-success">
            {{ Session::get('sucess') }}
        </div>
    @endif

    <div class="container-fluid" style="height: 100%">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Profile</span>
        </div>
        @foreach ($profile as $item)
            <div class="container-fluid">
                <div class="row g-4 m-4 p-0 d-flex justify-content-center align-items-stretch g-l">

                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                        <img style="width: 200px;"class="imageWildlife" src="{{ asset($item->profile_pic) }}"
                            alt="No profile picture">
                    </div>

                    <div class="col-12 col-lg-8">
                        <div class="row g-1">

                            <div class="col-12  col-lg-4">
                                <label for="formGroupExampleInput" class="form-label">First Name</label>
                                <h3>{{ $item->name }}</h3>
                            </div>

                            <div class="col-12  col-lg-4">
                                <label for="formGroupExampleInput" class="form-label">Middle Name</label>
                                <h3>{{ $item->middle_name }}</h3>
                            </div>

                            <div class="col-12  col-lg-4">
                                <label for="formGroupExampleInput" class="form-label">Last Name</label>
                                <h3>{{ $item->last_name }}</h3>
                            </div>

                            <div class="col-12">
                                {{-- Filler row --}}
                            </div>

                            <div class="col-12  col-lg-6">
                                <label for="formGroupExampleInput" class="form-label">Email</label>
                                <h3>{{ Auth::user()->email }}</h3>
                            </div>

                            <div class="col-12">
                                {{-- Filler row --}}
                            </div>


                            <div class="col-12"><br>
                                <!-- Filler -->
                            </div>
                            <div class="col-12"><br>
                                <label for="formGroupExampleInput" class="form-label">Password</label>
                                <h3>*********</h3>
                            </div>

                            <div class="col-12"><br>
                                <!-- Filler -->
                            </div>

                            <div class="col-12 d-flex jsutify-content-end">
                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#ModalEditProf{{ $item->id }}">
                                    <i class='bx bxs-edit'></i>
                                    Edit Profile
                                </button>

                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                          data-bs-target="#ModalEditPass{{ $item->id }}">
                                          <i class='bx bxs-edit'> </i>
                                          Change Password
                                      </button>
                            </div>
                        </div>
                        <!--end og row 1-->
                    </div>
                    <!--end og col 1-->
                </div>
            </div>
            <!--end of container-->

            <!-- Edit User Modal-->
            <form action="{{ route('editSprofile', $item->id) }}" method="post" enctype="multipart/form-data">
                <div class="modal fade" id="ModalEditProf{{ $item->id }}" tabindex="-1" aria-labelledby="ModalLabel"
                    aria-hidden="true">
                    {!! csrf_field() !!}
                    <div class="modal-dialog modal-dialog-centered modUal-dialog-scrollable modal-lg">
                        <div class="modal-content  bg-light">

                            <div class="modal-header border-0 text-center">
                                <h5 class="modal-title  text-center">User Account Details</h5>
                                <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

                                        <div class="col-12">
                                            <label for="profile">Profile Picture:</label>
                                            <input type="file" id="profile_pic" class="form-control"
                                                placeholder="Profile Picture" name="profile_pic">
                                        </div>
                                        <div class="col-12">
                                            <label for="formGroupExampleInput" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $item->name }}" required>
                                        </div>

                                        <div class="col-12">
                                            <label for="formGroupExampleInput" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" name="middle_name"
                                                value="{{ $item->middle_name }}">
                                        </div>


                                        <div class="col-12">
                                            <label for="formGroupExampleInput" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="last_name"
                                                value="{{ $item->last_name }}" required>
                                        </div>


                                        <div class="col-12 ">
                                            <label for="formGroupExampleInput2" class="form-label">Email Address</label>
                                            <input type="input" class="form-control" name="email"
                                                value="{{ $item->email }}" readonly>
                                        </div>



                                        <div class="modal-footer border-0">
                                            <button type="submit" class="btn btn-info"
                                                style="color:white">Update</button>
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

            <form action="{{ route('updatePassStudent', $item->id) }}" method="post" enctype="multipart/form-data">
  
  <div class="modal fade" id="ModalEditPass{{ $item->id }}" tabindex="-1"
      aria-labelledby="ModalLabel" aria-hidden="true">
      {!! csrf_field() !!}
      <div class="modal-dialog modal-dialog-centered modUal-dialog-scrollable modal-lg">
          <div class="modal-content  bg-light">

              <div class="modal-header border-0 text-center">
                  <h5 class="modal-title  text-center">Change Password</h5>
                  <button type="button" class="btn-close btn-info bg-info"
                      data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="container-fluid">
                      <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

                                  <div class="col-12">
                                      <label for="formGroupExampleInput"
                                          class="form-label">New Password</label>
                                      <input id="password" type="password" class="form-control"
                                          name="password"  required autocomplete="new-password">
                                  </div>

                                  <div class="col-12">
                                      <label for="formGroupExampleInput"
                                          class="form-label">Confirm Password</label>
                                      <input id="password_confirmation" type="password" class="form-control"
                                      name="password_confirmation" required>
                                  </div>

                                <div class="modal-footer border-0">
                                    <button type="submit" class="btn btn-info"
                                        style="color:white">Change Password</button>
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
        @endforeach
    </div>
@endsection
