<?php
session_start();
include_once('./includes/header.php');
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
?>
<main class="nxl-container">
    <div class="nxl-content">
        <form method="post" action="files_php/SSOP-02.php">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10"><a href="index.html">Home</a></h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="users.html">Users</a></li>
                        <li class="breadcrumb-item"> SSOP-02</li>
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
                    <div class="col-xl-12">
                        <div class="card invoice-container">
                            <div class="card-header">
                                <h5> OPERATIONAL INSPECTION FORM</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="px-4 g-4 mt-0 row justify-content-between">

                                    <div class="col-xl-6 ">
                                        <label for="userName" class="form-label">Form #
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" readonly value="SSOP-02" name="" placeholder="SSOP-02" />
                                    </div>
                                    <div class="col-xl-6 ">
                                        <label for="date" class="form-label">Date
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="date" class="form-control" id="date" name="form_date" placeholder="date" />
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                1. No condensation
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="no_condensation" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                2. No rodent, roaches, or gnat activity
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="no_rodent_activity" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                3. Handwash station-paper, soap, hot water
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="handwash_station" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                4. Employee hygiene practices
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="employee_hygiene" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                5. Cooler #1 temp (40F)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="cooler1_temp" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                6. Cooler #2 temp (40F)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="cooler2_temp" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                7. Freezer temp (&lt;20F)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="freezer_temp" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                8. PAA concentration (50-2,000 ppm)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="paa_concentration" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                9. No rodent droppings, no rodent or pest activities
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="no_rodent_droppings" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                10. Rework chicken process is followed
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="rework_chicken_process" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class=" custom-checkbox mb-3">
                                            <label class="form-label">
                                                11. Others
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="others" data-select2-selector="icon">
                                                <option value="" selected>Yes OR No</option>
                                                <option value="" data-icon="feather-check text-success">Yes</option>
                                                <option value="" data-icon="feather-x text-danger">No</option>
                                            </select>
                                        </div>
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
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </form>
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