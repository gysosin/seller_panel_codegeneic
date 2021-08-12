@extends('layouts.master')
@section('title', 'dashboard')
@section('body')
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Invoice</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">Order id
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">
                     
                        <!-- Invoice Recipient Details -->
                        
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-md-6 col-sm-12 text-left">
                                <h5>Order Details</h5>
                                <div class="recipient-info my-2">
                                    <p>Demo Product</p>
                                    <p>Quantity</p>
                                    <p>Price</p>
                                 
                                </div>
                              <!--   <div class="recipient-contact pb-2">
                                <h5>Customer Details</h5>
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        peter@mail.com
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        +91 988 888 8888
                                    </p>
                                </div> -->
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <h4>Customer details</h4>
                                <div class="company-info my-2">
                                   
                                <p>Customer Name</p>
                                    <p>9 N. Sherwood Court</p>
                                    <p>Elyria, OH</p>
                                    <p>94203</p>
                                </div>
                                <div class="company-contact">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                       Customeremail@email.com
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        +91 999 999 9999
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Recipient Details -->

                        <!-- Invoice Items Details -->
                        <div id="invoice-items-details" class="pt-1 invoice-items-table">
                            <div class="row">
                                <div class="table-responsive col-sm-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>discount</th>
                                                <th>status</th>
                                                <th>Total</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="sda"></td>
                                                <td>Demo product</td>
                                                <td>2500inr</td>
                                                <td>20%</td>
                                                <td><div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-outline-success dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                pending
                                            </button>
                                            <div class="dropdown-menu">
                                            
                                                <a class="dropdown-item" href="#">Delivered</a>
                                                <a class="dropdown-item" href="#">Failed</a>
                                    
                                            </div>
                                        </div></td>
                                        <td>2300inr</td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="invoice-total-details" class="invoice-total-table">
                            <div class="row">
                                <div class="col-7 offset-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>Price</th>
                                                    <td>2500inr</td>
                                                </tr>
                                                <tr>
                                                    <th>DISCOUNT (20%)</th>
                                                    <td>200inr</td>
                                                </tr>
                                                <tr>
                                                    <th>TOTAL</th>
                                                    <td>2300inr</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Footer -->
                        <div id="invoice-footer" class="text-right pt-3">
                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">cancel product</a>
                                                    <a class="dropdown-item" href="#">download invoice</a>
                                                                                                 </div>
                                            </div>
                                        </div>
                        </div>
                        <!--/ Invoice Footer -->

                    </div>
                </section>

            </div>

    <!-- END: 

@endsection()
