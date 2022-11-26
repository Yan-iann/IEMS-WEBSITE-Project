@extends('layouts.A_Layout')
@section('content')


<div class="container-fluid">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">All User Accounts</span>
    </div>
</div>

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
<br>
<div class="table">
    <table class="table table-hover mg-b-0 text-center" id="maintables">
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>User Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $user)
            <tr>
                <td class="align-middle">{{ $user->id }}</td>
                <td class="align-middle">{{ $user->name }}</td>
                <td class="align-middle">{{ $user->email }}</td>
                <td class="align-middle">{{ $user->user_type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection