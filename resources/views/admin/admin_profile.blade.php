@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Name : {{ $adminData->name }}</h4>
                    <hr>
                    <h4 class="card-title">Email : {{ $adminData->email }}</h4>
                    <hr>
                    <h4 class="card-title">UserName : {{ $adminData->username }}</h4>
                    <hr>
                    <h4 class="card-title">Phone : {{ $adminData->phone_number }}</h4>
                    <hr>
                    <h4 class="card-title">Adresse : {{ $adminData->adresse }}</h4>
                    <hr>
                   <a class="btn btn-primary btn-rounded waves-effect waves-light" href="{{ route('edit.profile') }}">Edit Profile </a>
                </div>
            </div>
        </div>

    </div>

    </div>
</div>   


@endsection