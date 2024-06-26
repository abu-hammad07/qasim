<?php
session_start();
include_once('./includes/header.php');
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
?>
<main class="nxl-container">
    <div class="nxl-content">
        <form method="post" action="files_php/Haccp-03.php">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10"><a href="index.html">Home</a></h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="users.html">Users</a></li>
                        <li class="breadcrumb-item">HACCP-03</li>
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
                <!-- Strause's Catching Service - Load Out Slip -->
                <div class="card  shadow-sm">
                    <div class="card-header bg-dark ">
                        <h4 class="text-white">Strause's Catching Service - Load Out Slip</h4>
                    </div>

                    <div class="row mb-3 px-4 pt-3">
                        <div class="col-xl-6">
                            <label class="form-label">1. Date
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control" name="load_date" id="load-date" placeholder="Select Date">
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">2. Catching Crew
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="catching_crew" id="catching-crew" placeholder="Enter Catching Crew">
                        </div>
                    </div>
                </div>
                <div class="card  shadow-sm">
                    <div class="card-body">
                        <!-- General Information -->
                        <!-- Actual Information -->
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <label class="form-label">1. Grower
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="grower" id="grower" placeholder="Enter Grower">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">2. House
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="house" id="house" placeholder="Enter House">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">3. Pen
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="pen" id="pen" placeholder="Enter Pen">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">4. Bird Type
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="bird_type" id="bird-type" placeholder="Enter Bird Type">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">5. Coops/Head
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" class="form-control" name="coops_head" id="coops-head" placeholder="Enter Coops/Head">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">6. Total Birds
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" class="form-control" name="total_birds" id="total-birds" placeholder="Enter Total Birds">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">7. Time Of Arrival
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="time" class="form-control" name="time_of_arrival" id="time-of-arrival" placeholder="Enter Time Of Arrival">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">8. Sexing
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="sexing" id="sexing" placeholder="Enter Sexing">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label">9. Driver
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="driver" id="driver" placeholder="Enter Driver">
                            </div>
                        </div>

                        <!-- Comments Section -->
                        <div class="row mb-3">
                            <div class="col-xl-12">
                                <label class="form-label">Comments
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" id="comments" rows="3" name="comments" placeholder="Enter Comments"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4 ">
                    <div class="col-md-12">
                        <!-- successAlertMessage -->
                        <button type="submit" name="submit" class="btn btn-primary ">
                            <i class="feather-save me-2"></i>
                            <span>Save</span>
                        </button>
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