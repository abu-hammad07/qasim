<?php
session_start();
include_once('./includes/header.php');
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
include_once('./files_php/database.php');
$db = new database();
// include_once('./files_php/SSOP-01.php');
?>
<main class="nxl-container">
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Projects</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Projects</li>
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
                        <div class="dropdown">
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
                        </div>
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
                        <a href="HACCP-02_add" class="btn btn-primary">
                            <i class="feather-plus me-2"></i>
                            <span>New Create</span>
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
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 56%"></div>
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
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
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
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
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
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
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
                <div class="col-xl-12"><?php include_once('./includes/alerts.php'); ?></div>
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="projectList">
                                    <thead>
                                        <tr>
                                            <th class="wd-30">
                                                <div class="btn-group mb-1">
                                                    <div class="custom-control custom-checkbox ms-1">
                                                        <input type="checkbox" class="custom-control-input" id="checkAllProject">
                                                        <label class="custom-control-label" for="checkAllProject"></label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>Sno</th>
                                            <th>Date</th>
                                            <th>time</th>
                                            <th>Product Name</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $result = $db->data_not_found('haccp_02');
                                        $no = 1;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <tr class="single-item">
                                                    <td>
                                                        <div class="item-checkbox ms-1">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input checkbox" id="<?= $row['HACCP_02_id']; ?>">
                                                                <label class="custom-control-label" for="<?= $row['HACCP_02_id']; ?>"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $row['date']; ?></td>

                                                    <td><?= $row['time']; ?></td>
                                                    <td><?= $row['product_name']; ?></td>

                                                    <td>
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <a href="HACCP_02_view.php?id=<?= $row['HACCP_02_id']; ?>" class="avatar-text avatar-md">
                                                                <i class="feather feather-eye"></i>
                                                            </a>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                    <i class="feather feather-more-horizontal"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="HACCP-02_edit.php?id=<?= $row['HACCP_02_id']; ?>">
                                                                            <i class="feather feather-edit-3 me-3"></i>
                                                                            <span>Edit</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="files_php/HACCP-02.php?Delete_id=<?= $row['HACCP_02_id']; ?>">
                                                                            <i class="feather feather-trash-2 me-3"></i>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="dropdown-divider"></li>
                                                                    <li>
                                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                            <i class="feather feather-printer me-3"></i>
                                                                            <span>Print</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <td colspan="7">No Data</td>
                                            <td hidden></td>
                                            <td hidden></td>
                                            <td hidden></td>
                                            <td hidden></td>
                                            <td hidden></td>

                                        <?php
                                        }
                                        ?>
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
        <div class="d-flex align-items-center gap-4">
            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
        </div>
    </footer>
    <!-- [ Footer ] end -->
</main>
<?php
include_once('./includes/footer.php');
?>