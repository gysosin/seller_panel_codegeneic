@extends('layouts.master')
@section('title', 'dashboard')
@section('body')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <h1 class="display-4">Instructions : </h1>
        <p> 1. Download the format file and fill it with proper data.</p>
        <p>2. You can download the example file to understand how the data must be filled.</p>
        <p>3. Once you have downloaded and filled the format file, upload it in the form below and
            submit.</p>
        <p> 4. After uploading products you need to edit them and set product's images and choices.</p>
        <p> 5. You can get brand and category id from their list, please input the right ids.</p>
    </div>
</div>
<div class="col-md-12">
    <form class="product-form" action="" method="" >
        <input type="hidden" name="" value="">
        <div class="card mt-2 rest-part">
            <div class="card-header">
                <h4>Import Products File</h4>
                <a href="/public/bulk/bulk_import.xlsx" download="" class="btn btn-secondary">Download Format</a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="name">Import</label>
                            <input type="file" name="products_file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-footer">
            <div class="row">
                <div class="col-md-12" style="padding-top: 20px">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>



<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>
</main>


</div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<!-- END: Footer-->
@section('js')

<script>
    $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
                .on('shown.bs.popover', function () {
                    $('.popover').last().addClass('popover-dark')
                });

            $(document).on('click', '#closeBuilderPopover', function () {
                window.localStorage.setItem('hs-builder-popover', true);
                $('#builderPopover').popover('dispose');
            });
        } else {
            $('#builderPopover').on('show.bs.popover', function () {
                return false
            });
        }
        // END ONLY DEV
        // =======================================================

        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
            $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        // INITIALIZATION OF MEGA MENU
        // =======================================================
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();


        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({boundary: 'window'})

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function (e) {
            if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                return false;
            }
        });


        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
            var unfold = new HSUnfold($(this)).init();
        });


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
            new HSFormSearch($(this)).init()
        });


        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
        });


        // INITIALIZATION OF DATERANGEPICKER
        // =======================================================
        $('.js-daterangepicker').daterangepicker();

        $('.js-daterangepicker-times').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });

        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
        }

        $('#js-daterangepicker-predefined').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        $('.js-clipboard').each(function () {
            var clipboard = $.HSCore.components.HSClipboard.init(this);
        });
    });
</script>
@stop()
@endsection()