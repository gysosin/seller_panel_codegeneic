use Illuminate\Support\Facades\Session;
@extends('layouts.auth')
@section('title', 'dashboard')
@section('body')



<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div>
          
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <form action="{{route('store')}}" method="POST" class="form">
                                @csrf
                                <div class="col-lg-12 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="col-md-6 col-12">
                                            <b>
                                                <h4>Select one option</h4>
                                            </b>
                                            <fieldset class="form-group">
                                                <script type="text/javascript">
                                                    function ShowHideDiv() {
                                                        var ddlPassport = document.getElementById("ddlPassport");
                                                        var dvPassport = document.getElementById("dvPassport");
                                                        dvPassport.style.display = ddlPassport.value == "Y" ? "block" : "none";
                                                        var dvPassport2 = document.getElementById("dvPassport2");
                                                        dvPassport2.style.display = ddlPassport.value == "Y" ? "block" : "none";

                                                    }
                                                </script>
                                                <select class="form-control" id="ddlPassport" onchange="ShowHideDiv()">
                                                    <option>Select one option</option>
                                                    <option value="Y">I have GSTIN</option>
                                                    <option value="N">I don't have GSTIN</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Personal Details</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">

                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-6 col-12">
                                                                <label>Name</label>
                                                                <div class="form-label-group">
                                                                    <input type="text" id="name" class="form-control" placeholder="Name" name="name">
                                                                    <label for="name">Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>Email</label>
                                                                <div class="form-label-group">
                                                                    <input type="email" id="email" class="form-control" placeholder="Email" name="email">
                                                                    <label for="email">Email</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>Mobile Number</label>
                                                                <div class="form-label-group">
                                                                    <input type="text" id="mobile" class="form-control" placeholder="Mobile number" name="mobile">
                                                                    <label for="mobile">Mobile number</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>country</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="country" name="country">

                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>State</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="state" name="state">

                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>city</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="city" name="city">

                                                                    </select>
                                                                </fieldset>
                                                            </div>

                                                        </div>
                                                        <h4 class="card-title">Business details</h4>
                                                        <div class="row">


                                                            <div class="col-md-6 col-12" id="dvPassport" style="display: none">
                                                                <label>GSTIN NUMBER</label>
                                                                <div class="form-label-group">

                                                                    <input type="text" id="gstin" class="form-control" placeholder="GSTIN NUMBER" name="gstin">
                                                                    <label for="gstin">GSTIN NUMBER</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12" id="dvPassport2" style="display: none">
                                                                <label>Company Pancard</label>
                                                                <div class="form-label-group">

                                                                    <input type="text" id="cpancard" class="form-control" placeholder="Company Pancard" name="cpancard">
                                                                    <label for="cpancard">Comapany Pancard</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>FIRM NAME</label>
                                                                <div class="form-label-group">
                                                                    <input type="TEXT" id="firmname" class="form-control" placeholder="FIRM NAME" name="firmname">
                                                                    <label for="firmname">FIRM NAME</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-12">
                                                                <label>Personal PANCARD</label>
                                                                <div class="form-label-group">
                                                                    <input type="text" id="ppancard" class="form-control" placeholder="Personal PANCARD" name="ppancard">
                                                                    <label for="ppancard">Personal PANCARD</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>Adhar Card</label>
                                                                <div class="form-label-group">
                                                                    <input type="text" id="adhar" class="form-control" placeholder="Adhar Card" name="adhar">
                                                                    <label for="adhar">Adhar Card</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12" id="dvPassport" style="display: none">
                                                                <label>COMPANY PANCARD</label>
                                                                <div class="form-label-group">
                                                                    <input type="text" id="mobile" class="form-control" placeholder="COMPANY PANCARD" name="mobile">
                                                                    <label for="mobile">COMPANY PANCARD</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>BUSINESS TYPE</label>
                                                                <div class="form-label-group">
                                                                    <input type="text" id="btype" class="form-control" placeholder="BUSNINESS TYPE" name="btype">
                                                                    <label for="btype">BUSINESS TYPE</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>PINCODE</label>
                                                                <div class="form-label-group">
                                                                    <input type="text" id="pincode" class="form-control" placeholder="PINCODE" name="pincode">
                                                                    <label for="pincode">PINCODE</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-12">
                                                                <label>Address</label>
                                                                <div class="form-label-group">
                                                                    <textarea class="form-control" aria-label="With textarea" placeholder="Full Address" id="faddress" name="faddress"></textarea>
                                                                    <label for="faddress">Full Address</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 col-12">
                                                                <h4 class="card-title">Bank Details</h4>
                                                            </div>
                                                            <div class="row col-md-12 col-12">


                                                                <div class="col-md-6 col-12">
                                                                    <label>Bank Account Number</label>
                                                                    <div class="form-label-group">
                                                                        <input type="text" id="bankacc" class="form-control" placeholder="Bank Account Number" name="bankacc">
                                                                        <label for="bankacc">Bank Account Number</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label>Bank IFSC CODE</label>
                                                                    <div class="form-label-group">
                                                                        <input type="TEXT" id="bankifsc" class="form-control" placeholder="Bank IFSC CODE" name="bankifsc">
                                                                        <label for="bankifsc">Bank IFSC CODE</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                  <h4 class="card-title">Upload Documents</h4>
                                                            <div class="row">


                                                                 <div class="col-md-6 col-12">

                                                                             <div class="form-label-group">

                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="cpancardu" name="cpancardu">
                                                                            <label class="custom-file-label" for="cpancardu">Company Pan Card</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    
                                                                    <div class="form-label-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="gstdoc" name="gstdoc">
                                                                            <label class="custom-file-label" for="gstdoc">GST Documents</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">

                                                                    <div class="form-label-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="cancelledcheque" name="cancelledcheque">
                                                                            <label class="custom-file-label" for="cancelledcheque">Cancelled cheque</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">

                                                                    <div class="form-label-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="psphoto" name="psphoto">
                                                                            <label class="custom-file-label" for="psphoto">Passport size photo</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">

                                                                    <div class="form-label-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="signature" name="signature">
                                                                            <label class="custom-file-label" for="signature">Signature</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="col-12">
                                                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Register</button>
                                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script>
        var myObj = {
            init: function() {
                var that = this;
                this.load_country();
                document.getElementById("country").addEventListener("change", function() {
                    that.load_state(this.value);
                });
                document.getElementById("state").addEventListener("change", function() {
                    that.load_city(this.value);
                });
            },
            load_country: function() {
                var xhr = new XMLHttpRequest();

                xhr.open("GET", "http://194.195.118.85:9955/api/countries", true);

                xhr.onload = function() {
                    var countries = JSON.parse(xhr.responseText);
                    countries.forEach(function(value) {
                        var op = document.createElement("option");
                        op.innerText = value.name;
                        op.setAttribute("value", value.id);
                        document.getElementById("country").appendChild(op);
                    });
                };
                xhr.send();
            },
            load_state: function(id) {
                document.getElementById("state").innerHTML = '';
                var xhr = new XMLHttpRequest();

                xhr.open("GET", "http://194.195.118.85:9955/api/states/" + id, true);

                xhr.onload = function() {
                    var countries = JSON.parse(xhr.responseText);
                    countries.forEach(function(value) {
                        var op = document.createElement("option");
                        op.innerText = value.name;
                        op.setAttribute("value", value.id);
                        document.getElementById("state").appendChild(op);
                    });
                };
                xhr.send();
            },
            load_city: function(id) {
                document.getElementById("city").innerHTML = '';
                var xhr = new XMLHttpRequest();

                xhr.open("GET", "http://194.195.118.85:9955/api/cities/" + id, true);

                xhr.onload = function() {
                    var countries = JSON.parse(xhr.responseText);
                    countries.forEach(function(value) {
                        var op = document.createElement("option");
                        op.innerText = value.name;
                        op.setAttribute("value", value.id);
                        document.getElementById("city").appendChild(op);
                    });
                };
                xhr.send();
            }
        }
        myObj.init();
    </script>
    @endsection()