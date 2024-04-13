@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Change Password</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href=" {{ route('admin.profile') }}">Change Password</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                        @if (count($errors))
                            @foreach ( $errors->all() as $errors )
                               <p class="alert alert-danger alert-dismissible fade show">{{ $errors }}</p> 
                            @endforeach
                        @endif


                        <form method="post" action="{{ route('update.password')}}" >
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Cuurent Password</label>
                                <div class="col-sm-10">
                                    <input name="currentpassword"  class="form-control" type="password" id="currentpassword">
                                </div>
                            </div>                        
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input name="newpassword"  class="form-control" type="password" id="newpassword">
                                </div>
                            </div>                        
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input name="confirm_password"  class="form-control" type="password" id="confirm_password">
                                </div>
                            </div>                        
                            <!-- end row -->

                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Confirm<i class="ri-check-line align-middle me-2"></i> </button>
                                    </div>
                            </div>
                        </form>    
                        <!-- end form -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
    </div>
</div>   


@endsection