<?php
include_once('./includes/header.php');
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
?>
<main class="nxl-container">
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10"><a href="/index.html">Home</a></h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Users</a></li>
                    <!-- <li class="breadcrumb-item">Projects</li> -->
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="btn btn-icon btn-light-brand" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            <i class="feather-bar-chart"></i>
                        </a>
                        <!-- <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-filter"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-primary rounded-circle d-inline-block me-3"></span>
                                        <span>Alls</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-indigo rounded-circle d-inline-block me-3"></span>
                                        <span>On Hold</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-warning rounded-circle d-inline-block me-3"></span>
                                        <span>Pending</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-success rounded-circle d-inline-block me-3"></span>
                                        <span>Finished</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-danger rounded-circle d-inline-block me-3"></span>
                                        <span>Declined</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-teal rounded-circle d-inline-block me-3"></span>
                                        <span>In Progress</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-success rounded-circle d-inline-block me-3"></span>
                                        <span>Not Started</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-warning rounded-circle d-inline-block me-3"></span>
                                        <span>My Projects</span>
                                    </a>
                                </div>
                            </div> -->
                        <div class="dropdown">
                            <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                <i class="feather-paperclip"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="bi bi-filetype-pdf me-3"></i>
                                    <span>PDF</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="bi bi-filetype-csv me-3"></i>
                                    <span>CSV</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="bi bi-filetype-xml me-3"></i>
                                    <span>XML</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="bi bi-filetype-txt me-3"></i>
                                    <span>Text</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="bi bi-filetype-exe me-3"></i>
                                    <span>Excel</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="bi bi-printer me-3"></i>
                                    <span>Print</span>
                                </a>
                            </div>
                        </div>
                        <a href="addUser.html" class="btn btn-primary">
                            <i class="feather-plus me-2"></i>
                            <span>Create User</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <div id="collapseOne" class="accordion-collapse collapse page-header-collapse">
            <div class="accordion-body pb-2">
                <div class="row">
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Not Started</span>
                                    <span class="fs-24 fw-bolder d-block">04</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                            <span>Invoices Awaiting</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-muted">$5,569</span>
                                            <span class="fs-11 text-muted">(56%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 56%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">In Progress</span>
                                    <span class="fs-24 fw-bolder d-block">06</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                            <span>Projects In Progress</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-muted">16 Completed</span>
                                            <span class="fs-11 text-muted">(78%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Cancelled</span>
                                    <span class="fs-24 fw-bolder d-block">02</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                            <span>Converted Leads</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-muted">52 Completed</span>
                                            <span class="fs-11 text-muted">(63%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 63%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Finished</span>
                                    <span class="fs-24 fw-bolder d-block">25</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                            <span>Conversion Rate</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-muted">$2,254</span>
                                            <span class="fs-11 text-muted">(46%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 46%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="projectList">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <!-- <th>Project Name</th> -->
                                            <th>Customer</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Assigned</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="single-item">
                                            <td>1</td>
                                            <td class="project-name-td">
                                                <div class="hstack gap-4">
                                                    <div class="avatar-image border-0">
                                                        <img src="assets/images/brand/app-store.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div>
                                                        <a href="projects-view.html" class="text-truncate-1-line">Oscar Smith</a>
                                                        <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">
                                                            #0001
                                                        </p>
                                                        <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                            <a href="javascript:void(0);">Start</a>
                                                            <span class="vr text-muted"></span>
                                                            <a href="javascript:void(0);">Edit</a>
                                                            <span class="vr text-muted"></span>
                                                            <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>2023-04-05</td>
                                            <td>2023-04-10</td>
                                            <td>2023-04-05</td>
                                            <td>2023-04-10</td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="projects-view.html" class="avatar-text avatar-md">
                                                        <i class="feather feather-eye"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                    <i class="feather feather-printer me-3"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-clock me-3"></i>
                                                                    <span>Remind</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-archive me-3"></i>
                                                                    <span>Archive</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-alert-octagon me-3"></i>
                                                                    <span>Report Spam</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
    <!-- [ Footer ] start -->
    <footer class="footer">
        <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
            <span>Copyright ©</span>
            <script>
                document.write(new Date().getFullYear());
            </script>
        </p>
        <!-- <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div> -->
    </footer>
    <!-- [ Footer ] end -->
</main>
<!--! ================================================================ !-->
<!--! [End] Main Content !-->
<!--! ================================================================ !-->
<!--! ================================================================ !-->
<?php
include_once('./includes/footer.php');
?>