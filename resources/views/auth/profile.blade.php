@extends('layouts.master')
@section('title', 'dashboard')
@section('body')
<div class="row">
    <div class="col-12">
        <div class="profile-header mb-2">
            <div class="relative">

                <div class="profile-img-container d-flex align-items-center justify-content-left">
                    <img src="../../../app-assets/images/profile/user-uploads/user-13.jpg" class="rounded-circle img-border box-shadow-1" alt="Card image">
                    <div class="card col-12">
                <div class="card-header">
                    <h4>About</h4>
                    <i class="feather icon-more-horizontal cursor-pointer"></i>
                </div>
                <div class="card-body col-12">
                    <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p>
                    <div class="mt-1">
                        <h6 class="mb-0">Joined:</h6>
                        <p>November 15, 2015</p>
                    </div>
                    <div class="mt-1">
                        <h6 class="mb-0">Lives:</h6>
                        <p>New York, USA</p>
                    </div>
                    <div class="mt-1">
                        <h6 class="mb-0">Email:</h6>
                        <p>bucketful@fiendhead.org</p>
                    </div>
                    <div class="mt-1">
                        <h6 class="mb-0">Website:</h6>
                        <p>www.pixinvent.com</p>
                    </div>
                    <div class="mt-1">
                        <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25 waves-effect waves-light"><i class="feather icon-facebook"></i></button>
                        <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25 waves-effect waves-light"><i class="feather icon-twitter"></i></button>
                        <button type="button" class="btn btn-sm btn-icon btn-primary p-25 waves-effect waves-light"><i class="feather icon-instagram"></i></button>
                    </div>
                </div>

            </div>
                </div>
            </div>

            

        </div>
    </div>
    <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Seller personal details</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                                            <label for="first-name-column">First Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                                            <label for="last-name-column">Last Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                                            <label for="city-column">City</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                                            <label for="country-floating">Country</label>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                                            <label for="email-id-column">Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                <fieldset class="form-group">
                                                 
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Select Profile picture</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                                   
                                                    </div>
                                         
                                                        <h4 class="card-title">Bank details</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="first-name-column" class="form-control" placeholder="Bank Account no" name="fname-column">
                                                            <label for="first-name-column">Bank Account no</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="last-name-column" class="form-control" placeholder="IFSC code" name="lname-column">
                                                            <label for="last-name-column">IFSC code</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="city-column" class="form-control" placeholder="Bank holder name" name="city-column">
                                                            <label for="city-column">Bank holder name</label>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="Password" id="email-id-column" class="form-control" name="email-id-column" placeholder="Password">
                                                            <label for="email-id-column">Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="Password" id="email-id-column" class="form-control" name="email-id-column" placeholder="Repeat password">
                                                            <label for="email-id-column">Repeat Password</label>
                                                        </div>
                                                  
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
</div>
@section('js')
<script src="../../../app-assets/js/scripts/pages/user-profile.js"></script>
@stop()
@endsection()