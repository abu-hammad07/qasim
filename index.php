<?php
include_once('./includes/header.php');
?>
<style>
    .box_change,
    .box_change1,
    .box_change2,
    .box_change3 {
        display: block;
    }
</style>
<?php
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
?>

<main class="nxl-container">
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                </ul>
            </div>
        </div>

        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <!-- [Mini Card] start -->
                <div class="col-xxl-3 col-md-3 box_change1 box_change2 box_change3" onclick="toggleVisibility('box_change')">
                    <div class="card bg-primary border-primary text-white overflow-hidden" data-bs-toggle="collapse" data-bs-target="#totalHACCP">
                        <div class="card-body">
                            <i class="feather-folder-minus fs-1"></i>
                            <h5 class="fs-4 text-reset mt-4 mb-1">6</h5>
                            <div class="fs-12 text-reset fw-normal">Total HACCP</div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-3 box_change box_change2 box_change3" onclick="toggleVisibility('box_change1')">
                    <div class="card bg-success border-success text-white overflow-hidden" data-bs-toggle="collapse" data-bs-target="#totalSQF">
                        <div class="card-body">
                            <i class="feather-folder-plus fs-1"></i>
                            <h5 class="fs-4 text-reset mt-4 mb-1">0</h5>
                            <div class="fs-12 text-reset fw-normal">Total SQF</div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-3 box_change box_change1 box_change3" onclick="toggleVisibility('box_change2')">
                    <div class="card bg-warning border-warning text-white overflow-hidden" data-bs-toggle="collapse" data-bs-target="#totalVendorActivity">
                        <div class="card-body">
                            <i class="feather-folder-minus fs-1"></i>
                            <h5 class="fs-4 text-reset mt-4 mb-1">0</h5>
                            <div class="fs-12 text-reset fw-normal">Total Vendor Activities</div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-3 box_change box_change1 box_change2" onclick="toggleVisibility('box_change3')">
                    <div class="card bg-danger border-danger text-white overflow-hidden" data-bs-toggle="collapse" data-bs-target="#totalUsers">
                        <div class="card-body">
                            <i class="feather-users fs-1"></i>
                            <h5 class="fs-4 text-reset mt-4 mb-1">0</h5>
                            <div class="fs-12 text-reset fw-normal">Total Users</div>
                        </div>
                    </div>
                </div>
                <!-- [Mini Card] end -->
                <!-- totalHACCP -->
                <div id="totalHACCP" class="collapse">
                    <div class="row">
                        <!-- [Mini Card] start -->
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-primary  border-soft-primary text-primary overflow-hidden">
                                <a href="HACCP-01.html" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-primary">0</h5>
                                        <div class="text-reset fw-normal text-primary">HACCP-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-primary  border-soft-primary text-primary overflow-hidden">
                                <a href="HACCP-02.html" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-primary">0</h5>
                                        <div class="text-reset fw-normal text-primary">HACCP-02</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-primary  border-soft-primary text-primary overflow-hidden">
                                <a href="HACCP-03.html" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-primary">0</h5>
                                        <div class="text-reset fw-normal text-primary">HACCP-03</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-primary  border-soft-primary text-primary overflow-hidden">
                                <a href="SSOP-01.html" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-primary">0</h5>
                                        <div class="text-reset fw-normal text-primary">SSOP-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-primary  border-soft-primary text-primary overflow-hidden">
                                <a href="SSOP-02.html" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-primary">0</h5>
                                        <div class="text-reset fw-normal text-primary">SSOP-02</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-primary  border-soft-primary text-primary overflow-hidden">
                                <a href="SSOP-03.html" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-primary">0</h5>
                                        <div class="text-reset fw-normal text-primary">SSOP-03</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- [Mini Card] end -->
                    </div>
                </div>
                <!-- totalHACCP -->
                <!-- totalSQF -->
                <div id="totalSQF" class="collapse">
                    <div class="row">
                        <!-- [Mini Card] start -->
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-success border-soft-success text-success overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-success">0</h5>
                                        <div class="text-reset fw-normal text-success">Total SQF-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-success border-soft-success text-success overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-success">0</h5>
                                        <div class="text-reset fw-normal text-success">Total SQF-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-success border-soft-success text-success overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-success">0</h5>
                                        <div class="text-reset fw-normal text-success">Total SQF-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-success border-soft-success text-success overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-success">0</h5>
                                        <div class="text-reset fw-normal text-success">Total SQF-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-success border-soft-success text-success overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-success">0</h5>
                                        <div class="text-reset fw-normal text-success">Total SQF-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-success border-soft-success text-success overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-success">0</h5>
                                        <div class="text-reset fw-normal text-success">Total SQF-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <!-- [Mini Card] end -->
                    </div>
                </div>
                <!-- totalSQF -->
                <!-- totalVendorActivity -->
                <div id="totalVendorActivity" class="collapse">
                    <div class="row">
                        <!-- [Mini Card] start -->
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-warning border-soft-warning text-warning overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-warning">0</h5>
                                        <div class="text-reset fw-normal text-warning">Total Vendor
                                            Activity-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-warning border-soft-warning text-warning overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-warning">0</h5>
                                        <div class="text-reset fw-normal text-warning">Total Vendor
                                            Activity-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-warning border-soft-warning text-warning overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-warning">0</h5>
                                        <div class="text-reset fw-normal text-warning">Total Vendor
                                            Activity-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-warning border-soft-warning text-warning overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-warning">0</h5>
                                        <div class="text-reset fw-normal text-warning">Total Vendor
                                            Activity-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-warning border-soft-warning text-warning overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-warning">0</h5>
                                        <div class="text-reset fw-normal text-warning">Total Vendor
                                            Activity-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-warning border-soft-warning text-warning overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-warning">0</h5>
                                        <div class="text-reset fw-normal text-warning">Total Vendor
                                            Activity-01</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- [Mini Card] end -->
                    </div>
                </div>
                <!-- totalVendorActivity -->
                <!-- totalUsers -->
                <div id="totalUsers" class="collapse">
                    <div class="row">
                        <!-- [Mini Card] start -->

                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-danger border-soft-danger text-danger overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-danger">0</h5>
                                        <div class="text-reset fw-normal text-danger">Total Supervisor</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-danger border-soft-danger text-danger overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-danger">0</h5>
                                        <div class="text-reset fw-normal text-danger">Total Supervisor</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-danger border-soft-danger text-danger overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-danger">0</h5>
                                        <div class="text-reset fw-normal text-danger">Total Supervisor</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-danger border-soft-danger text-danger overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-danger">0</h5>
                                        <div class="text-reset fw-normal text-danger">Total Supervisor</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-danger border-soft-danger text-danger overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-danger">0</h5>
                                        <div class="text-reset fw-normal text-danger">Total Supervisor</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 ">
                            <div class="card bg-soft-danger border-soft-danger text-danger overflow-hidden">
                                <a href="javascript:void(0);" class="text-decoration-none">
                                    <div class="card-body justify-content-center text-center">
                                        <h5 class="text-reset text-danger">0</h5>
                                        <div class="text-reset fw-normal text-danger">Total Supervisor</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- [Mini Card] end -->
                    </div>
                </div>
                <!-- totalUsers -->
                <!-- [ Main Content ] start -->
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
                <!-- [ Main Content ] end -->
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
    </footer>
    <!-- [ Footer ] end -->
</main>
<!--! ================================================================ !-->
<!--! [End] Main Content !-->
<!--! ================================================================ !-->
<?php
include_once('./includes/footer.php');
?>