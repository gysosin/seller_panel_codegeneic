@extends('layouts.master')
@section('title', 'dashboard')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
<style>
    .tgl {
        position: relative;
        display: inline-block;
        height: 20px;
        cursor: pointer;
    }

    .tgl>input {
        position: absolute;
        opacity: 0;
        z-index: -1;
        /* Put the input behind the label so it doesn't overlay text */
        visibility: hidden;
    }

    .tgl .tgl_body {
        width: 50px;
        height: 20px;
        background: white;
        border: 1px solid #dadde1;
        display: inline-block;
        position: relative;
        border-radius: 50px;
    }

    .tgl .tgl_switch {
        width: 20px;
        height: 20px;
        display: inline-block;
        background-color: white;
        position: absolute;
        left: -1px;
        top: -1px;
        border-radius: 50%;
        border: 1px solid #ccd0d6;
        -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
        -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.13);
        -moz-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), -moz-transform 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -o-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), -o-transform 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -webkit-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), -webkit-transform 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), transform 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        z-index: 1;
    }

    .tgl .tgl_track {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        border-radius: 50px;
    }

    .tgl .tgl_bgd {
        position: absolute;
        right: -10px;
        top: 0;
        bottom: 0;
        width: 50px;
        -moz-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), right 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -o-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), right 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -webkit-transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), right 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        transition: left 250ms cubic-bezier(0.34, 1.61, 0.7, 1), right 250ms cubic-bezier(0.34, 1.61, 0.7, 1);
        background: #439fd8 url("http://petelada.com/images/toggle/tgl_check.png") center center no-repeat;
    }

    .tgl .tgl_bgd-negative {
        right: auto;
        left: -40px;
        background: white url("http://petelada.com/images/toggle/tgl_x.png") center center no-repeat;
    }

    .tgl:hover .tgl_switch {
        border-color: #b5bbc3;
        -moz-transform: scale(1.06);
        -ms-transform: scale(1.06);
        -webkit-transform: scale(1.06);
        transform: scale(1.06);
    }

    .tgl:active .tgl_switch {
        -moz-transform: scale(0.95);
        -ms-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
    }

    .tgl> :not(:checked)~.tgl_body>.tgl_switch {
        left: 30px;
    }

    .tgl> :not(:checked)~.tgl_body .tgl_bgd {
        right: -40px;
    }

    .tgl> :not(:checked)~.tgl_body .tgl_bgd.tgl_bgd-negative {
        right: auto;
        left: -10px;
    }
</style>
@section('body')

<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All products</h4>
                    <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                 <a href='/dashboard-addproduct'><button type="button"  class="btn mb-1 btn-primary btn-lg btn-block waves-effect waves-light float-right">Add a product</button></a>
                                                </div>
                                            </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">

                        <div class="table-responsive">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>S.NO.</th>
                                        <th>Product Name</th>
                                        <th>Purchase Price</th>
                                        <th>Selling price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a href='/dashboard-productoverview'>Xiaomi MI 10</a></td>
                                        <td>50000 inr</td>
                                        <td>57000 inr</td>

                                        <td><label class="tgl">
                                                <input type="checkbox" checked />
                                                <span class="tgl_body">
                                                    <span class="tgl_switch"></span>
                                                    <span class="tgl_track">
                                                        <span class="tgl_bgd"></span>
                                                        <span class="tgl_bgd tgl_bgd-negative"></span>
                                                    </span>
                                                </span>
                                            </label></td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                                        <a class="dropdown-item" href='/dashboard-addproduct'>Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                        <th>S.NO.</th>
                                        <th>Product Name</th>
                                        <th>Purchase Price</th>
                                        <th>Selling price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Column selectors with Export Options and print table -->
@section('js')
<script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="../../../app-assets/js/scripts/datatables/datatable.js"></script>
@stop
@endsection()