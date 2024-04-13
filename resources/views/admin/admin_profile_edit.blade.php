@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href=" {{ route('admin.profile') }}">Profile</a></li>
                            <li class="breadcrumb-item active">Edit Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <form method="post" action="{{ route('store.profile')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">UserName</label>
                                <div class="col-sm-10">
                                    <input name="username" value="{{$editData->username}}" class="form-control" type="text" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input name="name" value="{{$editData->name}}" class="form-control" type="search"  id="example-search-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" value="{{$editData->email}}" class="form-control" type="email"  id="example-email-input">
                                </div>
                            </div>
                            <!-- end row -->
                     
                            <div class="row mb-3">
                                <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                <div class="col-sm-10">
                                    <input name="phone_number" value="{{$editData->phone_number}}" class="form-control" type="tel"  id="example-tel-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Adresse</label>
                                <div class="col-sm-10">
                                    <input name="adresse" value="{{$editData->adresse}}" class="form-control" type="text" id="example-text-input">
                                </div>
                            </div>        
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-10">
                                    <input name="profile_image" class="form-control" type="file"  id="example-text-input">
                                </div>
                            </div>      
                            <!-- end row -->
                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit<i class="ri-check-line align-middle me-2"></i> </button>
                                    </div>
                            </div>
                        </form>    
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
    </div>
</div>   


@endsection