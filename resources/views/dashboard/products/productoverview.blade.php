@extends('layouts.master')
@section('title', 'dashboard')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
@section('body')
<div class="col-12">
    <div class="profile-header mb-2">
        <div class="relative">

            <div class="profile-img-container d-flex align-items-center justify-content-left">
                <img src="../../../app-assets/images/camera.jfif" class="" alt="Card image">
                <div class="card col-12">
                    <div class="card-header">
                        <h4>Product Name</h4>
                        <i class="feather icon-more-horizontal cursor-pointer"></i>
                    </div>
                    <div class="card-body col-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga molestiae provident beatae dignissimos dolor, ratione culpa magnam ad ea molestias libero nobis sapiente? Quibusdam illum minima cupiditate nostrum qui?</p>
                        <div class="mt-1">
                            <h5 class="mb-0">Rating </h5><br>
                            <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div>
                            </div>

                        </div>
                        <div class="mt-1">
                            <h5 class="mb-0">Price</h5>
                            <p>1000 inr</p>
                        </div>
                        <div class="mt-1">
                            <h5 class="mb-0">Discount</h5>
                            <p>7%</p>
                        </div>
                        <div class="mt-1">
                            <h5 class="mb-0">Current stock</h5>
                            <p>999</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>



    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Customer Reviews</h4>
    </div>
    <div class="card-content">
        <div class="card-body card-dashboard">
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-m-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155.344px;">S.NO. </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 254.359px;">Customer name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 110.844px;">Review</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40.1562px;">Rating</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 86.6094px;">Review date</th>
                                    </tr>
                                </thead>
                                <tbody>






                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Sunil vishwakarma</td>
                                        <td>Nice product</td>
                                        <td> <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    4 <i class="feather icon-star ml-25"></i>
                                </div></td>
                                        <td>02-08-2021</td>
                                        
                                    </tr>
                                </tbody>
                            
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 29 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
@stop()
@endsection()