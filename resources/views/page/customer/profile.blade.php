@extends('layout.main')
@section('content')
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-no-gutter">
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-customers.html">Customers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer details</li>
                            </ol>
                        </nav>

                        <h1 class="page-header-title">Anne Richard</h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1" href="#" data-toggle="tooltip" data-placement="top" title="Previous customer">
                            <i class="tio-arrow-backward"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Next customer">
                            <i class="tio-arrow-forward"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <div class="row">
                <div class="col-lg-8">
                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Body -->
                        <div class="card-body">
                            <!-- Media -->
                            <div class="d-flex align-items-center mb-5">
                                <div class="avatar avatar-lg avatar-circle">
                                    <img class="avatar-img" src="/frontend/assets\img\160x160\img9.jpg" alt="Image Description">
                                </div>

                                <div class="mx-3">
                                    <div class="d-flex mb-1">
                                        <h3 class="mb-0 mr-3">Anne Richard</h3>

                                        <!-- Unfold -->
                                        <div class="hs-unfold">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-white rounded-circle" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit" data-hs-unfold-options='{
                             "target": "#editDropdown",
                             "type": "css-animation"
                           }'>
                                                <i class="tio-edit"></i>
                                            </a>

                                            <div id="editDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-card mt-1" style="min-width: 20rem;">
                                                <!-- Card -->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-row">
                                                            <div class="col-sm-6">
                                                                <label for="firstNameLabel" class="input-label">First name</label>
                                                                <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Clarice" aria-label="Clarice" value="Anna">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="lastNameLabel" class="input-label">Last name</label>
                                                                <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Boone" aria-label="Boone" value="Richard">
                                                            </div>
                                                        </div>
                                                        <!-- End Row -->

                                                        <div class="d-flex justify-content-end mt-3">
                                                            <button type="button" class="btn btn-sm btn-white mr-2">Cancel</button>
                                                            <button type="button" class="btn btn-sm btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Body -->
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>

                                    <span class="font-size-sm">Customer for 3 months</span>
                                </div>

                                <div class="d-none d-sm-inline-block ml-auto text-right">
                                    <!-- Unfold -->
                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                           "target": "#actionsDropdown",
                           "type": "css-animation"
                         }'>
                                            Actions <i class="tio-chevron-down"></i>
                                        </a>

                                        <div id="actionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                                            <a class="dropdown-item" href="#">
                                                <i class="tio-email-outlined dropdown-item-icon"></i> Email
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="tio-call dropdown-item-icon"></i> Call
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="tio-sync dropdown-item-icon"></i> Merge
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#">
                                                <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Unfold -->
                                </div>
                            </div>
                            <!-- End Media -->

                            <label class="input-label">Customer note</label>

                            <!-- Quill -->
                            <div class="quill-custom">
                                <div id="toolbar-container">
                                    <ul class="list-inline ql-toolbar-list">
                                        <li class="list-inline-item">
                                            <button class="ql-bold"></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="ql-italic"></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="ql-underline"></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="ql-strike"></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="ql-link"></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="ql-image"></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="ql-blockquote"></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="ql-code"></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="ql-list" value="bullet"></button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="js-quill" style="min-height: 10rem;" data-hs-quill-options='{
                          "placeholder": "Start typing to leave a note...",
                          "toolbarBottom": true,
                          "modules": {
                            "toolbar": "#toolbar-container"
                          }
                         }'>
                                </div>
                            </div>
                            <!-- End Quill -->
                        </div>
                        <!-- Body -->

                        <!-- Footer -->
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-white mr-2">Discard</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center flex-grow-1">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <h4 class="card-header-title">Orders placed</h4>
                                </div>

                                <div class="col-sm-auto">
                                    <!-- Nav -->
                                    <ul class="js-tabs-to-dropdown nav nav-segment nav-fill nav-sm-down-break" data-hs-transform-tabs-to-btn-options='{
                          "transformResolution": "sm",
                          "btnClassNames": "btn btn-block btn-white dropdown-toggle justify-content-center"
                        }'>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">All orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Open</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unfulfilled</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unpaid</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav -->

                                    <!-- Datatable Info -->
                                    <div id="datatableCounterInfo" style="display: none;">
                                        <div class="d-flex align-items-center">
                        <span class="font-size-sm mr-3">
                          <span id="datatableCounter">0</span>
                          Selected
                        </span>
                                            <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                                                <i class="tio-delete-outlined"></i> Delete
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Datatable Info -->
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Input Group -->
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="tio-search"></i>
                    </span>
                                </div>

                                <input id="datatableSearch" type="search" class="form-control" placeholder="Search orders" aria-label="Search orders">
                            </div>
                            <!-- End Input Group -->
                        </div>
                        <!-- End Body -->

                        <!-- Table -->
                        <div class="table-responsive datatable-custom">
                            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                         "columnDefs": [{
                            "targets": [0, 5],
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
                                    <th class="table-column-pl-0">Order</th>
                                    <th>Date</th>
                                    <th>Payment status</th>
                                    <th>Total</th>
                                    <th>Invoice</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck1">
                                            <label class="custom-control-label" for="ordersCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#35463</a>
                                    </td>
                                    <td>Aug 17, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$256.39</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck2">
                                            <label class="custom-control-label" for="ordersCheck2"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#23513</a>
                                    </td>
                                    <td>Aug 17, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$2,125.00</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck3">
                                            <label class="custom-control-label" for="ordersCheck3"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#62311</a>
                                    </td>
                                    <td>Aug 03, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$532.99</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck4">
                                            <label class="custom-control-label" for="ordersCheck4"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#12453</a>
                                    </td>
                                    <td>July 29, 2020</td>
                                    <td>
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span>Pending
                        </span>
                                    </td>
                                    <td>$1,035.02</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck5">
                                            <label class="custom-control-label" for="ordersCheck5"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#84223</a>
                                    </td>
                                    <td>July 11, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$68.53</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck6">
                                            <label class="custom-control-label" for="ordersCheck6"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#46542</a>
                                    </td>
                                    <td>July 04, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$100.00</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck7">
                                            <label class="custom-control-label" for="ordersCheck7"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a class="text-danger" href="ecommerce-order-details.html">#35378</a>
                                        <i class="tio-warning text-warning"></i>
                                    </td>
                                    <td>June 27, 2020</td>
                                    <td>
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span>Pending
                        </span>
                                    </td>
                                    <td class="text-danger">$89.46</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck8">
                                            <label class="custom-control-label" for="ordersCheck8"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a class="text-danger" href="ecommerce-order-details.html">#24562</a>
                                        <i class="tio-warning text-warning"></i>
                                    </td>
                                    <td>June 15, 2020</td>
                                    <td>
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span>Pending
                        </span>
                                    </td>
                                    <td class="text-danger">$3,535.46</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck9">
                                            <label class="custom-control-label" for="ordersCheck9"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#78531</a>
                                    </td>
                                    <td>June 12, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$23.89</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck10">
                                            <label class="custom-control-label" for="ordersCheck10"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#34634</a>
                                    </td>
                                    <td>June 02, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$77.00</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck11">
                                            <label class="custom-control-label" for="ordersCheck11"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a class="text-danger" href="ecommerce-order-details.html">#93817</a>
                                        <i class="tio-warning text-warning"></i>
                                    </td>
                                    <td>May 30, 2020</td>
                                    <td>
                        <span class="badge badge-soft-warning">
                          <span class="legend-indicator bg-warning"></span>Pending
                        </span>
                                    </td>
                                    <td class="text-danger">$77.00</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck12">
                                            <label class="custom-control-label" for="ordersCheck12"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#43113</a>
                                    </td>
                                    <td>May 25, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$1,421.47</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck13">
                                            <label class="custom-control-label" for="ordersCheck13"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="ecommerce-order-details.html">#12412</a>
                                    </td>
                                    <td>May 16, 2020</td>
                                    <td>
                        <span class="badge badge-soft-success">
                          <span class="legend-indicator bg-success"></span>Paid
                        </span>
                                    </td>
                                    <td>$45.00</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                                            <i class="tio-receipt-outlined mr-1"></i> Invoice
                                        </a>
                                    </td>
                                </tr>
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

                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Timeline</h4>

                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox font-size-sm">
                                <input id="showCommentsCheckbox" type="checkbox" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="showCommentsCheckbox">Show comments</label>
                            </div>
                            <!-- End Checkbox -->
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Step -->
                            <ul class="step step-icon-sm">
                                <!-- Step Item -->
                                <li class="step-item">
                                    <div class="step-content-wrapper">
                                        <span class="step-icon step-icon-soft-primary">A</span>

                                        <!-- Quill -->
                                        <div class="quill-custom">
                                            <div id="step-toolbar-container">
                                                <ul class="list-inline ql-toolbar-list">
                                                    <li class="list-inline-item">
                                                        <button class="ql-bold"></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="ql-italic"></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="ql-underline"></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="ql-strike"></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="ql-link"></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="ql-image"></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="ql-blockquote"></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="ql-code"></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="ql-list" value="bullet"></button>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="js-quill-step" data-hs-quill-options='{
                                "placeholder": "Leave a comment...",
                                "toolbarBottom": true,
                                "modules": {
                                  "toolbar": "#step-toolbar-container"
                                }
                               }'>
                                            </div>
                                        </div>
                                        <!-- End Quill -->
                                    </div>
                                </li>
                                <!-- End Step Item -->

                                <!-- Step Item -->
                                <li class="step-item">
                                    <div class="step-content-wrapper">
                                        <small class="step-divider">Wednesday, 19 August</small>
                                    </div>
                                </li>
                                <!-- End Step Item -->

                                <!-- Step Item -->
                                <li class="step-item">
                                    <div class="step-content-wrapper">
                                        <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                        <div class="step-content">
                                            <h5 class="mb-0">You submitted a customer data request.</h5>
                                            <p class="font-size-sm mb-0">10:19 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Step Item -->

                                <!-- Step Item -->
                                <li class="step-item">
                                    <div class="step-content-wrapper">
                                        <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                        <div class="step-content">
                                            <h5 class="mb-0">You added the email anne@gmail.com to this customer.</h5>
                                            <p class="font-size-sm mb-0">10:18 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Step Item -->

                                <!-- Step Item -->
                                <li class="step-item">
                                    <div class="step-content-wrapper">
                                        <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                        <div class="step-content">
                                            <h5 class="mb-0">You created this customer.</h5>
                                            <p class="font-size-sm mb-0">10:18 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Step Item -->
                            </ul>
                            <!-- End Step -->
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->

                    <div class="d-none d-lg-block">
                        <button type="button" class="btn btn-danger">Delete customer</button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Body -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Contact info</h5>
                                <a class="link" href="javascript:;">Edit</a>
                            </div>

                            <ul class="list-unstyled list-unstyled-py-2">
                                <li>
                                    <i class="tio-online mr-2"></i>
                                    anne@example.com
                                </li>
                                <li>
                                    <i class="tio-android-phone-vs mr-2"></i>
                                    +1 (609) 972-22-22
                                </li>
                            </ul>

                            <hr>

                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Shipping address</h5>
                                <a class="link" href="javascript:;">Edit</a>
                            </div>

                            <!-- Leaflet (Map) -->
                            <div id="map" class="leaflet-custom rounded mt-1 mb-3" style="min-height: 10rem;" data-hs-leaflet-options='{
                       "map": {
                         "scrollWheelZoom": false,
                         "coords": [37.4040344, -122.0289704]
                       },
                       "marker": [
                         {
                           "coords": [37.4040344, -122.0289704],
                           "icon": {
                             "iconUrl": "./assets/svg/components/map-pin.svg",
                             "iconSize": [50, 45]
                           },
                           "popup": {
                             "text": "153 Williamson Plaza, Maggieberg"
                           }
                         }
                       ]
                      }'></div>
                            <!-- End Leaflet (Map) -->

                            <span class="d-block">
                  45 Roker Terrace<br>
                  Latheronwheel<br>
                  KW5 8NW, London<br>
                  UK <img class="avatar avatar-xss avatar-circle ml-1" src="/frontend/assets\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Great Britain Flag">
                </span>

                            <hr>

                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Billing address</h5>
                                <a class="link" href="javascript:;">Edit</a>
                            </div>

                            <span class="d-block">
                  45 Roker Terrace<br>
                  Latheronwheel<br>
                  KW5 8NW, London<br>
                  UK <img class="avatar avatar-xss avatar-circle ml-1" src="/frontend/assets\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Great Britain Flag">
                </span>

                            <div class="mt-3">
                                <h5 class="mb-0">Mastercard</h5>
                                <span class="d-block">Card Number: ************4291</span>
                            </div>
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h5>Email marketing</h5>
                            <a class="link" href="javascript:;">Edit status</a>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                <span class="h3">
                  <span class="badge badge-soft-dark badge-pill">Subscribed</span>
                </span>
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Website activity</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <p>Website activity shows you how many times a contact has visited your site and viewed your pages.</p>

                            <!-- Bar Chart -->
                            <div class="chartjs-custom my-5" style="height: 12rem;">
                                <canvas class="js-chart" data-hs-chartjs-options='{
                            "type": "line",
                            "data": {
                               "labels": ["Aug 1", "Aug 2", "Aug 3", "Aug 4", "Aug 5"],
                               "datasets": [{
                                "data": [10, 9, 14, 5, 10],
                                "backgroundColor": "transparent",
                                "borderColor": "#377dff",
                                "borderWidth": 3,
                                "pointRadius": 0,
                                "hoverBorderColor": "#377dff",
                                "pointBackgroundColor": "#377dff",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              },
                              {
                                "data": [15, 13, 18, 7, 26],
                                "backgroundColor": "transparent",
                                "borderColor": "#e7eaf3",
                                "borderWidth": 3,
                                "pointRadius": 0,
                                "hoverBorderColor": "#e7eaf3",
                                "pointBackgroundColor": "#e7eaf3",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              }]
                            },
                            "options": {
                               "scales": {
                                  "yAxes": [{
                                    "gridLines": {
                                      "color": "#e7eaf3",
                                      "drawBorder": false,
                                      "zeroLineColor": "#e7eaf3"
                                    },
                                    "ticks": {
                                      "stepSize": 10,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10
                                    }
                                  }],
                                  "xAxes": [{
                                    "display": false
                                  }]
                              },
                              "tooltips": {
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'>
                                </canvas>
                            </div>
                            <!-- End Bar Chart -->

                            <!-- Legend Indicators -->
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <span class="legend-indicator"></span> Yesterday
                                </div>
                                <div class="col-auto">
                                    <span class="legend-indicator bg-primary"></span> Today
                                </div>
                            </div>
                            <!-- End Legend Indicators -->
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <!-- End Row -->

            <div class="d-lg-none">
                <button type="button" class="btn btn-danger">Delete customer</button>
            </div>
        </div>
        <!-- End Content -->

        <!-- Footer -->

        <div class="footer">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
                </div>
                <div class="col-auto">
                    <div class="d-flex justify-content-end">
                        <!-- List Dot -->
                        <ul class="list-inline list-separator">
                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">FAQ</a>
                            </li>

                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">License</a>
                            </li>

                            <li class="list-inline-item">
                                <!-- Keyboard Shortcuts Toggle -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                                        <i class="tio-command-key"></i>
                                    </a>
                                </div>
                                <!-- End Keyboard Shortcuts Toggle -->
                            </li>
                        </ul>
                        <!-- End List Dot -->
                    </div>
                </div>
            </div>
        </div>



        <!-- End Footer -->
    </main>
@endsection
