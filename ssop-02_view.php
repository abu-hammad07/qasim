<?php
session_start();
include_once('./includes/header.php');
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
include_once('./files_php/database.php');
$db = new Database();
$id = $_GET['id'];
$data = $db->edit_select('ssop_02', "SSOP_02_id = $id");

while ($row = $data->fetch_assoc()) {
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
                            <a href="SSOP-01_add" class="btn btn-primary">
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
            <style>
                body {
                    font-family: Arial, sans-serif;
                }

                .header {
                    text-align: center;
                    font-size: 1.5em;
                    font-weight: bold;
                    padding: 10px;
                    border: 1px solid black;
                    background-color: #e0e0e0;
                    /* margin-bottom: 20px; */
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                }

                th,
                td {
                    border: 1px solid black;
                    padding: 12px;
                    /* text-align: center; */
                    font-size: 1em;
                }

                th {
                    background-color: #f2f2f2;

                }

                td {
                    text-align: center;
                }

                .check-time {
                    background-color: #d1e7dd;
                    color: #0f5132;
                    font-weight: bold;
                    text-align: center;
                }

                .check-person {
                    background-color: #cfe2ff;
                    color: #084298;
                    font-weight: bold;
                    text-align: center;
                }

                .red-cross {
                    color: red;
                    font-weight: bold;
                }

                .green-tick {
                    color: green;
                    font-weight: bold;
                }
            </style>
            <div class="main-content">
                <div class="row">
                    <div class="col-xl-12"><?php include_once('./includes/alerts.php'); ?></div>
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <div class="header">PRE-OPERATIONAL INSPECTION FORM (SSOP-01)</div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="check-time">Date of Check</th>
                                                <th class="check-time">Time of Check</th>
                                                <th class="check-person">Person of Check</th>
                                            </tr>
                                            <tr>
                                                <td class="check-time" id="date"><?= $row['created_date'] ?></td>
                                                <td class="check-time"><?= $row['form_date'] ?></td>
                                                <td class="check-person">John Doe</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1. No condensation</th>
                                                <td colspan="2" class="<?php if ($row['no_condensation'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['no_condensation'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>2. No rodent, roaches, or gnat activity</th>
                                                <td colspan="2" class="<?php if ($row['no_rodent_activity'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['no_rodent_activity'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>3. Handwash station-paper, soap, hot water</th>
                                                <td colspan="2" class="<?php if ($row['handwash_station'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['handwash_station'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>4. Employee hygiene practices</th>
                                                <td colspan="2" class="<?php if ($row['employee_hygiene'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['employee_hygiene'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>5. Cooler #1 temp (40F)</th>
                                                <td colspan="2" class="<?php if ($row['cooler1_temp'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['cooler1_temp'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>6. Cooler #2 temp (40F)</th>
                                                <td colspan="2" class="<?php if ($row['cooler2_temp'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['cooler2_temp'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>7. Freezer temp (<20F) </th>
                                                <td colspan="2" class="<?php if ($row['freezer_temp'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['freezer_temp'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>8. PAA concentration (50-2,000 ppm)</th>
                                                <td colspan="2" class="<?php if ($row['paa_concentration'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['paa_concentration'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>9. No rodent droppings, no rodent or pest activities</th>
                                                <td colspan="2" class="<?php if ($row['no_rodent_droppings'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['no_rodent_droppings'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>10. Rework chicken process is followed</th>
                                                <td colspan="2" class="<?php if ($row['rework_chicken_process'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['rework_chicken_process'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>11. Others</th>
                                                <td colspan="2" class="<?php if ($row['others'] == "Yes") { ?>green-tick<?php } else { ?>red-cross<?php } ?>"><?php if ($row['others'] == "Yes") { ?>✓<?php } else { ?>✗<?php } ?></td>
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
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>

<?php
}
include_once('./includes/footer.php');
?>
<script>
    // -----------------date convert DAY-----------------
    var dateElement = document.getElementById('date');
    var dateStr = dateElement.innerHTML;
    var date = new Date(dateStr);
    var formattedDate = date.toDateString();
    dateElement.innerHTML = formattedDate;
</script>