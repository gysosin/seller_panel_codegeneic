@extends('layouts.master')
@section('title', 'dashboard')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/data-list-view.css')}}">
@section('body')

<section id="data-list-view" class="data-list-view-header">
    <!-- DataTable starts -->
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                    <th>S.NO.</th>
                    <th>Order ID</th>
                    <th>Customer name</th>
                    <th>Phone No.</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>od12546</td>
                    <td class="product-name">Avinash</td>
                    <td>9586521425</td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">unpaid</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">on hold</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown dropright">
                            <button class="btn bg-gradient-primary dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton101" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                <a class="dropdown-item" href='/dashboard-orderview'>View</a>
                                <a class="dropdown-item" href="#">Invoice</a>

                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>od12546</td>
                    <td class="product-name">Avinash</td>
                    <td>9586521425</td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">unpaid</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">on hold</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown dropright">
                            <button class="btn bg-gradient-primary dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton101" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                <a class="dropdown-item" href='/dashboard-orderview'>View</a>
                                <a class="dropdown-item" href="#">Invoice</a>

                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>od12546</td>
                    <td class="product-name">Avinash</td>
                    <td>9586521425</td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">unpaid</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">on hold</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown dropright">
                            <button class="btn bg-gradient-primary dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton101" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                <a class="dropdown-item" href='/dashboard-orderview'>View</a>
                                <a class="dropdown-item" href="#">Invoice</a>

                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>od12546</td>
                    <td class="product-name">Avinash</td>
                    <td>9586521425</td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">unpaid</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">on hold</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown dropright">
                            <button class="btn bg-gradient-primary dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton101" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                <a class="dropdown-item" href='/dashboard-orderview'>View</a>
                                <a class="dropdown-item" href="#">Invoice</a>

                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>od12546</td>
                    <td class="product-name" href='/dashboard-orderview'>Avinash</td>
                    <td>9586521425</td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">unpaid</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">on hold</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown dropright">
                            <button class="btn bg-gradient-primary dropdown-toggle mr-1 mb-1 waves-effect waves-light" type="button" id="dropdownMenuButton101" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                <a class="dropdown-item" href='/dashboard-orderview'>View</a>
                                <a class="dropdown-item" href="#">Invoice</a>

                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- DataTable ends -->


    <!-- add new sidebar ends -->
</section>


@section('js')
<script src="{{asset('/app-assets/js/scripts/ui/data-list-view.js')}}"></script>
<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->
@stop

@endsection()