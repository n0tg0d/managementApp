@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'
                    .$adminData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
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