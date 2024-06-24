<?php
session_start();
include_once('./includes/header.php');
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
?>
<main class="nxl-container">
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <form method="post" action="files_php/SSOP-03.php">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10"><a href="index.html">Home</a></h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="users.html">Users</a></li>
                        <li class="breadcrumb-item">SSOP-03</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <!-- <a href="javascript:void(0);" class="btn btn-info successAlertMessage">
                        <i class="feather-arrow-right me-2"></i>
                        <span>Back</span>
                    </a> -->
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="users.html" class="btn btn-light-brand">
                                <i class="feather-arrow-right me-2"></i>
                                <span>Back</span>
                            </a>
                            <button type="submit" name="submit" class="btn btn-primary ">
                                <i class="feather-save me-2 "></i>
                                <span>Save</span>
                            </button>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-xl-12"><?php include_once('./includes/alerts.php'); ?></div>
                </div>
                <!-- PRE-OP/OPERATIONAL INSPECTION CONTINUOUS COMMENT SHEET -->
                <div class="card mb-5 shadow-sm">
                    <div class="card-header bg-primary ">
                        <h4 class="mb-0 text-white">PRE-OP/OPERATIONAL INSPECTION CONTINUOUS COMMENT SHEET
                            <p class="mb-0 fs-6 fw-normal">C.W.S.R.- Cleaned, washed, sanitized, and re-inspected prior
                                to production.</p>
                        </h4>

                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Form #</label>
                                <input type="text" readonly class="form-control" value="SSOP-03">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">1. Date</label>
                                <input type="date" class="form-control" name="date" id="date" placeholder="Select Date">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">2. SSOP Form #</label>
                                <input type="text" class="form-control" name="ssop_form_number" id="ssop-form-number" placeholder="Enter SSOP Form #">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">3. Area Number</label>
                                <input type="text" class="form-control" name="area_number" id="area-number" placeholder="Enter Area Number">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">4. Deficiencies</label>
                                <input type="text" class="form-control" name="deficiencies" id="deficiencies" placeholder="Enter Deficiencies">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">5. Corrective Actions</label>
                                <input type="text" class="form-control" name="corrective_actions" id="corrective-actions" placeholder="Enter Corrective Actions">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">6. Preventive Actions</label>
                                <input type="text" class="form-control" name="preventive_actions" id="preventive-actions" placeholder="Enter Preventive Actions">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">7. Time Completed</label>
                                <input type="time" class="form-control" name="time_completed" id="time-completed" placeholder="Select Time Completed">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">8. Initial</label>
                                <input type="text" class="form-control" name="initial" id="initial" placeholder="Enter Initial">
                            </div>
                        </div>
                        <hr class="border-dashed" />
                        <div class="row px-4 mt-3 mb-4">
                            <div class="col-md-12">
                                <!-- successAlertMessage -->
                                <button type="submit" name="submit" class="btn btn-primary ">
                                    <i class="feather-save me-2"></i>
                                    <span>Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
<!--! ================================================================ !-->
<?php
include_once('./includes/footer.php');
?>