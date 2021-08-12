@extends('layouts.master')
@section('title', 'dashboard')
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/data-list-view.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
@section('body')

        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Products Review</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Product List</a>
                            </li>
                            <li class="breadcrumb-item active">Reviews
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="content-body">
        <!-- Data list view starts -->
        <section id="data-thumb-view" class="data-thumb-view-header">
           
            <!-- dataTable starts -->
            <div class="table-responsive">
                <table class="table data-thumb-view">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Image</th>
                            <th>NAME</th>
                            <th>Review</th>
                            <th>POPULARITY</th>
                                               </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>
                        <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>
                       
                       
                       
                      
                       
                        
                        
                       
                        
                      
                    </tbody>
                </table>
            </div>
            <!-- dataTable ends -->

            
        </section>
        <!-- Data list view end -->

    </div>
</div>
</div>
<!-- END: Content-->
<!-- END: Footer-->
@section('js')
<script src="../../../app-assets/js/scripts/ui/data-list-view.js"></script>
@stop()
@endsection()