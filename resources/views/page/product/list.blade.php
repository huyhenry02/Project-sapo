@extends('layout.main')
@section('content')
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center mb-3">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Sản phẩm <span class="badge badge-soft-dark ml-2">72,031</span></h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="{{route('show_add_product.index')}}">Thêm sản phẩm</a>
                    </div>
                </div>
                <!-- End Row -->

                <!-- Nav Scroller -->
                <div class="js-nav-scroller hs-nav-scroller-horizontal">
                    <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-left"></i>
              </a>
            </span>

                    <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-right"></i>
              </a>
            </span>

                    <!-- Nav -->
                    <ul class="nav nav-tabs page-header-tabs" id="pageHeaderTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"> Tất cả sản phẩm</a>
                        </li>


                    </ul>
                    <!-- End Nav -->
                </div>
                <!-- End Nav Scroller -->
            </div>
            <!-- End Page Header -->

            <div class="row justify-content-end mb-3">
                <div class="col-lg">
                    <!-- Datatable Info -->
                    <div id="datatableCounterInfo" style="display: none;">
                        <div class="d-sm-flex justify-content-lg-end align-items-sm-center">
                            <span class="d-block d-sm-inline-block font-size-sm mr-3 mb-2 mb-sm-0">
                  <span id="datatableCounter">0</span> Selected
                            </span>
                            <a class="btn btn-sm btn-outline-danger mb-2 mb-sm-0 mr-2" href="javascript:;">
                                <i class="tio-delete-outlined"></i> Delete
                            </a>
                            <a class="btn btn-sm btn-white mb-2 mb-sm-0 mr-2" href="javascript:;">
                                <i class="tio-archive"></i> Archive
                            </a>
                            <a class="btn btn-sm btn-white mb-2 mb-sm-0 mr-2" href="javascript:;">
                                <i class="tio-publish"></i> Publish
                            </a>
                            <a class="btn btn-sm btn-white mb-2 mb-sm-0" href="javascript:;">
                                <i class="tio-clear"></i> Unpublish
                            </a>
                        </div>
                    </div>
                    <!-- End Datatable Info -->
                </div>
            </div>
            <!-- End Row -->

            <!-- Card -->
            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <form>
                                <!-- Search -->
                                <div class="input-group input-group-merge input-group-flush">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tio-search"></i>
                                        </div>
                                    </div>
                                    <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm sản phẩm" aria-label="Search users">
                                </div>
                                <!-- End Search -->
                            </form>
                        </div>

                        <div class="col-auto">
                            <!-- Unfold -->
                            <div class="hs-unfold mr-2">
                                <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;" data-hs-unfold-options='{
                      "target": "#datatableFilterSidebar",
                      "type": "css-animation",
                      "animationIn": "fadeInRight",
                      "animationOut": "fadeOutRight",
                      "hasOverlay": true,
                      "smartPositionOff": true
                     }'>
                                    <i class="tio-filter-list mr-1"></i> Filters
                                </a>
                            </div>
                            <!-- End Unfold -->

                            <!-- Unfold -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;" data-hs-unfold-options='{
                       "target": "#showHideDropdown",
                       "type": "css-animation"
                     }'>
                                    <i class="tio-table mr-1"></i> Columns <span class="badge badge-soft-dark rounded-circle ml-1">6</span>
                                </a>

                                <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem;">
                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="mr-2">Product</span>

                                                <!-- Checkbox Switch -->
                                                <label class="toggle-switch toggle-switch-sm" for="toggleColumn_product">
                                                    <input type="checkbox" class="toggle-switch-input" id="toggleColumn_product" checked="">
                                                    <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                                                </label>
                                                <!-- End Checkbox Switch -->
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="mr-2">Mục sản phẩm</span>

                                                <!-- Checkbox Switch -->
                                                <label class="toggle-switch toggle-switch-sm" for="toggleColumn_type">
                                                    <input type="checkbox" class="toggle-switch-input" id="toggleColumn_type" checked="">
                                                    <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                                                </label>
                                                <!-- End Checkbox Switch -->
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="mr-2">Nhà cung cấp</span>

                                                <!-- Checkbox Switch -->
                                                <label class="toggle-switch toggle-switch-sm" for="toggleColumn_vendor">
                                                    <input type="checkbox" class="toggle-switch-input" id="toggleColumn_vendor">
                                                    <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                                                </label>
                                                <!-- End Checkbox Switch -->
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="mr-2">Thương hiệu</span>

                                                <!-- Checkbox Switch -->
                                                <label class="toggle-switch toggle-switch-sm" for="toggleColumn_stocks">
                                                    <input type="checkbox" class="toggle-switch-input" id="toggleColumn_stocks" checked="">
                                                    <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                                                </label>
                                                <!-- End Checkbox Switch -->
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="mr-2">Mã sản phẩm</span>

                                                <!-- Checkbox Switch -->
                                                <label class="toggle-switch toggle-switch-sm" for="toggleColumn_sku">
                                                    <input type="checkbox" class="toggle-switch-input" id="toggleColumn_sku" checked="">
                                                    <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                                                </label>
                                                <!-- End Checkbox Switch -->
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="mr-2">Giá</span>

                                                <!-- Checkbox Switch -->
                                                <label class="toggle-switch toggle-switch-sm" for="toggleColumn_price">
                                                    <input type="checkbox" class="toggle-switch-input" id="toggleColumn_price" checked="">
                                                    <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                                                </label>
                                                <!-- End Checkbox Switch -->
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="mr-2">Số lượng</span>

                                                <!-- Checkbox Switch -->
                                                <label class="toggle-switch toggle-switch-sm" for="toggleColumn_quantity">
                                                    <input type="checkbox" class="toggle-switch-input" id="toggleColumn_quantity">
                                                    <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                                                </label>
                                                <!-- End Checkbox Switch -->
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="mr-2">Đặc điểm</span>

                                                <!-- Checkbox Switch -->
                                                <label class="toggle-switch toggle-switch-sm" for="toggleColumn_variants">
                                                    <input type="checkbox" class="toggle-switch-input" id="toggleColumn_variants" checked="">
                                                    <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                                                </label>
                                                <!-- End Checkbox Switch -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Unfold -->
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Header -->

                <!-- Table -->
                <div class="table-responsive datatable-custom">
                    <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 4, 9],
                        "width": "5%",
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 12,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label" for="datatableCheckAll"></label>
                                </div>
                            </th>
                            <th class="table-column-pl-0">Sản phẩm</th>
                            <th>Mục sản phẩm</th>
                            <th>Nhà cung cấp</th>
                            <th>Thương hiệu</th>
                            <th>Mã sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thuộc tính</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($product as $key=>$val)
                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="productsCheck1">
                                    <label class="custom-control-label" for="productsCheck1"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="media align-items-center" href="">
                                    <img class="avatar avatar-lg mr-3" src="{{asset($val->image)}}" alt="Image Description">
                                    <div class="media-body">
                                        <h5 class="text-hover-primary mb-0">{{ $val ? $val->name : '' }}</h5>
                                    </div>
                                </a>
                            </td>
                            <td>{{ $val ? $val->category->name : '' }}</td>
                            <td>{{ $val ? $val->vendor->name : '' }}</td>
                            <td>{{ $val ? $val->brand->name : '' }}</td>
                            <td>{{ $val ? $val->sku : '' }} </td>
                            <td>{{ $val ? $val->price : '' }} </td>
                            <td>{{ $val ? $val->qty : '' }}</td>
                            <td>{{ $val ? $val->attribute_value->value : '' }}</td>
                            <td>
                                @if ($val->availability == 0)
                                    <span class="legend-indicator bg-danger"></span>Hết hàng
                                @elseif ($val->availability == 1)
                                    <span class="legend-indicator bg-success"></span>Còn hàng
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-sm btn-white" href="" >
                                        <i class="tio-more-horizontal"></i>
                                    </a>
                                    <a class="btn btn-sm btn-white" href="" >
                                        <i class="tio-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-white" href="{{route('product.delete',$val->id)}}" >
                                        <i class="tio-delete"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End Table -->

                <!-- Footer -->
                <div class="card-footer">
                    <!-- Pagination -->
                    <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                        <div class="col-sm mb-2 mb-sm-0">
                            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                                <span class="mr-2">Showing:</span>

                                <!-- Select -->
                                <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                                    <option value="12" selected="">12</option>
                                    <option value="14">14</option>
                                    <option value="16">16</option>
                                    <option value="18">18</option>
                                </select>
                                <!-- End Select -->

                                <span class="text-secondary mr-2">of</span>

                                <!-- Pagination Quantity -->
                                <span id="datatableWithPaginationInfoTotalQty"></span>
                            </div>
                        </div>

                        <div class="col-sm-auto">
                            <div class="d-flex justify-content-center justify-content-sm-end">
                                <!-- Pagination -->
                                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                            </div>
                        </div>
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Content -->
    </main>
    <script>
        $(document).on('ready', function () {
            // ONLY DEV
            // =======================================================

            if (window.localStorage.getItem('hs-builder-popover') === null) {
                $('#builderPopover').popover('show')
                    .on('shown.bs.popover', function () {
                        $('.popover').last().addClass('popover-dark')
                    });

                $(document).on('click', '#closeBuilderPopover' , function() {
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
            $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

            $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
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


            // INITIALIZATION OF QUILLJS EDITOR
            // =======================================================
            var quill = $.HSCore.components.HSQuill.init('.js-quill');


            // INITIALIZATION OF ADD INPUT FILED
            // =======================================================
            $('.js-add-field').each(function () {
                new HSAddField($(this), {
                    addedField: function() {
                        $('.js-add-field .js-select2-custom-dynamic').each(function () {
                            var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
                        });
                    }
                }).init();
            });


            // INITIALIZATION OF TAGIFY
            // =======================================================
            $('.js-tagify').each(function () {
                var tagify = $.HSCore.components.HSTagify.init($(this));
            });


            // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
            // =======================================================
            $('.js-dropzone').each(function () {
                var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
            });
        });
    </script>
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="/frontend/assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
@endsection
