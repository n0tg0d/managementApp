@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Supplier</h4>

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


                        <form method="post" action="{{ route('supplier.store')}}" id="myForm">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Name</label>
                                <div class="form-group col-sm-10">
                                    <input name="name"  class="form-control" type="text">
                                </div>
                            </div>                        
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Phone Number</label>
                                <div class="form-group col-sm-10">
                                    <input name="phone_number"  class="form-control" type="text">
                                </div>
                            </div>                        
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Email</label>
                                <div class="form-group col-sm-10">
                                    <input name="email"  class="form-control" type="email">
                                </div>
                            </div>                        
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Adress</label>
                                <div class="form-group col-sm-10">
                                    <input name="adress"  class="form-control" type="text">
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

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },
                phone_number: {
                    required : true,
                },
                email: {
                    required : true,
                },
                adress: {
                    required : true,
                }, 
            },
            messages :{
                name: {
                    required : 'Please Enter Your Name',
                },
                phone_number: {
                    required : 'Please Enter Your Phone Number',
                },
                email: {
                    required : 'Please Enter Your Email',
                },
                adress: {
                    required : 'Please Enter Your Adress',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection