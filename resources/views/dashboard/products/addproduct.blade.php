@extends('layouts.master')
@section('title', 'dashboard')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/katex.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.bubble.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/file-uploaders/dropzone.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
@section('body')
<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add product</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Product Name</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                </fieldset>
                            </div>

                            <section class="snow-editor">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Product Details</h4>
                                            </div>
                                            <div class="card-content collapse show">
                                                <div class="card-body">
                                                    <p>Describe your product</p>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div id="snow-wrapper">
                                                                <div id="snow-container">
                                                                    <div class="quill-toolbar">
                                                                        <span class="ql-formats">
                                                                            <select class="ql-header">
                                                                                <option value="1">Heading</option>
                                                                                <option value="2">Subheading</option>
                                                                                <option selected>Normal</option>
                                                                            </select>
                                                                            <select class="ql-font">
                                                                                <option selected>Sailec Light</option>
                                                                                <option value="sofia">Sofia Pro</option>
                                                                                <option value="slabo">Slabo 27px</option>
                                                                                <option value="roboto">Roboto Slab</option>
                                                                                <option value="inconsolata">Inconsolata</option>
                                                                                <option value="ubuntu">Ubuntu Mono</option>
                                                                            </select>
                                                                        </span>
                                                                        <span class="ql-formats">
                                                                            <button class="ql-bold"></button>
                                                                            <button class="ql-italic"></button>
                                                                            <button class="ql-underline"></button>
                                                                        </span>
                                                                        <span class="ql-formats">
                                                                            <button class="ql-list" value="ordered"></button>
                                                                            <button class="ql-list" value="bullet"></button>
                                                                        </span>
                                                                        <span class="ql-formats">
                                                                            <button class="ql-link"></button>
                                                                            <button class="ql-image"></button>
                                                                            <button class="ql-video"></button>
                                                                        </span>
                                                                        <span class="ql-formats">
                                                                            <button class="ql-formula"></button>
                                                                            <button class="ql-code-block"></button>
                                                                        </span>
                                                                        <span class="ql-formats">
                                                                            <button class="ql-clean"></button>
                                                                        </span>
                                                                    </div>
                                                                    <div class="editor">


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
                            </section>
                            <div class="row" data-select2-id="128">
                                <div class="col-12" data-select2-id="127">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">General Information of product</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 mb-2">
                                                        <a href="https://select2.org/getting-started/installation" target="_blank">For more information </a>
                                                    </div>
                                                    <div class="col-sm-6 col-12" data-select2-id="126">
                                                        <div class="text-bold-600 font-medium-2">
                                                            Category
                                                        </div>
                                                        <div class="form-group" data-select2-id="125">
                                                            <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                <option value="square" data-select2-id="3">Square</option>
                                                                <option value="rectangle" data-select2-id="133">Rectangle</option>
                                                                <option value="rombo" data-select2-id="134">Rombo</option>
                                                                <option value="romboid" data-select2-id="135">Romboid</option>
                                                                <option value="trapeze" data-select2-id="136">Trapeze</option>
                                                                <option value="traible" data-select2-id="137">Triangle</option>
                                                                <option value="polygon" data-select2-id="138">Polygon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12" data-select2-id="126">
                                                        <div class="text-bold-600 font-medium-2">
                                                            Sub category </div>
                                                        <div class="form-group" data-select2-id="125">
                                                            <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                <option value="square" data-select2-id="3">Square</option>
                                                                <option value="rectangle" data-select2-id="133">Rectangle</option>
                                                                <option value="rombo" data-select2-id="134">Rombo</option>
                                                                <option value="romboid" data-select2-id="135">Romboid</option>
                                                                <option value="trapeze" data-select2-id="136">Trapeze</option>
                                                                <option value="traible" data-select2-id="137">Triangle</option>
                                                                <option value="polygon" data-select2-id="138">Polygon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                               
                                                    <div class="col-sm-6 col-12" data-select2-id="126">
                                                        <div class="text-bold-600 font-medium-2">
                                                            Unit
                                                        </div>
                                                        <div class="form-group" data-select2-id="125">
                                                            <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                <option value="square" data-select2-id="3">Square</option>
                                                                <option value="rectangle" data-select2-id="133">Rectangle</option>
                                                                <option value="rombo" data-select2-id="134">Rombo</option>
                                                                <option value="romboid" data-select2-id="135">Romboid</option>
                                                                <option value="trapeze" data-select2-id="136">Trapeze</option>
                                                                <option value="traible" data-select2-id="137">Triangle</option>
                                                                <option value="polygon" data-select2-id="138">Polygon</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title" Product Price and stock</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Unit price</label>
                                                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Purchase price</label>
                                                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Tax</label>
                                                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Discount %</label>
                                                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">

                                                                    </fieldset>

                                                                </div>
                                                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Discount flat</label>
                                                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">

                                                                    </fieldset>

                                                                </div>
                                                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Total quantity</label>
                                                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                                                    </fieldset>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Upload images</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <p class="card-text">Upload images of the product</p>
                                                                    <form action="#" class="dropzone dropzone-area dz-clickable" id="dpz-multiple-files">
                                                                        <div class="dz-message">Drop Files Here To Upload or click here</div>
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
                        </div>
                        <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light float-lg-right">Add product</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
    </div>

</section>
@section('js')
<script src="../../../app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="../../../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="../../../app-assets/vendors/js/editors/quill/quill.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="../../../app-assets/js/scripts/editors/editor-quill.js"></script>
<script src="../../../app-assets/js/scripts/extensions/dropzone.js"></script>
<script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="../../../app-assets/vendors/js/ui/prism.min.js"></script>

@stop
@endsection()